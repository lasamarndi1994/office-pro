<template>
    <app-layout>
        <div class="container-xl">
            <!-- Knowledgebase content row-->
            <div class="row gx-5">
                <div class="col-lg-3 mb-5 mb-lg-0">
                    <!-- Side column sticky navigation stick-->
                    <div class="sticky-top nav-stick">
                        <div class="nav-heading">Contents</div>
                        <ul class="nav flex-column" id="navStick">
                            <li class="nav-item"><a class="nav-link mdc-ripple-upgraded" href="#start-the-process"
                                    style="--mdc-ripple-fg-size: 117px; --mdc-ripple-fg-scale: 1.7909715676599525; --mdc-ripple-fg-translate-start: 0.916748046875px, -31.83331298828125px; --mdc-ripple-fg-translate-end: 39.54167175292969px, -40px;">Start
                                    the process</a></li>
                            <li class="nav-item"><a class="nav-link mdc-ripple-upgraded" href="#continue-the-process"
                                    style="--mdc-ripple-fg-size: 117px; --mdc-ripple-fg-scale: 1.7909715676599525; --mdc-ripple-fg-translate-start: 2.25px, -34.166656494140625px; --mdc-ripple-fg-translate-end: 39.54167175292969px, -40px;">Continue
                                    the process</a></li>
                            <li class="nav-item"><a class="nav-link mdc-ripple-upgraded" href="#finish-the-process"
                                    style="--mdc-ripple-fg-size: 117px; --mdc-ripple-fg-scale: 1.7909715676599525; --mdc-ripple-fg-translate-start: 0.916748046875px, -51.83331298828125px; --mdc-ripple-fg-translate-end: 39.54167175292969px, -40px;">Finish
                                    the process</a></li>
                        </ul>
                    </div>

                    <div class="sticky-top nav-stick">
                        <div class="nav-heading">Contents</div>
                        <ul class="nav flex-column" id="navStick">
                            <li class="nav-item"><a class="nav-link mdc-ripple-upgraded" href="#start-the-process"
                                    style="--mdc-ripple-fg-size: 117px; --mdc-ripple-fg-scale: 1.7909715676599525; --mdc-ripple-fg-translate-start: 0.916748046875px, -31.83331298828125px; --mdc-ripple-fg-translate-end: 39.54167175292969px, -40px;">Start
                                    the process</a></li>
                            <li class="nav-item"><a class="nav-link mdc-ripple-upgraded" href="#continue-the-process"
                                    style="--mdc-ripple-fg-size: 117px; --mdc-ripple-fg-scale: 1.7909715676599525; --mdc-ripple-fg-translate-start: 2.25px, -34.166656494140625px; --mdc-ripple-fg-translate-end: 39.54167175292969px, -40px;">Continue
                                    the process</a></li>
                            <li class="nav-item"><a class="nav-link mdc-ripple-upgraded" href="#finish-the-process"
                                    style="--mdc-ripple-fg-size: 117px; --mdc-ripple-fg-scale: 1.7909715676599525; --mdc-ripple-fg-translate-start: 0.916748046875px, -51.83331298828125px; --mdc-ripple-fg-translate-end: 39.54167175292969px, -40px;">Finish
                                    the process</a></li>
                        </ul>
                    </div>
                </div>


                <div class="col-lg-9">
                    <!-- Title section-->
                    <section class="mb-5">
                        <div class="d-flex align-items-center mb-3">
                            <h2 class="mb-0">Article</h2>
                            <button class="btn btn-text-dark btn-icon btn-lg text-muted ms-2 mdc-ripple-upgraded"
                                type="button"><i class="material-icons">link</i></button>
                        </div>
                        <p>This is a quick example of a knowledgebase article. Each article can have it's own navigation
                            stick, and each heading on the page can have an anchor link attached to it.</p>
                    </section>
                    <!-- Divider-->
                    <hr class="my-5">
                    <!-- Segment-->
                    <div id="start-the-process">
                        <section class="mb-5">
                            <div class="d-flex align-items-center mb-3">
                                <h3 class="mb-0">Start the process</h3>
                                <button class="btn btn-text-dark btn-icon btn-lg text-muted ms-2 mdc-ripple-upgraded"
                                    type="button"><i class="material-icons">link</i></button>
                            </div>
                            <p class="mb-4">Here is some example text of a longer version of a first step. This format
                                is great when you need to explain things more, not just using a ordered list.</p>
                            <p class="small">
                                <span class="fw-500 text-expanded">1. The first step</span>
                                <br>
                                Here is some text describing the first step.
                            </p>
                            <p class="small">
                                <span class="fw-500 text-expanded">2. The next step</span>
                                <br>
                                Here is some text describing the next step after the first step.
                            </p>
                            <p class="small">
                                <span class="fw-500 text-expanded">3. The final step</span>
                                <br>
                                This is just an example of a list to show how content will be presented.
                            </p>
                        </section>
                        <!-- Divider-->
                        <hr class="my-5">
                    </div>
                    <!-- Segment-->
                    <div id="continue-the-process">
                        <section class="mb-5">
                            <div class="d-flex align-items-center mb-3">
                                <h3 class="mb-0">Continue the process</h3>
                                <button class="btn btn-text-dark btn-icon btn-lg text-muted ms-2 mdc-ripple-upgraded"
                                    type="button"><i class="material-icons">link</i></button>
                            </div>
                            <p>We're using built-in elements and text utilities to make this list more legible and
                                understandable. This is a great starting point for a step by step guide within your
                                knowledge base article.</p>
                            <p>The knowledge base page examples are a great starting point for creating FAQ's,
                                documentation, and more. In this section, we're using the lead paragraph class to make
                                the text a bit larger so it's more legible since it's meant to be read in sentences.</p>
                        </section>
                        <!-- Divider-->
                        <hr class="my-5">
                    </div>
                    <!-- Segment-->
                    <div id="finish-the-process">
                        <section class="mb-5">
                            <div class="d-flex align-items-center mb-3">
                                <h3 class="mb-0">Finish the process</h3>
                                <button class="btn btn-text-dark btn-icon btn-lg text-muted ms-2 mdc-ripple-upgraded"
                                    type="button"><i class="material-icons">link</i></button>
                            </div>
                            <p>We've used spacing utilities, text utilities, and other components within this article
                                example. This is just an example layout of a few things you can do within an article
                                page. Thanks for reading!</p>
                        </section>
                        <!-- Divider-->
                        <hr class="my-5">
                    </div>
                    <section class="text-center">
                        <div class="subheading-1 mb-2">Was this article helpful?</div>
                        <div class="mb-3">
                            <button class="btn btn-outline-primary mx-1 mdc-ripple-upgraded" type="button">
                                <i class="material-icons leading-icon">thumb_up</i>
                                Yes
                            </button>
                            <button class="btn btn-outline-primary mx-1 mdc-ripple-upgraded" type="button">
                                <i class="material-icons leading-icon">thumb_down</i>
                                No
                            </button>
                        </div>
                        <div class="small text-muted">4 out of 5 found this article helpful</div>
                    </section>
                    <!-- Divider-->
                    <hr class="my-5">
                    <!-- Related Articles-->
                    <h3 class="overline">Related Articles</h3>
                    <div class="row">
                        <div class="col-md-4 col-lg-6 col-xxl-4 mb-4 mb-md-0 mb-lg-4 mb-xxl-0">
                            <div class="card card-quick-link card-raised ripple-gray mdc-ripple-upgraded">
                                <div class="card-body">
                                    <!-- <img class="card-quick-link-img" src="../assets/img/icons/background.svg"> -->
                                    <div class="card-title text-truncate mb-2">Material Design Fundamentals</div>
                                    <p class="card-text">Fundamentals surrounding the material design language</p>
                                </div>
                                <div class="card-actions">
                                    <a class="card-link text-muted text-decoration-none stretched-link"
                                        href="#!">Related Link</a>
                                    <i class="material-icons text-muted rotate-45">arrow_upward</i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-6 col-xxl-4 mb-4 mb-md-0 mb-lg-4 mb-xxl-0">
                            <div class="card card-quick-link card-raised ripple-gray mdc-ripple-upgraded">
                                <div class="card-body">
                                    <!-- <img class="card-quick-link-img" src="../assets/img/icons/cards.svg"> -->
                                    <div class="card-title text-truncate mb-2">Structure &amp; Sound</div>
                                    <p class="card-text">Instructions for using sound within your UI</p>
                                </div>
                                <div class="card-actions">
                                    <a class="card-link text-muted text-decoration-none stretched-link"
                                        href="#!">Related Link</a>
                                    <i class="material-icons text-muted rotate-45">arrow_upward</i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-6 col-xxl-4">
                            <div class="card card-quick-link card-raised ripple-gray mdc-ripple-upgraded">
                                <div class="card-body">
                                    <!-- <img class="card-quick-link-img" src="../assets/img/icons/icons.svg"> -->
                                    <div class="card-title text-truncate mb-2">Targeting</div>
                                    <p class="card-text">How to target the perfect demographic for your app</p>
                                </div>
                                <div class="card-actions">
                                    <a class="card-link text-muted text-decoration-none stretched-link"
                                        href="#!">Related Link</a>
                                    <i class="material-icons text-muted rotate-45">arrow_upward</i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </app-layout>
</template>

<style scoped></style>