<template>
    <div>
        <h1>
            Memberships
        </h1>

        <div class="row">
            <div class="col-md-8">
                <button class="btn btn-primary bg-primary" @click="typeModal">New Member Type</button>
                <button class="btn btn-primary bg-primary" @click="memberModal">New Member</button>
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
                                <tr v-for="members in memberships" v-bind:key="members.id">
                                    <td>{{ members.name }}</td>
                                    <td>{{ members.team_id}}</td>
                                    <td>CHF 1600</td>
                                    <td>{{ members.type_id}}</td>
                                    <td>{{ memers.created_at | regDate }}</td>
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

        <!-- Member Type Modal  -->
        <div class="modal  fade" id="addType" tabindex="-1" role="dialog" aria-labelledby="addType" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header card-primary card-outline">
                        <h5 class="modal-title" id="addType">Add Member Type</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form @submit.prevent="createMemberType()">
                            <div class="modal-body">
                                <div class="form-group">
                                    <input v-model="formMCategory.title" type="text" name="title" class="form-control"
                                        placeholder="Title"
                                        :class="{ 'is-invalid': formMCategory.errors.has('title') }">
                                    <has-error :form="formMCategory" field="name"></has-error>
                                </div>
                                <div class="form-group">
                                    <input v-model="formMCategory.amount" type="number" name="amount"
                                        class="form-control" placeholder="Amount"
                                        :class="{ 'is-invalid': formMCategory.errors.has('amount') }">
                                    <has-error :form="formMCategory" field="amount"></has-error>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Membership Modal -->

        <div class="modal  fade" id="addMember" tabindex="-1" role="dialog" aria-labelledby="addMember"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header card-primary card-outline">
                        <h5 class="modal-title" id="addMember">Add Member </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form @submit.prevent="createMember()">
                            <div class="modal-body">
                                <div class="form-group">
                                    <input v-model="formMembership.name" type="text" name="name" class="form-control"
                                        placeholder="Title"
                                        :class="{ 'is-invalid': formMembership.errors.has('name') }">
                                    <has-error :form="formMembership" field="name"></has-error>
                                </div>
                                <div class="form-group">
                                    <select v-model="formMembership.type_id" @change="onChange($event)" type="type"
                                        title="type" id="type" class="form-control"
                                        :class="{ 'is-invalid': formMembership.errors.has('type') }">
                                        <option disabled value="">Select Type</option>
                                        <option v-for="mcategory in mcategories" v-bind:key="mcategory.id"
                                            v-bind:value="mcategory.id">{{mcategory.title}}</option>
                                    </select>
                                    <has-error :form="formMembership" field=""></has-error>
                                </div>
                                <div class="form-group">
                                    <select v-model="formMembership.team_id" @change="onChangeTeam($event)" type="type" name="type" id="type" class="form-control">
                                     <option disabled selected value="">Select Team</option>
                                    <option  v-for="team in teams" v-bind:key="team.id" v-bind:value="team.id">{{team.name}}</option>
                                </select>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input v-model="formMembership.paid" class="form-check-input" type="checkbox">
                                        <label class="form-check-label">Paid</label>
                                        <has-error :form="formMembership" field="checkbox"></has-error>
                                    </div>
                                    <div class="form-check">
                                        <input v-model="formMembership.free" class="form-check-input" type="checkbox" >
                                        <label class="form-check-label">Free</label>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Create</button>
                            </div>
                        </form>
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
                },
                memberships:[],
                mcategories: [],
                teams: [],
                formMCategory: new Form({
                    id: '',
                    title: '',
                    amount: ''
                }),
                formMembership: new Form({
                    id: '',
                    name: '',
                    type_id: '',
                    team_id: '',
                    paid: false,
                    free: false
                }),
            }
        },
        methods: {
            typeModal() {
                this.formMCategory.reset();
                $('#addType').modal('show');
            },
            memberModal() {
                this.formMembership.reset();
                $('#addMember').modal('show');
            },
            createMemberType() {
                this.$Progress.start();
                this.formMCategory.post('api/mcategories')
                    .then(() => {
                        Fire.$emit('AfterCreate');
                        $('#addType').modal('hide');
                        toast.fire({
                            type: 'success',
                            title: 'Team created succesfully'
                        });
                        this.$Progress.finish();
                    })
                    .catch(() => {
                        this.$Progress.fail();
                    })
            },
            createMember() {
                this.$Progress.start();
                this.formMembership.post('api/memberships')
                    .then(() => {
                        Fire.$emit('AfterCreate');
                        $('#addType').modal('hide');
                        toast.fire({
                            type: 'success',
                            title: 'Team created succesfully'
                        });
                        this.$Progress.finish();
                    })
                    .catch(() => {
                        this.$Progress.fail();
                    })
            },
            loadMemberType(){
                axios.get('api/mcategories')
                    .then((response) => (this.mcategories = response.data.data))
            },
            loadMemberships(){
                axios.get('api/memberships')
                    .then((response) => (this.memberships = response.data.data))
            },
            loadTeams(){
                axios.get('api/teams')
                    .then((response) => (this.teams = response.data.data))
            },
            onChange(event){
            console.log(event.target.value);
          },
            onChangeTeam($event){
                console.log(event.target.value);
            },
            createMemberType() {
                this.$Progress.start();
                this.formMCategory.post('api/mcategories')
                    .then(() => {
                        Fire.$emit('AfterCreate');
                        $('#addType').modal('hide');
                        toast.fire({
                            type: 'success',
                            title: 'Team created succesfully'
                        });
                        this.$Progress.finish();
                    })
                    .catch(() => {
                        this.$Progress.fail();
                    })
            },
        },
        created() {
            this.loadMemberships();
            this.loadMemberType();
            this.loadTeams();
        },
        mounted() {
            console.log('Component mounted.')
        },
    }

</script>
