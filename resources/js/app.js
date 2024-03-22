import './bootstrap';

import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import { Link } from '@inertiajs/vue3'

import test from './test';

import AppLayout from "./Pages/App.vue";
import Vue3DialogConfirm from "./components/Vue3ConfirmDialog.vue";

createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    return pages[`./Pages/${name}.vue`]
  },
  setup({ el, App, props, plugin }) {

    const app = createApp({ render: () => h(App, props) })
    app.mixin({ components: { AppLayout, Link, Vue3DialogConfirm } })
    app.use(plugin)
    app.mount(el)
    app.config.globalProperties.TestValue = "Hello";


  },
})