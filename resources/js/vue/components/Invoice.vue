<template>
    <div>
        <h1>
            Invoice
        </h1>
        <div class="row">
            <div class="col-12">
                <div class="card card-success card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Payments of memberships</h3>
                        <div class="card-tools">
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" >
                        <table class="table table-head-fixed">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Team</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>John Doe</td>
                                    <td>Barca</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-success">300CHF</span></td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="#"  @click="detailsModal" class="btn btn-success bg-success"><i class="fas fa-eye"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>John Doe</td>
                                    <td>Barca</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-success">300CHF</span></td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="#"  @click="detailsModal" class="btn btn-success bg-success"><i class="fas fa-eye"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>John Doe</td>
                                    <td>Barca</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-success">300CHF</span></td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="#"  @click="detailsModal" class="btn btn-success bg-success"><i class="fas fa-eye"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>John Doe</td>
                                    <td>Barca</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-success">300CHF</span></td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="#"  @click="detailsModal" class="btn btn-success bg-success"><i class="fas fa-eye"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>John Doe</td>
                                    <td>Barca</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-success">300CHF</span></td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="#"  @click="detailsModal" class="btn btn-success bg-success"><i class="fas fa-eye"></i></a>
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
        <div class="modal  fade" id="viewDetails" tabindex="-1" role="dialog" aria-labelledby="viewDetails"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header card-primary card-outline">
                        <h5 class="modal-title" id="viewDetails">View Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5> "Description of expenses" </h5>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">User Expenses</h3>
                                <div class="card-tools">
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0" >
                                <table class="table table-head-fixed">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Team</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>John Doe</td>
                                            <td>Barca</td>
                                            <td>11-7-2014</td>
                                            <td><span class="tag tag-success">300CHF</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Items</h3>
                                <div class="card-tools">
                                </div>
                            </div>
                            <div class="card-body table-responsive p-0" >
                                <table class="table table-head-fixed">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Refree Payment</td>
                                            <td>11-7-2014</td>
                                            <td><span class="tag tag-success">300CHF</span></td>
                                        </tr>
                                        <tr>
                                            <td>Food & Drink</td>
                                            <td>11-7-2014</td>
                                            <td><span class="tag tag-success">300CHF</span></td>
                                        </tr>
                                        <tr>
                                            <td>Print Paper</td>
                                            <td>11-7-2014</td>
                                            <td><span class="tag tag-success">300CHF</span></td>
                                        </tr>
                                        <tr>
                                            <td>Driving Expenses</td>
                                            <td>11-7-2014</td>
                                            <td><span class="tag tag-success">300CHF</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <button class="btn btn-danger bg-danger">Sign It</button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Print</button>
                        <button type="button" class="btn btn-primary">Email</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        data() {
            return{

            }
        },
        methods: {
            detailsModal(){
                $('#viewDetails').modal('show');
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
    }

</script>
