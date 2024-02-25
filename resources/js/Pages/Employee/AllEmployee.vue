<template>
    <app-layout>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Get this party started?</h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="input-block mb-3">
                                        <mwc-textfield class="w-100" label="First Name *" outlined></mwc-textfield>
                                    </div>

                                </div>
                                <div class="col-sm-6">
                                    <div class="input-block mb-3">
                                        <mwc-textfield class="w-100" label="Last Name *" outlined></mwc-textfield>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-block mb-3">
                                        <mwc-textfield class="w-100" label="User Name *" outlined></mwc-textfield>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-block mb-3">
                                        <mwc-textfield class="w-100" label="Email *" outlined></mwc-textfield>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-block mb-3">
                                        <mwc-textfield class="w-100" label="Password *" outlined></mwc-textfield>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-block mb-3">
                                        <mwc-textfield class="w-100" label="Confirm Password *" outlined></mwc-textfield>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-block mb-3">
                                        <mwc-textfield class="w-100" label="Employee ID *" outlined></mwc-textfield>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-block mb-3">
                                        <mwc-textfield class="w-100" label="Joining Date *" outlined></mwc-textfield>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-block mb-3">
                                        <mwc-textfield class="w-100" label="Phone *" outlined></mwc-textfield>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="input-block mb-3">
                                        <mwc-select class="w-100" label="Department" outlined>

                                            <mwc-list-item value="0">Item 0</mwc-list-item>
                                            <mwc-list-item value="1">Item 1</mwc-list-item>
                                            <mwc-list-item value="2">Item 2</mwc-list-item>
                                            <mwc-list-item value="3">Item 3</mwc-list-item>
                                        </mwc-select>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-block mb-3">
                                        <mwc-select class="w-100" label="Designation" outlined>
                                            <mwc-list-item value="0">Item 0</mwc-list-item>
                                            <mwc-list-item value="1">Item 1</mwc-list-item>
                                            <mwc-list-item value="2">Item 2</mwc-list-item>
                                            <mwc-list-item value="3">Item 3</mwc-list-item>
                                        </mwc-select>

                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive m-t-15">
                                <table class="table table-striped custom-table">
                                    <thead>
                                        <tr>
                                            <th>Module Permission</th>
                                            <th class="text-center">Read</th>
                                            <th class="text-center">Write</th>
                                            <th class="text-center">Create</th>
                                            <th class="text-center">Delete</th>
                                            <th class="text-center">Import</th>
                                            <th class="text-center">Export</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Holidays</td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>
                                            </td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Leaves</td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Clients</td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Projects</td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tasks</td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Chats</td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Assets</td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Timing Sheets</td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>

                                            </td>
                                            <td class="text-center">
                                                <mwc-checkbox></mwc-checkbox>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-text-primary me-2" type="button" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-raised-primary me-2" type="button">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between">
            <div>
                <h2 class="font-monospace text-expanded text-uppercase fs-6">Employees</h2>
            </div>
            <div>
                <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button"><i
                        class="material-icons">
                        add
                    </i>Add Employee</button>
            </div>
        </div>
        <div class="card card-raised overflow-hidden mt-4">
            <div class="card-body p-0">
                <!-- Payment history table-->

                <div class="table-responsive">
                    <table class="table table-striped table-hover mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="">Employee ID</th>
                                <th scope="">Email</th>
                                <th scope="">Mobile Number</th>
                                <th scope="">Joining Date</th>
                                <th scope="">Role</th>
                                <th scope="">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="i in 5">
                                <td>
                                    <h2 class="table-avatar">
                                        <a href="profile.html" class="avatar">
                                            <img src="https://smarthr.dreamstechnologies.com/html/template/assets/img/profiles/avatar-12.jpg"
                                                alt="User Image">

                                            Bernardo Galaviz nhh wihwh gv hdhwhe</a>
                                    </h2>
                                </td>
                                <td>#39201s</td>
                                <td>BernardoGalaviz@gmail.com</td>
                                <td>9337243362</td>
                                <td>12-09-2023</td>
                                <td><span :class="[i % 2 == 0 ? 'badge bg-secondary' : 'badge bg-primary']">Web
                                        Developer</span></td>
                                <td>Edit</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </app-layout>
</template>
<script setup>
import '@material/mwc-textfield';
import '@material/mwc-select';
import '@material/mwc-checkbox'
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