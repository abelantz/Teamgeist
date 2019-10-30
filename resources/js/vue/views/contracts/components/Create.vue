<template>
    <div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
            @click="showModal = true">
            Add Contract
        </button>

        <!-- Modal -->
        <modal-component v-if="showModal">
            <div class="card-primary">
                <div class="card-header">
                    <div class="card-title">
                        Add Contract
                    </div>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Contract Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Sponsor Name">
                        </div>
                        <div class="form-group">
                            <label>Type</label>
                            <select class="form-control">
                                <option>Board</option>
                                <option>Coach</option>
                                <option>Player</option>
                                <option>Refree</option>
                                <option>Helpers</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label >Team</label>
                            <select class="form-control">
                                <option>Barcelona</option>
                                <option>Liverpool</option>
                                <option>Arsenal</option>
                                <option>Kosova</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Date</label>
                            <input type="text" class="form-control" id="name" placeholder="12.09.2019">
                        </div>
                    </div>
                    <!-- /.card-body -->
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
