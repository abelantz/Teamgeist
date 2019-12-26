<template>
    <div>
        <h1>
            Statistics
        </h1>
        <div class="row">
            <div class="col-6">
                <chartjs-bar v-bind:labels="labels" v-bind:datasets="datasets" v-bind:option="option"></chartjs-bar>
            </div>
            <div class="col-6">
                <chartjs-doughnut v-bind:labels="labels" v-bind:datasets="datasets" v-bind:option="option"></chartjs-doughnut>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-6">
                <chartjs-line v-bind:labels="labels" v-bind:datasets="datasets" v-bind:option="option"></chartjs-line>
                
            </div>
            <div class="col-6">
                <chartjs-pie v-bind:labels="labels" v-bind:datasets="datasets" v-bind:option="option"></chartjs-pie>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-6">
                <chartjs-bar v-bind:labels="labels" v-bind:datasets="datasets" v-bind:option="option"></chartjs-bar>
            </div>
            <div class="col-6">
                <chartjs-bar v-bind:labels="labels" v-bind:datasets="datasets" v-bind:option="option"></chartjs-bar>
            </div>
        </div>
    </div>
</template>

<script>


    export default {
        data() {
            return {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
                    datasets: [{
                            label: '2018 Sales',
                            data: [300, 700, 450, 750, 450]
                        },
                        {
                            label: '2017 Sales',
                            data: [600, 550, 750, 250, 700]
                        }
                    ],
            
                option: {
                    titile: true,
                    display: "top",
                    text: "Sponsoring Data"
                }
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
    }

</script>
