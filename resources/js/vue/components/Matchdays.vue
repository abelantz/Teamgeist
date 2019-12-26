<template>
    <div>
        <h1>Matchdays</h1>
        <div class="row">
            <div class="col-12 ">
                <div class="card card-info card-outline ">
                    <div class="card-header">
                        <h3 class="card-title">Upcoming Matches</h3>
                        <div class="card-tools">
                            <button class="btn btn-success bg-success" @click="showCreateMatchdayModal"> Add Match</button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-center">
                            <thead>
                                <tr>
                                    <th>Team Name</th>
                                    <th>Opponent</th>
                                    <th>Date</th>
                                    <th>Start Time</th>
                                    <th>Type</th>
                                    <th>Training field</th>
                                    <th>Wardrobe</th>
                                    <th>Referee </th>
                                    <th>Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="matchday in matchdays" v-bind:key="matchday.id">
                                    <td>{{matchday.team_id}}</td>
                                    <td>{{matchday.date | regDate}}</td>
                                    <td>{{matchday.opponent}}</td>
                                    <td>{{matchday.start_time}}</td>
                                    <td>{{matchday.type}}</td>
                                    <td>{{matchday.field_id}}</td>
                                    <td>{{matchday.wardrobe_id}}</td>
                                    <td>Colina</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="#" class="btn btn-success bg-success"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="btn btn-info bg-info"><i class="fas fa-edit"></i></a>
                                            <button class="btn btn-danger" @click="deleteMatchday(matchday.id)"><i class="fas fa-trash"></i></button>
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
        <div class="modal fade" id="addMatch" tabindex="-1" role="dialog" aria-labelledby="addMatch"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addMatch">Add Match</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="createMatchday">
                            <div class="modal-body ">
                                <div class="form-group">
                                    <select v-model="matchday.team_id" type="type" name="type" id="type" class="form-control">
                                     <option disabled selected value="">Select Team</option>
                                    <option  v-for="team in teams" v-bind:key="team.id" v-bind:value="team.id">{{team.name}}</option>
                                </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" v-model="matchday.opponent" class="form-control" placeholder="FC opponent ...">
                                </div>
                                <div class="form-group">
                                    <picker label="Date" only-date v-model="matchday.date" format="YYYY-MM-DD" formatted="DD/MM/YYYY"></picker>
                                </div>
                                <div class="form-group">
                                    <picker label="Start Time" only-time v-model="matchday.start_time" format="HH:mm:ss " formatted="HH:mm "></picker>
                                </div>
                                <div class="form-group">
                                    <select v-model="matchday.type" type="type" name="type" id="type" class="form-control">
                                     <option disabled selected value="">Select Type</option>
                                    <option value="home">Home</option>
                                    <option value="away">Away</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select v-model="matchday.field_id" type="type" name="type" id="type" class="form-control">
                                     <option disabled selected value="">Select Field</option>
                                    <option  v-for="field in fields" v-bind:key="field.id" v-bind:value="field.id">{{field.title}}</option>
                                </select>
                                </div>
                                <div class="form-group">
                                    <select v-model="matchday.wardrobe_id" type="type" name="type" id="type" class="form-control">
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
                matchday: {
                    team_id: '',
                    opponent:'',
                    date: '',
                    start_time: '',
                    type:'',
                    field_id: '',
                    wardrobe_id: '',
                }
            }
        },

        computed: {
            matchdays() {
                return this.$store.state.matchdays
            },
            teams() {
                return this.$store.state.teams
            },
            fields() {
                return this.$store.state.fields
            },
            wardrobes() {
                return this.$store.state.wardrobes
            },
        },

        methods: {
            showCreateMatchdayModal() {
                $('#addMatch').modal('show')
            },
            createMatchday() {
                this.$store.dispatch('createMatchday', this.matchday)
                            .then(res => $('#addMatch').modal('hide'));
            },
            deleteMatchday(matchdayId) {
                this.$store.dispatch('deleteMatchday', matchdayId)
                            .then(res => console.log('deleted matchday'));
            }
        },

    }

</script>
