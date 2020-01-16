<template>
    <div>
        <h1>Player Profile</h1>
        <div class="row">
            <div class="col-4">
                <div class="card card-outline card-dark ">
                    <div class="card-body box-profile">
                        <h3 class="profile-username text-center">Leo Messi</h3>
                        <p class="text-muted text-center">Player</p>
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

            <div class="col-4">
                <div class="card card-outline card-dark " style="height:240px;">
                    <div class="card-body box-profile text-center">
                        <h5>Picture of Player</h5>
                    </div>
                </div>
                <div class="card card-outline card-dark">
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
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-outline card-dark">
                    <div class="card-header">
                        <h3 class="card-title">Statistics</h3>

                        <div class="card-tools">

                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-center">
                            <thead>
                                <tr>
                                    <th>Start Match</th>
                                    <th>Changed</th>
                                    <th>Minutes Played</th>
                                    <th>Goals</th>
                                    <th>Yellow Card</th>
                                    <th>2nd Yellow Card / Red</th>
                                    <th>Red Card</th>
                                    <th>Man of the match</th>
                                    <th>Cost</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>12</td>
                                    <td>3</td>
                                    <td>196'</td>
                                    <td>14</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>2</td>
                                    <th>100,000</th>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-outline card-dark">
                    <div class="card-header">
                        <h3 class="card-title">Players overview</h3>
                        <div class="card-tools">
                            <router-link to="/editOverview" class="btn btn-primary">Edit</router-link>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <th>Task</th>
                                    <th>Progress</th>
                                    <th style="width: 40px">Label</th>
                                </tr>
                            </thead>
                            <tbody>
                               <tr>
                                    <td>Fitness</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-warning" style="width: 70%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-warning">70%</span></td>
                                </tr>
                                <tr>
                                    <td>Footplay</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-warning" style="width: 70%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-warning">70%</span></td>
                                </tr>
                                <tr>
                                    <td>Willing to fight</td>
                                    <td>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar bg-primary" style="width: 64%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-primary">64%</span></td>
                                </tr>
                                <tr>
                                    <td>Condition</td>
                                    <td>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar bg-info" style="width: 100%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-info">90%</span></td>
                                </tr>
                                <tr>
                                    <td>Game Overview</td>
                                    <td>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar bg-success" style="width: 60%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-success">90%</span></td>
                                </tr>
                                <tr>
                                    <td>Technique / ball feeling</td>
                                    <td>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar bg-dark" style="width: 30%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-dark">90%</span></td>
                                </tr>
                                <tr>
                                    <td>Shoot</td>
                                    <td>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar bg-success" style="width: 70%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-success">90%</span></td>
                                </tr>
                                <tr>
                                    <td>Mental Strenght</td>
                                    <td>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar bg-danger" style="width: 90%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-danger">90%</span></td>
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
    import VueSlideBar from 'vue-slide-bar'
    export default {
        data() {
            return {
                fitnessValue: {
                    val: 9,
                    lineHeight: 10,
                    processStyle: {
                        backgroundColor: '#42b883'
                    },
                    tooltipStyles: {
                        backgroundColor: '#42b883',
                        borderColor: '#42b883'
                    }
                },

                footplay: 50,
                fight: 50,
                condition: 50,
                gameOverveiw: 50,
                technique: 50,
                shoot: 50,
                mental: 50,
            }
        },
        methods: {
           
        },
        components: {
            VueSlideBar
        }
    }

</script>

<style>

</style>
