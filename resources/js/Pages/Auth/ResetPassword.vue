<template>
    <div id="layoutAuthentication">
        <!-- Layout content-->
        <div id="layoutAuthentication_content">
            <!-- Main page content-->
            <main>
                <!-- Main content container-->
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xxl-10 col-xl-10 col-lg-12">
                            <div class="card card-raised shadow-10 mt-5 mt-xl-10 mb-4">
                                <div class="row g-0">
                                    <div class="col-lg-5 col-md-6">
                                        <div class="card-body p-5">
                                            <!-- Auth header with logo image-->
                                            <div class="text-center">
                                                <img class="mb-3" src="../../assets/img/icons/background.svg" alt="..."
                                                    style="height: 48px" />
                                                <h1 class="display-5 mb-0">Reset Password</h1>
                                                <div class="subheading-1 mb-5">to continue to app</div>
                                            </div>
                                            <!-- Login submission form-->
                                            <form class="mb-5">
                                                <div class="mb-4">
                                                    <mwc-textfield class="w-100" label="Username"
                                                        outlined=""></mwc-textfield>
                                                </div>
                                                <div
                                                    class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                    <Link class="small fw-500 text-decoration-none" href="/login">Return to
                                                    login</Link>
                                                    <a class="btn btn-primary" href="index.html">Submit</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- Background image column using inline CSS-->
                                    <div class="col-lg-7 col-md-6 d-none d-md-block"
                                        style="background-image: url('https://source.unsplash.com/-uHVRvDr7pg/1600x900'); background-size: cover; background-repeat: no-repeat; background-position: center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <!-- Layout footer-->
        <div id="layoutAuthentication_footer"></div>
    </div>
</template>