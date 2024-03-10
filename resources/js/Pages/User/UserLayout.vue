<template>
    <app-layout>
        <div class="container-xl ">
            <!-- Tab bar navigation-->
            <mwc-tab-bar :activeindex="getActivePath()">
                <mwc-tab label="Profile" icon="person" stacked="" id="mdc-tab-1"
                    @click="pageRedirct(`/my-profile`)"></mwc-tab>
                <mwc-tab label="Education" icon="book" stacked="" dir="" id="mdc-tab-2" @click="pageRedirct(`
                /profile/educations`)">

                </mwc-tab>
                <mwc-tab label="Informations" icon="info" stacked="" dir="" id="mdc-tab-3" active></mwc-tab>
                <mwc-tab label="Experience" icon="workspace_premium" stacked="" dir="" id="mdc-tab-4"></mwc-tab>
                <mwc-tab label="Security" icon="security" stacked="" dir="" id="mdc-tab-5"></mwc-tab>
            </mwc-tab-bar>
            <!-- Divider-->
            <hr class="mt-0 mb-5">
            <!-- Profile content row-->
            <slot></slot>
        </div>

    </app-layout>
</template>

<script setup>
import '@material/mwc-tab-bar'
import { router } from '@inertiajs/vue3';
import { usePage } from '@inertiajs/vue3'
const page = usePage();

function pageRedirct($path) {
    router.get($path);
}
function getActivePath() {

    if (page.props.route_name == 'profile') {
        return "0";
    }
    if (page.props.route_name == 'education') {
        return "1";
    }
    if (page.props.route_name == 'informations') {
        return "2";
    }
    if (page.props.route_name == 'experiance') {
        return "3";
    }
    if (page.props.route_name == 'security') {
        return "4";
    }
}

</script>