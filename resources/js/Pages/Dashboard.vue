<template>
    <app-layout>
        <div class="row justify-content-between align-items-center mb-5">
            <div class="col flex-shrink-0 mb-5 mb-md-0">
                <h1 class="display-4 mb-0">Dashboard</h1>
                <div class="text-muted">Sales overview &amp; summary</div>
            </div>


            <div class="col-12 col-md-auto">
                <div class="d-flex flex-column flex-sm-row gap-3">
                    <mwc-select class="mw-50" outlined="" label="Sales from">
                        <mwc-list-item value="0">Last 7 days</mwc-list-item>
                        <mwc-list-item value="1">Last 30 days</mwc-list-item>
                        <mwc-list-item value="2">Last month</mwc-list-item>
                        <mwc-list-item selected="" value="3">Last year</mwc-list-item>
                    </mwc-select>
                    <mwc-select class="mw-50" outlined="" label="Last Year">
                        <mwc-list-item value="0">Last 7 days</mwc-list-item>
                        <mwc-list-item value="1">Last 30 days</mwc-list-item>
                        <mwc-list-item value="2">Last month</mwc-list-item>
                        <mwc-list-item selected="" value="3">Last year</mwc-list-item>
                    </mwc-select>
                </div>
            </div>
        </div>
        <div class="row gx-5">
            <div class="col-xxl-3 col-md-6 mb-5">
                <div class="card card-raised border-start border-primary border-4">
                    <div class="card-body px-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div class="me-2">
                                <div class="display-5">101.1K</div>
                                <div class="card-text">Downloads</div>
                            </div>
                            <div class="icon-circle bg-primary text-white"><i class="material-icons">download</i></div>
                        </div>
                        <div class="card-text">
                            <div class="d-inline-flex align-items-center">
                                <i class="material-icons icon-xs text-success">arrow_upward</i>
                                <div class="caption text-success fw-500 me-2">3%</div>
                                <div class="caption">from last month</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-md-6 mb-5">
                <div class="card card-raised border-start border-warning border-4">
                    <div class="card-body px-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div class="me-2">
                                <div class="display-5">12.2K</div>
                                <div class="card-text">Purchases</div>
                            </div>
                            <div class="icon-circle bg-warning text-white"><i class="material-icons">storefront</i></div>
                        </div>
                        <div class="card-text">
                            <div class="d-inline-flex align-items-center">
                                <i class="material-icons icon-xs text-success">arrow_upward</i>
                                <div class="caption text-success fw-500 me-2">3%</div>
                                <div class="caption">from last month</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-md-6 mb-5">
                <div class="card card-raised border-start border-secondary border-4">
                    <div class="card-body px-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div class="me-2">
                                <div class="display-5">5.3K</div>
                                <div class="card-text">Customers</div>
                            </div>
                            <div class="icon-circle bg-secondary text-white"><i class="material-icons">people</i></div>
                        </div>
                        <div class="card-text">
                            <div class="d-inline-flex align-items-center">
                                <i class="material-icons icon-xs text-success">arrow_upward</i>
                                <div class="caption text-success fw-500 me-2">3%</div>
                                <div class="caption">from last month</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-md-6 mb-5">
                <div class="card card-raised border-start border-info border-4">
                    <div class="card-body px-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div class="me-2">
                                <div class="display-5">7</div>
                                <div class="card-text">Channels</div>
                            </div>
                            <div class="icon-circle bg-info text-white"><i class="material-icons">devices</i></div>
                        </div>
                        <div class="card-text">
                            <div class="d-inline-flex align-items-center">
                                <i class="material-icons icon-xs text-success">arrow_upward</i>
                                <div class="caption text-success fw-500 me-2">3%</div>
                                <div class="caption">from last month</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script setup>


import '@material/mwc-select'
import '@material/mwc-list/mwc-list-item'
</script>

<style scoped>
.mdc-select--outlined:not(.mdc-select--disabled) .mdc-select__anchor {
    background-color: transparent;
}

constructed stylesheet .mdc-select--outlined .mdc-select__anchor {
    display: flex;
    align-items: baseline;
    overflow: visible;
}

constructed stylesheet .mdc-select--outlined .mdc-select__anchor {
    height: 56px;
}

constructed stylesheet .mdc-select .mdc-select__anchor {
    padding-left: 16px;
    padding-right: 0px;
}

constructed stylesheet .mdc-select__anchor {
    --mdc-ripple-fg-size: 0;
    --mdc-ripple-left: 0;
    --mdc-ripple-top: 0;
    --mdc-ripple-fg-scale: 1;
    --mdc-ripple-fg-translate-end: 0;
    --mdc-ripple-fg-translate-start: 0;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    will-change: transform, opacity;
}

constructed stylesheet .mdc-select__anchor {
    width: 200px;
    min-width: 0px;
    flex: 1 1 auto;
    position: relative;
    box-sizing: border-box;
    overflow: hidden;
    outline: none;
    cursor: pointer;
}
</style>