<template>
    <div class="Image-upload-wrapper Image-upload">
        <div id="croppie"></div>
        <div id="upload-wrapper">
            <!-- <button class="btn btn-primary btn-sm" v-on:click="modalVisible = true">
                <i class="fa fa-camera"></i> Upload image
            </button> -->

            <div class="Modal">
                <h4>Upload an Image</h4>
                <div class="input-file">
                    <input type="file" id="upload-image" v-on:change="setUpFileUploader">
                </div>

                <button class="btn btn-success" v-on:click="uploadFile">
                    <i class="fa" v-bind:class="button.class"></i> {{button.name}}
                </button>

                <button class="btn btn-warning" v-on:click="modalDismiss">
                    <i class="fa fa-times"></i> Cancel
                </button>
            </div>
        </div>
    </div>
</template>

<style>
    .Modal {
        border-top: 1px solid #f4f4f4;
        margin-top: 10px;
    }
    .Modal h4{
            margin-bottom: 20px;
    }
    div#upload-wrapper {
        text-align: center;
    }
    .input-file {
        text-align: left;
        width: 50%;
        margin: 0px auto;
        margin-bottom: 20px;
    }
</style>

<script>
    import Croppie from 'croppie'

    export default {
        props: ['imgUrl', 'imgWidth', 'imgHeight', 'imgData'],

        data() {
            return {
                button: {
                    name: 'Upload',
                    class: 'fa-upload'
                },
                canUpload: true,
                modalVisible: false,
                croppie: null,
                image: null,
                width: null,
                height: null,
                data: null,
                postURL: null,
                logo: false
            }
        },

        methods: {
            uploadFile() {
                this.canUpload = false
                this.button = {
                    name: 'Uploading...',
                    class: 'fa-refresh fa-spin'
                }
                this.croppie.result({
                    type: 'canvas',
                    size: 'viewport'
                }).then((response) => {
                    this.image = response
        
                    axios.post(this.postURL, { img: this.image, logo: this.logo })
                        .then((response) => {
                            console.log(response)
                            // location.reload();
                        })
                })
            },
            setUpCroppie() {
                let el = document.getElementById('croppie')
                this.croppie = new Croppie(el, {
                    viewport: { width: this.width, height: this.height },
                    boundary: { width: parseInt(this.width + (this.width * 10 / 100)), height: parseInt(this.height + (this.height * 10 / 100)) },
                    showZoomer: true,
                    enableOrientation: true
                })
                this.croppie.bind({
                    url: this.image
                })
            },
            setUpFileUploader(e) {
                let files = e.target.files || e.dataTransfer.files
                if (!files.length) {
                    return
                }
                this.createImage(files[0])
            },
            createImage(file) {
                var image = new Image()
                var reader = new FileReader()
                var vm = this

                reader.onload = (e) => {
                    vm.image = e.target.result
                    vm.$emit('imgUploaded', e.target.result)
                }
                reader.readAsDataURL(file)
            },

            setUpComponent(){
                this.setUpImageResolution()
                this.setUpPostUrl()
            },

            setUpPostUrl(){
                if (this.imgData) {
                    this.data = this.imgData
                    if (this.data == 'logo') {
                        this.postURL = '/api/user/uploadAvatar'
                        this.logo = true
                    }

                    if (this.data == 'avatar') {
                        this.postURL = '/api/user/uploadAvatar'
                    }

                    if (this.data == 'school') {
                        this.postURL = '/api/school/uploadImage'
                    }
                }
            },


            setUpImageResolution(){
                if (this.imgWidth) {
                    this.width = parseInt(this.imgWidth)
                } else {
                    this.width = 450
                }

                if (this.imgHeight) {
                    this.height = parseInt(this.imgHeight)
                } else {
                    this.height = 200
                }
            },

            modalDismiss(){
                $('#upload-modal').modal('toggle');
            }
        },

        mounted() {
            this.setUpComponent()

            this.$on('imgUploaded', function (imageData) {
                this.image = imageData
                this.croppie.destroy()
                this.setUpCroppie(imageData)
            })
            this.image = this.imgUrl || ''
            this.setUpCroppie()
        },
    }
</script>