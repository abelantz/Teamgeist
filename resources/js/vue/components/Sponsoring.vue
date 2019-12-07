

<template>
    <div>
        
            <div class="col-6">
           
            <chartjs-bar target="sponsoring" v-bind:labels="labels"
                            v-bind:datasets="dataset1"
                            v-bind:option="option"></chartjs-bar>
            <chartjs-bar target="sponsoring" v-bind:labels="labels"
                            v-bind:datasets="dataset2"
                            v-bind:option="option">
            </chartjs-bar>
            <chartjs-bar target="sponsoring" v-bind:labels="labels"
                            v-bind:datasets="dataset3"
                            v-bind:option="option">
            </chartjs-bar>
            
            </div>
            
       
    </div>
</template>

<script>
 
    
    export default {
        data(){
            return {    
                labels: ["General", "Equipment", "Band"],
                dataset1: [{
                    data: [20, 30, 50],
                    backgroundColor: ["Blue", "Orange", "Grey"]
                }],
                dataset2: [{
                    data: [30, 60, 80],
                    backgroundColor: ["Blue", "Orange", "Grey"]
                }],
                dataset3: [{
                    data: [25, 37, 59],
                    backgroundColor: ["Blue", "Orange", "Grey"]
                }],
                option: {
                    title: {
                        display: true,
                        position: "bottom",
                        text: "Sponsoring Data"
                    }
                }
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
    }

</script>
