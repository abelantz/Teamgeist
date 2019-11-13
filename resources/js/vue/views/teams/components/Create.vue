<template>
    <div>
        <button type="button" class="btn btn-primary" v-on:click="toggleModal">
            New Team
        </button>

        <!-- Modal -->
        <modal-component v-if="isVisible">
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
                        <button type="button" class="btn btn-secondary" v-on:click="toggleModal">Close</button>
                        <button  type="button" class="btn btn-primary" v-on:click="createTeam">Add Team</button>
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
                isVisible: false,
            }
        },

        methods: {
            createTeam() {
                axios.post('/api/teams', {
                    name: this.name,
                })
                .then((response) => {
                    this.toggleModal()
                    this.name = ''
                    this.$emit('created', response.data.data);
                })
                .catch(function (error) {
                    console.log(error)
                });
            },

            toggleModal() {
                this.isVisible = !this.isVisible
            }
        },


        components: {
            ModalComponent
        }
    }

</script>
