<template>
    <div>
        <h1>
            Memberships
        </h1>

        <div class="row">
            <div class="col-md-8">
                <button class="btn btn-primary bg-primary">New Member</button>
            </div>
            <div class="col-md-4  text-right">
                <button class="btn btn-warning bg-warning ">Create all membership invoices</button>
                <button class="btn btn-warning bg-warning ">Settings</button>
            </div>
        </div>
        <div class="row pt-4">
            <div class="col-md-2">
                <div class="card bg-primary">
                    <div class="card-header">
                        <h3 class="card-title">Team List</h3>
                        <div class="card-tools">
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                                <!-- <tr>
                      <th style="width: 10px">#</th>
                      <th>Task</th>
                      <th>Progress</th>
                      <th style="width: 40px">Label</th>
                    </tr> -->
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Active</td>
                                </tr>
                                <tr>
                                    <td>Passive</td>
                                </tr>
                                <tr>
                                    <td>Women</td>
                                </tr>
                                <tr>
                                    <td>Senioren/Veteranen</td>
                                </tr>
                                <tr>
                                    <td>Juniore</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-primary card-outline">
                    <div class="card-header ">
                        <h3 class="card-title ">History of finished payments</h3>
                        <div class="card-tools">
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="height: 235px;">
                        <table class="table table-head-fixed">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Role</th>
                                    <th>Amount</th>
                                    <th>Type</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>John Doe</td>
                                    <td>Player</td>
                                    <td>300CHF</td>
                                    <td>Cash</td>
                                    <td>11-7-2014</td>
                                </tr>
                                <tr>
                                    <td>John Doe</td>
                                    <td>Player</td>
                                    <td>300CHF</td>
                                    <td>Cash</td>
                                    <td>11-7-2014</td>
                                </tr>
                                <tr>
                                    <td>John Doe</td>
                                    <td>Player</td>
                                    <td>300CHF</td>
                                    <td>Cash</td>
                                    <td>11-7-2014</td>
                                </tr>
                                <tr>
                                    <td>John Doe</td>
                                    <td>Player</td>
                                    <td>300CHF</td>
                                    <td>Cash</td>
                                    <td>11-7-2014</td>
                                </tr>
                                <tr>
                                    <td>John Doe</td>
                                    <td>Player</td>
                                    <td>300CHF</td>
                                    <td>Cash</td>
                                    <td>11-7-2014</td>
                                </tr>
                                <tr>
                                    <td>John Doe</td>
                                    <td>Player</td>
                                    <td>300CHF</td>
                                    <td>Cash</td>
                                    <td>11-7-2014</td>
                                </tr>
                                <tr>
                                    <td>John Doe</td>
                                    <td>Player</td>
                                    <td>300CHF</td>
                                    <td>Cash</td>
                                    <td>11-7-2014</td>
                                </tr>
                                <tr>
                                    <td>John Doe</td>
                                    <td>Player</td>
                                    <td>300CHF</td>
                                    <td>Cash</td>
                                    <td>11-7-2014</td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <div class="col-md-4">
                <chartjs-doughnut v-bind:labels="labels" v-bind:datasets="datasets" v-bind:option="option">
                </chartjs-doughnut>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <div class="card card-primary card-outline">
                    <div class="card-header ">
                        <h3 class="card-title ">Last new members with open membership fees</h3>
                        <div class="card-tools">
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="height: 435px;">
                        <table class="table table-head-fixed">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Team</th>
                                    <th>Amount</th>
                                    <th>Type</th>
                                    <th>Date</th>
                                    <th>Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>John Doe</td>
                                    <td>Team</td>
                                    <td>300CHF</td>
                                    <td>Cash</td>
                                    <td>11-7-2014</td>
                                    <td>
                                        <button class="btn btn-success bg-success"> View</button>
                                        <button class="btn btn-info bg-info"> Edit</button>
                                        <button class="btn btn-danger bg-danger">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>John Doe</td>
                                    <td>Player</td>
                                    <td>300CHF</td>
                                    <td>Cash</td>
                                    <td>11-7-2014</td>
                                    <td>
                                        <button class="btn btn-success bg-success"> View</button>
                                        <button class="btn btn-info bg-info"> Edit</button>
                                        <button class="btn btn-danger bg-danger">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>John Doe</td>
                                    <td>Player</td>
                                    <td>300CHF</td>
                                    <td>Cash</td>
                                    <td>11-7-2014</td>
                                    <td>
                                        <button class="btn btn-success bg-success"> View</button>
                                        <button class="btn btn-info bg-info"> Edit</button>
                                        <button class="btn btn-danger bg-danger">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>John Doe</td>
                                    <td>Player</td>
                                    <td>300CHF</td>
                                    <td>Cash</td>
                                    <td>11-7-2014</td>
                                    <td>
                                        <button class="btn btn-success bg-success"> View</button>
                                        <button class="btn btn-info bg-info"> Edit</button>
                                        <button class="btn btn-danger bg-danger">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>John Doe</td>
                                    <td>Player</td>
                                    <td>300CHF</td>
                                    <td>Cash</td>
                                    <td>11-7-2014</td>
                                    <td>
                                        <button class="btn btn-success bg-success"> View</button>
                                        <button class="btn btn-info bg-info"> Edit</button>
                                        <button class="btn btn-danger bg-danger">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>John Doe</td>
                                    <td>Player</td>
                                    <td>300CHF</td>
                                    <td>Cash</td>
                                    <td>11-7-2014</td>
                                    <td>
                                        <button class="btn btn-success bg-success"> View</button>
                                        <button class="btn btn-info bg-info"> Edit</button>
                                        <button class="btn btn-danger bg-danger">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>John Doe</td>
                                    <td>Player</td>
                                    <td>300CHF</td>
                                    <td>Cash</td>
                                    <td>11-7-2014</td>
                                    <td>
                                        <button class="btn btn-success bg-success"> View</button>
                                        <button class="btn btn-info bg-info"> Edit</button>
                                        <button class="btn btn-danger bg-danger">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>John Doe</td>
                                    <td>Player</td>
                                    <td>300CHF</td>
                                    <td>Cash</td>
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
        mounted() {
            console.log('Component mounted.')
        },
    }

</script>
