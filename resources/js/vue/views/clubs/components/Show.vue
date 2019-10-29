<template>
    <div>
        <ModalComponent>

        </ModalComponent>
    </div>
</template>

<script>

    import ModalComponent from '../../../components/ModalComponent'

    export default {
        mounted() {
            console.log('Component mounted.')
        },
        components:{ModalComponent}

    }

</script>
