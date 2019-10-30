<template>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Members</h3>

                    <div class="card-tools">

                    </div>
                </div>
                <div class="card-body table-responsive p-0 ">
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
                            <tr v-for="team in teams" v-bind:key="team.id">
                                <td>
                                    {{ team.id }}</td>
                                <td>
                                    {{ team.name }}
                                </td>
                                <td><a v-bind:href="'/teams/' + team.id" class="btn btn-primary">View</a></td>
                                <td><button class="btn btn-info">Edit</button></td>
                                <td><button class="btn btn-danger">Delete</button></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    export default {

        data() {
            return {
                teams: []
            }
        },
        created() {
            this.getTeams();
        },
        methods: {
            getTeams() {
                axios.get('/api/teams')
                .then((response) => {
                    this.teams = response.data.data
                });
            }
        }

    }

</script>
