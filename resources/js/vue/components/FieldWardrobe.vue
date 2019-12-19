<template>
    <div>
        <h1>Field & Wardrobe</h1>
        <div class="row">
            <div class="col-6">
                <div class="card card-success card-outline">
                    <div class="card-header ">
                        <h3 class="card-title">Fields</h3>
                        <div class="card-tools">
                            <button class="btn btn-success bg-success" @click="addFieldModal"> Add New <i
                                    class="fas fa-user-plus "></i></button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="field in fields" v-bind:key="field.id">
                                    <td>{{field.id}}</td>
                                    <td>{{field.title}}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="#" class="btn btn-info bg-info"><i class="fas fa-edit"></i></a>
                                            <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
             <div class="col-6">
                <div class="card card-success card-outline">
                    <div class="card-header ">
                        <h3 class="card-title">Wardrobe</h3>
                        <div class="card-tools">
                            <button class="btn btn-success bg-success" @click="addWardrobeModal"> Add New <i
                                    class="fas fa-user-plus "></i></button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="wardrobe in wardrobes" v-bind:key="wardrobe.id">
                                    <td>{{ wardrobe.id }}</td>
                                    <td>{{ wardrobe.title }}</td>
                                    <td>
                                       <div class="btn-group btn-group-sm">
                                            <a href="#" class="btn btn-info bg-info"><i class="fas fa-edit"></i></a>
                                            <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
        <!-- Field Modal  -->
        <div class="modal fade" id="addField" tabindex="-1" role="dialog" aria-labelledby="addField"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addField">Add Field</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="createField()">
                        <div class="modal-body">
                            <div class="form-group">
                                 <input v-model="fieldForm.title" type="text" name="title" class="form-control"
                                    placeholder="Title" :class="{ 'is-invalid': fieldForm.errors.has('title') }">
                                <has-error :form="fieldForm" field="title"></has-error>
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
        <!-- Wardrobe Modal  -->
        <div class="modal fade" id="addWardrobe" tabindex="-1" role="dialog" aria-labelledby="addWardrobe"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addWardrobe">Add Wardrobe</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="createWardrobe()">
                        <div class="modal-body">
                            <div class="form-group">
                                <input v-model="wardrobeForm.title" type="text" name="title" class="form-control"
                                    placeholder="Title" :class="{ 'is-invalid': wardrobeForm.errors.has('title') }">
                                <has-error :form="wardrobeForm" field="title"></has-error>
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

</template>

<script>
    export default {
        data() {
            return {
                fields:[],
                wardrobes:[],
                fieldForm: new Form({
                    id:'',
                    title:''
                }),
                wardrobeForm: new Form({
                    id:'',
                    title:''
                }),
            }
        },
        methods: {
            addFieldModal() {
                this.fieldForm.reset();
                $('#addField').modal('show');
            },
            addWardrobeModal() {
                this.wardrobeForm.reset();
                $('#addWardrobe').modal('show');
            },
            loadFields(){
                axios.get('api/fields')
                    .then((response) =>  this.fields = response.data.data)
            },
            loadWardrobes(){
                axios.get('api/wardrobes')
                    .then((response) =>  this.wardrobes = response.data.data)
            },
            createField() {
                this.$Progress.start();
                this.fieldForm.post('api/fields')
                    .then(() => {
                        Fire.$emit('AfterCreate');
                        $('#addField').modal('hide');
                        toast.fire({
                            type: 'success',
                            title: 'Field created succesfully'
                        });
                        this.$Progress.finish();
                    })
                    .catch(() => {
                        this.$Progress.fail();
                    })
            },
            createWardrobe(){
                this.$Progress.start();
                this.wardrobeForm.post('api/wardrobes')
                    .then(() => {
                        Fire.$emit('AfterCreate');
                        $('#addWardrobe').modal('hide');
                        toast.fire({
                            type: 'success',
                            title: 'Wardrobe created succesfully'
                        });
                        this.$Progress.finish();
                    })
                    .catch(() => {
                        this.$Progress.fail();
                    })
            },
        },
        created() {
            this.loadFields();
            this.loadWardrobes();
             Fire.$on('AfterCreate', () => {
                this.loadFields();
                this.loadWardrobes();
            });
        }
    }

</script>

<style>

</style>
