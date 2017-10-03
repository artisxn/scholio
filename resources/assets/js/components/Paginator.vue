<template>
    <ul class="pagination" v-if="shouldPaginate">
        <li v-show="prevUrl">
            <a href="#" aria-label="Previous" rel="prev" @click.prevent="page--">
                <span aria-hidden="true">&laquo; Previous</span>
            </a>
        </li>
        <li v-for="i in dataSet.last_page" :class="dataSet.current_page == i ? 'active' : ''">
            <a href="#" @click.prevent="changePage(i)">{{ i }}</a>
        </li>
        <li v-show="nextUrl">
            <a href="#" aria-label="Next" rel="next" @click.prevent="page++">
                <span aria-hidden="true">Next &raquo;</span>
            </a>
        </li>
    </ul>
</template>

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