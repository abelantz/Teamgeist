<template>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Teams</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right"
                                placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
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
                            <tr v-for="team in teams" v-bind:key="team.id">
                                <td>
                                    {{team.id}}</td>
                                <td>
                                    {{team.name}}
                                </td>
                                <td><a href="{}"></a><button class="btn btn-primary">View</button></td>
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

        data: function () {
            return {
                teams: [{
                        id: '1',
                        name: 'Barcelona'
                    },
                    {
                        id: '2',
                        name: 'Liverpool'
                    }
                ]
            }
        },
        mounted() {
            console.log('Component mounted.')
        },

    }

</script>
