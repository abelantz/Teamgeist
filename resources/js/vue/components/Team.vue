<template>
    <div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <h3 v-for="t in teamsId" v-bind:key="t.id" class="profile-username text-center">
                                {{t.name}}</h3>
                            <p class="text-muted text-center">Category / Subcategory</p>
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Players</b> <a class="float-right">45</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Coaches</b> <a class="float-right">2</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Team members</b> <a class="float-right">47</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-9">
                    <div class="card card-primary card-outline">
                        <div class="card-header ">
                            <h3 class="card-title">Members</h3>
                            <div class="card-tools">
                                <button class="btn btn-info bg-info" @click="memberModal">Add New<i
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
                                        <th>Type</th>
                                        <th>Registered At</th>
                                        <th>Modify</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="member in membersId " v-bind:key="member.id">

                                        <td>{{member.id}}</td>
                                        <td>{{member.name}}</td>
                                        <td>{{member.type}}</td>
                                        <td>{{member.created_at | regDate}}</td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <a href="#" class="btn btn-info bg-info"><i class="fas fa-edit"></i></a>
                                                <a href="#" @click="deleteMember(member.id)" class="btn btn-danger"><i
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




                <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNew"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5  class="modal-title" id="addNew">Create Team Member</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form @submit.prevent="createTeamMember()">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input v-model="team_members.name" @change="onChangeTeam($event)" type="text" name="name"
                                            class="form-control" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <select v-model="team_members.type" @change="onChangeRole($event)" type="type" name="type"
                                            id="type" class="form-control">
                                            <option disabled selected value="">Select Type</option>
                                            <option v-for="role in roles" v-bind:key="role.id" v-bind:value="role.name">
                                                {{role.name}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        props: ['teamId'],
        data() {
            return {
                editMode: false,
                team_members:{
                    id: '',
                    name: '',
                    type: '',
                    team_id: this.teamId,
                }
            }
        },

        computed: {
            teams() {
                return this.$store.state.teams;
            },
            members() {
                return this.$store.state.members;
            },
            roles() {
                return this.$store.state.roles;
            },
            

        },

        methods: {
            memberModal() {
                this.editMode = false;
                // this..reset();
                $('#addNew').modal('show');
            },
            editModal(member) {
                this.editMode = true;
                // this..reset();
                $('#addNew').modal('show');
                // this..fill(member);
            },

            onChangeTeam(event) {
                console.log(event.target.value);
            },
            onChangeRole(event) {
                console.log(event.target.value);
            },

            createTeamMember() {
                this.$store.dispatch('createTeamMembers', this.members)
                    .then(res => $('#addNew').modal('hide'))
            },
            membersId() {
                return this.members.find((member) => {
                    return member.team_id == this.teamId;
                })
            },
            teamsId() {
                return this.teams.find((team) => {
                    return team.id == this.teamId;
                })
            },


        },

    }

</script>
