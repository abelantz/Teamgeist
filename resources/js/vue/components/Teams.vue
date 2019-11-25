<template>
    <div>
        <h1>Teams</h1>
        <div class="row">
            <div class="col-12">
                    <button class="btn btn-outline-success " @click="newModal"> Add Category</button>
                    <button class="btn btn-outline-success " @click="subModal"> Add Team Category </button>
            </div>
        </div>
        <div class="row mt-3">
          <div class="col-md-4">
            <!-- Widget: user widget style 2 -->
            <div class="card card-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-success">

                <!-- /.widget-user-image -->
                <!-- <h3 class="widget-user-username">Nadia Carmichael</h3> -->
                <h5 class="widget-user-desc">{{categories[0].title}}</h5>
              </div>
              <div class="card-footer p-0">
                <ul class="nav flex-column">
                  <li v-for="subcategory in subcategories" v-bind:key="subcategory.id" class="nav-item">
                    <a href="#" class="nav-link">
                      {{subcategory.title}} <span class="float-right  bg-info"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <!-- /.col -->
          <div class="col-md-4">
            <!-- Widget: user widget style 2 -->
            <div class="card card-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-success">

                <!-- /.widget-user-image -->
                <!-- <h3 class="widget-user-username">Nadia Carmichael</h3> -->
                <h5 class="widget-user-desc">{{categories[1].title}}</h5>
              </div>
              <div class="card-footer p-0">
                <ul v-bind:value="{category_id:1}" class="nav flex-column">
                  
                  <li v-for="subcategory in subcategories" v-bind:key="subcategory.id" class="nav-item">
                    <a href="#" class="nav-link">
                      {{subcategory.title}} <span class="float-right  bg-info"></span>
                    </a>
                  </li>
                  
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <!-- /.col -->
          <div class="col-md-4">
            <!-- Widget: user widget style 2 -->
            <div class="card card-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-success">

                <!-- /.widget-user-image -->
                <!-- <h3 class="widget-user-username">Nadia Carmichael</h3> -->
                <h5 class="widget-user-desc">{{categories[2].title}}</h5>
              </div>
              <div class="card-footer p-0">
                <ul class="nav flex-column">
                  <li v-for="subcategory in subcategories" v-bind:key="subcategory.id" class="nav-item">
                    <a href="#" class="nav-link">
                      {{subcategory.title}} <span class="float-right  bg-info"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <!-- /.col -->
        </div>

        <!-- Team List -->
        <div class="row mt-2">
            <div class="col-12">
                <div class="card">
                    <div class="card-header ">
                        <h3 class="card-title">Teams</h3>

                        <div class="card-tools">
                            <button class="btn btn-success bg-gradient-success" @click="addTeamModal"> Add New <i
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
                                <tr v-for="team in teams" v-bind:key="team.id">
                                    <td>{{team.id}}</td>
                                    <td>{{team.name}}</td>
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
                        <h5 v-show="editMode" class="modal-title" id="addNew">Create Subcategory</h5>
                        <h5 v-show="!editMode" class="modal-title" id="addNew">Create Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- Create Category -->
                    <form v-if="!editMode" @submit.prevent="createCategory()">
                        <div class="modal-body">
                            <div class="form-group">
                                <input v-model="formCategory.title" type="text" name="title" class="form-control"
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
                    <form  v-if="editMode" @submit.prevent="createSubcategory()">
                        <div class="modal-body">
                            <div class="form-group">
                                <input v-model="formSub.title" type="text" name="title" class="form-control"
                                    placeholder="Title" :class="{ 'is-invalid': formSub.errors.has('title') }">
                                <has-error :form="formSub" field="title"></has-error>
                            </div>
                            <div class="form-group">
                                <select  v-model="formSub.category_id" @change="onChange($event)" type="type" name="type" id="type" class="form-control"
                                    :class="{ 'is-invalid': formSub.errors.has('type') }">
                                    <option disabled value="">Select Category</option>
                                    <option  v-for="category in categories" v-bind:key="category.id"  v-bind:value="category.id">{{category.title}}</option>
                                </select>
                                <has-error :form="formSub" field="title"></has-error>
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

            <!-- Team Modal -->

            <div class="modal fade" id="teamModal" tabindex="-1" role="dialog" aria-labelledby="addNew" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                      
                        <h5  class="modal-title" id="teamModal">Create Team</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- Create Subcategory -->
                    <form  @submit.prevent="createTeam()">
                        <div class="modal-body">
                            <div class="form-group">
                                <input v-model="formTeam.name" type="text" name="name" class="form-control"
                                    placeholder="Name" :class="{ 'is-invalid': formTeam.errors.has('name') }">
                                <has-error :form="formTeam" field="name"></has-error>
                            </div>
                            <div class="form-group">
                                <select  @change="onChange($event)" type="type" name="type" id="type" class="form-control">
                                    <option disabled selected value="">Select Category</option>
                                    <option  v-for="category in categories" v-bind:key="category.id" v-bind:value="category.id">{{category.title}}</option>
                                </select>
                               
                            </div>
                            <div class="form-group">
                                <select v-model="formTeam.subcategory_id" @change="onChangeTeam($event)" type="type" name="type" id="type" class="form-control"
                                    :class="{ 'is-invalid': formTeam.errors.has('type') }">
                                    <option disabled selected value="">Select Subcategory</option>
                                    <option v-for="subcategory in subFilter" v-bind:key="subcategory.id" v-bind:value="subcategory.id">{{subcategory.title}}</option>
                                </select>
                                <has-error :form="formTeam" field="title"></has-error>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Create</button>
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
                categories:[],
                subcategories:[],
                subFilter:[],
                formCategory: new Form({
                  id: '',
                  title:'',
                }),
                formSub: new Form({
                  id: '',
                  title:'',
                  category_id: '',
                }),
                formTeam: new Form({
                  id:'',
                  name:'',
                  subcategory_id:'',

                }),
                teams: [],

            }
        },
       
        methods: {
            addTeamModal(){
              this.teamMode = true;
            
              this.formTeam.reset();
              $('#teamModal').modal('show');
            },
            subModal() {
                this.editMode = true;
                this.formSub.reset();
                $('#addNew').modal('show');
                
            },
            newModal() {
                this.editMode = false;
                this.formCategory.reset();
                $('#addNew').modal('show');
            },
            loadCategories() {
                axios.get('api/categories')
                     .then((response) => (this.categories = response.data.data));
            },
            loadSubcategories(){
              axios.get('api/subcategories')
                   .then((response) => (this.subcategories = response.data.data ))
            },
            createSubcategory(id){
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
            createCategory(){
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
          onChangeTeam(event){
            console.log(event.target.value);
          },
          createTeam(){
            this.$Progress.start();
                this.formTeam.post('api/teams')
                    .then(() => {
                        Fire.$emit('AfterCreate');
                        $('#teamModal').modal('hide');
                        toast.fire({
                            type: 'success',
                            title: 'Team created succesfully'
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
            this.loadSubcategories();
            Fire.$on('AfterCreate', () => {
                this.loadCategories();
                this.loadSubcategories();
            });
        },
   }

</script>
