<template>

    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">
                <!-- <i class="fas fa-edit"></i> -->
                Contracts
            </h3>
        </div>
        <div class="card-body">
            <ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="custom-content-above-last-tab" data-toggle="pill"
                        href="#custom-content-above-last" role="tab" aria-controls="custom-content-above-last"
                        aria-selected="true">Last</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-content-above-board-tab" data-toggle="pill"
                        href="#custom-content-above-board" role="tab" aria-controls="custom-content-above-board"
                        aria-selected="false">Board</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-content-above-coaches-tab" data-toggle="pill"
                        href="#custom-content-above-coaches" role="tab" aria-controls="custom-content-above-coaches"
                        aria-selected="false">Coaches</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-content-above-players-tab" data-toggle="pill"
                        href="#custom-content-above-players" role="tab" aria-controls="custom-content-above-players"
                        aria-selected="false">Players</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-content-above-refrees-tab" data-toggle="pill"
                        href="#custom-content-above-refrees" role="tab" aria-controls="custom-content-above-refrees"
                        aria-selected="false">Refrees</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-content-above-helpers-tab" data-toggle="pill"
                        href="#custom-content-above-helpers" role="tab" aria-controls="custom-content-above-helpers"
                        aria-selected="false">Helpers</a>
                </li>
            </ul>

            <div class="tab-content" id="custom-content-above-tabContent">
                <div class="tab-pane fade show active" id="custom-content-above-last" role="tabpanel"
                    aria-labelledby="custom-content-above-home-tab">
                    <div >
                        <div class="card-header">
                            <h3 class="card-title">Soon Expiring contracts</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default"><i
                                                class="fas fa-search"></i></button>
                                    </div>
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
                                        <th>Type</th>
                                        <th>Team</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="last in lasts" v-bind:key="last.id">
                                        <td>{{last.id}}</td>
                                        <td>{{last.name}}</td>
                                        <td>{{last.type}}</td>
                                        <td>{{last.team}}</td>
                                        <td>{{last.date}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <div class="tab-pane fade" id="custom-content-above-board" role="tabpanel"
                    aria-labelledby="custom-content-above-board-tab">
                    <div class="">
                        <div class="card-header">
                            <h3 class="card-title">Board Contracts</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default"><i
                                                class="fas fa-search"></i></button>
                                    </div>
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
                                        <th>Type</th>
                                        <th>Team</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="board in boards" v-bind:key="board.id">
                                        <td>{{board.id}}</td>
                                        <td>{{board.name}}</td>
                                        <td>{{board.type}}</td>
                                        <td>{{board.team}}</td>
                                        <td>{{board.date}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <div class="tab-pane fade" id="custom-content-above-coaches" role="tabpanel"
                    aria-labelledby="custom-content-above-coaches-tab">
                    <div >
                        <div class="card-header">
                            <h3 class="card-title">Coaches Contracts</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default"><i
                                                class="fas fa-search"></i></button>
                                    </div>
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
                                        <th>Type</th>
                                        <th>Team</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="coach in coaches" v-bind:key="coach.id">
                                        <td>{{coach.id}}</td>
                                        <td>{{coach.name}}</td>
                                        <td>{{coach.type}}</td>
                                        <td>{{coach.team}}</td>
                                        <td>{{coach.date}}</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <div class="tab-pane fade" id="custom-content-above-coaches" role="tabpanel"
                    aria-labelledby="custom-content-above-settings-tab">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Player Contracts</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default"><i
                                                class="fas fa-search"></i></button>
                                    </div>
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
                                        <th>Type</th>
                                        <th>Team</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>183</td>
                                        <td>John Doe</td>
                                        <td>11-7-2014</td>
                                        <td><span class="tag tag-success">Approved</span></td>
                                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                    </tr>
                                    <tr>
                                        <td>219</td>
                                        <td>Alexander Pierce</td>
                                        <td>11-7-2014</td>
                                        <td><span class="tag tag-warning">Pending</span></td>
                                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                    </tr>
                                    <tr>
                                        <td>657</td>
                                        <td>Bob Doe</td>
                                        <td>11-7-2014</td>
                                        <td><span class="tag tag-primary">Approved</span></td>
                                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                    </tr>
                                    <tr>
                                        <td>175</td>
                                        <td>Mike Doe</td>
                                        <td>11-7-2014</td>
                                        <td><span class="tag tag-danger">Denied</span></td>
                                        <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <div class="tab-pane fade" id="custom-content-above-players" role="tabpanel"
                    aria-labelledby="custom-content-above-settings-tab">
                    <div>
                        <div class="card-header">
                            <h3 class="card-title">Player Contracts</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default"><i
                                                class="fas fa-search"></i></button>
                                    </div>
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
                                        <th>Type</th>
                                        <th>Team</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="player in players" v-bind:key="player.id">
                                        <td>{{player.id}}</td>
                                        <td>{{player.name}}</td>
                                        <td>{{player.type}}</td>
                                        <td>{{player.team}}</td>
                                        <td>{{player.date}}</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                 <div class="tab-pane fade" id="custom-content-above-refrees" role="tabpanel"
                    aria-labelledby="custom-content-above-settings-tab">
                    <div>
                        <div class="card-header">
                            <h3 class="card-title">Refree Contracts</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default"><i
                                                class="fas fa-search"></i></button>
                                    </div>
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
                                        <th>Type</th>
                                        <th>Team</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="refree in refrees" v-bind:key="refree.id">
                                        <td>{{refree.id}}</td>
                                        <td>{{refree.name}}</td>
                                        <td>{{refree.type}}</td>
                                        <td>{{refree.team}}</td>
                                        <td>{{refree.date}}</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                 <div class="tab-pane fade" id="custom-content-above-helpers" role="tabpanel"
                    aria-labelledby="custom-content-above-helpers-tab">
                    <div>
                        <div class="card-header">
                            <h3 class="card-title">Helper Contracts</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default"><i
                                                class="fas fa-search"></i></button>
                                    </div>
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
                                        <th>Type</th>
                                        <th>Team</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="helper in helpers" v-bind:key="helper.id">
                                        <td>{{helper.id}}</td>
                                        <td>{{helper.name}}</td>
                                        <td>{{helper.type}}</td>
                                        <td>{{helper.team}}</td>
                                        <td>{{helper.date}}</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card -->
    </div>

</template>

<script>
    export default {
        data: function(){
            return {
            lasts: [
                {id:'1',name:'John Doe',type:'Expiring',team:'Barcelona',date:'11-7-2019'},
            ],
            boards: [
                {id:'1',name:'John Doe',type:'Board',team:'Barcelona',date:'11-7-2019'},
            ],
            coaches:[
                {id:'1',name:'Guardiola',type:'Coach',team:'Barcelona',date:'11-7-2019'},
            ],
            players:[
                {id:'1',name:'John Doe',type:'Player',team:'Liverpool',date:'11-7-2019'},
            ],
            refrees:[
                {id:'1',name:'John Doe',type:'Refree',team:'Barcelona',date:'11-7-2019'},
            ],
            helpers:[
                {id:'1',name:'John Doe',type:'Doctor',team:'Barcelona',date:'11-7-2019'},
            ]

            }
        },
        mounted() {
            console.log('Component mounted.')
        },

    }

</script>
