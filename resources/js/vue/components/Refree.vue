<template>
    <div>
        <h1 v-for="refree in refree" :key="refree.id">{{refree.name}}</h1>
        
    </div>
</template>

<script>
    export default {
        props: ['refreeId'],

        computed:{
             referee() {
                 return this.$store.state.referees[0]
            },
        },

    }

</script>

<style>

</style>
