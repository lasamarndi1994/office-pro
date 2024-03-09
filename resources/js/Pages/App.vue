
<template>
    <!-- Top app bar navigation menu-->
    <Header />
    <!-- Layout wrapper-->
    <div id="layoutDrawer">
        <!-- Layout navigation-->
        <SideBar />
        <!-- Layout content-->
        <div id="layoutDrawer_content">
            <!-- Main page content-->
            <main>
                <!-- Page header-->

                <div class="container-xl p-5">
                    <slot></slot>
                </div>
            </main>
            <!-- Footer-->
            <!-- Min-height is set inline to match the height of the drawer footer-->
           
        </div>
    </div>
    <!-- Load Bootstrap JS bundle-->
</template>

<script setup>
import SideBar from './Layout/Sidebar.vue';
import Header from './Layout/Header.vue';
</script>