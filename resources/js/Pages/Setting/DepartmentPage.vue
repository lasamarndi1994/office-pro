<template>
    <app-layout>
        <v-modal :size="'modal-md'" :isOpenModal="isOpenModal" @vue-modal-close="closeModal">
            <template #title>
                {{ modalTitle }}
            </template>
            <template #body>
                <form @submit.prevent="stote" id="form">
                    <div class="modal-body mt-2">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-block mb-3">
                                    <div>

                                        <mwc-textfield class="w-100" label="Department Name *" outlined
                                            :value="form.name" id="department_name" type="text">
                                        </mwc-textfield>
                                        <small v-if="form.errors.name" class="text-danger text-small">{{
            form.errors.name }}</small>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-text-primary me-2 p-2" type="button" @click="closeModal">Close</button>
                        <button class="btn btn-text-primary me-2 p-2" type="submit">Save
                            changes</button>
                    </div>
                </form>

            </template>
        </v-modal>
        <div class="d-flex justify-content-between">
            <div>
                <h2 class="font-monospace text-expanded text-uppercase fs-6">Departmets</h2>
            </div>
            <div>
                <button class="btn btn-dark" @click="openModal()" type="button"><i class="material-icons">
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
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(department, index) in departments" :key="index">
                                <td>{{ department.name }}</td>
                                <td><span :class="[department.status == 1 ? 'badge bg-primary' : 'badge bg-danger']">Web
                                        Active</span></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-primary me-2"
                                        @click="openModal(department)">
                                        <span class="material-icons">
                                            edit
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-outline-primary"
                                        @click="handleDelete(department.id, index)">
                                        <span class="material-icons text-danger">
                                            delete
                                        </span>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <Vue3DialogConfirm :isOpen="isConfirmOpen" @modal-close="deleteConfirm">
                </Vue3DialogConfirm>
            </div>
        </div>
    </app-layout>
</template>
<script setup>
import { onMounted, ref, inject, reactive, computed } from 'vue'
import { useForm } from '@inertiajs/vue3'

const props = defineProps({
    departments: Object
})
const toast = inject("toast");
const isOpenModal = ref(false);
const isConfirmOpen = ref(false);
const deleteObj = reactive({
    "index": "",
    "id": "",
});

const form = useForm({
    "id": "",
    "name": " ",
    "status": "",
})

onMounted(() => {
    window.department_name.addEventListener('change', function (event) {
        form.name = event.target.value;
    });
})

const handleDelete = (data, index) => {
    deleteObj.id = data.id;
    deleteObj.index = index;
    isConfirmOpen.value = true;
}

const deleteConfirm = (confirm) => {
    if (confirm) {
        form.delete(`/setting/departments/${deleteObj.id}`, {
            onSuccess: (res) => {
                props.departments.splice(deleteObj.index, 1);
                toast(res.props.response.message);
            }
        })
    }
    isConfirmOpen.value = false;
}

const modalTitle = computed(() => {
    return form.id ? "Edit Department" : "Add Department";
})

const stote = () => {
    console.log(form);
    let url = "";
    let method = "";
    if (form.id == '') {
        method = "post";
        url = "/setting/departments";
    } else {
        method = "put";
        url = `/setting/departments/${form.id}`;
    }
    form.submit(method, url, {
        preserveScroll: true,
        onSuccess: (data) => {
            toast(data.props.response.message);
            closeModal();
        },
    })
}

const openModal = (data) => {
    if (data) {
        Object.assign(form, data)
    }
    isOpenModal.value = true;
}

const closeModal = () => {
    isOpenModal.value = false;
    form.reset();
    form.clearErrors();
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
