<template>
    <div class="modal fade" id="vueModal" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class=" modal-dialog modal-dialog-centered modal-dialog-scrollable" :class="size">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="vueModalLabel">

                        <slot name="title"></slot>
                    </h5>
                    <button class="btn-close" type="button" @click="closeModal"></button>
                </div>
                <div class="modal-body">
                    <slot name="body"></slot>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { Modal } from 'bootstrap';
import { onMounted, ref, reactive, watchEffect } from 'vue';
const emit = defineEmits(["vue-modal-close"]);

const props = defineProps({

    size: {
        type: String,
        default: 'modal-lg'
    },
    isOpenModal: {
        type: Boolean,
        default: false
    }
})


const state = reactive({
    closeModalState: null,
})

onMounted(() => {
    state.closeModalState = new Modal(document.getElementById('vueModal'));
})
watchEffect(() => {
    if (state.closeModalState) {
        props.isOpenModal ? state.closeModalState.show() : state.closeModalState.hide();
    }
})
const closeModal = () => {
    emit("vue-modal-close");
}



</script>

<style>
/* body.modal-open {
    overflow: visible !important;
    position: absolute !important;
    padding-right: 0 !important;
    width: 100% !important;
    height: 100% !important;
} */
</style>