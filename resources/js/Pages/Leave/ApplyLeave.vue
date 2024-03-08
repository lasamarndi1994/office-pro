<template>
    <app-layout>
        <div class="d-flex justify-content-between">
            <div>
                <h2 class="font-monospace text-expanded text-uppercase fs-6">Leaves</h2>
            </div>
            <div>
                <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button"><i
                        class="material-icons">
                        add
                    </i>Apply Leave</button>
            </div>
        </div>
        <div class="mt-3">
            <div class="row ">
                <div class="col-lg-3 col-md-6">
                    <div class="card card-raised border-start border-4 border-primary">
                        <div class="card-body px-4 text-center">
                            <div class="overline text-muted mb-1">Annual Leave</div>
                            <div class="">
                                <div class="display-6 me-3">12</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-raised border-start border-4 border-secondary">
                        <div class="card-body px-4 text-center">
                            <div class="overline text-muted mb-1">Medical Leave</div>
                            <div class="">
                                <div class="display-6 me-3">0</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-raised border-start border-4 border-info">
                        <div class="card-body px-4 text-center">
                            <div class="overline text-muted mb-1">Other Leave</div>
                            <div class="">
                                <div class="display-6 me-3">10</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card card-raised border-start border-4 border-success">
                        <div class="card-body px-4 text-center">
                            <div class="overline text-muted mb-1">Remaining Leave</div>
                            <div class="">
                                <div class="display-6 me-3 text-center">10</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <vue-modal>

            </vue-modal>
        </div>
    </app-layout>
</template>

<script setup>
import VueModal from '../../components/VueModal.vue';
</script>