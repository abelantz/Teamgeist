<template>
    <div>
        <div class="row pb-5">
            <div class="col-5 ">
                <h4 class="pt-4 text-center">Main Sponsors</h4>
                <div class="row mr-10">

                    <div class="col-6 pt-3 text-center">
                        <img style="border-radius:50%; width: 140px; height:140px;"
                            src="https://www.trzcacak.rs/myfile/full/22-222742_emirates-cabin-crew-fly-emirates-logo.png"
                            alt="Avatar">
                        <p class="pt-2">Fly Emirates</p>
                    </div>
                    <div class="col-6 pt-3 text-center">
                        <img style="border-radius:50%; width: 140px; height:140px; margin:auto"
                            src="https://seeklogo.com/images/R/rakuten-logo-A75F21521D-seeklogo.com.png" alt="Avatar">
                        <p class="pt-2">Rakuten</p>
                    </div>

                </div>
            </div>
            <div class="col-7 Chart">
                <chartjs-bar v-bind:labels="labels" v-bind:datasets="datasets" v-bind:option="option"></chartjs-bar>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Sponsors</h3>

                        <div class="card-tools">
                            <button class="btn btn-success bg-success" @click="sponsorModal">Add Sponsor <i
                                    class="fa fa-user"></i></button>
                            <!-- <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div> -->
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="height: 450px;">
                        <table class="table table-head-fixed">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Due to (duration )</th>
                                    <th>Amount</th>
                                    <th>Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>183</td>
                                    <td>John Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-success">Approved</span></td>
                                    <td>300CHF</td>
                                    <td>
                                        <a href="#"> <i class="fas fa-edit"></i></a>
                                        /
                                        <a href="#"> <i class="fas fa-trash red"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>219</td>
                                    <td>Alexander Pierce</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-warning">Pending</span></td>
                                    <td>300CHF</td>
                                    <td>
                                        <a href="#"> <i class="fas fa-edit"></i></a>
                                        /
                                        <a href="#"> <i class="fas fa-trash red"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>657</td>
                                    <td>Bob Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-primary">Approved</span></td>
                                    <td>300CHF</td>
                                    <td>
                                        <a href="#"> <i class="fas fa-edit"></i></a>
                                        /
                                        <a href="#"> <i class="fas fa-trash red"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>175</td>
                                    <td>Mike Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-danger">Denied</span></td>
                                    <td>300CHF</td>
                                    <td>
                                        <a href="#"> <i class="fas fa-edit"></i></a>
                                        /
                                        <a href="#"> <i class="fas fa-trash red"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>134</td>
                                    <td>Jim Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-success">Approved</span></td>
                                    <td>300CHF</td>
                                    <td>
                                        <a href="#"> <i class="fas fa-edit"></i></a>
                                        /
                                        <a href="#"> <i class="fas fa-trash red"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>494</td>
                                    <td>Victoria Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-warning">Pending</span></td>
                                    <td>300CHF</td>
                                    <td>
                                        <a href="#"> <i class="fas fa-edit"></i></a>
                                        /
                                        <a href="#"> <i class="fas fa-trash red"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>832</td>
                                    <td>Michael Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-primary">Approved</span></td>
                                    <td>300CHF</td>
                                    <td>
                                        <a href="#"> <i class="fas fa-edit"></i></a>
                                        /
                                        <a href="#"> <i class="fas fa-trash red"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>982</td>
                                    <td>Rocky Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-danger">Denied</span></td>
                                    <td>300CHF</td>
                                    <td>
                                        <a href="#"> <i class="fas fa-edit"></i></a>
                                        /
                                        <a href="#"> <i class="fas fa-trash red"></i></a>
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
        <div class="modal  fade" id="addSponsor" tabindex="-1" role="dialog" aria-labelledby="addSponsor"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header card-primary card-outline">
                        <h5 class="modal-title" id="addSponsor">Add Sponsor</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Enter Name...">
                        </div>
                        <div class="form-group">
                            <label>Type</label>
                            <select class="form-control">
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Date range:</label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="far fa-calendar-alt"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control float-right" id="reservation">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label>Amount</label>
                            <input type="text" class="form-control" placeholder="100CHF ...">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add New</button>
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
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
                    datasets: [{
                            label: '2018 Sales',
                            data: [300, 700, 450, 750, 450]
                        },
                        {
                            label: '2017 Sales',
                            data: [600, 550, 750, 250, 700]
                        }
                    ]
                },
                option: {
                    titile: true,
                    display: "top",
                    text: "Sponsoring Data"
                }
            }
        },
        methods: {

            sponsorModal() {
                $('#addSponsor').modal("show");
            }


        },
        mounted() {
            console.log('Component mounted.')
        },
    }

</script>
