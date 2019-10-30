<template>
    <div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
            @click="showModal = true">
            New Team
        </button>

        <!-- Modal -->
        <modal-component v-if="showModal">
             <div class="card-primary">
                <div class="card-header">
                    <div class="card-title">
                        Add Team
                    </div>
                </div>
                <form role="form">
                    <div class="card-body">
                        <div class="form-group">
                            <label >Team Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Team Name">
                        </div>
                    </div>
                </form>
            </div>
        </modal-component>
    </div>
</template>

<script>
    import ModalComponent from '../../../components/ModalComponent.vue'

    export default {
        methods: {
            showModal() {
                false
            },
        },
        mounted() {
            console.log('Component mounted.')
        },
        components: {
            ModalComponent
        }
    }

</script>
