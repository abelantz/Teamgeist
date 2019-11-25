<template>
    <div>
        
        <div class="row mt-2">
            <div class="col-12">
                <div class="card">
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
                                    <th>Size</th>
                                    <th>Category</th>
                                    <th>Registered At</th>
                                    <th>Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr >
                                    <td>1</td>
                                    <td>Ablenat</td>
                                    <td>21</td>
                                    <td><span class="tag tag-success">Active</span></td>
                                    <td>9 September 2011</td>
                                    <td>
                                        <a href="#" > <i class="fas fa-edit"></i></a>
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
                    <form @submit.prevent="">
                        <div class="modal-body">
                            <div class="form-group">
                                <input v-model="roleForm.title" type="text" name="title" class="form-control"
                                    placeholder="Title" :class="{ 'is-invalid': roleForm.errors.has('title') }">
                                <has-error :form="roleForm" field="title"></has-error>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <ul>
                                        <li v-for="permission in permissions" v-bind:key="permission.id">
                                            <input  class="form-check-input" type="checkbox" :value="permission.id" v-model="roleForm.permissions">
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
        </div>
    </div>
</template>

<script>


    export default {
        data(){
            return{
                permissions:[],
                roleForm: new Form({
                    id:'',
                    title:'',
                    permissions:[],
                }),
                roles:[{
                    id:'1',
                    title:'Role1',
                    permissions:'this this'
                }]
            }
        },
        methods: {
            addRoleModal(){
                $('#addNew').modal('show');
            },
            loadPermissions(){
                axios.get('api/permissions')
                .then((response) => this.permissions = response.data.data)
            }
        },
        created() {
            this.loadPermissions();
            console.log('Created');
        },
    }

</script>
