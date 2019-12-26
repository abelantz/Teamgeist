<template>
    <div>
        <div class="row mt-2">
            <div class="col-8">
                <div class="card card-success card-outline">
                    <div class="card-header ">
                        <h3 class="card-title">Roles</h3>
                        <div class="card-tools">
                            <button class="btn btn-success bg-success" @click="addRoleModal"> Add New <i
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
                                    <th>Permissions</th>
                                    <th>Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="role in roles" v-bind:key="role.id">
                                    <td>{{role.id}}</td>
                                    <td>{{role.name}}</td>
                                    <td>{{role.permissions}}</td>
                                    <td>
                                        <a href="#" @click="editModal(role)" > <i class="fas fa-edit"></i></a>
                                        /
                                        <a href="#" > <i class="fas fa-trash red"></i></a>
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
            <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNew" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addNew">Add  Role</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="createRole">
                        <div class="modal-body">
                            <div class="form-group">
                                <input v-model="role.name" type="text" name="name" class="form-control"
                                    placeholder="Name">
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <ul>
                                        <li v-for="permission in permissions" v-bind:key="permission.id">
                                            <input  class="form-check-input" type="checkbox" :value="permission.name" v-model="role.permissions">
                                            <label  class="form-check-label">{{permission.name}}</label>
                                        </li>
                                    </ul>
                                </div>
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
            <!-- Edit Modal  -->
        </div>
        </div>
</template>

<script>


    export default {
        data(){
            return{
                role: {
                    name:'',
                    permissions: [],
                },
            }
        },

        computed: {
            roles() {
                return this.$store.state.roles
            },
            permissions() {
                return this.$store.state.permissions
            },
        },

        methods: {
            addRoleModal(){
                $('#addNew').modal('show');
            },
            createRole() {
                this.$store.dispatch('createRole', this.role)
                            .then(res => $('#addNew').modal('hide'))
            },
        },
    }

</script>
