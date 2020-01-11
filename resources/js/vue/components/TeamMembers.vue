<template>
    <div>
        <h1>Team Members</h1>
        <div class="row">
            <div class="col-12">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Team Members</h3>

                        <div class="card-tools">
                            <button class="btn btn-info bg-info" @click="newModal"> Add New <i
                                    class="fas fa-user-plus "></i></button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Team</th>
                                    <th>Type</th>
                                    <th>Registered At</th>
                                    <th>Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="member in members" v-bind:key="member.id">
                                    <td>{{member.id}}</td>
                                    <td>{{member.name | upText }}</td>
                                    <td>{{member.team_id}}</td>
                                    <td><span class="tag tag-success">{{member.type}}</span></td>
                                    <td>{{member.created_at | regDate}}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="#" @click="editMember(member.id)" 
                                                        class="btn btn-info bg-info"><i class="fas fa-edit"></i></a>
                                            <a href="#" @click="deleteMember(member.id)" 
                                                        class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal  -->
        <div class="modal fade" id="createMemberModal" tabindex="-1" role="dialog" aria-labelledby="addNew" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addNew">Create Member</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="createMember">
                        <div class="modal-body">
                            <div class="form-group">
                                <input v-model="member.name" type="text" name="name" class="form-control" 
                                    placeholder="Name">
                            </div>
                            <div class="form-group">
                                <select v-model="member.team_id" type="type" name="type"
                                    id="type" class="form-control">
                                    <option disabled selected value="">Select Team</option>
                                    <option v-for="team in teams" v-bind:key="team.id" v-bind:value="team.id">
                                        {{ team.name }}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select v-model="member.membership_id" type="type" name="type"
                                    id="type" class="form-control">
                                    <option disabled selected value="">Select Membership</option>
                                    <option v-for="membership in memberships" v-bind:key="membership.id" v-bind:value="membership.id">
                                        {{ getMembershipUser(membership.user_id).name }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-danger" @click="hideModal">Close</button>
                            <button type="submit" class="btn btn-success">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="editMemberModal" tabindex="-1" role="dialog" aria-labelledby="addNew" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Member</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="updateMember">
                        <div class="modal-body">
                            <div class="form-group">
                                <input v-model="member.name" type="text" name="name" class="form-control" 
                                    placeholder="Name">
                            </div>
                            <div class="form-group">
                                <select v-model="member.team_id" type="text" name="team"
                                    id="team" class="form-control">
                                    <option disabled selected value="">Select Team</option>
                                    <option v-for="team in teams" v-bind:key="team.id" v-bind:value="team.id">
                                        {{ team.name }}</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select v-model="member.membership_id" type="text" name="membership"
                                    id="membership" class="form-control">
                                    <option disabled selected value="">Select Membership</option>
                                    <option v-for="membership in memberships" v-bind:key="membership.id" v-bind:value="membership.id">
                                        {{ getMembershipUser(membership.user_id).name }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-danger" @click="hideModal">Close</button>
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
</template>

<script>
    export default {
        data() {
            return {
                member: {
                    name: '',
                    team_id: '',
                    membership_id: '',
                }
            }
        },

        computed: {
            members() {
                return this.$store.state.members
            },
            teams() {
                return this.$store.state.teams
            },
            memberships() {
                return this.$store.state.memberships
            },
        },

        methods: {
            getMembershipUser(userId) {
                return this.$store.state.users.find(user => {
                    return user.id == userId
                }) || '';
            },

            newModal() {
                $('#createMemberModal').modal('show');
            },

            hideModal() {
                $('#createMemberModal').modal('hide');
                $('#editMemberModal').modal('hide');
                this.member = {}
            },

            editMember(memberId) {
                $('#editMemberModal').modal('show');
                this.member = this.members.find(member => {
                    return member.id == memberId
                });
            },

            createMember() {
                this.$store.dispatch('createMember', this.member)
                            .then(res => $('#addNew').modal('hide'));
            },

            updateMember() {
                console.log('UPDATE', this.member);
            },

        },
    }

</script>
