<template>
    <div>
        <h1>Refrees</h1>
        <button class="btn btn-success bg-success " @click="refreeCategoryModal"> Add Referee Category</button>
        <button class="btn btn-success bg-success " @click="refreeModal"> Add Refree</button>
        <div class="row text-center pt-2">
            <div class="col-12">
                <div class="card card-success card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Referees</h3>
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
                                <tr v-for="referee in referees" v-bind:key="referee.id"> 
                                    <td>{{ referee.id }}</td>
                                    <td>{{ referee.name }}</td>
                                    <td>{{ getRefereeCategory(referee.referees_category_id).title }}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="#" @click="editReferee(referee.id)"  class="btn btn-info bg-info"><i class="fas fa-edit"></i></a>
                                            <a href="#" @click="deleteReferee(referee.id)"  class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
                    <form @submit.prevent="createReferee">
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="form-group">
                                <input v-model="referee.name" type="text" name="name" class="form-control"
                                    placeholder="Name">
                            </div>
                            </div>
                            <div class="form-group">
                                    <select v-model="referee.referees_category_id" type="category"
                                        title="category" id="category" class="form-control">
                                        <option disabled value="">Select Category</option>
                                        <option v-for="category in refereeCategories" v-bind:key="category.id"
                                            v-bind:value="category.id">{{category.title}}</option>
                                    </select>
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

        <!--Add Referee Modal -->
        <div class="modal fade" id="editRefereeModal" tabindex="-1" role="dialog" aria-labelledby="addRefree"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Refree</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="updateReferee">
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="form-group">
                                <input v-model="referee.name" type="text" name="name" class="form-control"
                                    placeholder="Name">
                            </div>
                            </div>
                            <div class="form-group">
                                    <select v-model="referee.referees_category_id" type="category"
                                        title="category" id="category" class="form-control">
                                        <option disabled value="">Select Category</option>
                                        <option v-for="category in refereeCategories" v-bind:key="category.id"
                                            v-bind:value="category.id">{{category.title}}</option>
                                    </select>
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

                    <form @submit.prevent="createRefereeCategory">
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="form-group">
                                <input v-model="refereeCategory.title" type="text" name="title" class="form-control"
                                    placeholder="Title">
                            </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
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
                referee: {
                    name:'',
                    referees_category_id: '',
                },
                refereeCategory: {
                    title: ''
                },
            }
        },

        computed: {
            referees() {
                return this.$store.state.referees;
            },
            refereeCategories() {
                return this.$store.state.referee_categories;
            },
        },
 
        methods: {
            getRefereeCategory(categoryId) {
                return this.refereeCategories.find(category => {
                    return category.id == categoryId;
                }) || ''
            },
            editReferee(refereeId) {
                $('#editRefereeModal').modal('show')
                var referee = this.referees.find(referee => {
                    return referee.id == refereeId
                });
                this.referee = { ...referee };
            },
            refreeModal() {
                $('#addRefree').modal('show')
            },
             refreeCategoryModal() {
                $('#addRefreeCat').modal('show')    
            },
            hideModal() {
                $('#editRefereeModal').modal('hide')
                $('#addRefree').modal('hide')
                $('#addRefreeCat').modal('hide')    
                this.referee = {};
                this.refereeCategory = {};
            },
            createRefereeCategory() {
              this.$store.dispatch('createRefereeCategory', this.refereeCategory)
                            .then(res => this.hideModal())
            },
            createReferee() {
              this.$store.dispatch('createReferee', this.referee)
                            .then(res => this.hideModal()) 
            },
            updateReferee() {
              this.$store.dispatch('updateReferee', this.referee)
                            .then(res => this.hideModal()) 
            },
            deleteReferee(refereeId) {
              this.$store.dispatch('deleteReferee', refereeId)
                            .then(res => this.hideModal()) 
            },
        },
    }

</script>
