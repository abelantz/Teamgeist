<template>
    <div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
            @click="showModal = true">
            New Club
        </button>

        <!-- Modal -->
        <modal-component v-if="showModal">
            <div>

                <!-- /.card-header -->
                <!-- form start -->
                <form role="form">
                    <div class="card-body">
                        <div class="form-group">
                            <label >Club Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Club Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password">
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
