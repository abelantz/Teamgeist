<template>
    <div>
        <h1>
            Contracts
        </h1>
        <div class="row pt-3">
            <div class="col-12 pb-2">
                <ul class="nav nav-pills mr-auto ">
                    <li class="nav-item"><a class="nav-link active" href="#board" data-toggle="tab">Board</a></li>
                    <li class="nav-item"><a class="nav-link" href="#coaches" data-toggle="tab">Coaches</a></li>
                    <li class="nav-item"><a class="nav-link" href="#players" data-toggle="tab">Players</a></li>
                    <li class="nav-item"><a class="nav-link" href="#refrees" data-toggle="tab">Refrees</a></li>
                    <li class="nav-item"><a class="nav-link" href="#facility" data-toggle="tab">Facility/Helpers</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#administration" data-toggle="tab">Administration</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#other" data-toggle="tab">Other Contracts</a></li>
                </ul>
            </div>
            <div class="col-12 ">
                <!-- Custom Tabs -->
                <div class="">

                    <div class="">
                        <div class="tab-content  text-center">
                            <div class="tab-pane active" id="board">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Board</h3>
                                        <div class="card-tools">
                                            <button class="btn btn-success bg-success">New Board Contract</button>
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
                                                    <th>Amount</th>
                                                    <th>Date(due to)</th>
                                                    <th>Modify</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 <tr v-for="team in teams" v-bind:key="team.id">
                                                    <td>183</td>
                                                    <td>{{ team.name }}</td>
                                                    <td><span class="tag tag-success">President</span></td>
                                                    <td>300CHF</td>
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
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="coaches">
                                 <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Coaches</h3>
                                        <div class="card-tools">
                                            <button class="btn btn-success bg-success">New Coach Contract</button>
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
                                                    <th>Amount</th>
                                                    <th>Date(due to)</th>
                                                    <th>Modify</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>183</td>
                                                    <td>John Doe</td>
                                                    <td><span class="tag tag-success">President</span></td>
                                                    <td>300CHF</td>
                                                    <td>11-7-2014</td>
                                                    <td>
                                                        <button class="btn btn-success bg-success"> View</button>
                                                        <button class="btn btn-info bg-info"> Edit</button>
                                                        <button class="btn btn-danger bg-danger">Delete</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>183</td>
                                                    <td>John Doe</td>
                                                    <td><span class="tag tag-success">President</span></td>
                                                    <td>300CHF</td>
                                                    <td>11-7-2014</td>
                                                    <td>
                                                        <button class="btn btn-success bg-success"> View</button>
                                                        <button class="btn btn-info bg-info"> Edit</button>
                                                        <button class="btn btn-danger bg-danger">Delete</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>183</td>
                                                    <td>John Doe</td>
                                                    <td><span class="tag tag-success">President</span></td>
                                                    <td>300CHF</td>
                                                    <td>11-7-2014</td>
                                                    <td>
                                                        <button class="btn btn-success bg-success"> View</button>
                                                        <button class="btn btn-info bg-info"> Edit</button>
                                                        <button class="btn btn-danger bg-danger">Delete</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>183</td>
                                                    <td>John Doe</td>
                                                    <td><span class="tag tag-success">President</span></td>
                                                    <td>300CHF</td>
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
                            </div>
                            <!-- /.tab-pane -->
                            <div class="tab-pane" id="players">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Players</h3>
                                        <div class="card-tools">
                                            <button class="btn btn-success bg-success">New Player Contract</button>
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
                                                    <th>Amount</th>
                                                    <th>Date(due to)</th>
                                                    <th>Modify</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>183</td>
                                                    <td>John Doe</td>
                                                    <td><span class="tag tag-success">President</span></td>
                                                    <td>300CHF</td>
                                                    <td>11-7-2014</td>
                                                    <td>
                                                        <button class="btn btn-success bg-success"> View</button>
                                                        <button class="btn btn-info bg-info"> Edit</button>
                                                        <button class="btn btn-danger bg-danger">Delete</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>183</td>
                                                    <td>John Doe</td>
                                                    <td><span class="tag tag-success">President</span></td>
                                                    <td>300CHF</td>
                                                    <td>11-7-2014</td>
                                                    <td>
                                                        <button class="btn btn-success bg-success"> View</button>
                                                        <button class="btn btn-info bg-info"> Edit</button>
                                                        <button class="btn btn-danger bg-danger">Delete</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>183</td>
                                                    <td>John Doe</td>
                                                    <td><span class="tag tag-success">President</span></td>
                                                    <td>300CHF</td>
                                                    <td>11-7-2014</td>
                                                    <td>
                                                        <button class="btn btn-success bg-success"> View</button>
                                                        <button class="btn btn-info bg-info"> Edit</button>
                                                        <button class="btn btn-danger bg-danger">Delete</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>183</td>
                                                    <td>John Doe</td>
                                                    <td><span class="tag tag-success">President</span></td>
                                                    <td>300CHF</td>
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
                            </div>
                            <div class="tab-pane" id="refrees">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Refrees</h3>
                                        <div class="card-tools">
                                            <button class="btn btn-success bg-success">New Refree Contract</button>
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
                                                    <th>Amount</th>
                                                    <th>Date(due to)</th>
                                                    <th>Modify</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>183</td>
                                                    <td>John Doe</td>
                                                    <td><span class="tag tag-success">President</span></td>
                                                    <td>300CHF</td>
                                                    <td>11-7-2014</td>
                                                    <td>
                                                        <button class="btn btn-success bg-success"> View</button>
                                                        <button class="btn btn-info bg-info"> Edit</button>
                                                        <button class="btn btn-danger bg-danger">Delete</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>183</td>
                                                    <td>John Doe</td>
                                                    <td><span class="tag tag-success">President</span></td>
                                                    <td>300CHF</td>
                                                    <td>11-7-2014</td>
                                                    <td>
                                                        <button class="btn btn-success bg-success"> View</button>
                                                        <button class="btn btn-info bg-info"> Edit</button>
                                                        <button class="btn btn-danger bg-danger">Delete</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>183</td>
                                                    <td>John Doe</td>
                                                    <td><span class="tag tag-success">President</span></td>
                                                    <td>300CHF</td>
                                                    <td>11-7-2014</td>
                                                    <td>
                                                        <button class="btn btn-success bg-success"> View</button>
                                                        <button class="btn btn-info bg-info"> Edit</button>
                                                        <button class="btn btn-danger bg-danger">Delete</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>183</td>
                                                    <td>John Doe</td>
                                                    <td><span class="tag tag-success">President</span></td>
                                                    <td>300CHF</td>
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
                            </div>
                            <div class="tab-pane" id="facility">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Facility / Helpers</h3>
                                        <div class="card-tools">
                                            <button class="btn btn-success bg-success">New Facility Contract</button>
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
                                                    <th>Amount</th>
                                                    <th>Date(due to)</th>
                                                    <th>Modify</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>183</td>
                                                    <td>John Doe</td>
                                                    <td><span class="tag tag-success">President</span></td>
                                                    <td>300CHF</td>
                                                    <td>11-7-2014</td>
                                                    <td>
                                                        <button class="btn btn-success bg-success"> View</button>
                                                        <button class="btn btn-info bg-info"> Edit</button>
                                                        <button class="btn btn-danger bg-danger">Delete</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>183</td>
                                                    <td>John Doe</td>
                                                    <td><span class="tag tag-success">President</span></td>
                                                    <td>300CHF</td>
                                                    <td>11-7-2014</td>
                                                    <td>
                                                        <button class="btn btn-success bg-success"> View</button>
                                                        <button class="btn btn-info bg-info"> Edit</button>
                                                        <button class="btn btn-danger bg-danger">Delete</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>183</td>
                                                    <td>John Doe</td>
                                                    <td><span class="tag tag-success">President</span></td>
                                                    <td>300CHF</td>
                                                    <td>11-7-2014</td>
                                                    <td>
                                                        <button class="btn btn-success bg-success"> View</button>
                                                        <button class="btn btn-info bg-info"> Edit</button>
                                                        <button class="btn btn-danger bg-danger">Delete</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>183</td>
                                                    <td>John Doe</td>
                                                    <td><span class="tag tag-success">President</span></td>
                                                    <td>300CHF</td>
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
                            </div>
                            <div class="tab-pane" id="administration">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Administration</h3>
                                        <div class="card-tools">
                                            <button class="btn btn-success bg-success">New Administration Contract</button>
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
                                                    <th>Amount</th>
                                                    <th>Date(due to)</th>
                                                    <th>Modify</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 <tr v-for="team in teams" v-bind:key="team.id">
                                                    <td>183</td>
                                                    <td>{{ team.name }}</td>
                                                    <td><span class="tag tag-success">President</span></td>
                                                    <td>300CHF</td>
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
                            </div>
                            <div class="tab-pane" id="other">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Other Contracts</h3>
                                        <div class="card-tools">
                                            <button class="btn btn-success bg-success">New Contract</button>
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
                                                    <th>Amount</th>
                                                    <th>Date(due to)</th>
                                                    <th>Modify</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                            
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- ./card -->
            </div>
            <!-- /.col -->
        </div>

    </div>
</template>

<script>
    export default {

        computed: {
            teams() {
                return this.$store.state.teams
            }
        },
        
    }

</script>
