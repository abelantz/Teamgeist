<template>
    <div>
        <h1 v-for="refree in refree" :key="refree.id">{{refree.name}}</h1>
        
    </div>
</template>

<script>
    export default {
        props: ['refreeId'],
        data() {
            return {
                referees: [],
            }
        },
        computed:{
             refree: function () {
                 return this.referees.filter((refree) => {
                    return refree.id == this.refreeId;
                })
            },
        },
        methods: {
            
            loadRefrees() {
                axios.get('../api/referees')
                    .then((response) => this.referees = response.data.data)
            },
           
            
        },
        created() {
            this.loadRefrees();
        },
    }

</script>

<style>

</style>
