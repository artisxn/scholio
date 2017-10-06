<template>
    <div class="pagination-container">
        <ul class="pagination" v-if="shouldPaginate">
            <li v-show="prevUrl">
                <a href="#" aria-label="Previous" rel="prev" @click.prevent="page--">
                <span aria-hidden="true">&laquo;
                    <!--{{ lang('panel/schools/dashboard.previous') }}-->
                    Προηγούμενοι

                </span>
                </a>
            </li>
            <li v-for="i in dataSet.last_page" :class="dataSet.current_page == i ? 'active' : ''">
                <a href="#" @click.prevent="changePage(i)">{{ i }}</a>
            </li>
            <li v-show="nextUrl">
                <a href="#" aria-label="Next" rel="next" @click.prevent="page++">
                <span aria-hidden="true">
                    <!--{{ lang('panel/schools/dashboard.next') }} -->
                Επόμενοι &raquo;
                </span>
                </a>
            </li>
        </ul>
    </div>

</template>

<style>
    .pagination-container{margin: auto; text-align: center}
    /*.pagination>li>a{background: #f8f8f8; border-top-color: #f8f8f8; border-bottom-color: #f8f8f8}*/
    /*.pagination>li>a:hover{background: #00bcd4}*/
    .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover,
    .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {background: #008da5; border: none; margin-top: 1px;}
</style>

<script>
    export default {
        props: ['dataSet'],

        data() {
            return {
                page: 1,
                prevUrl: false,
                nextUrl: false
            }
        },

        watch: {
            dataSet() {
                this.page = this.dataSet.current_page;
                this.prevUrl = this.dataSet.prev_page_url;
                this.nextUrl = this.dataSet.next_page_url;
            },

            page() {
                this.broadcast().updateUrl();
            }
        },

        computed: {
            shouldPaginate() {
                return !! this.prevUrl || !! this.nextUrl;
            }
        },

        methods: {
            broadcast() {
                return this.$emit('changed', this.page);
            },

            updateUrl() {
                history.pushState(null, null, '?page=' + this.page);
            },

            changePage(i){
                this.page = i
                this.broadcast().updateUrl();
            }
        }
    }
</script>