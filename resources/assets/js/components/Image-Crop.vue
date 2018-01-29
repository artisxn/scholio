<script>
    import Croppie from 'croppie'

    export default {
        props: ['imgUrl'],
        mounted() {
            this.$on('imgUploaded', function (imageData) {
                this.image = imageData
                this.croppie.destroy()
                this.setUpCroppie(imageData)
            })
            this.image = this.imgUrl
            this.setUpCroppie()
        },
        data() {
            return {
                button: {
                    name: 'Upload',
                    class: 'fa-upload'
                },
                canUpload: true,
                modalVisible: false,
                croppie: null,
                image: null
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
                    axios.post('/api/uploadImage', { img: this.image })
                        .then((response) => {
                            location.reload();
                        })
                })
            },
            setUpCroppie() {
                let el = document.getElementById('croppie')
                this.croppie = new Croppie(el, {
                    viewport: { width: 446, height: 296,},
                    boundary: { width: 480, height: 330 },
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
            }
        }
    }
</script>

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

                <button class="btn btn-warning" v-on:click="modalVisible = false">
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