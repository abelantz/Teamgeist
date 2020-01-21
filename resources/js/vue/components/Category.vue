<template>
    <div>
        <h1>Categories</h1>
        <div class="row">
            <div class="col-12">
                <button class="btn btn-outline-success " @click="showCreateCategoryModal"> Add Category</button>
                <button class="btn btn-outline-success " @click="showCreateSubCategoryModal"> Add Sub Category </button>
            </div>
        </div>
        <div class="row mt-3">
            <div v-for="category in categories" v-bind:key="category.id" class="col-md-3">
                <div class="card bg-primary">
                    <div class="card-header">
                        <h3 class="card-title">{{ category.title }}</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i>
                            </button>
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div v-for="subcategory in category.subcategories" v-bind:key="subcategory.id" @click="filterTeams(subcategory.id)" class="card-body" style="display: block;">
                        {{ subcategory.title }}
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="card card-warning card-outline">
                    <div class="card-header ">
                        <h3 class="card-title">Teams</h3>
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
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="team in filteredTeams" v-bind:key="team.id">
                                    <td>{{team.id}}</td>
                                    <td>
                                        <router-link :to="'/team/' + team.id ">{{team.name}}</router-link>
                                    </td>

                                    <td>
                                        <span class="tag tag-success">
                                         {{ team.category.title }}
                                         </span>
                                    </td>
                                    <td>
                                        {{ team.subcategory.title }}
                                    </td>
                                    <td>{{team.created_at | regDate}}</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>

        <!-- Modal  -->
        <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNew" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 v-show="categoryMode" class="modal-title" id="addNew">Create Subcategory</h5>
                        <h5 v-show="!categoryMode" class="modal-title" id="addNew">Create Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- Create Category -->
                    <form @submit.prevent="createCategory" v-if="categoryMode">
                        <div class="modal-body">
                            <div class="form-group">
                                <input v-model="category.title" type="text" title="title" class="form-control"
                                    placeholder="Title">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <!-- <button v-show="editMode" type="submit" class="btn btn-success">Update</button> -->
                            <button type="submit" class="btn btn-primary">Create</button>

                        </div>
                    </form>

                    <!-- Create Subcategory -->
                    <form @submit.prevent="createSubCategory" v-if="!categoryMode">
                        <div class="modal-body">
                            <div class="form-group">
                                <input v-model="subcategory.title" type="text" title="title" class="form-control"
                                    placeholder="Title">
                            </div>
                            <div class="form-group">
                                <select v-model="subcategory.category_id" type="type" title="type" id="type"
                                    class="form-control">
                                    <option disabled value="">Select Category</option>
                                    <option v-for="category in categories" v-bind:key="category.id"
                                        v-bind:value="category.id">{{category.title}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Create</button>
                            <!-- <button v-show="!editMode" type="submit" class="btn btn-primary">Create</button> -->
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
                category: {
                    title: ''
                },
                subcategory: {
                    title: '',
                    category_id: ''
                },
                filteredTeams: [],
                categoryMode: true
            }
        },

        computed: {
            categories() {
                return this.$store.state.categories
            },
            teams() {
                return this.$store.state.teams;
            }
        },

        watch: {
            teams(value) {
                this.filteredTeams = value;
            }
        },

        methods: {
            showCreateCategoryModal() {
                this.categoryMode = true
                $('#addNew').modal('show');
            },
            showCreateSubCategoryModal() {
                this.categoryMode = false
                $('#addNew').modal('show');
            },
            hideModal() {
                $('#addNew').modal('hide');
                this.category = {};
                this.subcategory = {};
            },
            filterTeams(subcategoryId) {
                this.filteredTeams = this.teams.filter(team => {
                    return team.subcategory_id == subcategoryId;
                });
            },
            createCategory() {
                this.$store.dispatch('createCategory', this.category)
                    .then(res => this.hideModal());
            },
            deleteCategory(categoryId) {
                this.$store.dispatch('deleteCategory', categoryId)
                    .then(res => console.log(res));
            },
            createSubCategory() {
                this.$store.dispatch('createSubCategory', this.subcategory)
                    .then(res => this.hideModal());
            },
            deleteSubCategory(subCategoryId) {
                this.$store.dispatch('deleteSubCategory', subCategoryId)
                    .then(res => console.log(res));
            },
        },
    }

</script>
