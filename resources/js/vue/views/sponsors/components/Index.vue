<template>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Sponsors</h3>

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
                            <th>Type</th>
                            <th>Due to (duration)</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="sponsor in sponsors" v-bind:key="sponsor.id">
                            <td>{{sponsor.id}}</td>
                            <td>{{sponsor.name}}</td>
                            <td>{{sponsor.type}}</td>
                            <td>{{sponsor.duration}}</td>
                            <td>{{sponsor.amount}}</td>
                            <td><button class="btn btn-primary">View</button></td>
                            <td><button class="btn btn-info">Edit</button></td>
                            <td><button class="btn btn-danger">Delete</button></td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>

</template>

<script>


    export default {
        data: function(){
            return{
                sponsors:[
                    {id:'112',name:'Sponsor 1',type:'General',duration:'21.12.2022',amount:'CHF 1500'},
                    {id:'113',name:'Sponsor 2',type:'Ball',duration:'21.12.2022',amount:'CHF 1500'},
                    {id:'114',name:'Sponsor 3',type:'Band',duration:'21.12.2022',amount:'CHF 1500'},
                    {id:'115',name:'Sponsor 4',type:'Trickot',duration:'21.12.2022',amount:'CHF 1500'},
                    {id:'116',name:'Sponsor 5',type:'Bag',duration:'21.12.2022',amount:'CHF 1500'}
                ]
            }
        },
        mounted() {
            console.log('Component mounted.')
        },

    }

</script>
