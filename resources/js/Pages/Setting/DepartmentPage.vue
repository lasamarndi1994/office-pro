<template>
    <app-layout>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="departmentModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-md  modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="departmentModalLabel">Add Department</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form @submit.prevent="store()" id="form">
                        <div class="modal-body mt-2">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-block mb-3">
                                        <div>
                                            <mwc-textfield class="w-100" label="Department Name *" outlined
                                                id="department_name"></mwc-textfield>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-text-primary me-2 p-2" type="button" data-bs-dismiss="modal"
                                @click="clearFiled">Close</button>
                            <button class="btn btn-text-primary me-2 p-2" type="submit">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <div>
                <h2 class="font-monospace text-expanded text-uppercase fs-6">Departmets</h2>
            </div>
            <div>
                <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button"><i
                        class="material-icons">
                        add
                    </i>Add Department</button>
            </div>
        </div>
        <div class="card card-raised overflow-hidden mt-3">
            <div class="card-body p-0">
                <!-- Payment history table-->
                <div class="table-responsive">
                    <table class="table table-striped table-hover mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="">Status</th>
                                <th scope="">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="i in 5">
                                <td>Bernardo Galaviz</td>
                                <td><span :class="[i % 2 == 0 ? 'badge bg-secondary' : 'badge bg-primary']">Web
                                        Active</span></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-primary me-2"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <span class="material-icons">
                                            edit
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-outline-primary"
                                        @click="handleDelete()">
                                        <span class="material-icons text-danger">
                                            delete
                                        </span>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <Vue3DialogConfirm :isOpen="isModalOpened" @modal-close="closeModal" @delete-modal="onDeleteModal">
                    </Vue3DialogConfirm>
                </div>
            </div>
        </div>
    </app-layout>
</template>
<script setup>
import { onMounted, ref, inject } from 'vue'
import { useForm } from '@inertiajs/vue3'


const toast = inject("toast")


const isModalOpened = ref(false);
const deleteModalId = ref(null);
const form = useForm({
    "department_name": ""
})
onMounted(() => {
    window.department_name.addEventListener('change', function (event) {
        form.department_name = event.target.value;
    });
})
function closeModal() {
    isModalOpened.value = false;
}
const clearFiled = (() => {
    window.form.querySelectorAll('mwc-textfield').forEach(textfield => {
        document.getElementById(textfield.id).value = "";
    });
})

function handleDelete(id) {
    isModalOpened.value = true;
    deleteModalId.value = id;

}

const onDeleteModal = () => {
    isModalOpened.value = false;
    console.log(deleteModalId.value);
}


function store() {
    form.post('/setting/designation', {
        preserveScroll: true,
        onSuccess: () => {
            toast("Hello");
        },
    })
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
    width: 12%;
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
