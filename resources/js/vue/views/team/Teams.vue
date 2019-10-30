<template>
    <div>
        <create ></create>
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

        mounted() {
            console.log('Component mounted.')
        },
        components:{create, index}
    }

</script>
