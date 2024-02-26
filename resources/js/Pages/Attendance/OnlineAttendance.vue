<template>
    <app-layout>
        <div class="d-flex my-2">
            <div>
                <h2 class="font-monospace text-expanded text-uppercase fs-6 ">Attendance</h2>
            </div>
            <div>
                <flatpickr />
                <!-- <Litepicker /> -->
            </div>
        </div>
        <div class="card card-raised overflow-hidden mb-5">
            <div class="card-body p-0">
                <!-- Payment history table-->
                <div class="table-responsive">
                    <table class="table table-striped table-hover mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Shift</th>
                                <th scope="col">Punch IN</th>
                                <th scope="col">Punch OUT</th>
                                <th scope="col">TOTAL HRS</th>
                                <th scope="col">AR HRS</th>
                                <th scope="col">AR DATE</th>
                                <th scope="col">AR OUT</th>
                                <th scope="col">AR HRS</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="i in 30" :key="i">
                                <td>{{ i + 1 }}-02-2024</td>
                                <td>10 AM to 7 PM</td>
                                <td>10:00 AM</td>
                                <td>07:30 PM</td>
                                <td>09:30</td>
                                <td>-</td>
                                <td>{{ i + 1 }}-02-2024</td>
                                <td>-</td>
                                <td>-</td>
                                <td><i class="material-icons">
                                        edit
                                    </i></td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script setup>
// import flatpickr from "flatpickr";

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
</style>