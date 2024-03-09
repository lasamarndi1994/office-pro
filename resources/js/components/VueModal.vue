<template>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" :class="size">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Get this party started?</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   <slot></slot>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-text-primary me-2" type="button" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-raised-primary me-2" type="button">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
defineProps({
  size: String,
})
</script>