<template>
    <div>
        <h1>Categories</h1>
        <div class="row">
            <div class="col-12">
                <button class="btn btn-outline-success " @click="newModal"> Add Category</button>
                <button class="btn btn-outline-success " @click="subModal"> Add Sub Category </button>
            </div>
        </div>
        <div class="row mt-3">
            <div v-for="category in categories" v-bind:key="category.id" class="col-md-3">
                <!-- Widget: user widget style 2 -->
                <div class="card card-widget widget-user-2">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-success">

                        <!-- /.widget-user-image -->
                        <!-- <h3 class="widget-user-usertitle">Nadia Carmichael</h3> -->
                        <h5 class="widget-user-desc">{{category.title}}</h5>
                    </div>
                    <div class="card-footer p-0">
                        <ul class="nav flex-column">
                            <li v-for="subcategory in getSubCategories(category.id)" v-bind:key="subcategory.id"
                                class="nav-item">
                                <span class="nav-link center">
                                    <span class="widget-user-desc">{{subcategory.title}}</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.widget-user -->
            </div>


        </div>

        <!-- Category List -->
        <div class="row mt-2">
            <div class="col-12">
                <div class="card card-success card-outline">
                    <div class="card-header ">
                        <h3 class="card-title">Categories</h3>

                        <div class="card-tools">

                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Registered At</th>
                                    <th>Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="category in categories" v-bind:key="category.id">
                                    <td>{{category.id}}</td>
                                    <td>{{category.title}}</td>

                                    <td><span class="tag tag-success">{{category.created_at | regDate}}</span></td>

                                    <td>
                                        <a href="#" > <i class="fas fa-edit"></i></a>
                                        /
                                        <a href="#" @click="deleteCategory(category.id)"> <i
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


            <!-- Modal  -->
            <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNew" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 v-show="editMode" class="modal-title" id="addNew">Create Subcategory</h5>
                            <h5 v-show="!editMode" class="modal-title" id="addNew">Create Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!-- Create Category -->
                        <form v-if="!mode" @submit.prevent=" createCategory()">
                            <div class="modal-body">
                                <div class="form-group">
                                    <input v-model="formCategory.title" type="text" title="title" class="form-control"
                                        placeholder="Title" :class="{ 'is-invalid': formCategory.errors.has('title') }">
                                    <has-error :form="formCategory" field="title"></has-error>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <!-- <button v-show="editMode" type="submit" class="btn btn-success">Update</button> -->
                                <button v-show="!editMode" type="submit" class="btn btn-primary">Create</button>

                            </div>
                        </form>

                        <!-- Create Subcategory -->
                        <form v-if="mode" @submit.prevent="createSubcategory()">
                            <div class="modal-body">
                                <div class="form-group">
                                    <input v-model="formSub.title" type="text" title="title" class="form-control"
                                        placeholder="Title" :class="{ 'is-invalid': formSub.errors.has('title') }">
                                    <has-error :form="formSub" field="title"></has-error>
                                </div>
                                <div class="form-group">
                                    <select v-model="formSub.category_id" @change="onChange($event)" type="type"
                                        title="type" id="type" class="form-control"
                                        :class="{ 'is-invalid': formSub.errors.has('type') }">
                                        <option disabled value="">Select Category</option>
                                        <option v-for="category in categories" v-bind:key="category.id"
                                            v-bind:value="category.id">{{category.title}}</option>
                                    </select>
                                    <has-error :form="formSub" field=""></has-error>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button v-show="editMode" type="submit" class="btn btn-success">Create</button>
                                <button v-show="!editMode" type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- SubCategory List -->

        <div class="row mt-2">
            <div class="col-12">
                <div class="card card-success card-outline">
                    <div class="card-header ">
                        <h3 class="card-title">SubCategories</h3>
                        <div class="card-tools">
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Registered At</th>
                                    <th>Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="subcategory in subcategories" v-bind:key="subcategory.id">
                                    <td>{{subcategory.id}}</td>
                                    <td>{{subcategory.title}}</td>

                                    <td><span class="tag tag-success">{{subcategory.creted_at | regDate}}</span></td>

                                    <td>
                                        <a href="#"> <i class="fas fa-edit"></i></a>
                                        /
                                        <a href="#"> <i class="fas fa-trash red"></i></a>
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
                            <h5 v-show="editMode" class="modal-title" id="addNew">Create Subcategory</h5>
                            <h5 v-show="!editMode" class="modal-title" id="addNew">Create Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!-- Create Category -->
                        <form v-if="!editMode" @submit.prevent="editMode ? updateCategory() : createCategory()">
                            <div class="modal-body">
                                <div class="form-group">
                                    <input v-model="formCategory.title" type="text" title="title" class="form-control"
                                        placeholder="Title" :class="{ 'is-invalid': formCategory.errors.has('title') }">
                                    <has-error :form="formCategory" field="title"></has-error>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <!-- <button v-show="editMode" type="submit" class="btn btn-success">Update</button> -->
                                <button v-show="!editMode" type="submit" class="btn btn-primary">Create</button>

                            </div>
                        </form>

                        <!-- Create Subcategory -->
                        <form v-if="editMode" @submit.prevent="createSubcategory()">
                            <div class="modal-body">
                                <div class="form-group">
                                    <input v-model="formSub.title" type="text" title="title" class="form-control"
                                        placeholder="Title" :class="{ 'is-invalid': formSub.errors.has('title') }">
                                    <has-error :form="formSub" field="title"></has-error>
                                </div>
                                <div class="form-group">
                                    <select v-model="formSub.category_id" @change="onChange($event)" type="type"
                                        title="type" id="type" class="form-control"
                                        :class="{ 'is-invalid': formSub.errors.has('type') }">
                                        <option disabled value="">Select Category</option>
                                        <option v-for="category in categories" v-bind:key="category.id"
                                            v-bind:value="category.id">{{category.title}}</option>
                                    </select>
                                    <has-error :form="formSub" field=""></has-error>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button v-show="editMode" type="submit" class="btn btn-success">Create</button>
                                <!-- <button v-show="!editMode" type="submit" class="btn btn-primary">Create</button> -->
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
                editMode: false,
                mode:false,
                categories: [],
                subcategories: [],
                subFilter: [],
                formCategory: new Form({
                    id: '',
                    title: '',
                }),
                formSub: new Form({
                    id: '',
                    title: '',
                    category_id: '',
                }),
                formTeam: new Form({
                    id: '',
                    title: '',
                    subcategory_id: '',

                }),
                teams: [],

            }
        },

        methods: {
            getSubCategories(categoryId) {
                let subCategories = this.subcategories.filter((subcategory) => {
                    return subcategory.category_id == categoryId
                })
                return subCategories;
            },

            subModal() {
                this.mode = true;
                this.formSub.reset();
                $('#addNew').modal('show');
            },
            newModal() {
                this.mode = false;
                this.editMode = false;
                this.formCategory.reset();
                $('#addNew').modal('show');
            },
            updateModal() {
                
                this.formCategory.reset();
                $('#addNew').modal('show');
                this.formCategory.fill(category);
            },
            loadCategories() {
                axios.get('api/categories')
                    .then((response) => (this.categories = response.data.data));
            },
            loadSubcategories() {
                axios.get('api/subcategories')
                    .then((response) => (this.subcategories = response.data.data))
            },
            createSubcategory(id) {
                this.$Progress.start();
                this.formSub.post('api/subcategories')
                    .then(() => {
                        Fire.$emit('AfterCreate');
                        $('#addNew').modal('hide');
                        toast.fire({
                            type: 'success',
                            title: 'Subcategory created succesfully'
                        });
                        this.$Progress.finish();
                    })
                    .catch(() => {
                        this.$Progress.fail();
                    })
            },
            updateCategory(id) {
                this.$Progress.start();
                this.formCategory.put('api/categories/' + this.formCategory.id)
                    .then(() => {
                        swal.fire(
                            'Updated!',
                            'Your information has been updated.',
                            'success'
                        )
                        Fire.$emit('AfterCreate');
                        $('#editMode').modal('hide');
                        this.$Progress.finish();
                    })
                    .catch(() => {
                        this.$Progress.fail();
                    })
            },
            deleteCategory(id) {
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
                        this.formCategory.delete('api/categories/' + id)
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
            createCategory() {
                this.$Progress.start();
                this.formCategory.post('api/categories')
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
            onChange(event) {
                this.subFilter = this.subcategories.filter((subcategory) => {
                    return subcategory.category_id == event.target.value;
                });
                console.log(this.subFilter);
            },
            onChangeTeam(event) {
                console.log(event.target.value);
            },

        },

        created() {
            this.loadCategories();
            this.loadSubcategories();
            Fire.$on('AfterCreate', () => {
                this.loadCategories();
                this.loadSubcategories();
            });
        },
    }

</script>
