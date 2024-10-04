import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp, Head, Link } from '@inertiajs/vue3';
import Layout from './Layout/Layout.vue';

createInertiaApp({
    // default global title for all pages
    title: (title) => `${title} - Learn Inertia basic`,
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true });
        let page = pages[`./Pages/${name}.vue`];
        // default global layout for all pages
        page.default.layout = page.default.layout || Layout;
        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            // include global component for all pages
            .component('Head', Head)
            .component('Link', Link)
            .mount(el);
    }
});
