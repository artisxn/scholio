<template>
    <span>
        <span class="starraty" :id="this.data+ '-' + this.id">
            {{ this.stars }}
        </span>
    </span>
</template>

<style>
    .starraty{
        color: red;
    }
</style>

<script>
    export default{
        props:['id', 'stars', 'data'],

        mounted(){
            $('#' + this.data + '-'+this.id).raty({
                score    : this.stars,
                halfShow : true,
                half     : true,
                readOnly: true,
                starHalf : 'fa fa-fw fa-star-half'
            });
        }
    }
</script>