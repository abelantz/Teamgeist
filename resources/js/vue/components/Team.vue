<template>
    <div>
        <section class="content">
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
                                                <a href="#" @click="editModal(member)"> <i class="fas fa-edit"></i></a>
                                                /
                                                <a href="#" @click="deleteMember(member.id)"> <i
                                                        class="fas fa-trash red"></i></a>
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
                                    <h5 v-show="editMode" class="modal-title" id="addNew">Update User</h5>
                                    <h5 v-show="!editMode" class="modal-title" id="addNew">Create User</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form @submit.prevent="editMode ? updateTeamMember() : createTeamMember()">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <input v-model="teamForm.name" @change="onChangeTeam($event)" type="text" name="name" class="form-control"
                                                placeholder="Name"
                                                :class="{ 'is-invalid': teamForm.errors.has('name') }">
                                            <has-error :form="teamForm" field="name"></has-error>
                                        </div>
                                        <div class="form-group">
                                            <select v-model="teamForm.type" @change="onChangeRole($event)" type="type"
                                                name="type" id="type" class="form-control"
                                                :class="{ 'is-invalid': teamForm.errors.has('type') }">
                                                <option disabled selected value="">Select Type</option>
                                                <option v-for="role in roles" v-bind:key="role.id"
                                                    v-bind:value="role.name">{{role.name}}</option>
                                            </select>
                                            <has-error :form="teamForm" field="type"></has-error>
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
        </section>
    </div>
</template>

<script>
    export default {
        props: ['teamId'],
        data() {
            return {
                editMode: false,
                members: [],
                roles: [],
                teams: [],
                teamForm: new Form({
                    id: '',
                    name: '',
                    type: '',
                    team_id: this.teamId,
                }),
            }
        },
        methods: {
            memberModal() {
                this.editMode = false;
                this.teamForm.reset();
                $('#addNew').modal('show');
            },
            editModal(member) {
                this.editMode = true;
                this.teamForm.reset();
                $('#addNew').modal('show');
                this.teamForm.fill(member);
            },
            loadRoles() {
                axios.get('../api/roles')
                    .then((response) => this.roles = response.data.data);
            },
            updateTeamMember(id) {
                this.$Progress.start();
                this.teamForm.put('../api/members/' + this.teamForm.id)
                    .then(() => {
                        swal.fire(
                            'Updated!',
                            'Your information has been updated.',
                            'success'
                        )
                        Fire.$emit('AfterCreate');
                        $('#addNew').modal('hide');
                        this.$Progress.finish();
                    })
                    .catch(() => {
                        this.$Progress.fail();
                    })
            },
            onChangeTeam(event){
                console.log(event.target.value);
            },
            onChangeRole(event){
                console.log(event.target.value);
            },
            createTeamMember() {
                this.$Progress.start();
                this.teamForm.post('../api/members')
                    .then(() => {
                        Fire.$emit('AfterCreate');
                        $('#addNew').modal('hide');
                        toast.fire({
                            type: 'success',
                            title: 'Team Member created succesfully'
                        });
                        this.$Progress.finish();
                    })
                    .catch(() => {
                        this.$Progress.fail();
                    })
            },
            deleteMember(id) {
                swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {

                    //Send request to the server
                    if (result.value) {
                        this.teamForm.delete('../api/members/' + id)
                            .then(() => {
                                swal.fire(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success'
                                )
                                Fire.$emit('AfterCreate');
                            })
                            .catch()
                    }
                })
            },
        },

        computed: {
            membersId: function () {
                return this.members.filter((member) => {
                    return member.team_id == this.teamId;
                })
            },
            teamsId: function () {
                return this.teams.filter((team) => {
                    return team.id == this.teamId;
                })
            },

        },
        created() {
            // var that = this;
            // this.loadTeam();
            this.loadRoles();

            axios.get('../api/members')
                .then((response) => {
                    this.members = response.data.data
                });
            axios.get('../api/teams')
                .then((response) => {
                    this.teams = response.data.data
                });
            Fire.$on('AfterCreate', () => {
                axios.get('../api/members')
                    .then((response) => {
                        this.members = response.data.data
                    });

            });
        },


    }

</script>
