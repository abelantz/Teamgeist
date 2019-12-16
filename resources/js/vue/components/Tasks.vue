<template>
    <div>
        <h1>Tasks</h1>
        <div class="row">
            <div class="col-12">
                <button @click="taskModal" class="btn btn-primary">Add Task</button>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-6">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">My tasks I opened to me</h3>
                        <div class="card-tools">

                            <button class="btn btn-primary">E-mail</button>
                            <button class="btn btn-primary">Print</button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="height: 300px;">
                        <table class="table table-head-fixed">
                            <thead>
                                <tr>
                                    <th><b>Description</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Create this</td>
                                </tr>
                                <tr>
                                    <td>Update this</td>
                                </tr>
                                <tr>
                                    <td>Delete this</td>
                                </tr>
                                <tr>
                                    <td>Add Sponsoring day</td>
                                </tr>
                                <tr>
                                    <td>Field cleaning</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <div class="col-6">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Open task assined to me</h3>
                        <div class="card-tools">
                            <button class="btn btn-primary">E-mail</button>
                            <button class="btn btn-primary">Print</button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="height: 300px;">
                        <table class="table table-head-fixed">
                            <thead>
                                <tr>
                                    <th><b>Description</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Create this</td>
                                </tr>
                                <tr>
                                    <td>Update this</td>
                                </tr>
                                <tr>
                                    <td>Delete this</td>
                                </tr>
                                <tr>
                                    <td>Add Sponsoring day</td>
                                </tr>
                                <tr>
                                    <td>Field cleaning</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Open task I give</h3>
                        <div class="card-tools">
                            <button class="btn btn-primary">E-mail</button>
                            <button class="btn btn-primary">Print</button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="height: 300px;">
                        <table class="table table-head-fixed">
                            <thead>
                                <tr>
                                    <th><b>Description</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Create this</td>
                                </tr>
                                <tr>
                                    <td>Update this</td>
                                </tr>
                                <tr>
                                    <td>Delete this</td>
                                </tr>
                                <tr>
                                    <td>Add Sponsoring day</td>
                                </tr>
                                <tr>
                                    <td>Field cleaning</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        <div class="modal  fade" id="addTask" tabindex="-1" role="dialog" aria-labelledby="addTask" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header card-primary card-outline">
                        <h5 class="modal-title" id="addTask">Add Task</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Own Task</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Give task to</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" disabled="">
                                <label class="form-check-label">All</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tsak Detail</label>
                            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                        </div>
                        <div class="form-group">
                            <label>Date & Time:</label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                </div>
                                <input type="text" class="form-control" data-inputmask-alias="datetime"
                                    data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false">
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Add Task</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        data() {
            return {

            }
        },
        methods: {
            taskModal() {
                $('#addTask').modal('show');
            }
        },
        created() {

        },
        mounted() {
            console.log('Component mounted.')
        },
    }

</script>
