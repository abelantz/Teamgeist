<template>
    <div>
        
        <h1>Teams</h1>
        <!-- Team List -->
        <div class="row mt-2">
            <div class="col-12">
                <div class="card card-warning card-outline">
                    <div class="card-header ">
                        <h3 class="card-title">Teams</h3>

                        <div class="card-tools">
                            <button class="btn btn-warning bg-warning" @click="addTeamModal"> Add New <i
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
                                    <th>Category</th>
                                    <th>SubCategory</th>
                                    <th>Registered At</th>
                                    <th>Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="team in teams" v-bind:key="team.id">
                                    <td>{{team.id}}</td>
                                    <td>
                                      <router-link :to="'/team/' + team.id ">{{team.name}}</router-link>
                                    </td>
                                   
                                    <td><span class="tag tag-success">Active</span></td>
                                    <td>First </td>
                                    <td>{{team.created_at | regDate}}</td>
                                    <td>
                                        <a href="#" > <i class="fas fa-edit"></i></a>
                                        /
                                        <a href="#" @click="deleteTeam(team.id)" > <i class="fas fa-trash red"></i></a>
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
                    <!-- Create team -->
                    <form  @submit.prevent="createTeam()">
                        <div class="modal-body">
                            <div class="form-group">
                                <input v-model="formTeam.name" type="text" name="name" class="form-control"
                                    placeholder="Name" :class="{ 'is-invalid': formTeam.errors.has('name') }">
                                <has-error :form="formTeam" field="name"></has-error>
                            </div>
                            <div class="form-group">
                                <select @change="onChange($event)" type="type" name="type" id="type" class="form-control">
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
            getSubCategories(categoryId) {
              let subCategories = this.subcategories.filter((subcategory) => {
                return subcategory.category_id == categoryId
              })
              return subCategories;
            },
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
        deleteTeam(id) {
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
                        this.formTeam.delete('api/teams/' + id)
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
          loadTeams(){
            axios.get('api/teams')
              .then((response) => this.teams = response.data.data)
          }
        },
        
        created() {
            this.loadCategories();
            this.loadSubcategories();
            this.loadTeams();
            Fire.$on('AfterCreate', () => {
                this.loadCategories();
                this.loadSubcategories();
                this.loadTeams();
            });
        },
   }

</script>
