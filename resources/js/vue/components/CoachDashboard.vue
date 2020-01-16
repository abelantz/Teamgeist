<template>
    <div>
        <h1>Dashboard </h1>
        <button class="btn btn-success"> Add Event</button>
        <div class="row pt-2">
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">My open tasks</h3>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
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
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>183</td>
                                    <td>John Doe</td>
                                    <td>11-7-2014</td>
                                </tr>
                                <tr>
                                    <td>219</td>
                                    <td>Alexander Pierce</td>
                                    <td>11-7-2014</td>
                                </tr>
                                <tr>
                                    <td>657</td>
                                    <td>Bob Doe</td>
                                    <td>11-7-2014</td>
                                </tr>
                                <tr>
                                    <td>175</td>
                                    <td>Mike Doe</td>
                                    <td>11-7-2014</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>

            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Table select season (team of coach)</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Title</th>
                                    <th style="width: 40px">Points</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Barcelona</td>
                                    <td><span class="badge bg-danger">55</span></td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Sevilla</td>
                                    <td><span class="badge bg-warning">40</span></td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Sevilla</td>
                                    <td><span class="badge bg-success">40</span></td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Sevilla</td>
                                    <td><span class="badge bg-info">40</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Total Goals & Cards</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Title</th>
                                    <th style="width: 40px">Number</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Goals</td>
                                    <td><span class="badge bg-danger">55</span></td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Cards</td>
                                    <td><span class="badge bg-warning">40</span></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Next Match</h3>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Opponent</th>
                                    <th>Time</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>FC Basel</td>
                                    <td>19:00</td>
                                    <td>11-7-2014</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">My availability actual season</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Title</th>
                                    <th style="width: 40px">Number</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Trainings</td>
                                    <td><span class="badge bg-danger">55/2</span></td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Matches</td>
                                    <td><span class="badge bg-warning">8/2</span></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Players availability actual season</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Title</th>
                                    <th style="width: 40px">Number</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Trainings</td>
                                    <td><span class="badge bg-danger">55/2</span></td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Matches</td>
                                    <td><span class="badge bg-warning">8/2</span></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

    }
</script>

