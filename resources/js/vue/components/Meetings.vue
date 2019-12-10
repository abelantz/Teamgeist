<template>
    <div>
        <h1>
            Meetings
        </h1>

        <div class="row text-center">
            <div class="col-12">
                <div class="card card-success card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Meetings</h3>

                        <div class="card-tools">
                            <button @click="addMeetingModal" class="btn btn-succes bg-success">Add Meeting</button>
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
                                    <th>Date</th>
                                    <th>Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>219</td>
                                    <td>Alexander Pierce</td>
                                    <td><span class="tag tag-warning">General Meeting</span></td>
                                    <td>11-7-2014</td>
                                    <td>
                                        <button class="btn btn-success bg-success"> View</button>
                                        <button class="btn btn-info bg-info"> Edit</button>
                                        <button class="btn btn-danger bg-danger">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>219</td>
                                    <td>Alexander Pierce</td>
                                    <td><span class="tag tag-warning">General Meeting</span></td>
                                    <td>11-7-2014</td>
                                    <td>
                                        <button class="btn btn-success bg-success"> View</button>
                                        <button class="btn btn-info bg-info"> Edit</button>
                                        <button class="btn btn-danger bg-danger">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>219</td>
                                    <td>Alexander Pierce</td>
                                    <td><span class="tag tag-warning">General Meeting</span></td>
                                    <td>11-7-2014</td>
                                    <td>
                                        <button class="btn btn-success bg-success"> View</button>
                                        <button class="btn btn-info bg-info"> Edit</button>
                                        <button class="btn btn-danger bg-danger">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>219</td>
                                    <td>Alexander Pierce</td>
                                    <td><span class="tag tag-warning">General Meeting</span></td>
                                    <td>11-7-2014</td>
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

        <!-- Modal  -->

        <div class="modal  fade" id="addMeeting" tabindex="-1" role="dialog" aria-labelledby="addMeeting"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header card-primary card-outline">
                        <h5 class="modal-title" id="addMeeting">Add Event</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                        <label>Type</label>
                        <select class="form-control">
                            <option disabled>Select Meeting type</option> 
                          <option>General</option>
                          <option>Coach</option>
                          <option>Refree</option>
                          <option>Players</option>
                          <option>Board</option>
                          <option>Specific</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Date</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false">
                        </div>
                        <!-- /.input group -->
                     </div>
                    <div class="form-group">
                        <label>Place</label>
                        <input type="text" class="form-control" placeholder="Select place from Google Map ...">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">All</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" >
                          <label class="form-check-label">Coaches</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Teams</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Players</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox">
                          <label class="form-check-label">Board</label>
                        </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {

            }
        },
        methods: {
            addMeetingModal(){
                $('#addMeeting').modal('show');
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
    }

</script>
