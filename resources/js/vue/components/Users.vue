<template>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card card-danger card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Users</h3>

                        <div class="card-tools">
                            <button class="btn btn-danger bg-danger" @click="showCreateUserModal"> Add New <i
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
                                    <th>Email</th>
                                    <th>Type</th>
                                    <th>Registered At</th>
                                    <th>Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="user in users" v-bind:key="user.id">
                                    <td>{{user.id}}</td>
                                    <td>{{user.name | upText }}</td>
                                    <td>{{user.email}}</td>
                                    <td>{{user.role_id}}</td>
                                    <td>{{user.created_at | regDate}}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="#" @click="editUser(user.id)" class="btn btn-info bg-info"><i class="fas fa-edit"></i></a>
                                            <a href="#" @click="deleteUser(user.id)" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
        <div class="modal fade" id="createUserModal" tabindex="-1" role="dialog" aria-labelledby="addNew" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">=
                        <h5 class="modal-title" id="addNew">Create User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="createUser">
                        <div class="modal-body">
                            <div class="form-group">
                                <input v-model="user.name" type="text" name="name" class="form-control"
                                    placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input v-model="user.email" type="email" name="email" class="form-control"
                                    placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input v-model="user.password" type="password" name="password" id="password"
                                    class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                                    <select v-model="user.role_id" type="role"
                                        title="role" id="role" class="form-control">
                                        <option disabled value="">Select Role</option>
                                        <option v-for="role in roles" v-bind:key="role.id"
                                            v-bind:value="role.id">{{role.name}}</option>
                                    </select>
                             </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Create</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Edit User  -->

         <div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editUserModal">Edit User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="updateUser">
                        <div class="modal-body">
                            <div class="form-group">
                                <input v-model="user.name" type="text" name="name" class="form-control"
                                    placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input v-model="user.email" type="email" name="email" class="form-control"
                                    placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input v-model="user.password" type="password" name="password" id="password"
                                    class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                                    <select v-model="user.role_id" type="role"
                                        title="role" id="role" class="form-control">
                                        <option disabled value="">Select Role</option>
                                        <option v-for="role in roles" v-bind:key="role.id"
                                            v-bind:value="role.id">{{role.name}}</option>
                                    </select>
                             </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Create</button>

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
                user: {
                    name: '',
                    email: '',
                    password: '',
                    role_id: ''
                }
            }
        },

        computed: {
            users() {
                return this.$store.state.users
            },
            roles() {
                return this.$store.state.roles
            }
        },

        methods: {
            showCreateUserModal() {
                $('#createUserModal').modal('show');
            },
            hideModal() {
                $('#createUserModal').modal('hide');
                $('#editUserModal').modal('hide');
                this.user = {};
            },
            editUser(userId){
                $('#editUserModal').modal('show');
                var user = this.users.find(user => {
                    return user.id == userId;
                })
                this.user = { ...user };
            },
            createUser() {
                this.$store.dispatch('createUser', this.user)
                            .then(res => this.hideModal());
            },
            updateUser(){
                this.$store.dispatch('updateUser', this.user)
                            .then(res => this.hideModal());
            }
        },

    }

</script>
