<template>
    <div>
        <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                

                <h3 class="profile-username text-center">FC Barca</h3>

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

            <!-- About Me Box -->
            
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Members</a></li>
                  <!-- <li class="nav-item"><a class="nav-link active" href="#timeline" data-toggle="tab">Timeline</a></li> -->
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Add Member</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane active" id="activity">
                    <!-- Post -->
                    
                    <!-- /.post -->

                    <!-- Post -->
                    
                    <!-- /.post -->

                    <!-- Post -->
                    
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                 
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputName" placeholder="Name">
                        </div>
                      </div>
                      <!-- <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                      </div> -->
                     <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Type</label>
                        <div class="col-sm-10">
                          <select class="form-control">
                          <option selected disabled>Select Type</option>    
                          <option>Coach</option>
                          <option>Player</option>
                          <option>Team Member</option>
                        </select>
                        </div>
                      </div>
                      
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    </div>
</template>

<script>


    export default {
    props: ['teamId'],
    data() {
        return {
            team: null,
            teamForm: new Form({
                    name:'',
                    type: '',
                    team: this.teamId,
                }),
        }
    },

    

    methods: {
        loadTeam() {
            axios.get('/api/teams/' + this.teamId)
                 .then((response) => this.team = response.data.data);
        },
    },

    created() {
        this.loadTeam();
    },
    }

</script>
