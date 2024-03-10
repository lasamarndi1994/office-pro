<template>

    <div class="card mb-0">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="profile-view">
                        <div class="profile-img-wrap">
                            <div class="profile-img">
                                <a href="#"><img
                                        src="https://smarthr.dreamstechnologies.com/html/template/assets/img/profiles/avatar-02.jpg"
                                        alt="User Image"></a>
                            </div>
                        </div>
                        <div class="profile-basic">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="profile-info-left">
                                        <h3 class="user-name m-t-0 mb-0">John Doe</h3>
                                        <h6 class="text-muted">UI/UX Design Team</h6>
                                        <small class="text-muted">Web Designer</small>
                                        <div class="staff-id">Employee ID : FT-0001</div>
                                        <div class="small doj text-muted">Date of Join : 1st Jan 2013</div>
                                        <div class="staff-msg"><a class="btn btn-custom" href="chat.html">Send
                                                Message</a></div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <ul class="personal-info">
                                        <li>
                                            <div class="title">Phone:</div>
                                            <div class="text"><a href="#">9876543210</a></div>
                                        </li>
                                        <li>
                                            <div class="title">Email:</div>
                                            <div class="text"><a href="#">johndoe@example.com</a></div>
                                        </li>
                                        <li>
                                            <div class="title">Birthday:</div>
                                            <div class="text">24th July</div>
                                        </li>
                                        <li>
                                            <div class="title">Address:</div>
                                            <div class="text">1861 Bayonne Ave, Manchester Township, NJ, 08759</div>
                                        </li>
                                        <li>
                                            <div class="title">Gender:</div>
                                            <div class="text">Male</div>
                                        </li>
                                        <li>
                                            <div class="title">Reports to:</div>
                                            <div class="text">
                                                <div class="avatar-box">
                                                    <div class="avatar avatar-xs">
                                                        <img src="https://smarthr.dreamstechnologies.com/html/template/assets/img/profiles/avatar-16.jpg"
                                                            alt="User Image">
                                                    </div>
                                                </div>
                                                <a href="profile.html">
                                                    Jeffery Lalor
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="pro-edit">
                            <a data-bs-target="#profile_info" data-bs-toggle="modal" href="#">
                                <span class="material-icons">
                                    edit_note
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card tab-box">
        <div class="row user-tabs">
            <div class="col-lg-12 col-md-12 col-sm-12 line-tabs">
                <ul class="nav nav-tabs nav-tabs-bottom" role="tablist">
                    <li class="nav-item" role="presentation">
                        <Link href="/my-profile" class="nav-link " :class="activePath == '0' ? 'active' : ''">
                        Profile
                        </Link>
                    </li>
                    <li class="nav-item" role="presentation">
                        <Link href="#emp_projects" data-bs-toggle="tab" class="nav-link" aria-selected="false"
                            role="tab" tabindex="-1">Projects</Link>
                    </li>
                    <li class="nav-item" role="presentation"><a href="#bank_statutory" data-bs-toggle="tab"
                            class="nav-link" aria-selected="false" role="tab" tabindex="-1">Bank &amp; Statutory
                            <small class="text-danger">(Admin Only)</small></a></li>
                    <li class="nav-item" role="presentation">
                        <Link href="/profile/assets" class="nav-link" :class="activePath == 4 ? 'active' : ''">Assets
                        </Link>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script setup>
import '@material/mwc-tab-bar'
import { router } from '@inertiajs/vue3';
import { usePage } from '@inertiajs/vue3';
import { computed } from 'vue'


const page = usePage();

function pageRedirct($path) {
    router.get($path);
}
const activePath = computed(() => {
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
    if (page.props.route_name == 'assets') {
        return "4";
    }
})


</script>
<style scoped>
@import "../../../css/dashboard.css";
</style>