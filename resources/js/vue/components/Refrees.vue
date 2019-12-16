<template>
    <div>
        <h1>Refrees</h1>


        <button class="btn btn-success bg-success " @click="refreeModal"> Add Refree</button>
        <div class="row text-center pt-2">
            
            <div class="col-6">
                <div class="card card-success card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Active refrees</h3>
                        <div class="card-tools">
                            <!-- <button class="btn btn-success bg-success" @click="coachModal"> Add Coach</button> -->
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>183</td>
                                    <td>
                                        <router-link to="/refree">John Doe</router-link>
                                    </td>
                                    <td>Active</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="#"  class="btn btn-success bg-success"><i class="fas fa-eye"></i></a>
                                            <a href="#"  class="btn btn-info bg-info"><i class="fas fa-edit"></i></a>
                                            <a href="#"  class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        </div>                                    
                                    </td>
                                </tr>
                                <tr>
                                    <td>183</td>
                                    <td>
                                        <router-link to="/refree">John Doe</router-link>
                                    </td>
                                    <td>Active</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="#"  class="btn btn-success bg-success"><i class="fas fa-eye"></i></a>
                                            <a href="#"  class="btn btn-info bg-info"><i class="fas fa-edit"></i></a>
                                            <a href="#"  class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        </div>                                    
                                    </td>
                                </tr>
                                <tr>
                                    <td>183</td>
                                    <td>
                                        <router-link to="/refree">John Doe</router-link>
                                    </td>
                                    <td>Active</td>
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
            <div class="col-6">
                <div class="card card-success card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Juniore refrees</h3>
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
                                    <th>Status</th>
                                    <th>Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>183</td>
                                    <td>
                                        <router-link to="/refree">John Doe</router-link>
                                    </td>
                                    <td>Active</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="#"  class="btn btn-success bg-success"><i class="fas fa-eye"></i></a>
                                            <a href="#"  class="btn btn-info bg-info"><i class="fas fa-edit"></i></a>
                                            <a href="#"  class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        </div>                                    
                                    </td>
                                </tr>
                                <tr>
                                    <td>183</td>
                                    <td>
                                        <router-link to="/refree">John Doe</router-link>
                                    </td>
                                    <td>Active</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="#"  class="btn btn-success bg-success"><i class="fas fa-eye"></i></a>
                                            <a href="#"  class="btn btn-info bg-info"><i class="fas fa-edit"></i></a>
                                            <a href="#"  class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        </div>                                    
                                    </td>
                                </tr>
                                <tr>
                                    <td>183</td>
                                    <td>
                                        <router-link to="/refree">John Doe</router-link>
                                    </td>
                                    <td>Active</td>
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
        <!-- Modal -->
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
                
            }
        },
        methods: {
            refreeModal(){
                $('#addRefree').modal('show')
            },
           
        },
        created() {
            
        }
    }

</script>
