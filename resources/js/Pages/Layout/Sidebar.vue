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
                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse">
                        <div class="nav-link-icon"><i class="material-icons">dashboard</i></div>
                        Dashboards

                    </a>

                    <!-- Drawer link (Layouts)-->
                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                        data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="nav-link-icon"><i class="material-icons">view_compact</i></div>
                        Employee
                        <div class="drawer-collapse-arrow"><i class="material-icons">expand_more</i></div>
                    </a>
                    <!-- Nested drawer nav (Layouts)-->
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                        data-bs-parent="#drawerAccordion">
                        <nav class="drawer-menu-nested nav">
                            <a class="nav-link" href="layout-dark.html">Dark Theme</a>
                            <a class="nav-link" href="layout-light.html">Light Theme</a>
                            <a class="nav-link" href="layout-static.html">Static Navigation</a>
                        </nav>
                    </div>
                    <!-- Drawer link (Pages)-->
                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                        data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="nav-link-icon"><i class="material-icons">layers</i></div>
                        Attendance
                        <div class="drawer-collapse-arrow"><i class="material-icons">expand_more</i></div>
                    </a>
                    <!-- Nested drawer nav (Pages)-->

                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                        data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="nav-link-icon"><i class="material-icons">view_compact</i></div>
                        Leave
                        <div class="drawer-collapse-arrow"><i class="material-icons">expand_more</i></div>
                    </a>
                    <!-- Nested drawer nav (Layouts)-->
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                        data-bs-parent="#drawerAccordion">
                        <nav class="drawer-menu-nested nav">
                            <a class="nav-link" href="layout-dark.html">Dark Theme</a>
                            <a class="nav-link" href="layout-light.html">Light Theme</a>
                            <a class="nav-link" href="layout-static.html">Static Navigation</a>
                        </nav>
                    </div>


                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                        data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="nav-link-icon"><i class="material-icons">view_compact</i></div>
                        Recuiter
                        <div class="drawer-collapse-arrow"><i class="material-icons">expand_more</i></div>
                    </a>
                    <!-- Nested drawer nav (Layouts)-->
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                        data-bs-parent="#drawerAccordion">
                        <nav class="drawer-menu-nested nav">
                            <a class="nav-link" href="layout-dark.html">Dark Theme</a>
                            <a class="nav-link" href="layout-light.html">Light Theme</a>
                            <a class="nav-link" href="layout-static.html">Static Navigation</a>
                        </nav>
                    </div>

                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
                        data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="nav-link-icon"><i class="material-icons">view_compact</i></div>
                        Payroll
                        <div class="drawer-collapse-arrow"><i class="material-icons">expand_more</i></div>
                    </a>
                    <!-- Nested drawer nav (Layouts)-->
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
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