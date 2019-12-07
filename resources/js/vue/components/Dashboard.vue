<template>
    <div>
        <h1>Dashboard</h1>

        <div class="row">
            <div class="col-8">
                <div class="row">
                    <!-- List of Teams  -->
                    <div class="col-6">

                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">List of all Teams</h3>
                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <!-- <input type="text" name="table_search" class="form-control float-right" placeholder="Search"> -->
                                        <div class="input-group-append">
                                            <!-- <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0" style="height: 300px;">
                                <table class="table table-head-fixed">
                                    <thead>
                                        <tr>
                                            <th><b>Name</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Team 1</td>
                                        </tr>
                                        <tr>
                                            <td>Team 2</td>
                                        </tr>
                                        <tr>
                                            <td>Team 3</td>
                                        </tr>
                                        <tr>
                                            <td>Team 4</td>
                                        </tr>
                                        <tr>
                                            <td>Team 5</td>
                                        </tr>
                                        <tr>
                                            <td>Team 5</td>
                                        </tr>
                                        <tr>
                                            <td>Team 5</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->


                    </div>
                    <!-- Events Meetings  -->
                    <div class="col-6">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Next club Events / Meetings</h3>
                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <!-- <input type="text" name="table_search" class="form-control float-right" placeholder="Search"> -->
                                        <div class="input-group-append">
                                            <!-- <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0" style="height: 300px;">
                                <table class="table table-head-fixed">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Event</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>21 Dec</td>
                                            <td>Tournament</td>
                                        </tr>
                                        <tr>
                                            <td>22 Dec</td>
                                            <td>Sponsoring Day</td>
                                        </tr>
                                        <tr>
                                            <td>24 Dec</td>
                                            <td>Match day</td>
                                        </tr>
                                        <tr>
                                            <td>31 Dec</td>
                                            <td>Meeting with board members</td>
                                        </tr>
                                        <tr>
                                            <td>01 Jan</td>
                                            <td>Event 2</td>
                                        </tr>
                                        <tr>
                                            <td>11 Jan</td>
                                            <td>Meetings</td>
                                        </tr>
                                        <tr>
                                            <td>21 Dec</td>
                                            <td>Player Meetings</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- Open Members -->
                    <div class="col-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Open payments of Members</h3>
                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <!-- <input type="text" name="table_search" class="form-control float-right" placeholder="Search"> -->
                                        <div class="input-group-append">
                                            <!-- <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0" style="height: 300px;">
                                <table class="table table-head-fixed">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Member 1</td>
                                            <td>20 December </td>
                                            <td>300 CHF</td>
                                            <td>Pending</td>
                                        </tr>
                                        <tr>
                                            <td>Member 1</td>
                                            <td>21 December</td>
                                            <td>300 CHF</td>
                                            <td>Pending</td>
                                        </tr>
                                        <tr>
                                            <td>Member 1</td>
                                            <td>26 December </td>
                                            <td>300 CHF</td>
                                            <td>Pending</td>
                                        </tr>
                                        <tr>
                                            <td>Member 1</td>
                                            <td>27 December</td>
                                            <td>300 CHF</td>
                                            <td>Pending</td>
                                        </tr>
                                        <tr>
                                            <td>Member 1</td>
                                            <td>31 December </td>
                                            <td>300 CHF</td>
                                            <td>Pending</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="row">
                    <!-- Tasks  -->
                    <div class="col-12">
                        <div class="card bg-success">
                            <div class="card-header">
                                <h3 class="card-title">Tasks</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                            class="fas fa-minus"></i>
                                    </button>
                                </div>
                                <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <ul>
                                    <li>
                                        Task 1
                                    </li>
                                    <li>
                                        Task 2
                                    </li>
                                </ul>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- Quick Actions  -->
                        <div class="card bg-primary">
                            <div class="card-header">
                                <h3 class="card-title">Quick Actions</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                            class="fas fa-minus"></i>
                                    </button>
                                </div>
                                <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body" style="display: block;">
                                Quick Actions
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>
                    <div class="col-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Open tasks</h3>
                                <div class="card-tools">
                                    <button @click="taskModal" class="btn btn-primary">Add Task</button>
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
            </div>
        </div>
        <!-- MODAL -->
        <div class="modal  fade" id="addTask" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
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
                                <input class="form-check-input" type="checkbox" >
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
