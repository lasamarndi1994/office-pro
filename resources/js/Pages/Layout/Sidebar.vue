<template>
    <div id="layoutDrawer_nav">
        <!-- Drawer navigation-->
        <nav class="drawer accordion drawer-light bg-white" id="drawerAccordion">
            <div class="drawer-menu">
                <div class="nav">
                    <!-- Drawer section heading (Account)-->
                    <div class="drawer-menu-heading d-sm-none">Account</div>
                    <!-- Drawer link (Notifications)-->
                    <a class="nav-link d-sm-none" href="#!">
                        <div class="nav-link-icon"><i class="material-icons">notifications</i></div>
                        Notifications
                    </a>
                    <!-- Drawer link (Messages)-->
                    <a class="nav-link d-sm-none" href="#!">
                        <div class="nav-link-icon"><i class="material-icons">mail</i></div>
                        Messages
                    </a>
                    <!-- Divider-->
                    <div class="drawer-menu-divider d-sm-none"></div>
                    <!-- Drawer section heading (Interface)-->
                    <div class="drawer-menu-heading">Interface</div>
                    <!-- Drawer link (Overview)-->

                    <!-- Drawer link (Dashboards)-->
                    <Link class="nav-link" href="/dashboard" :class="currentPath('/dashboard')">
                    <div class="nav-link-icon"><i class="material-icons">dashboard</i></div>
                    Dashboards
                    </Link>

                    <!-- Drawer link (Layouts)-->
                    <Link class="nav-link" href="/employees" :class="currentPath('/employees')">
                    <div class="nav-link-icon"><i class="material-icons">view_compact</i></div>
                    Employee
                    </Link>

                    <!-- Drawer link (Pages)-->
                    <a class="nav-link "
                        :class="showCollapse(['/online-attendance', '/attendance-regularization', '/attendance/reports', '/time-sheet-entry']) == 'show' ? '' : 'collapsed show'"
                        href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#attendanceLayouts"
                        aria-expanded="false" aria-controls="attendanceLayouts">
                        <div class="nav-link-icon"><i class="material-icons">view_compact</i></div>
                        Attendance
                        <div class="drawer-collapse-arrow"><i class="material-icons">expand_more</i></div>
                    </a>
                    <!-- Nested drawer nav (Layouts)-->
                    <div class="collapse"
                        :class="showCollapse(['/online-attendance', '/attendance-regularization', '/attendance/reports', '/time-sheet-entry'])"
                        id="attendanceLayouts" aria-labelledby="headingOne" data-bs-parent="#drawerAccordion">
                        <nav class="drawer-menu-nested nav">
                            <Link class="nav-link" href="/online-attendance" :class="currentPath('/online-attendance')">
                            Online
                            Attendance</Link>
                            <Link class="nav-link" href="/attendance-regularization"
                                :class="currentPath('/attendance-regularization')">Attendance Regularization</Link>
                            <Link class="nav-link" href="/time-sheet-entry" :class="currentPath('/time-sheet-entry')">Time
                            Sheet Entry</Link>
                            <Link class="nav-link" href="/attendance/reports" :class="currentPath('/attendance/reports')">
                            Reports</Link>
                        </nav>
                    </div>
                    <!-- Nested drawer nav (Pages)-->

                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                        data-bs-target="#leaveLayouts" aria-expanded="false" aria-controls="leaveLayouts">
                        <div class="nav-link-icon"><i class="material-icons">view_compact</i></div>
                        Leave
                        <div class="drawer-collapse-arrow"><i class="material-icons">expand_more</i></div>
                    </a>
                    <!-- Nested drawer nav (Layouts)-->
                    <div class="collapse" id="leaveLayouts" aria-labelledby="headingOne" data-bs-parent="#drawerAccordion">
                        <nav class="drawer-menu-nested nav">
                            <a class="nav-link" href="layout-dark.html">Dark Theme</a>
                            <a class="nav-link" href="layout-light.html">Light Theme</a>
                            <a class="nav-link" href="layout-static.html">Static Navigation</a>
                        </nav>
                    </div>

                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                        data-bs-target="#recuiterLayouts" aria-expanded="false" aria-controls="recuiterLayouts">
                        <div class="nav-link-icon"><i class="material-icons">view_compact</i></div>
                        Recuiter
                        <div class="drawer-collapse-arrow"><i class="material-icons">expand_more</i></div>
                    </a>
                    <!-- Nested drawer nav (Layouts)-->
                    <div class="collapse" id="recuiterLayouts" aria-labelledby="headingOne"
                        data-bs-parent="#drawerAccordion">
                        <nav class="drawer-menu-nested nav">
                            <a class="nav-link" href="layout-dark.html">Dark Theme</a>
                            <a class="nav-link" href="layout-light.html">Light Theme</a>
                            <a class="nav-link" href="layout-static.html">Static Navigation</a>
                        </nav>
                    </div>

                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                        data-bs-target="#payrollLayouts" aria-expanded="false" aria-controls="payrollLayouts">
                        <div class="nav-link-icon"><i class="material-icons">view_compact</i></div>
                        Payroll
                        <div class="drawer-collapse-arrow"><i class="material-icons">expand_more</i></div>
                    </a>
                    <!-- Nested drawer nav (Layouts)-->
                    <div class="collapse" id="payrollLayouts" aria-labelledby="headingOne"
                        data-bs-parent="#drawerAccordion">
                        <nav class="drawer-menu-nested nav">
                            <a class="nav-link" href="layout-dark.html">Dark Theme</a>
                            <a class="nav-link" href="layout-light.html">Light Theme</a>
                            <a class="nav-link" href="layout-static.html">Static Navigation</a>
                        </nav>
                    </div>

                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse">
                        <div class="nav-link-icon"><i class="material-icons">dashboard</i></div>
                        On Board

                    </a>

                    <!-- Divider-->

                </div>
            </div>
            <!-- Drawer footer        -->
            <div class="drawer-footer border-top">
                <div class="d-flex align-items-center">
                    <i class="material-icons text-muted">account_circle</i>
                    <div class="ms-3">
                        <div class="caption">Logged in as:</div>
                        <div class="small fw-500">Start Bootstrap</div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</template>

<script setup>
import { computed } from 'vue'
import { usePage } from '@inertiajs/vue3'
const page = usePage()
const path = computed(() => page.props.current_path)

function currentPath($path) {
    if ($path == path.value) {
        return 'active';
    }
}

function showCollapse($path = []) {
    console.log($path);
    if ($path.includes(path.value)) {
        return 'show';
    }
}
</script>