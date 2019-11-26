<template>
    <div>
        <h1>
           {{team.name}}
        </h1>
    </div>
</template>

<script>


    export default {
    props: ['teamId'],
    data() {
        return {
            team: [],
        }
    },

    mounted() {
        this.loadTeam();
    },

    methods: {
        loadTeam() {
            axios.get('/api/team/' + this.teamId)
                 .then(response => this.team = response.data.data);
        },
    },
    }

</script>
