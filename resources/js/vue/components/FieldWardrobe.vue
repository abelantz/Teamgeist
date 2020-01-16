<template>
    <div>
        <h1>Field & Wardrobe</h1>
        <div class="row">
            <div class="col-6">
                <div class="card card-success card-outline">
                    <div class="card-header ">
                        <h3 class="card-title">Fields</h3>
                        <div class="card-tools">
                            <button class="btn btn-success bg-success" @click="showFieldCreateModal"> Add New <i
                                    class="fas fa-user-plus "></i></button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="field in fields" v-bind:key="field.id">
                                    <td>{{field.id}}</td>
                                    <td>{{field.title}}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn btn-info bg-info" @click="editField(field.id)"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-danger" @click="deleteField(field.id)"><i class="fas fa-trash"></i></button>
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
             <div class="col-6">
                <div class="card card-success card-outline">
                    <div class="card-header ">
                        <h3 class="card-title">Wardrobe</h3>
                        <div class="card-tools">
                            <button class="btn btn-success bg-success" @click="showWardobeCreateModal"> Add New <i
                                    class="fas fa-user-plus "></i></button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="wardrobe in wardrobes" v-bind:key="wardrobe.id">
                                    <td>{{ wardrobe.id }}</td>
                                    <td>{{ wardrobe.title }}</td>
                                    <td>
                                       <div class="btn-group btn-group-sm">
                                            <button class="btn btn-info bg-info" @click="editWardrobe(wardrobe.id)"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-danger" @click="deleteWardrobe(wardrobe.id)"><i class="fas fa-trash"></i></button>
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
        <!-- Field Modal  -->
        <div class="modal fade" id="addField" tabindex="-1" role="dialog" aria-labelledby="addField"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addField">Add Field</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="createField()">
                        <div class="modal-body">
                            <div class="form-group">
                                 <input v-model="field.title" type="text" name="title" class="form-control"
                                    placeholder="Title">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                   
                </div>
            </div>
        </div>

        <!-- Edit Field Modal -->

        <div class="modal fade" id="editFieldModal" tabindex="-1" role="dialog" aria-labelledby="editFieldModal"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editFieldModal">Edit Field</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="updateField">
                        <div class="modal-body">
                            <div class="form-group">
                                 <input v-model="field.title" type="text" name="title" class="form-control"
                                    placeholder="Title">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                   
                </div>
            </div>
        </div>

        <!-- Wardrobe Modal  -->
        <div class="modal fade" id="addWardrobe" tabindex="-1" role="dialog" aria-labelledby="addWardrobe"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addWardrobe">Add Wardrobe</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="createWardrobe()">
                        <div class="modal-body">
                            <div class="form-group">
                                <input v-model="wardrobe.title" type="text" name="title" class="form-control"
                                    placeholder="Title">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>

        <!-- Edit Wardrobe Modal  -->

        <div class="modal fade" id="editWardrobeModal" tabindex="-1" role="dialog" aria-labelledby="addWardrobe"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editWardrobeModal">Edit Wardrobe</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="updateWardrobe">
                        <div class="modal-body">
                            <div class="form-group">
                                <input v-model="wardrobe.title" type="text" name="title" class="form-control"
                                    placeholder="Title">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Create</button>
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
                field: {
                    id:'',
                    title:''
                },
                wardrobe: {
                    id: '',
                    title: ''
                }
            }
        },

        computed: {
            fields() {
                return this.$store.state.fields
            },
            wardrobes() {
                return this.$store.state.wardrobes
            },
        },

        methods: {
            showWardobeCreateModal() {
                $('#addWardrobe').modal('show');
            },
            showFieldCreateModal() {
                $('#addField').modal('show');
            },
            hideModal() {
                $('#addField').modal('hide');
                $('#addWardrobe').modal('hide');
                this.field = {};
                this.wardrobe = {};
            },
            editField(fieldId){
                $('#editFieldModal').modal('show');
                var field = this.fields.find(field => {
                    return field.id == fieldId;
                })
                this.field = { ...field };
            },
            editWardrobe(wardrobeId){
                $('#editWardrobeModal').modal('show');
                var wardrobe = this.wardrobes.find(wardrobe => {
                    return wardrobe.id == wardrobeId;
                })
                this.wardrobe = { ...wardrobe };
            },
            createField() {
                this.$store.dispatch('createField', this.field)
                            .then(res => $('#addField').modal('hide'));
            },
            createWardrobe() {
                this.$store.dispatch('createWardrobe', this.wardrobe)
                            .then(res => $('#addWardrobe').modal('hide'));
            },
            deleteField(fieldId) {
                this.$store.dispatch('deleteField', fieldId)
                            .then(res => console.log('field deleted'));
            },
            deleteWardrobe(wardrobeId) {
                this.$store.dispatch('deleteWardrobe', wardrobeId)
                            .then(res => console.log('wardrobe deleted'));
            },
            updateField() {
                this.$store.dispatch('updateField', this.field)
                            .then(res => this.hideModal());
            },
            updateWardrobe() {
                this.$store.dispatch('updateWardrobe', this.wardrobe)
                            .then(res => this.hideModal());
            }
        },
    }

</script>

<style>

</style>
