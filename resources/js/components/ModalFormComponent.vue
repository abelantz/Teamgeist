<template>
    <div>
        <b-button variant="success" v-b-modal.modal-1>
            {{ title }}
        </b-button>

        <b-modal id="modal-1" title="BootstrapVue">
            <slot></slot>
        </b-modal>
    </div>
</template>

<script>
    export default {
        props: ['title']
    }

</script>
