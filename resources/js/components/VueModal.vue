<template>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Get this party started?</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <mwc-textfield class="w-100" label="First Name *" outlined></mwc-textfield>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <mwc-textfield class="w-100" label="Last Name *" outlined></mwc-textfield>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <mwc-textfield class="w-100" label="User Name *" outlined></mwc-textfield>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <mwc-textfield class="w-100" label="Email *" outlined></mwc-textfield>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <mwc-textfield class="w-100" label="Password *" outlined></mwc-textfield>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <mwc-textfield class="w-100" label="Confirm Password *" outlined></mwc-textfield>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <mwc-textfield class="w-100" label="Employee ID *" outlined></mwc-textfield>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <mwc-textfield class="w-100" label="Joining Date *" outlined></mwc-textfield>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-block mb-3">
                                    <mwc-textfield class="w-100" label="Phone *" outlined></mwc-textfield>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block mb-3">
                                    <mwc-select class="w-100" label="Department" outlined>
                                        <mwc-list-item value="0">Item 0</mwc-list-item>
                                        <mwc-list-item value="1">Item 1</mwc-list-item>
                                        <mwc-list-item value="2">Item 2</mwc-list-item>
                                        <mwc-list-item value="3">Item 3</mwc-list-item>
                                    </mwc-select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block mb-3">
                                    <mwc-select class="w-100" label="Designation" outlined>
                                        <mwc-list-item value="0">Item 0</mwc-list-item>
                                        <mwc-list-item value="1">Item 1</mwc-list-item>
                                        <mwc-list-item value="2">Item 2</mwc-list-item>
                                        <mwc-list-item value="3">Item 3</mwc-list-item>
                                    </mwc-select>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-text-primary me-2" type="button" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-raised-primary me-2" type="button">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</template>