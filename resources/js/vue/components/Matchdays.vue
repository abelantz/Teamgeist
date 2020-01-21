<template>
    <div>
        <h1>Matchdays</h1>
        <div class="row">
            <div class="col-12 ">
                <div class="card card-info card-outline ">
                    <div class="card-header">
                        <h3 class="card-title">Upcoming Matches</h3>
                        <div class="card-tools">
                            <button class="btn btn-success bg-success" @click="showCreateMatchdayModal"> Add
                                Match</button>
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
                                    <th>Captain </th>
                                    <th>Preparation</th>
                                    <th>Start Match</th>
                                    <th>Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="matchday in matchdays" v-bind:key="matchday.id">
                                    <td>{{ matchday.team.name }}</td>
                                    <td>{{ matchday.opponent }}</td>
                                    <td>{{ matchday.date | regDate }}</td>
                                    <td>{{ matchday.time }}</td>
                                    <td>{{ matchday.type }}</td>
                                    <td>{{ matchday.field.title }}</td>
                                    <td>{{ matchday.wardrobe.title }}</td>
                                    <td>{{ matchday.referee.name }}</td>
                                    <td>{{ matchday.captain.membership.user.name }}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-success" @click="addAttendace(matchday.id)"><i
                                                    class="fa fa-plus"></i></button>
                                        </div>
                                    </td>
                                    <td>
                                        <router-link :to="'/matchday/' + matchday.id + '/live'" class="btn btn-sm btn-success"><i
                                                    class="fa fa-plus"></i></router-link>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-info bg-info" @click="editMatchday(matchday.id)"><i
                                                    class="fas fa-edit"></i></button>
                                            <button class="btn btn-danger" @click="deleteMatchday(matchday.id)"><i
                                                    class="fas fa-trash"></i></button>
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
        <div class="modal fade" id="addMatch" tabindex="-1" role="dialog" aria-labelledby="addMatch" aria-hidden="true">
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
                                <select v-model="matchday.team_id" type="type" name="type" id="type"
                                    class="form-control">
                                    <option disabled selected value="">Select Team</option>
                                    <option v-for="team in teams" v-bind:key="team.id" v-bind:value="team.id">
                                        {{team.name}}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" v-model="matchday.opponent" class="form-control"
                                    placeholder="FC opponent ...">
                            </div>
                            <div class="form-group">
                                <picker label="Date" only-date v-model="matchday.date" format="YYYY-MM-DD"
                                    formatted="DD/MM/YYYY"></picker>
                            </div>
                            <div class="form-group">
                                <picker label="Start Time" only-time v-model="matchday.time" format="HH:mm:ss "
                                    formatted="HH:mm "></picker>
                            </div>
                            <div class="form-group">
                                <select v-model="matchday.type" type="type" name="type" id="type" class="form-control">
                                    <option disabled selected value="">Select Type</option>
                                    <option value="home">Home</option>
                                    <option value="away">Away</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select v-model="matchday.referee_id" type="referee" name="referee" id="referee"
                                    class="form-control">
                                    <option disabled selected value="">Select referee</option>
                                    <option v-for="referee in referees" v-bind:key="referee.id" v-bind:value="referee.id">
                                        {{referee.name}}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select v-model="matchday.member_id" type="member" name="member" id="member"
                                    class="form-control">
                                    <option disabled selected value="">Select captain</option>
                                    <option v-for="member in members" v-bind:key="member.id" v-bind:value="member.id">
                                        {{ member.membership.user.name }}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select v-model="matchday.field_id" type="type" name="type" id="type"
                                    class="form-control">
                                    <option disabled selected value="">Select Field</option>
                                    <option v-for="field in fields" v-bind:key="field.id" v-bind:value="field.id">
                                        {{field.title}}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select v-model="matchday.wardrobe_id" type="type" name="type" id="type"
                                    class="form-control">
                                    <option disabled selected value="">Select Wardrobe</option>
                                    <option v-for="wardrobe in wardrobes" v-bind:key="wardrobe.id"
                                        v-bind:value="wardrobe.id">{{wardrobe.title}}</option>
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

        <!-- edit matchday  -->

        <div class="modal fade" id="editMatchdayModal" tabindex="-1" role="dialog" aria-labelledby="addMatch" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addMatch">Update Match</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="updateMatchday">
                        <div class="modal-body ">
                            <div class="form-group">
                                <select v-model="matchday.team_id" type="type" name="type" id="type"
                                    class="form-control">
                                    <option disabled selected value="">Select Team</option>
                                    <option v-for="team in teams" v-bind:key="team.id" v-bind:value="team.id">
                                        {{team.name}}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" v-model="matchday.opponent" class="form-control"
                                    placeholder="FC opponent ...">
                            </div>
                            <div class="form-group">
                                <picker label="Date" only-date v-model="matchday.date" format="YYYY-MM-DD"
                                    formatted="DD/MM/YYYY"></picker>
                            </div>
                            <div class="form-group">
                                <picker label="Start Time" only-time v-model="matchday.time" format="HH:mm:ss "
                                    formatted="HH:mm "></picker>
                            </div>
                            <div class="form-group">
                                <select v-model="matchday.type" type="type" name="type" id="type" class="form-control">
                                    <option disabled selected value="">Select Type</option>
                                    <option value="home">Home</option>
                                    <option value="away">Away</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select v-model="matchday.referee_id" type="referee" name="referee" id="referee"
                                    class="form-control">
                                    <option disabled selected value="">Select referee</option>
                                    <option v-for="referee in referees" v-bind:key="referee.id" v-bind:value="referee.id">
                                        {{referee.name}}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select v-model="matchday.member_id" type="member" name="member" id="member"
                                    class="form-control">
                                    <option disabled selected value="">Select captain</option>
                                    <option v-for="member in members" v-bind:key="member.id" v-bind:value="member.id">
                                        {{ member.membership.user.name }}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select v-model="matchday.field_id" type="type" name="type" id="type"
                                    class="form-control">
                                    <option disabled selected value="">Select Field</option>
                                    <option v-for="field in fields" v-bind:key="field.id" v-bind:value="field.id">
                                        {{field.title}}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select v-model="matchday.wardrobe_id" type="type" name="type" id="type"
                                    class="form-control">
                                    <option disabled selected value="">Select Wardrobe</option>
                                    <option v-for="wardrobe in wardrobes" v-bind:key="wardrobe.id"
                                        v-bind:value="wardrobe.id">{{wardrobe.title}}</option>
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

        <!-- Preparation Modal  -->
        <div class="modal fade" id="addFormation" tabindex="-1" role="dialog" aria-labelledby="addFormation"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addFormation">Add Formation</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="createMatchdayAttendance">
                        <div class="modal-body ">

                            <!-- <div class="form-group">
                                <select type="type" name="type" id="type"
                                    class="form-control">
                                    <option disabled selected value="">Select Formation</option>
                                    <option value="2–3–5">2–3–5</option>
                                    <option value="3–3–4">3–3–4</option>
                                    <option value="4–2–4">4–2–4</option>
                                    <option value="4-4-2">4-4-2</option>
                                    <option value="4–4–1–1">4–4–1–1</option>
                                    <option value="4-3-3">4-3-3</option>
                                    <option value="4–1–2–3">4–1–2–3</option>
                                    <option value="4–1–2–1–2">4–1–2–1–2</option>
                                    <option value="4–1–3–2">4–1–3–2</option>
                                    <option value="4–3–2–1">4–3–2–1</option>
                                    <option value="5–3–2">5–3–2</option>
                                    <option value="3–4–3">3–4–3</option>
                                    <option value="3–5–2">3–5–2</option>
                                    <option value="3–4–1–2">3–4–1–2</option>
                                    <option value="3–6–1">3–6–1</option>
                                    <option value="4–5–1">4–5–1</option>
                                    <option value="4–2–3–1">4–2–3–1</option>
                                    <option value="4–6–0">4–6–0</option>
                                    <option value="5–4–1">5–4–1</option>
                                    <option value="1–6–3">1–6–3</option>
                                    <option value="4–2–2–2">4–2–2–2</option>
                                    <option value="3–3–1–3">3–3–1–3</option>
                                    <option value="3–3–3–1">3–3–3–1</option>
                                    <option value="4–2–1–3–3–1">4–2–1–3</option>
                                </select>
                            </div> -->
                            <div class="form-check">
                                    
                                    <div class="list-group" v-for="member in members" v-bind:key="member.id">
                                        <input class="form-check-input" type="checkbox" :value="member.id"
                                            v-model="preparation.members">
                                        <label class="form-check-label">{{member.membership.user.name}}</label>
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
                matchday: {
                    team_id: '',
                    opponent: '',
                    date: '',
                    time: '',
                    type: '',
                    field_id: '',
                    wardrobe_id: '',

                },
                preparation: {
                    matchday_id: '',
                    // formation: '',
                    members: []
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
            referees() {
                return this.$store.state.referees
            },
            members() {
                return this.$store.state.members
            },
            fields() {
                return this.$store.state.fields
            },
            wardrobes() {
                return this.$store.state.wardrobes
            },
        },

        methods: {
            editMatchday(matchdayId){
                $('#editMatchdayModal').modal('show');
                var matchday = this.matchdays.find(matchday => {
                    return matchday.id == matchdayId;
                });
                this.matchday = { ...matchday };
            },
            hideModal() {
                $('#addMatch').modal('hide');
                $('#addFormation').modal('hide')
                $('#editMatchdayModal').modal('hide');
                this.matchday = {};
            },
            showCreateMatchdayModal() {
                $('#addMatch').modal('show')
            },
            addAttendace(matchdayId) {
                $('#addFormation').modal('show')
                this.preparation.matchday_id = matchdayId;
            },
            createMatchday() {
                this.$store.dispatch('createMatchday', this.matchday)
                            .then(res => this.hideModal());
            },
            deleteMatchday(matchdayId) {
                this.$store.dispatch('deleteMatchday', matchdayId)
                            .then(res => console.log('deleted matchday'));
            },
            updateMatchday(){
                this.$store.dispatch('updateMatchday', this.matchday)
                            .then(res => this.hideModal());
            },
            createMatchdayAttendance() {
                this.$store.dispatch('createMatchdayAttendance', this.preparation)
                            .then(res => this.hideModal());
            }
        },

    }

</script>
