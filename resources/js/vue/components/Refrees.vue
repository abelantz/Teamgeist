<template>
    <div>
        <h1>Refrees</h1>
        <button class="btn btn-success bg-success " @click="refreeCategoryModal"> Add Referee Category</button>
        <button class="btn btn-success bg-success " @click="refreeModal"> Add Refree</button>
        <div class="row text-center pt-2">
            <div v-for="category in categories" v-bind:key="category.id" class="col-6">
                <div class="card card-success card-outline">
                    <div class="card-header">
                        <h3 class="card-title">{{category.title}}</h3>
                        <div class="card-tools">
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
                                    <th>Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="refree in getRefrees(category.id)" v-bind:key="refree.id"> 
                                    <td>{{refree.id}}</td>
                                    <td>
                                        <router-link :to="'/refree/' + refree.id">{{refree.name}}</router-link>
                                    </td>
                                    <td>{{refree.type_id}}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="#"  class="btn btn-success bg-success"><i class="fas fa-eye"></i></a>
                                            <a href="#"  class="btn btn-info bg-info"><i class="fas fa-edit"></i></a>
                                            <a href="#"  class="btn btn-danger"><i class="fas fa-trash"></i></a>
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


        <!-- Upcommig Matches  -->
        <div class="row text-center">
             <div class="col-12">
                <div class="card card-success card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Refrees upcomming matches</h3>
                        <div class="card-tools">
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Date & Time</th>
                                    <th>Home Team</th>
                                    <th>Home Team Contact</th>
                                    <th>Away Team </th>
                                    <th>Away Team Contact </th>
                                    <th>Refree Name</th>
                                    <th>Status</th>
                                    <th>View Match</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>18-03-2019 & 19:00</td>
                                    <td>FC B</td>
                                    <td>fcb@example.com</td>
                                    <td>FC a </td>
                                    <td>fca@example.com</td>
                                    <td>Colina</td>
                                    <td>Open</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="#"  class="btn btn-success bg-success"><i class="fas fa-eye"></i></a>
                                            
                                        </div>                                    
                                    </td>
                                </tr>
                                <tr>
                                    <td>18-03-2019 & 19:00</td>
                                    <td>FC B</td>
                                    <td>fcb@example.com</td>
                                    <td>FC a </td>
                                    <td>fca@example.com</td>
                                    <td>Colina</td>
                                    <td>Open</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="#"  class="btn btn-success bg-success"><i class="fas fa-eye"></i></a>
                                            
                                        </div>                                    
                                    </td>
                                </tr>
                                <tr>
                                    <td>18-03-2019 & 19:00</td>
                                    <td>FC B</td>
                                    <td>fcb@example.com</td>
                                    <td>FC a </td>
                                    <td>fca@example.com</td>
                                    <td>Colina</td>
                                    <td>Verified</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="#"  class="btn btn-success bg-success"><i class="fas fa-eye"></i></a>
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


        <!--Add Referee Modal -->
        <div class="modal fade" id="addRefree" tabindex="-1" role="dialog" aria-labelledby="addRefree"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addRefree">Add Refree</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="createReferee()">
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="form-group">
                                <input v-model="formReferee.name" type="text" name="name" class="form-control"
                                    placeholder="Name" :class="{ 'is-invalid': formReferee.errors.has('name') }">
                                <has-error :form="formReferee" field="title"></has-error>
                            </div>
                            </div>
                            <div class="form-group">
                                    <select v-model="formReferee.category_id" @change="onChange($event)" type="category"
                                        title="category" id="category" class="form-control"
                                        :class="{ 'is-invalid': formReferee.errors.has('category') }">
                                        <option disabled value="">Select Category</option>
                                        <option v-for="category in categories" v-bind:key="category.id"
                                            v-bind:value="category.id">{{category.title}}</option>
                                    </select>
                                    <has-error :form="formReferee" field=""></has-error>
                             </div>
                             <div class="form-group">
                                    <select v-model="formReferee.type_id" @change="onChange($event)" type="type"
                                        title="type" id="type" class="form-control"
                                        :class="{ 'is-invalid': formReferee.errors.has('type') }">
                                        <option disabled value="">Select Type</option>
                                        <option v-for="type in types" v-bind:key="type.id"
                                            v-bind:value="type.id">{{type.name}}</option>
                                    </select>
                                    <has-error :form="formReferee" field=""></has-error>
                             </div>
                             <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>

        <!-- Ref Category Modal  -->
        <div class="modal fade" id="addRefreeCat" tabindex="-1" role="dialog" aria-labelledby="addRefreeCat"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addRefreeCat">Add Refree Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form @submit.prevent="createRefereeCat()">
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="form-group">
                                <input v-model="formCatRefree.title" type="text" name="title" class="form-control"
                                    placeholder="Title" :class="{ 'is-invalid': formCatRefree.errors.has('title') }">
                                <has-error :form="formCatRefree" field="title"></has-error>
                            </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
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
                matchdays:[],
                types:[],
                categories:[],
                refrees:[],
                formReferee: new Form({
                    name:'',
                    category_id: '',
                    type_id:'',
                }),
                formCatRefree: new Form({
                    title: ''
                }),
            }
        },
        methods: {
             getRefrees(categoryId) {
                let refreesFilter = this.refrees.filter((refree) => {
                    return refree.category_id == categoryId
                })
                return refreesFilter;
            },
            onChange(event){console.log(event.target.value)},
            refreeModal(){
                $('#addRefree').modal('show')
            },
             refreeCategoryModal(){
                $('#addRefreeCat').modal('show')    
            },
            loadRefrees(){
                axios.get('api/referees')
                    .then((response) => this.refrees = response.data.data)
            },
            loadCategories(){
                axios.get('api/refree_categories')
                    .then((response) => this.categories = response.data.data)
            },
            loadTypes(){
                axios.get('api/roles')
                    .then((response) => this.types = response.data.data)
            },
            loadMatchdays(){
                axios.get('api/matchdays')
                    .then((response) => this.matchdays = response.data.data)
            },
            createRefereeCat(){
              this.$Progress.start();
                this.formCatRefree.post('api/refree_categories')
                    .then(() => {
                        Fire.$emit('AfterCreate');
                        $('#addRefreeCat').modal('hide');
                        toast.fire({
                            type: 'success',
                            title: 'Referee Category created succesfully'
                        });
                        this.$Progress.finish();
                    })
                    .catch(() => {
                        this.$Progress.fail();
                    })
            },

            createReferee(){
              this.$Progress.start();
                this.formReferee.post('api/referees')
                    .then(() => {
                        Fire.$emit('AfterCreate');
                        $('#addRefree').modal('hide');
                        toast.fire({
                            type: 'success',
                            title: 'Referee Category created succesfully'
                        });
                        this.$Progress.finish();
                    })
                    .catch(() => {
                        this.$Progress.fail();
                    })
            },
           
        },
        created() {
            this.loadCategories();
            this.loadTypes();
            this.loadRefrees();
            Fire.$on('AfterCreate', () => {
                this.loadCategories();
                this.loadRefrees();
            });
        }
    }

</script>
