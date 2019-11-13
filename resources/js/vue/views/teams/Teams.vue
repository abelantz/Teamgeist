<template>
    <div>
        <create v-on:created="created"></create>
        <br>
        <index></index>
    </div>
</template>

<script>

import index from './components/Index';
import create from './components/Create';
import edit from './components/Create';
import show from './components/Show';

    export default {

        methods: {
            created(team) {
                this.$emit('addToTable', team);
            }
        },

        mounted() {
            console.log('Component mounted.')
        },
        components:{create, index}
    }

</script>
