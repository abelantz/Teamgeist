<template>
    <div>
        <h1>Player Profile</h1>
        <div class="row">
            <div class="col-8">
                <div class="card card-outline card-dark ">
                    <div class="card-body box-profile">
                        <h3 class="profile-username text-center">{{ member.membership.user.name }}</h3>
                        <p class="text-muted text-center">{{ member.type }}</p>
                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b> Team Name</b> <a class="float-right">{{ member.team.name }}</a>
                            </li>
                            <li class="list-group-item">
                                <b> Age </b> <a class="float-right">??</a>
                            </li>
                            <li class="list-group-item">
                                <b>Nationality</b> <a class="float-right">??</a>
                            </li>
                            <li class="list-group-item">
                                <b>Address</b> <a class="float-right">???</a>
                            </li>
                            <li class="list-group-item">
                                <b>Phone </b> <a class="float-right">???</a>
                            </li>
                            <li class="list-group-item">
                                <b>Email </b> <a class="float-right">{{ member.membership.user.email }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card card-outline card-dark" style="height: 425px">
                    <div class="card-body box-profile text-center" style="max-height: 100%">
                        <h5>Picture</h5>
                        <img src="http://www.theyardne.com/uploads/1/2/4/9/124997724/blank-profile-picture_orig.jpg" alt="" style="height: 300px">
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</template>

<script>
    export default {
        props: ['profileId'],
        data() {
            return {
                profile: {}
            }
        },

        computed: {
            member() {
                return this.$store.state.members.find(member => {
                   return member.id == this.profileId
                }) || '';

            }
        },

        methods: {
        },
    }

</script>

<style>

</style>
