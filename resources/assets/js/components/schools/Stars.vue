<template>
    <span>
        <span class="star-review" :id="this.id">
        </span>
    </span>
</template>

<style>
    .star-review{
        /*color:red;*/
    }
</style>

<script>
    export default{
        props:['id', 'stars', 'read'],

        computed:{
            readOnly(){
                return this.read || false
            }
        },

        updated(){
            $('#' + this.id).raty({
                score    :this.stars,
                halfShow :true,
                half     :true,
                readOnly :this.readOnly,
                starHalf : 'fa fa-fw fa-star-half'
            });
        },

        mounted(){
            $('#' + this.id).raty({
                score    :this.stars,
                halfShow :true,
                half     :true,
                readOnly :this.readOnly,
                starHalf : 'fa fa-fw fa-star-half'
            });
        }
    }
</script>