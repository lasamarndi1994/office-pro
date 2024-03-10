<template>
    <app-layout>
        <UserLayout></UserLayout>
        <div class="table-responsive">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-new custom-table mb-0 datatable dataTable no-footer">
                        <thead>
                            <tr role="row">
                                <th aria-sort="descending">#</th>
                                <th>Name</th>
                                <th>Asset ID</th>
                                <th>Assigned Date</th>
                                <th>Assignee</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="i in 10">
                                <td class="sorting_1">{{ i }}</td>
                                <td>
                                    <a href="#" class="table-imgname">
                                        <img src="https://smarthr.dreamstechnologies.com/html/template/assets/img/laptop.png"
                                            class="me-2" alt="Laptop Image">
                                        <span>Laptop</span>
                                    </a>
                                </td>
                                <td>AST - 006</td>
                                <td>22 Nov, 2022 10:32AM</td>
                                <td class="table-namesplit">
                                    <a href="javascript:void(0);" class="table-profileimage">
                                        <img src="https://smarthr.dreamstechnologies.com/html/template/assets/img/profiles/avatar-02.jpg"
                                            class="me-2" alt="User Image">
                                    </a>
                                    <a href="javascript:void(0);" class="table-name">
                                        <span>Vinod Selvaraj</span>
                                        <p>vinod.s@dreamguystech.com</p>
                                    </a>
                                </td>
                                <td>
                                    <div class="table-actions d-flex">
                                        <a class="delete-table me-2" href="user-asset-details.html">
                                            <span class="material-icons">
                                                visibility
                                            </span>
                                        </a>
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
import UserLayout from "./UserLayout.vue"
</script>

<style scoped>
@import "../../../css/dashboard.css";
</style>