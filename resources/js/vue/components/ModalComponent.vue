<template>
    <div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content card-primary">
                    <div class="card-header">
                        <h5 class="card-title" id="exampleModalLabel">New Club</h5>

                    </div>
                    <div class="card-body">
                        <slot></slot>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Add Club</button>
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
