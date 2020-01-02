<template>
    <div>

        <div class="bg-yellow" style="width: 200px; height: 200px;" @click="yellowCard"></div>
        <div class="bg-danger" style="width: 200px; height: 200px;" @click="redCard"></div>


    </div>
</template>

<script>
    export default {

        data() {
            return {
                events: [],
                event: {},
            }
        },

        computed: {
        },

        methods: {
            redCard() {
                console.log('yellow card');
            },
            yellowCard() {
                console.log('yellow card');

            }
        },
    }

</script>
