<template>
    <div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
            @click="showModal = true">
            Add Sponsor
        </button>

        <!-- Modal -->
        <modal-component v-if="showModal">
            <div class="card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add Sponsor</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form">
                    <div class="card-body">
                        <div class="form-group">
                            <label >Sponsor Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Sponsor Name">
                        </div>
                        <div class="form-group">
                            <label >Type</label>
                            <input type="text" class="form-control" id="name" placeholder="General">
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                            <input type="text" class="form-control" id="name" placeholder="12.09.2019">
                        </div>
                        <div class="form-group">
                            <label>Amount</label>
                            <input type="text" class="form-control" id="name" placeholder="CHF 1200">
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
