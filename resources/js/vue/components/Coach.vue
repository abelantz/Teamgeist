<template>
    <div>
      <h1>Profile</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card ">
                    <div class="card-body box-profile">
                        <h3 class="profile-username text-center">Pep Guardiola</h3>
                        <p class="text-muted text-center">Coach</p>
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b> Team Name</b> <a class="float-right">FC Barcelona</a>
                            </li>
                            <li class="list-group-item">
                                <b> Age </b> <a class="float-right">43</a>
                            </li>
                            <li class="list-group-item">
                                <b>Nationality</b> <a class="float-right">Spain</a>
                            </li>
                            <li class="list-group-item">
                                <b>Address</b> <a class="float-right"> Rue de Castiglione 012</a>
                            </li>
                            <li class="list-group-item">
                                <b>Phone </b> <a class="float-right"> 0712123123</a>
                            </li>
                            <li class="list-group-item">
                                <b>Email </b> <a class="float-right"> pep@guardiola.com</a>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-primary btn-block"><b>Edit</b></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card " style="height:455px;">
                    <div class="card-body box-profile text-center">
                        <h5>Picture of coach</h5>
                    </div>
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
                                 <tr>
                                    <td>2.</td>
                                    <td>Sevilla</td>
                                    <td><span class="badge bg-success">40</span></td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <div class="card ">
                    <div class="card-header">
                        <h3 class="card-title">Staff List</h3>
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
                                    <th>Pic</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Age</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>img</td>
                                    <td>John Doe</td>
                                    <td>Assistant</td>
                                    <td><span class="tag tag-success">31</span></td>
                                </tr>
                                <tr>
                                    <td>img</td>
                                    <td>John Doe</td>
                                    <td>Assistant</td>
                                    <td><span class="tag tag-success">31</span></td>
                                </tr>
                                <tr>
                                    <td>img</td>
                                    <td>John Doe</td>
                                    <td>Assistant</td>
                                    <td><span class="tag tag-success">31</span></td>
                                </tr>
                                <tr>
                                    <td>img</td>
                                    <td>John Doe</td>
                                    <td>Assistant</td>
                                    <td><span class="tag tag-success">31</span></td>
                                </tr>
                                <tr>
                                    <td>img</td>
                                    <td>John Doe</td>
                                    <td>Assistant</td>
                                    <td><span class="tag tag-success">31</span></td>
                                </tr>
                                <tr>
                                    <td>img</td>
                                    <td>John Doe</td>
                                    <td>Assistant</td>
                                    <td><span class="tag tag-success">31</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <div class="col-md-4">
                <div class="card ">
                    <div class="card-header ">
                        <h3 class="card-title ">Overview Trainings</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card-body">
                        <ul class=" bg-transparent mb-3">
                            <li class="">
                                <b>Monday</b>
                            </li>
                            <li class="">
                                <b>Wednesday</b>
                            </li>
                            <li class="">
                                <b>Friday</b>
                            </li>
                        </ul>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="card ">
                    <div class="card-header">
                        <h3 class="card-title">Overview availability</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Task</th>
                                    <th>Progress</th>
                                    <th style="width: 40px">Label</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Trainings</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" style="width: 85%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-danger">58/2</span>

                                    </td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Matches</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-warning" style="width: 70%"></div>
                                        </div>
                                    </td>
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
