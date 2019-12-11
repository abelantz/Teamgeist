<template>
    <div>
        <h1>Coaches</h1>

        <div class="row">
            <div class="col-12">
                <button class="btn btn-success bg-success"> Add Coach</button>

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
        <div class="row text-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Responsive Hover Table</h3>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right"
                                    placeholder="Search">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
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
                                    <td>John Doe</td>
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
                                    <td>John Doe</td>
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
                                    <td>John Doe</td>
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
