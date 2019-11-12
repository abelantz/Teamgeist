<template>
    <div>
        <h1>Teams</h1>
        <div class="row">
            <div class="col-12">
                    <button class="btn btn-outline-success " @click="newModal"> Add Category</button>
                    <button class="btn btn-outline-success " @click="newModal"> Add Team Category </button>
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
                <h5 class="widget-user-desc">Category 1</h5>
              </div>
              <div class="card-footer p-0">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      TeamCategory <span class="float-right  bg-primary"></span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      TeamCategory <span class="float-right  bg-info"></span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      TeamCategoru <span class="float-right  bg-success"></span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      TeamCategory <span class="float-right  bg-danger"></span>
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
                <h5 class="widget-user-desc">Category 1</h5>
              </div>
              <div class="card-footer p-0">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      TeamCategory <span class="float-right  bg-primary"></span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      TeamCategory <span class="float-right  bg-info"></span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      TeamCategoru <span class="float-right  bg-success"></span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      TeamCategory <span class="float-right  bg-danger"></span>
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
                <h5 class="widget-user-desc">Category 1</h5>
              </div>
              <div class="card-footer p-0">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      TeamCategory <span class="float-right  bg-primary"></span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      TeamCategory <span class="float-right  bg-info"></span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      TeamCategoru <span class="float-right  bg-success"></span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      TeamCategory <span class="float-right  bg-danger"></span>
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
                            <button class="btn btn-success bg-gradient-success" @click="newModal"> Add New <i
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
                        <h5 v-show="editMode" class="modal-title" id="addNew">Update User</h5>
                        <h5 v-show="!editMode" class="modal-title" id="addNew">Create User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- <form @submit.prevent="editMode ? updateUser() : createUser ()">
                        <div class="modal-body">
                            <div class="form-group">
                                <input v-model="form.name" type="text" name="name" class="form-control"
                                    placeholder="Name" :class="{ 'is-invalid': form.errors.has('name') }">
                                <has-error :form="form" field="name"></has-error>
                            </div>
                            <div class="form-group">
                                <input v-model="form.email" type="email" name="email" class="form-control"
                                    placeholder="Email" :class="{ 'is-invalid': form.errors.has('email') }">
                                <has-error :form="form" field="name"></has-error>
                            </div>
                            <div class="form-group">
                                <input v-model="form.password" type="password" name="password" id="password"
                                    class="form-control" placeholder="Password"
                                    :class="{ 'is-invalid': form.errors.has('password') }">
                                <has-error :form="form" field="name"></has-error>
                            </div>
                            <div class="form-group">
                                <select type="type" name="type" id="type" class="form-control" placeholder="Password"
                                    :class="{ 'is-invalid': form.errors.has('type') }">
                                    <option value="">Select User Role</option>
                                    <option value="">Club</option>
                                    <option value="">Team</option>
                                    <option value="">Coach</option>
                                    <option value="">Player</option>
                                    <option value="">Facility</option>
                                </select>
                                <has-error :form="form" field="name"></has-error>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button v-show="editMode" type="submit" class="btn btn-success">Update</button>
                            <button v-show="!editMode" type="submit" class="btn btn-primary">Create</button>

                        </div>
                    </form> -->
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
                teams: [
                    {id:1,name:'Barcelona'}
                ],

            }
        },
        mounted() {
            console.log('Mounted');
        },
        methods: {
            editModal(user) {
                this.editMode = true;
                this.form.reset();
                $('#addNew').modal('show');
                // this.form.fill(user);
            },
            newModal() {
                this.editMode = false;
                this.form.reset();
                $('#addNew').modal('show');
            },

        }
   }

</script>
