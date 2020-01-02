<template>
    <div>
        <h1>Trainings</h1>
        <div class="row">
            <div class="col-12 ">
                <div class="card card-info card-outline ">
                    <div class="card-header">
                        <h3 class="card-title">Upcoming Trainings</h3>
                        <div class="card-tools">
                            <button class="btn btn-success bg-success" @click="showCreateTrainingsModal"> Add Training</button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-center">
                            <thead>
                                <tr>
                                    <th>Team Name</th>
                                    <th>Date</th>
                                    <th>Start Time</th>
                                    <th>End time</th>
                                    <th>Training field</th>
                                    <th>Wardrobe</th>
                                    <th>Modify</th>
                                    <th>Attendance</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="training in trainings" v-bind:key="training.id">
                                    <td>{{ getTrainingTeam(training.team_id).name }}</td>
                                    <td>{{ training.date | regDate }}</td>
                                    <td>{{ training.start_time }}</td>
                                    <td>{{ training.end_time }}</td>
                                    <td>{{ getTrainingField(training.field_id).title }}</td>
                                    <td>{{ getTrainingWardrobe(training.wardrobe_id).title }}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="#" class="btn btn-info bg-info"><i class="fas fa-edit"></i></a>
                                            <button class="btn btn-danger" @click="deleteTraining(training.id)"><i class="fas fa-trash"></i></button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-success" @click="showAttendanceModal"><i class="fa fa-plus-square-o" ></i></button>
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
                    <form @submit.prevent="createTraining">
                            <div class="modal-body">
                                <div class="form-group">
                                    <select v-model="training.team_id" type="type" name="type" id="type" class="form-control">
                                     <option disabled selected value="">Select Team</option>
                                    <option  v-for="team in teams" v-bind:key="team.id" v-bind:value="team.id">{{team.name}}</option>
                                </select>
                                </div>
                                <div class="form-group">
                                    <picker label="Date" only-date v-model="training.date" format="YYYY-MM-DD" formatted="DD/MM/YYYY"></picker>
                                </div>
                                <div class="form-group">
                                    <picker label="Start Time" only-time v-model="training.start_time" format="HH:MM:SS" formatted="HH:mm "></picker>
                                </div>
                                <div class="form-group">
                                    <picker label="End Time" only-time v-model="training.end_time" format="HH:MM:SS" formatted="HH:mm "></picker>
                                </div>
                                <div class="form-group">
                                    <select v-model="training.field_id" type="type" name="type" id="type" class="form-control">
                                    <option disabled selected value="">Select Field</option>
                                    <option  v-for="field in fields" v-bind:key="field.id" v-bind:value="field.id">{{field.title}}</option>

                                </select>
                                </div>
                                <div class="form-group">
                                    <select v-model="training.wardrobe_id" type="type" name="type" id="type" class="form-control">
                                     <option disabled selected value="">Select Wardrobe</option>
                                    <option  v-for="wardrobe in wardrobes" v-bind:key="wardrobe.id" v-bind:value="wardrobe.id">{{wardrobe.title}}</option>
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

        <!-- Attendance Modal  -->

        <div class="modal fade" id="addAttendance" tabindex="-1" role="dialog" aria-labelledby="addAttendance"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addAttendance">Add Players to Training</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="">
                            <div class="modal-body">
                                <div class="form-group">
                                <div class="form-check">
                                    <ul>
                                        <li v-for="member in members" v-bind:key="member.id">
                                            <input  class="form-check-input" type="checkbox" :value="member.id" v-model="training.attendance">
                                            <label  class="form-check-label">{{member.name}}</label>
                                        </li>
                                    </ul>
                                </div>
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
    </div>


</template>

<script>
    import picker from 'vue-ctk-date-time-picker';
    import 'vue-ctk-date-time-picker/dist/vue-ctk-date-time-picker.css';

    export default {

        components: {
            picker
        },

        data() {
            return {
                training: {
                    team_id: '',
                    date: '',
                    start_time: '',
                    end_time: '',
                    field_id: '',
                    wardrobe_id: '',
                    attendance:[]
                }
            }
        },

        computed: {
            teams() {
                return this.$store.state.teams
            },
            trainings() {
                return this.$store.state.trainings
            },
            members() {
                return this.$store.state.members
            },
            fields() {
                return this.$store.state.fields
            },
            wardrobes() {
                return this.$store.state.wardrobes
            }
        },

        methods: {
            getTrainingTeam(teamId) {
                return this.teams.find(team => {
                    return team.id == teamId;
                });
            },
            getTrainingField(fieldId) {
                return this.fields.find(field => {
                    return field.id == fieldId;
                });
            },
            getTrainingWardrobe(wardrobeId) {
                return this.wardrobes.find(wardrobe => {
                    return wardrobe.id == wardrobeId;
                });
            },
            showCreateTrainingsModal() {
                $('#addTraining').modal('show')
            },
            showAttendanceModal() {
                $('#addAttendance').modal('show')
            },
            createTraining() {
                this.$store.dispatch('createTraining', this.training)
                            .then(res => $('#addTraining').modal('hide'));
            },
            deleteTraining(trainingId) {
                this.$store.dispatch('deleteTraining', trainingId)
                            .then(res => console.log('training deleted'));
            }
        },
        
        

    }

</script>
