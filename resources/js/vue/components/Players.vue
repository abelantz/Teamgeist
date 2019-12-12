<template>
    <div>
        <h1>Players</h1>


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
                                <span class="nav-link ">
                                    <span class="widget-user-desc">{{subcategory.title}}</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.widget-user -->
            </div>
        </div>
        <div class="row text-center ">
            <div class="col-12">
                <div class="card card-success card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Overview players</h3>
                        <div class="card-tools">
                            <button class="btn btn-success bg-success" @click="coachModal"> Add Players</button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Team name</th>
                                    <th>League</th>
                                    <th>Size</th>
                                    <th>Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>183</td>
                                    <td>
                                        <router-link to="/player">John Doe</router-link>
                                    </td>
                                    <td>Fc Barcelona</td>
                                    <td>2nd League</td>
                                    <td>Size</td>
                                    <td>
                                        <button class="btn btn-success bg-success"> View</button>
                                        <button class="btn btn-info bg-info"> Edit</button>
                                        <button class="btn btn-danger bg-danger">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>183</td>
                                    <td>
                                        <router-link to="/player">John Doe</router-link>
                                    </td>
                                    <td>Fc Barcelona</td>
                                    <td>2nd League</td>
                                    <td>Size</td>
                                    <td>
                                        <button class="btn btn-success bg-success"> View</button>
                                        <button class="btn btn-info bg-info"> Edit</button>
                                        <button class="btn btn-danger bg-danger">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>183</td>
                                    <td>
                                        <router-link to="/player">John Doe</router-link>
                                    </td>
                                    <td>Fc Barcelona</td>
                                    <td>2nd League</td>
                                    <td>Size</td>
                                    <td>
                                        <button class="btn btn-success bg-success"> View</button>
                                        <button class="btn btn-info bg-info"> Edit</button>
                                        <button class="btn btn-danger bg-danger">Delete</button>
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
        <div class="modal fade" id="addPlayer" tabindex="-1" role="dialog" aria-labelledby="addPlayer"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addPlayer">Add Player</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Name ...">
                        </div>
                        <div class="form-group">
                        <label>Select Team</label>
                        <select class="form-control">
                          <option>team 1</option>
                          <option>team 2</option>
                          <option>team 3</option>
                          <option>team 4</option>
                          <option>team 5</option>
                        </select>
                      </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
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
                categories: [],
                subcategories: [],
            }
        },
        methods: {
            coachModal(){
                $('#addPlayer').modal('show')
            },
            getSubCategories(categoryId) {
                let subCategories = this.subcategories.filter((subcategory) => {
                    return subcategory.category_id == categoryId
                })
                return subCategories;
            },
            loadCategories() {
                axios.get('api/categories')
                    .then((response) => (this.categories = response.data.data));
            },
            loadSubcategories() {
                axios.get('api/subcategories')
                    .then((response) => (this.subcategories = response.data.data))
            },
        },
        created() {
            this.loadCategories();
            this.loadSubcategories();
        }
    }

</script>
