<template>
    <div>

        <h1>Teams</h1>
        <!-- Team List -->
        <div class="row mt-2">
            <div class="col-12">
                <div class="card card-warning card-outline">
                    <div class="card-header ">
                        <h3 class="card-title">Teams</h3>

                        <div class="card-tools">
                            <button class="btn btn-warning bg-warning" @click="showCreateTeamModal"> Add New <i
                                    class="fas fa-user-plus "></i></button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>SubCategory</th>
                                    <th>Registered At</th>
                                    <th>Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="team in teams" v-bind:key="team.id">
                                    <td>{{team.id}}</td>
                                    <td>
                                        <router-link :to="'/team/' + team.id ">{{team.name}}</router-link>
                                    </td>

                                    <td><span class="tag tag-success">Active</span></td>
                                    <td>First </td>
                                    <td>{{team.created_at | regDate}}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="#" class="btn btn-info bg-info"><i class="fas fa-edit"></i></a>
                                            <a href="#" @click="deleteTeam(team.id)" class="btn btn-danger"><i
                                                    class="fas fa-trash"></i></a>
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
            <!-- Modal  -->
            <!-- Team Modal -->
            <div class="modal fade" id="teamModal" tabindex="-1" role="dialog" aria-labelledby="addNew"
                aria-hidden="false">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="teamModal">Create Team</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!-- Create team -->
                        <form @submit.prevent="createTeam()">
                            <div class="modal-body">
                                <div class="form-group">
                                    <input v-model="team.name" type="text" name="name" class="form-control"
                                        placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <select type="type" name="type" id="type" class="form-control">
                                        <option disabled selected value="">Select Category</option>
                                        <option v-for="category in categories" v-bind:key="category.id"
                                            v-bind:value="category.id">{{category.title}}</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <select v-model="team.subcategory_id" type="type" name="type" id="type"
                                        class="form-control">
                                        <option disabled selected value="">Select Subcategory</option>
                                        <option v-for="subcategory in subcategories" v-bind:key="subcategory.id"
                                            v-bind:value="subcategory.id">{{subcategory.title}}</option>
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
    </div>

</template>

<script>
    export default {

        data() {
            return {
                showModal: false,
                team: {
                    name: '',
                    subcategory_id: '',
                }
            }
        },

        computed: {
            teams() {
                return this.$store.state.teams;
            },
            categories() {
                return this.$store.state.categories
            },
            subcategories() {
                return this.$store.state.subcategories
            },

            
        },

        methods: {
            showCreateTeamModal() {
                $('#teamModal').modal('show');
            },
            createTeam() {
                this.$Progress.start();
                this.$store.dispatch('createTeam', this.team)
                    .then(res => {
                        Fire.$emit('AfterCreate');
                        $('#teamModal').modal('hide');
                        toast.fire({
                            type: 'success',
                            title: 'Team created succesfully'
                        });
                        this.$Progress.finish();
                    })
                    .catch(() => {
                        this.$Progress.fail();
                    });
            },
            deleteTeam(teamId) {
                this.$store.dispatch('deleteTeam', teamId)
                    .then(res => console.log(res));
            }
        },
        
    }

</script>
