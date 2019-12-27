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
                                    <select v-model="subcategory.category_id" type="type"
                                        title="type" id="type" class="form-control">
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
                categoryMode: true
            }
        },

        computed: {
            categories() {
                return this.$store.state.categories
            },
            subcategories() {
                return this.$store.state.subcategories
            },
            
            
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
            createCategory() {
                this.$store.dispatch('createCategory', this.category)
                            .then(res => $('#addNew').modal('hide'));
            },
            deleteCategory(categoryId) {
                this.$store.dispatch('deleteCategory', categoryId)
                                            .then(res => console.log(res));
            },
            createSubCategory() {
                this.$store.dispatch('createSubCategory', this.subcategory)
                            .then(res => $('#addNew').modal('hide'));
            },
            deleteSubCategory(subCategoryId) {
                this.$store.dispatch('deleteSubCategory', subCategoryId)
                                            .then(res => console.log(res));
            },
            getSubCategories(categoryId) {
                let subCategories = this.subcategories.filter((subcategory) => {
                    return subcategory.category_id == categoryId
                })
                return subCategories;
            },
            
        },
    }

</script>
