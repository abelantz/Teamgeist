<template>
    <div>
        <h1>Trainings</h1>
        <div class="row">
            <div class="col-12 ">
                <div class="card card-info card-outline ">
                    <div class="card-header">
                        <h3 class="card-title">Upcoming Trainings</h3>
                        <div class="card-tools">
                            <button class="btn btn-success bg-success" @click="trainingModal"> Add Training</button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Team Name</th>
                                    <th>Date</th>
                                    <th>Weekday</th>
                                    <th>Start Time</th>
                                    <th>End time</th>
                                    <th>Meeting time</th>
                                    <th>Training field</th>
                                    <th>Wardrobe</th>
                                    <th>Coach / Contact </th>
                                    <th>Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>FC Barca</td>
                                    <td>12-01-2020</td>
                                    <td>Monday</td>
                                    <td>14:00</td>
                                    <td>15:30</td>
                                    <td>13:45</td>
                                    <td>B1</td>
                                    <td>2</td>
                                    <td>Guardiolaa</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="#" @click="viewModal"  class="btn btn-success bg-success"><i class="fas fa-eye"></i></a>
                                            <a href="#"  class="btn btn-info bg-info"><i class="fas fa-edit"></i></a>
                                            <a href="#"  class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>FC Bayern Munchen</td>
                                    <td>12-01-2020</td>
                                    <td>Monday</td>
                                    <td>14:00</td>
                                    <td>15:30</td>
                                    <td>13:45</td>
                                    <td>B1</td>
                                    <td>2</td>
                                    <td>Guardiolaa</td>
                                    <td>
                                       <div class="btn-group btn-group-sm">
                                            <a href="#" @click="viewModal" class="btn btn-success bg-success"><i class="fas fa-eye"></i></a>
                                            <a href="#"  class="btn btn-info bg-info"><i class="fas fa-edit"></i></a>
                                            <a href="#"  class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <div class="row">
            <div class="col-6 ">
                <div class="card card-info card-outline ">
                    <div class="card-header">
                        <h3 class="card-title">Mutation Request</h3>
                        <div class="card-tools">
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Date</th>
                                    <th>Requestor</th>
                                    <th>Team</th>
                                    <th>Request</th>
                                    <th>Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>12-01-2020</td>
                                    <td>Guardiola</td>
                                    <td>Barcelona</td>
                                    <td>Change Field</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="#"  @click="viewModal" class="btn btn-success bg-success"><i class="fas fa-eye"></i></a>
                                            <a href="#"  class="btn btn-info bg-info"><i class="fas fa-edit"></i></a>
                                            <a href="#"  class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- Modal  -->
        <div class="modal fade" id="addTraining" tabindex="-1" role="dialog" aria-labelledby="addTraining"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addTraining">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <date-picker name="date" v-model="date" :config="options"></date-picker>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- View Modal  -->
        <div class="modal fade" id="viewTraining" tabindex="-1" role="dialog" aria-labelledby="viewTraining"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="viewTraining">View Training</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


</template>

<script>
    export default {
        data(){
            return{

            }
        },
        methods:{
            trainingModal(){
                $('#addTraining').modal('show')
            },
            viewModal(){
                $('#viewTraining').modal('show')
            },
        },
        created(){

        }
    }

</script>
