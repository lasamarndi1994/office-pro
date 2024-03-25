<template>
    <app-layout>
        <v-modal :isOpenModal="isOpenModal" @vue-modal-close="closeModal">

        </v-modal>
        <div class="d-flex justify-content-between">
            <div>
                <h2 class="font-monospace text-expanded text-uppercase fs-6">Leaves</h2>
            </div>
            <div>
                <button class="btn btn-dark" @click="isOpenModal = true" type="button"><i class="material-icons">
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
            <vue-modal :size="'modal-lg'">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-block mb-3">
                                <mwc-select class="w-100" label="Leave Type" outlined>
                                    <mwc-list-item value="0">Item 0</mwc-list-item>
                                    <mwc-list-item value="1">Item 1</mwc-list-item>
                                    <mwc-list-item value="2">Item 2</mwc-list-item>
                                    <mwc-list-item value="3">Item 3</mwc-list-item>
                                </mwc-select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <mwc-textfield class="w-100" label="Available Balance" outlined
                                    disabled></mwc-textfield>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-block mb-3">

                                <mwc-textfield class="w-100" label="From Date" outlined id="filled"></mwc-textfield>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <mwc-select class="w-100" label="Leave Value" outlined>
                                    <mwc-list-item value="0">Item 0</mwc-list-item>
                                    <mwc-list-item value="1">Item 1</mwc-list-item>
                                    <mwc-list-item value="2">Item 2</mwc-list-item>
                                    <mwc-list-item value="3">Item 3</mwc-list-item>
                                </mwc-select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <mwc-textfield class="w-100" label="To Date" outlined></mwc-textfield>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="input-block mb-3">
                                <mwc-select class="w-100" label="Leave Value" outlined>
                                    <mwc-list-item value="0">Item 0</mwc-list-item>
                                    <mwc-list-item value="1">Item 1</mwc-list-item>
                                    <mwc-list-item value="2">Item 2</mwc-list-item>
                                    <mwc-list-item value="3">Item 3</mwc-list-item>
                                </mwc-select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input-block mb-3">
                                <mwc-textarea class="w-100" label="Remarks" outlined></mwc-textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input-block mb-3">
                                <label class="form-label" for="formFileLg">Attachement</label>
                                <input class="form-control form-control-lg" id="formFileLg" type="file">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="input-block mb-3">
                                <mwc-textfield class="w-100" label="Search Employee" outlined
                                    icon="person"></mwc-textfield>
                            </div>
                        </div>
                    </div>
                </form>
            </vue-modal>
        </div>
        <div class="card card-raised overflow-hidden mt-4">
            <div class="card-body p-0">
                <!-- Payment history table-->
                <div class="table-responsive">
                    <table class="table table-striped table-hover mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Leave Type</th>
                                <th scope="col">From</th>
                                <th scope="col">To</th>
                                <th scope="col">No of Days</th>
                                <th scope="col">Reason</th>
                                <th scope="col">Status</th>
                                <th scope="col">Approved by</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="i in 5">
                                <td>
                                    Casual Leave
                                </td>

                                <td>24 Feb 2019</td>
                                <td>26 Feb 2019</td>
                                <td>2 days</td>
                                <td>Going to Hospital</td>
                                <td><span :class="[i % 2 == 0 ? 'badge bg-secondary' : 'badge bg-primary']">
                                        Approved</span></td>

                                <td>
                                    <h2 class="table-avatar">
                                        <a href="profile.html" class="avatar">
                                            <img src="https://smarthr.dreamstechnologies.com/html/template/assets/img/profiles/avatar-12.jpg"
                                                alt="User Image">

                                            Bernardo Galaviz</a>
                                    </h2>
                                </td>
                                <td>
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#edit_leave"><span class="material-icons m-r-5">
                                                    edit
                                                </span> Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#delete_approve"><span class="material-icons m-r-5">
                                                    delete
                                                </span>
                                                Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script setup>

import { ref, onMounted } from 'vue';
const isOpenModal = ref(false);

const closeModal = () => {
    isOpenModal.value = false;
}
</script>

<style scoped>
.table th,
td {
    white-space: nowrap;
    vertical-align: middle;
}

.table td {
    padding-right: 2rem;
}

.table-avatar a.avatar {
    line-height: normal;
}

.table td h2 {
    display: inline-block;
    font-size: 14px;
    font-weight: 400;
    margin: 0rem;

    vertical-align: right;
}


.avatar>img {
    width: 20%;
    height: 100%;
    -o-object-fit: cover;
    object-fit: cover;
    border-radius: 50%;
}

a {
    text-decoration: none;

}

.avatar img {
    max-width: 100%;
    height: auto;
    vertical-align: middle;
}
</style>