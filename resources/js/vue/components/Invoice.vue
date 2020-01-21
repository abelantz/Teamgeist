<template>
    <div>
        <h1>
            Invoice
        </h1>
        <div class="row">
            <div class="col-12">
                <div class="card card-success card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Payments of memberships</h3>
                        <div class="card-tools">
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" >
                        <table class="table table-head-fixed">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="invoice in invoices" v-bind:key="invoice.id">
                                    <td>{{ invoice.name }}</td>
                                    <td>${{ invoice.amount }}</td>
                                    <td><span class="tag tag-success">{{ invoice.paid == 0 ? 'Pending' : 'Paid'}}</span></td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="#" @click="updateInvoice(invoice.id)" 
                                                        class="btn btn-success bg-success" 
                                                        v-bind:class="{ disabled: invoice.paid}">Paid</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>

    </div>
</template>

<script>
    export default {

        data() {
            return {
                invoice: {
                    status: 1
                }
            }
        },

        computed: {
            invoices() {
                return this.$store.state.invoices
            }
        },

        methods: {
            getInvoiceMembership(membershipId) {
                return this.$store.state.memberships.find(membership => {
                    return membership.id == membershipId
                }) || '';
            },
            getInvoiceUser(userId) {
                return this.$store.state.users.find(user => {
                    return user.id == userId
                }) || '';
            },
            detailsModal(){
                $('#viewDetails').modal('show');
            },
            updateInvoice(invoiceId) {
                this.$store.dispatch('updateInvoice', invoiceId)
                            .then(res => console.log('invoice updated'));
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
    }

</script>
