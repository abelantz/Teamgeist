<template>
    <div class="container">
        <h1>Teams</h1>
    </div>
</template>

<script>


   export default {

        data() {
            return {
                teams: [
                    {id:1,name:'Barcelona'}
                ],
                // add:true,
                // edit:false
            }
        },
        // created() {
        //     this.getTeams();
        // },
        methods: {
            // getTeams() {
            //     axios.get('/api/teams')
            //     .then((response) => {
            //         this.teams = response.data.data
            //     });
            // },
            // editTeam(t){
            //     this.add = false;
            //     this.edit = true;
            //     this.team.id = t.id
            //     this.team.name = t.name
            // },
            // updateTeam(id){
            //      axios.put('/api/teams/' + id)
            //     .then((response) => {
            //         this.teams = response.data.data
            //         alert('Product Updated')
            //     });
            // },
            // deleteTeam(id){
            //     axios.delete('/api/teams/' + id)
            //     .then((response) => {
            //         this.teams.splice(id, 1)
            //     });
            // },

        }
   }

</script>
