<template>
    <div>
    <div class="modal d-block" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="false">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <slot></slot>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

    }

</script>
