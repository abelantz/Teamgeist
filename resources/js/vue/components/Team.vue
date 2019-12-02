<template>
    <div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <h3 v-for="t in team" v-bind:key="t.id" class="profile-username text-center">{{t.name}}</h3>
                                <p class="text-muted text-center">Category / Subcategory</p>
                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        <b>Players</b> <a class="float-right">45</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Coaches</b> <a class="float-right">2</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Team members</b> <a class="float-right">47</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-9">
                        <div  class="card card-primary card-outline">
                            <div class="card-header ">
                                <h3 class="card-title">Members</h3>
                                <div class="card-tools">
                                    <button class="btn btn-info bg-info" @click="memberModal">Add New<i
                                            class="fas fa-user-plus "></i></button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div  class="card-body table-responsive p-0">
                                <table  class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th >ID</th>
                                            <th>Name</th>
                                            <th>Type</th>
                                            <th>Registered At</th>
                                            <th>Modify</th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                        <tr  v-for="member in membersId " v-bind:key="member.id" :value="member.id"  >
                                          
                                            <td  >{{member.id}}</td>
                                            <td>{{member.name}}</td>
                                            <td>{{member.type}}</td>
                                            <td>{{member.createdAt}}</td>
                                            <td>
                                                <a href="#"> <i class="fas fa-edit"></i></a>
                                                /
                                                <a href="#"> <i class="fas fa-trash red"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- Modal  -->
                    <!-- Team Modal -->
                    <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="addNew"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addNew">Add Team Member</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <form @submit.prevent="createTeamMember()">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <input v-model="teamForm.name" type="text" name="name" class="form-control"
                                                placeholder="Name"
                                                :class="{ 'is-invalid': teamForm.errors.has('name') }">
                                            <has-error :form="teamForm" field="name"></has-error>
                                        </div>
                                        <div class="form-group">
                                            <select v-model="teamForm.type" @change="onChangeTeam($event)" type="type"
                                                name="type" id="type" class="form-control"
                                                :class="{ 'is-invalid': teamForm.errors.has('type') }">
                                                <option disabled selected value="">Select Type</option>
                                                <option v-for="role in roles" v-bind:key="role.id"
                                                    v-bind:value="role.name">{{role.name}}</option>
                                            </select>
                                            <has-error :form="teamForm" field="type"></has-error>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Create</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
</template>

<script>
    export default {
        props: ['teamId'],
        data() {
            return {
                members: [],
                membersId: [],
                roles: [],
                team: null,
                teamForm: new Form({
                    name: '',
                    type: '',
                    team_id: this.teamId,
                }),
            }
        },
        methods: {
            memberModal() {
                $('#addNew').modal('show');
            },
            loadTeam() {
                axios.get('api/teams/' + this.teamId)
                    .then((response) => this.team = response.data.data);
            },
            loadRoles() {
                axios.get('../api/roles')
                    .then((response) => this.roles = response.data.data);
            },
            onChangeTeam() {
                console.log(event.target.value);
            },
            createTeamMember() {
                this.$Progress.start();
                this.teamForm.post('../api/members')
                    .then(() => {
                        Fire.$emit('AfterCreate');
                        $('#addNew').modal('hide');
                        toast.fire({
                            type: 'success',
                            title: 'Team Member created succesfully'
                        });
                        this.$Progress.finish();
                    })
                    .catch(() => {
                        this.$Progress.fail();
                    })
            },
          
            loadMembers()  {
                axios.get('../api/members')
                .then((response) => {
                  this.members = response.data.data
                })
            },
            loadMembersById(){
                this.membersId = this.members.filter((member) => {
                    return member.team_id == this.teamId;
              });  
              
            },
            
            
        },
      

        created() {
            this.loadTeam();
            this.loadRoles();
            this.loadMembers();
            this.loadMembersById();
            
            Fire.$on('AfterCreate', () => {
                this.loadTeam();
                this.loadRoles();
                this.loadMembers();
                this.loadMembersById();
            });
        },
        
    }

</script>
