<template>
  <div>
      <div class="row">
          <div class="col-8">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Players</h3>
                <div class="card-tools">
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Age</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>183</td>
                      <td> 
                        <router-link :to="'/playerprofile/' ">Messi</router-link>
                      </td>
                      <td>Middfielder</td>
                      <td>13</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <div class="col-4">
            <div class="card " style="height:455px;">
                    <div class="card-body box-profile text-center">
                        <h5>Picture of Team</h5>
                    </div>
                </div>
          </div>
      </div>
  </div>
</template>

<script>
export default {

}
</script>

