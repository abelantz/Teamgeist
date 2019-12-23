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
                        <table class="table table-hover text-center">
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
                                <tr v-for="training in trainings" v-bind:key="training.id">
                                    <td>{{training.team_id}}</td>
                                    <td>{{training.date | regDate}}</td>
                                    <td>Monday</td>
                                    <td>{{training.start_time }}</td>
                                    <td>{{training.end_time }}</td>
                                    <td>{{training.meeting }}</td>
                                    <td>{{training.field_id}}</td>
                                    <td>{{training.wardrobe_id}}</td>
                                    <td>Guardiolaa</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="#" @click="viewModal" class="btn btn-success bg-success"><i
                                                    class="fas fa-eye"></i></a>
                                            <a href="#" class="btn btn-info bg-info"><i class="fas fa-edit"></i></a>
                                            <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
                                            <a href="#" @click="viewModal" class="btn btn-success bg-success"><i
                                                    class="fas fa-eye"></i></a>
                                            <a href="#" class="btn btn-info bg-info"><i class="fas fa-edit"></i></a>
                                            <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
                        <h5 class="modal-title" id="addTraining">Add Training</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="createTraining()">
                            <div class="modal-body">
                                <div class="form-group">
                                    <select v-model="formTraining.team_id" @change="onChangeTraining($event)" type="type" name="type" id="type" class="form-control">
                                     <option disabled selected value="">Select Team</option>
                                    <option  v-for="team in teams" v-bind:key="team.id" v-bind:value="team.id">{{team.name}}</option>
                                    <has-error :form="formTraining" field="team"></has-error>
                                </select>
                                </div>
                                <div class="form-group">
                                    <picker label="Date" only-date v-model="formTraining.date" format="YYYY-MM-DD" formatted="DD/MM/YYYY"></picker>
                                    <has-error :form="formTraining" field="date"></has-error>
                                </div>
                                <div class="form-group">
                                    <picker label="Start Time" only-time v-model="formTraining.start_time" format="HH:MM:SS" formatted="HH:mm "></picker>
                                    <has-error :form="formTraining" field="start"></has-error>
                                </div>
                                <div class="form-group">
                                    <picker label="End Time" only-time v-model="formTraining.end_time" format="HH:MM:SS" formatted="HH:mm "></picker>
                                    <has-error :form="formTraining" field=""></has-error>
                                </div>
                                <div class="form-group">
                                    <picker label="Meeting Time" only-time v-model="formTraining.meeting" format="hh:mm:ss" formatted="HH:mm"></picker>
                                    <has-error :form="formTraining" field="meeting"></has-error>
                                </div>
                                <div class="form-group">
                                    <select v-model="formTraining.field_id" @change="onChangeField($event)" type="type" name="type" id="type" class="form-control">
                                     <option disabled selected value="">Select Field</option>
                                    <option  v-for="field in fields" v-bind:key="field.id" v-bind:value="field.id">{{field.title}}</option>
                                    <has-error :form="formTraining" field="field"></has-error>
                                </select>
                                </div>
                                <div class="form-group">
                                    <select v-model="formTraining.wardrobe_id" @change="onChangeWardrobe($event)" type="type" name="type" id="type" class="form-control">
                                     <option disabled selected value="">Select Wardrobe</option>
                                    <option  v-for="wardrobe in wardrobes" v-bind:key="wardrobe.id" v-bind:value="wardrobe.title">{{wardrobe.title}}</option>
                                    <has-error :form="formTraining" field="wardrobe"></has-error>
                                </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Create</button>
                            </div>
                        </form>
                    
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
    import picker from 'vue-ctk-date-time-picker';
    import 'vue-ctk-date-time-picker/dist/vue-ctk-date-time-picker.css';



    export default {
        data() {
            return {
                trainings:[],
                teams: [],
                fields: [],
                wardrobes: [],
                formTraining: new Form({
                    team_id: '',
                    date: '',
                    start_time: '',
                    end_time: '',
                    meeting: '',
                    field_id: '',
                    wardrobe_id: '',
                })

            }
        },
        methods: {
            onChangeTraining(event){console.log(event.target.value)},
            onChangeField(event){console.log(event.target.value)},
            onChangeWardrobe(event){console.log(event.target.value)},

            trainingModal() {
                $('#addTraining').modal('show')
            },
            viewModal() {
                $('#viewTraining').modal('show')
            },
            loadTrainings(){
                axios.get('api/trainings')
                    .then((response) => this.trainings = response.data.data)
            },
            loadTeams() {
                axios.get('api/teams')
                    .then((response) => this.teams = response.data.data)
            },
            loadFields() {
                axios.get('api/fields')
                    .then((response) => this.fields = response.data.data)
            },
            loadWardrobes() {
                axios.get('api/wardrobes')
                    .then((response) => this.wardrobes = response.data.data)
            },
            createTraining() {
                this.$Progress.start();
                this.formTraining.post('api/trainings')
                    .then(() => {
                        Fire.$emit('AfterCreate');
                        $('#addTraining').modal('hide');
                        toast.fire({
                            type: 'success',
                            title: 'Training created succesfully'
                        });
                        this.$Progress.finish();
                    })
                    .catch(() => {
                        this.$Progress.fail();
                    })
            },
        },
        components: {
            picker
        },
        created() {
            this.loadTeams();
            this.loadFields();
            this.loadWardrobes();
            this.loadTrainings();
            Fire.$on('AfterCreate', () => {
                this.loadTrainings();
            });
        }
    }

</script>
