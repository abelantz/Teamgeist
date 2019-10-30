<template>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Invoices</h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Team</th>
                            <th>Type</th>
                            <th>Amount</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="invoice in invoices" v-bind:key="invoice.id">
                            <td>{{invoice.id}}</td>
                            <td>{{invoice.name}}</td>
                            <td>{{invoice.team}}</td>
                            <td>{{invoice.type}}</td>
                            <td>{{invoice.amount}}</td>
                            <td>{{invoice.date}}</td>
                            <td><a href="{}"></a><button class="btn btn-primary">View</button></td>
                            <td><button class="btn btn-info">Edit</button></td>
                            <td><button class="btn btn-danger">Delete</button></td>
                            <!-- <button>Edit</button>
                            <button>Delete</button> -->
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
                invoices: [
                    {id:'1',name:'John',team:'Barcelona',type:'Player',amount:'CHF 1230',date:'12.12.2019'},
                    {id:'2',name:'John',team:'Barcelona',type:'Coach',amount:'CHF 1230',date:'12.12.2019'},
                    {id:'3',name:'John',team:'Barcelona',type:'Material',amount:'CHF 1230',date:'12.12.2019'},
                    {id:'4',name:'John',team:'Barcelona',type:'Field',amount:'CHF 1230',date:'12.12.2019'},
                    {id:'5',name:'John',team:'Barcelona',type:'Player',amount:'CHF 1230',date:'12.12.2019'},
                ]
            }
        },
        mounted() {
            console.log('Component mounted.')
        },

    }

</script>
