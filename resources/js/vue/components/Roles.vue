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
                    <form @submit.prevent="createRole()">
                        <div class="modal-body">
                            <div class="form-group">
                                <input v-model="roleForm.name" type="text" name="name" class="form-control"
                                    placeholder="Name" :class="{ 'is-invalid': roleForm.errors.has('name') }">
                                <has-error :form="roleForm" field="name"></has-error>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <ul>
                                        <li v-for="permission in permissions" v-bind:key="permission.id">
                                            <input  class="form-check-input" type="checkbox" :value="permission.name" v-model="roleForm.permissions"
                                            :class="{ 'is-invalid': roleForm.errors.has('checkbox') }">
                                            <label  class="form-check-label">{{permission.name}}</label>
                                            <has-error :form="roleForm" field="checkbox"></has-error>
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

            <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateModal">Add  Role</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="updateRole()">
                        <div class="modal-body">
                            <div class="form-group">
                                <input v-model="roleForm.name" type="text" name="name" class="form-control"
                                    placeholder="Name" :class="{ 'is-invalid': roleForm.errors.has('name') }">
                                <has-error :form="roleForm" field="name"></has-error>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <ul>
                                        <li v-for="permission in permissions" v-bind:key="permission.id">
                                            <input  class="form-check-input" type="checkbox" :value="permission.name" v-model="roleForm.permissions"
                                            :class="{ 'is-invalid': roleForm.errors.has('checkbox') }">
                                            <label  class="form-check-label">{{permission.name}}</label>
                                            <has-error :form="roleForm" field="checkbox"></has-error>
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
        </div>
        </div>
</template>

<script>


    export default {
        data(){
            return{

                roles:[],
                permissions:[],
                roleForm: new Form({
                    name:'',
                    permissions: [],
                }),
            }
        },
        methods: {
            addRoleModal(){
                this.editMode = false;
                this.roleForm.reset();
                $('#addNew').modal('show');
            },
            
            editModal(role) {
                this.roleForm.reset();
                $('#updateModal').modal('show');
                this.roleForm.fill(role);
            },
            loadPermissions(){
                axios.get('api/permissions')
                .then((response) => this.permissions = response.data.data)
            },
            loadRoles(){
                axios.get('api/roles')
                    .then((response) => this.roles = response.data.data)
            },
            createRole(){
                this.$Progress.start();
                this.roleForm.post('api/roles')
                    .then(() => {
                        Fire.$emit('AfterCreate');
                        $('#addNew').modal('hide');
                        toast.fire({
                            type: 'success',
                            title: 'Category created succesfully'
                        });
                        this.$Progress.finish();
                    })
                    .catch(() => {
                        this.$Progress.fail();
                    })
            },
            updateRole(id) {
                this.$Progress.start();
                this.membersForm.put('api/roles/' + this.roleForm.id)
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
        },
        created() {
            this.loadPermissions();
            this.loadRoles();
             Fire.$on('AfterCreate', () => {
                this.loadPermissions();
                this.loadRoles();
            });
        },
    }

</script>
