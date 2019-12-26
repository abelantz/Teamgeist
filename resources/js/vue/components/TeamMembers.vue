<template>
    <div>
        <h1>Team Members</h1>
        <div class="row">
            <div class="col-12">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Team Members</h3>

                        <div class="card-tools">
                            <button class="btn btn-info bg-info" @click="newModal"> Add New <i
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
                                    <th>Team</th>
                                    <th>Type</th>
                                    <th>Registered At</th>
                                    <th>Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="member in members" v-bind:key="member.id">
                                    <td>{{member.id}}</td>
                                    <td>{{member.name | upText }}</td>
                                    <td>{{member.team_id}}</td>
                                    <td><span class="tag tag-success">{{member.type}}</span></td>
                                    <td>{{member.created_at | regDate}}</td>
                                    <td>
                                        <a href="#" @click="editModal(member)"> <i class="fas fa-edit"></i></a>
                                        /
                                        <a href="#" @click="deleteUser(member.id)"> <i class="fas fa-trash red"></i></a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal  -->

        <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNew" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 v-show="editMode" class="modal-title" id="addNew">Update Member</h5>
                        <h5 v-show="!editMode" class="modal-title" id="addNew">Create Member</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="editMode ? updateUser() : createUser ()">
                        <div class="modal-body">
                            <div class="form-group">
                                <input v-model="membersForm.name" type="text" name="name" class="form-control"
                                    placeholder="Name" :class="{ 'is-invalid': membersForm.errors.has('name') }">
                                <has-error :form="membersForm" field="name"></has-error>
                            </div>
                            <div class="form-group">
                                <select v-model="membersForm.team_id" @change="onChangeTeam($event)" type="type" name="type"
                                    id="type" class="form-control"
                                    :class="{ 'is-invalid': membersForm.errors.has('type') }">
                                    <option disabled selected value="">Select Team  </option>
                                    <option v-for="team in teams" v-bind:key="team.id" v-bind:value="team.id">
                                        {{team.name}}</option>
                                </select>
                                <has-error :form="membersForm" field="type"></has-error>
                            </div>
                            <div class="form-group">
                                <select v-model="membersForm.type" @change="onChange($event)" type="type" name="type"
                                    id="type" class="form-control"
                                    :class="{ 'is-invalid': membersForm.errors.has('type') }">
                                    <option disabled selected value="">Select Type</option>
                                    <option v-for="role in roles" v-bind:key="role.id" v-bind:value="role.name">
                                        {{role.name}}</option>
                                </select>
                                <has-error :form="membersForm" field="type"></has-error>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                            <button v-show="editMode" type="submit" class="btn btn-success">Update</button>
                            <button v-show="!editMode" type="submit" class="btn btn-success">Create</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                editMode: false,
                membersForm: new Form({
                    id: '',
                    name: '',
                    type: '',
                    team_id: '',
                    // type:''
                })
            }
        },

        computed: {
            teams() {
                return this.$store.state.teams
            },
            members() {
                return this.$store.state.members
            },
            roles() {
                return this.$store.state.roles
            }
        },

        methods: {
            updateUser(id) {
                this.$Progress.start();
                this.membersForm.put('api/members/' + this.membersForm.id)
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
            editModal(user) {
                this.editMode = true;
                this.membersForm.reset();
                $('#addNew').modal('show');
                this.membersForm.fill(user);
            },
            newModal() {
                this.editMode = false;
                this.membersForm.reset();
                $('#addNew').modal('show');
            },
            deleteUser(id) {
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
                        this.membersForm.delete('api/members/' + id)
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
            onChangeTeam(event){
                console.log(event.target.value);
            },
            onChange(event){
                console.log(event.target.value);
            },
            createUser() {
                this.$Progress.start();
                this.membersForm.post('api/members')
                    .then(() => {
                        Fire.$emit('AfterCreate');
                        $('#addNew').modal('hide');
                        toast.fire({
                            type: 'success',
                            title: 'User created succesfully'
                        });
                        this.$Progress.finish();
                    })
                    .catch(() => {
                        this.$Progress.fail();
                    })
            },

        },
    }

</script>
