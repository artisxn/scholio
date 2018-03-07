<template>
    <div>
        <multiselect v-model="value"
                     :tag-placeholder="lang('panel_scholarships.create.addNew')"
                     :placeholder="lang('panel_scholarships.create.addLabel')"
                     label="name"
                     track-by="slag"
                     :options="options"
                     :deselectLabel="lang('panel_studies.input-delete')"
                     :selectLabel="lang('panel_scholarships.create.select')"
                     :selectedLabel="lang('panel_scholarships.create.selected')"
                     :multiple="true"
                     :taggable="true"
                     @tag="addTag"
                     @select="saveTag"
                     @remove="deleteTag">
        </multiselect>
    </div>
</template>

<style>

</style>

<script>
    import Multiselect from '../scholio-multiselect';

    export default{
        components: { Multiselect },
        data(){
            return{
                options: [],
                value: []
            }
        },

        methods: {
            addTag(newTag){
                console.log(newTag)
                 const tag = {
                    name: newTag,
                    slag: newTag
                }
                this.options.push(tag)
                this.value.push(tag)

                axios.post('/api/school/profile/hashtag/new/' + newTag).then(({data})=>{
                    this.saveTag(data)
                })
            },

            getTags: function () {
                axios.get('/api/hashtag/all').then(response => {
                    this.options = response.data
                });
            },

            saveTag(tag){
                axios.post('/api/school/profile/hashtag/save/' + tag.id).then(({data})=>{
                    console.log(data)
                })
            },

            deleteTag(tag) {
                console.log(tag)
                axios.post('/api/school/profile/hashtag/delete/' + tag.id).then(({ data }) => {
                    console.log(data)
                })
            },

            getSchoolTags(){
                axios.get('/api/school/profile/hashtag').then(({data})=>{
                    var vm = this
                    data.forEach((item)=>{
                        vm.value.push(item)
                    })
                })
            }
        },

        mounted(){
            // this.value = this.schoolTags
            this.getTags()
            this.getSchoolTags()
        }
    }
</script>