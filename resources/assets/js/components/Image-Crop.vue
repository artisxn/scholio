<template>
    <div class="Image-upload-wrapper Image-upload">
        <div id="croppie"></div>
        <div id="upload-wrapper">
            <!-- <button class="btn btn-primary btn-sm" v-on:click="modalVisible = true">
                <i class="fa fa-camera"></i> Upload image
            </button> -->

            <div class="Modal">
                <!--<h4>Upload an Image</h4>-->
                <div class="">
                    <input type="file" class="hidden" id="upload-image" v-on:change="setUpFileUploader">
                    <label for="upload-image" class="btn btn-upload">

                        {{lang('upload_photo.select') }}
                    </label>
                </div>

                <button class="btn btn-primary" v-on:click="uploadFile($event)" :disabled="acceptDisabled">
                    <i class="fa fa-check"></i> {{lang('upload_photo.accept') }}
                </button>

                <button class="btn btn-default" v-on:click="modalDismiss($event)">
                    <i class="fa fa-times"></i> {{lang('upload_photo.cancel') }}
                </button>
            </div>
        </div>
    </div>
</template>

<style>

    /***********************************/
             /* MODAL UPLOAD */
    /***********************************/

    .modal-sc-logo{margin-top: -4px; height: 60px;}
    .modal-content{padding: 0!important; border: none; border-radius: 5px!important;}

    .panel-title{margin: 2px 0 0 15px; font-size: 190%; font-weight: 600;}
    .btn-close{background-color: transparent}
    .btn-close:hover{color: #FD6A33;}
    .panel-body{ min-height: 300px}


    /***********************************/

    .section-text{margin-bottom: 20px;}
    .inner-section2{border: none; margin-top: 30px; background-color: transparent;}

    .btn-upload{color: #fff; background: #FD6A33; cursor: pointer; padding: 6px 28px; border-radius: 5px; margin: 12px auto;}
    .btn-upload:hover{background: #cd5529;color: #fff;
    }

    .btn-primary, .btn-primary:focus, .btn-primary:visited, .btn-primary:active{background: #0094ac!important; border: none;}
    .btn-primary:hover{background: #00687d!important;}
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

    @media (min-width:710px ){
        .modal-content{width: 670px;}
    }

</style>

<script>
    import Croppie from 'croppie'

    export default {
        props: ['imgUrl', 'imgWidth', 'imgHeight', 'imgData', 'outSizewidth', 'outSizeheight'],

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
                widthHeightRatio:1.4,
                data: null,
                postURL: null,
                logo: false,
                acceptDisabled: true
            }
        },

        methods: {
            uploadFile(event) {
                if (event) event.preventDefault()
                this.canUpload = false
                this.button = {
                    name: 'Uploading...',
                    class: 'fa-refresh fa-spin'
                }
                this.croppie.result({
                    type: 'canvas',
                    size: {width: this.imgWidth, height: this.imgHeight},
                    resultSize: {
                        width: this.imgWidth,
                        height: this.imgHeight
				    }
                }).then((response) => {
                    this.image = response
        
                    axios.post(this.postURL, { img: this.image, logo: this.logo })
                        .then((response) => {
                            //console.log(response)
                            location.reload();
                        })
                })
            },
            setUpCroppie() {
                let el = document.getElementById('croppie')
                this.croppie = new Croppie(el, {
                    viewport: { width: this.width, height: this.height },
                    boundary: { width: parseInt(this.width +20), height: parseInt(this.height +20) },
                    showZoomer: true,
                    enableOrientation: true,
                    quality: 0,
                    format: 'jpeg'
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
                this.acceptDisabled = false
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
                // widthHeightRatio:1.4,
                if (this.imgWidth) {
                    this.width = parseInt(this.outSizewidth)
                } else {
                    this.width = 870
                }

                if (this.imgHeight) {
                    this.height = parseInt(this.outSizeheight)
                } else {
                    this.height = 600
                }

            },

            modalDismiss(event){
                if (event) event.preventDefault()
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