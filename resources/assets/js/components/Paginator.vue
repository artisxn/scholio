<template>
    <div class="pagination-container">
        <ul class="pagination" v-if="shouldPaginate">

            <li v-show="prevUrl">
                <a href="#" aria-label="Previous" rel="prev" @click.prevent="page--" class="page-links">
                <span aria-hidden="true">&laquo;
                    <!--{{ lang('panel/schools/dashboard.previous') }}-->
                </span>
                </a>
            </li>

            <li v-for="i in dataSet.last_page" :class="dataSet.current_page == i ? 'active' : ''">

                <span v-if="i == dataSet.current_page + gap + 1" class="page-links"> 
                    ...
                </span>

                <span v-if="i == 1" class="page-links">
                    <a href="#" @click.prevent="changePage(i)">{{ i }}</a>
                </span>

                <span v-else-if="i > dataSet.current_page - gap && i < dataSet.current_page + gap" class="page-links">
                    <a href="#" @click.prevent="changePage(i)">{{ i }}</a>
                </span>

                <span v-else-if="i == dataSet.last_page" class="page-links">
                    <a href="#" @click.prevent="changePage(i)">{{ i }}</a>
                </span>

                <span v-if="i == dataSet.current_page - gap - 1" class="page-links"> 
                    ...
                </span>
            </li>

            <li v-show="nextUrl">
                <a href="#" aria-label="Next" rel="next" @click.prevent="page++" class="page-links">
                <span aria-hidden="true">
                    <!--{{ lang('panel/schools/dashboard.next') }} -->
                 &raquo;
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
    /*!*.pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover,*/
    .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {background: #e7e7e7!important; color: #00c9e1; border-color: #008fa7; border-radius:4px; font-weight: 700 }
    .pagination>li>span>a:hover,.pagination>li>a>span:hover{  color: #FD6A33; font-weight: 700 }
    .page-links{  background-color: transparent !important;  }
    /*.page-links:active{  background-color: #fff;  }*/
</style>

<script>
    export default {
        props: ['dataSet'],

        data() {
            return {
                page: 1,
                prevUrl: false,
                nextUrl: false,
                gap: 2
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