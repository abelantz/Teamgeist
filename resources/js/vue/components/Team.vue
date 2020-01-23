<template>
    <div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <h3 class="profile-username text-center">
                                </h3>
                            <p class="text-muted text-center">{{team.category.title}} / {{team.subcategory.title}}</p>
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Players</b> <a class="float-right">{{ team.players }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Coaches</b> <a class="float-right">{{ team.coaches }}</a>
                                </li>
                                <li class="list-group-item">
                                    <b>Asstistants</b> <a class="float-right">{{ team.assistants }}</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-9">
                    <div class="card card-primary card-outline">
                        <div class="card-header ">
                            <h3 class="card-title">Members</h3>
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
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="member in members" v-bind:key="member.id">
                                    <td>{{ member.id}}</td>
                                    <td><router-link :to="'/profile/' + member.id ">{{ member.membership.user.name | upText }}</router-link></td>
                                    <td>{{ member.team.name || '' }}</td>
                                    <td>{{ member.type }}</td>
                                    <td>{{ member.created_at | regDate }}</td>
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

    </div>
</template>

<script>
    export default {
        props: ['teamId'],
        data() {
            return {
                editMode: false,
                team_members:{
                    id: '',
                    name: '',
                    type: '',
                    team_id: this.teamId,
                }
            }
        },

        computed: {
            team() {
                return this.$store.state.teams.find(team => {
                    return team.id == this.teamId
                }) || ''
            },
            members() {
                return this.$store.state.members.filter(member => {
                    return member.team_id == this.teamId
                }) || ''
            },
        },

        methods: {
        },

    }

</script>
