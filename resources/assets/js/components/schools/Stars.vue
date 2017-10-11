<template>
    <span>
        <span class="star-review" :id="this.data+ '-' + this.id">
            <!--{{ this.stars }}-->
        </span>
    </span>
</template>

<style>
    .star-review{
    }
</style>

<script>
    export default{
        props:['id', 'stars', 'data'],

        mounted(){
            $('#' + this.data + '-'+this.id).raty({
                score    :this.stars,
                halfShow :true,
                half     :true,
                readOnly :true,
                starHalf : 'fa fa-fw fa-star-half'
            });
        }
    }
</script>