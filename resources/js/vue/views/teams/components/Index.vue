<template>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Teams</h3>
                </div>
                <div class="card-body table-responsive p-0 ">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(team, index) in teams" v-bind:key="team.id">
                                <td>
                                    {{ team.id }}</td>
                                <td>
                                    {{ team.name }}
                                </td>
                                <td><a v-bind:href="'/teamgeist/public/teams/' + team.id" class="btn btn-primary">View</a></td>
                                <td><button @click.prevent="editTeam(team)" class="btn btn-info">Edit</button></td>
                                <td><button @click="deleteTeam(team.id, index)" class="btn btn-danger">Delete</button></td>
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
                teams: [],
                add:true,
                edit:false
            }
        },
        created() {
            this.getTeams();
            this.$parent.$on('addToTable', this.addToTable)
        },
        methods: {
            addToTable(team) {
                this.teams.push(team)
            },
            getTeams() {
                axios.get('/api/teams')
                .then((response) => {
                    this.teams = response.data.data
                });
            },
            editTeam(t){
                this.add = false;
                this.edit = true;
                this.team.id = t.id
                this.team.name = t.name
            },
            updateTeam(id){
                 axios.put('/api/teams/' + id)
                .then((response) => {
                    this.teams = response.data.data
                    alert('Product Updated')
                });
            },
            deleteTeam(id, index){
                axios.delete('/api/teams/' + id)
                .then((response) => {
                    this.teams.splice(index, 1)
                });
            },
            showModal(){
                false
            }
        }

    }

</script>
