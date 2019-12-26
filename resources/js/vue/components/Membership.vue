<template>
    <div>
        <h1>
            Memberships
        </h1>

        <div class="row">
            <div class="col-md-8">
                <button class="btn btn-primary bg-primary" @click="showCreateMemberCategoryModal">New Member Category</button>
                <button class="btn btn-primary bg-primary" @click="showCreateMembershipModal">New Member</button>
            </div>
            <div class="col-md-4  text-right">
                <div class="form-group">
                    <select v-model="membership.type_id" class="form-control">
                        <option disabled value="">Select Type</option>
                        <option v-for="category in memberCategories" v-bind:key="category.id"
                            v-bind:value="category.id">{{ category.title }}</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row pt-3">
            <div class="col-12 text-center">
                <div class="card card-primary card-outline">
                    <div class="card-header ">
                        <h3 class="card-title ">Last new members with open membership fees</h3>
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
                                    <th>Amount</th>
                                    <th>Type</th>
                                    <th>Date</th>
                                    <th>Paid</th>
                                    <th>Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="members in memberships" v-bind:key="members.id">
                                    <td>{{ members.name }}</td>
                                    <td>{{ members.team_id}}</td>
                                    <td>CHF 1600</td>
                                    <td>{{ members.type_id}}</td>
                                    <td>{{ members.created_at | regDate }}</td>
                                    <td>{{ members.paid }}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="#" class="btn btn-success bg-success"><i class="fas fa-eye"></i></a>
                                            <a href="#" class="btn btn-info bg-info"><i class="fas fa-edit"></i></a>
                                            <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        </div>
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
                        <form @submit.prevent="createMemberCategory">
                            <div class="modal-body">
                                <div class="form-group">
                                    <input v-model="memberCategory.title" type="text" name="title" class="form-control"
                                        placeholder="Title">
                                </div>
                                <div class="form-group">
                                    <input v-model="memberCategory.amount" type="number" name="amount"
                                        class="form-control" placeholder="Amount">
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
                        <form @submit.prevent="createMembership">
                            <div class="modal-body">
                                <div class="form-group">
                                    <input v-model="membership.name" type="text" name="name" class="form-control"
                                        placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input v-model="membership.email" type="email" name="email" class="form-control"
                                        placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input v-model="membership.password" type="text" name="password" class="form-control"
                                        placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input v-model="membership.password_confirmation" type="text" name="password_confirmation" class="form-control"
                                        placeholder="Confirm password">
                                </div>
                                <div class="form-group">
                                    <select v-model="membership.role_id" title="role" id="role" class="form-control">
                                        <option disabled selected value="">Select Role</option>
                                        <option v-for="role in roles" 
                                                v-bind:key="role.id"
                                                v-bind:value="role.id">{{ role.name }}</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select v-model="membership.members_categories_id" title="type" id="type" class="form-control">
                                        <option disabled selected value="">Select Member Type</option>
                                        <option v-for="category in memberCategories" 
                                                v-bind:key="category.id"
                                                v-bind:value="category.id">{{ category.title }}</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select v-model="membership.team_id" name="team" id="team" class="form-control">
                                        <option disabled selected value="">Select Team</option>
                                        <option v-for="team in teams" 
                                                v-bind:key="team.id" 
                                                v-bind:value="team.id">{{ team.name }}</option>
                                    </select>
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
                memberCategory: {
                    title: '',
                    amount: ''
                },
                membership: {
                    name: '',
                    email: '',
                    password: '',
                    password_confirmation: '',
                    members_categories_id: '',
                    team_id: '',
                    role_id: '',
                },
            }
        },

        computed: {
            memberships() {
                return this.$store.state.memberships
            },
            memberCategories() {
                return this.$store.state.memberCategories
            },
            teams() {
                return this.$store.state.teams
            },
            roles() {
                return this.$store.state.roles
            }
        },

        methods: {
            showCreateMemberCategoryModal() {
                $('#addType').modal('show');
            },
            showCreateMembershipModal() {
                $('#addMember').modal('show');
            },
            createMembership() {
                this.$store.dispatch('createMembership', this.membership)
                            .then(res => $('#addMember').modal('hide'));
            },
            createMemberCategory() {
                this.$store.dispatch('createMemberCategory', this.memberCategory)
                            .then(res => $('#addType').modal('hide'));
            },
        },
        
    }

</script>
