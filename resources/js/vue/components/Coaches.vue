<template>
    <div>
        <h1>Coaches</h1>

        <div class="row text-center ">
            <div class="col-12">
                <div class="card card-success card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Overview coaches</h3>
                        <div class="card-tools">
                            <button class="btn btn-success bg-success" @click="coachModal"> Add Coach</button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Team</th>
                                    <th>Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ coach.id }}</td>
                                    <td>{{ coach.name }}</td>
                                    <td>{{ coach.team_id }}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="#"   class="btn btn-success bg-success"><i class="fas fa-eye"></i></a>
                                            <a href="#"   class="btn btn-info bg-info"><i class="fas fa-edit"></i></a>
                                            <a href="#"  @click="deleteCoach(coach.id)" class="btn btn-danger bg-danger"><i class="fas fa-trash"></i></a>
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
        <!-- Modal -->
        <div class="modal fade" id="addCoach" tabindex="-1" role="dialog" aria-labelledby="addCoach"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addCoach">Add Coach</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Name ...">
                        </div>
                        <div class="form-group">
                        <label>Select Team</label>
                        <select v-model="coach.team_id" class="form-control">
                            <option disabled selected value="">Select Team</option>
                            <option  v-for="team in teams" v-bind:key="team.id" v-bind:value="team.id">{{ team.name }}</option>
                        </select>
                      </div>
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

        data() {
            return {
                coach: {
                    name: '',
                    team_id: ''
                }
            }
        },

        computed: {
            teams() {
                return this.$store.state.teams;
            }
        },

        methods: {
            coachModal() {
                $('#addCoach').modal('show')
            },
        },

    }

</script>
