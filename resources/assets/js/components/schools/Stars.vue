<template>
    <span>
        <span class="star-review" :id="this.name + '-' + this.id">
        </span>
    </span>
</template>

<style>
    .star-review{
    }
</style>

<script>
    export default{
        props:['id', 'stars', 'name', 'read'],

        computed:{
            readOnly(){
                return this.read || false
            }
        },

        mounted(){
            $('#' + this.name + '-' + this.id).raty({
                score    :this.stars,
                halfShow :true,
                half     :true,
                readOnly :this.readOnly,
                starHalf : 'fa fa-fw fa-star-half'
            });
        }
    }
</script>