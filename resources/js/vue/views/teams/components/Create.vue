<template>
    <div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
            @click="showModal = true">
            New Team
        </button>

        <!-- Modal -->
        <modal-component v-if="showModal">
             <div class="card-primary">
                <div class="card-header">
                    <div class="card-title">
                        Add Team
                    </div>
                </div>
                <form role="form">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Team Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Team Name" v-model="name">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button  type="button" class="btn btn-primary" @click.prevent="createTeam">Add Team</button>
                    </div>
                </form>
            </div>

        </modal-component>
    </div>
</template>

<script>
    import ModalComponent from '../../../components/ModalComponent.vue'

    export default {

        data() {
            return {
                name: '',
            }
        },

        methods: {
            createTeam() {
                axios.post('http://localhost:8888/teamgeist/public/api/teams', {
                    name: this.name,
                })
                .then(function (response) {

                    console.log(response);

                })
                .catch(function (error) {
                    console.log(error);
                });
            },

            showModal() {
                false
            },
        },


        components: {
            ModalComponent
        }
    }

</script>
