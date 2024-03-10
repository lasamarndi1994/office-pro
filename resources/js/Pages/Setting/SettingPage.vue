<template>
    <app-layout>
        <div class="d-flex justify-content-between mb-0">
            <div>
                <h2 class="font-monospace text-expanded text-uppercase fs-6">Settings</h2>
            </div>

        </div>
        <div class="container-xl">
            <div class="">
                <div class=" p-3">
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <mwc-textfield class="w-100" label="Company Name *" outlined></mwc-textfield>
                                </div>

                            </div>
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <mwc-textfield class="w-100" label="Contact Person *" outlined></mwc-textfield>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="input-block mb-3">
                                    <mwc-textfield class="w-100" label="Address *" outlined></mwc-textfield>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="input-block mb-3">
                                    <mwc-select class="w-100" label="Country" outlined>
                                        <mwc-list-item value="0">USA</mwc-list-item>
                                        <mwc-list-item value="1">Item 1</mwc-list-item>
                                        <mwc-list-item value="2">Item 2</mwc-list-item>
                                        <mwc-list-item value="3">Item 3</mwc-list-item>
                                    </mwc-select>

                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="input-block mb-3">
                                    <mwc-textfield class="w-100" label="City" outlined></mwc-textfield>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="input-block mb-3">
                                    <mwc-select class="w-100" label="State/Province" outlined>
                                        <mwc-list-item value="0">USA</mwc-list-item>
                                        <mwc-list-item value="1">Item 1</mwc-list-item>
                                        <mwc-list-item value="2">Item 2</mwc-list-item>
                                        <mwc-list-item value="3">Item 3</mwc-list-item>
                                    </mwc-select>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="input-block mb-3">
                                    <mwc-textfield class="w-100" label="Postal Code *" outlined></mwc-textfield>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <mwc-textfield class="w-100" label="Email *" outlined></mwc-textfield>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <mwc-textfield class="w-100" label="Phone *" outlined></mwc-textfield>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="input-block mb-3">
                                    <mwc-textfield class="w-100" label="Website Url *" outlined></mwc-textfield>
                                </div>
                            </div>

                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </app-layout>
</template>