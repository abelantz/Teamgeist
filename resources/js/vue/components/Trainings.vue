<template>
    <div>
        <h1>Trainings</h1>
        <div class="row">
            <div class="col-12 ">
                <div class="card card-info card-outline ">
                    <div class="card-header">
                        <h3 class="card-title">Upcoming Trainings</h3>
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
                                    <th>Team Name</th>
                                    <th>Date</th>
                                    <th>Weekday</th>
                                    <th>Start Time</th>
                                    <th>End time</th>
                                    <th>Meeting time</th>
                                    <th>Training field</th>
                                    <th>Wardrobe</th>
                                    <th>Coach / Contact </th>
                                    <th>Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>FC Barca</td>
                                    <td>12-01-2020</td>
                                    <td>Monday</td>
                                    <td>14:00</td>
                                    <td>15:30</td>
                                    <td>13:45</td>
                                    <td>B1</td>
                                    <td>2</td>
                                    <td>Guardiolaa</td>
                                    <td>
                                        <button class="btn btn-success bg-success"> View</button>
                                        <button class="btn btn-info bg-info"> Edit</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>FC Bayern Munchen</td>
                                    <td>12-01-2020</td>
                                    <td>Monday</td>
                                    <td>14:00</td>
                                    <td>15:30</td>
                                    <td>13:45</td>
                                    <td>B1</td>
                                    <td>2</td>
                                    <td>Guardiolaa</td>
                                    <td>
                                        <button class="btn btn-success bg-success"> View</button>
                                        <button class="btn btn-info bg-info"> Edit</button>
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

    }

</script>
