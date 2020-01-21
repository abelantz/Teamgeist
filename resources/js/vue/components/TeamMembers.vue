<template>
    <div>
        <h1>Team Members</h1>
        <div class="row">
            <div class="col-12">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Team Members</h3>

                        <div class="card-tools">
                            <button class="btn btn-info bg-info" @click="showCreateMemberModal"> Add New <i
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
                                    <td>{{ member.id}}</td>
                                    <td>{{ member.membership.user.name || '' | upText }}</td>
                                    <td>{{ member.team.name || '' }}</td>
                                    <td>{{ member.type }}</td>
                                    <td>{{ member.created_at | regDate }}</td>
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
                                <select v-model="member.membership_id" type="text" name="membership"
                                    id="membership" class="form-control">
                                    <option disabled selected value="">Select Membership</option>
                                    <option v-for="membership in memberships" v-bind:key="membership.id" v-bind:value="membership.id">
                                        {{ membership.user.name }}</option>
                                </select>
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
                                <select v-model="member.type" type="text" name="type"
                                    id="type" class="form-control">
                                    <option disabled selected value="">Select Type</option>
                                    <option value="player">Player</option>
                                    <option value="coach">Coach</option>
                                    <option value="assistant">Assistant</option>
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
                                <select v-model="member.membership_id" type="text" name="membership"
                                    id="membership" class="form-control">
                                    <option disabled selected value="">Select Membership</option>
                                    <option v-for="membership in memberships" v-bind:key="membership.id" v-bind:value="membership.id">
                                        {{ membership.user.name }}</option>
                                </select>
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
                                <select v-model="member.type" type="text" name="type"
                                    id="type" class="form-control">
                                    <option disabled selected value="">Select Type</option>
                                    <option value="player">Player</option>
                                    <option value="coach">Coach</option>
                                    <option value="assistant">Assistant</option>
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
                    type: '',
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

            showCreateMemberModal() {
                $('#createMemberModal').modal('show');
            },

            hideModal() {
                $('#createMemberModal').modal('hide');
                $('#editMemberModal').modal('hide');
                this.member = {}
            },

            editMember(memberId) {
                $('#editMemberModal').modal('show');
                var member = this.members.find(member => {
                    return member.id == memberId
                });
                this.member = { ...member };
            },

            createMember() {
                this.$store.dispatch('createMember', this.member)
                            .then(res => this.hideModal());
            },

            updateMember() {
                this.$store.dispatch('updateMember', this.member)
                            .then(res => this.hideModal());
            },

        },
    }

</script>
