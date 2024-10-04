import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp, Head, Link } from '@inertiajs/vue3';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';
import Layout from './Layout/DefaultLayout.vue';

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
            // use plugin ziggy for create named route
            .use(ZiggyVue)
            // include global component for all pages
            .component('Head', Head)
            .component('Link', Link)
            .mount(el);
    },
    // this is default value for progress indicators
    progress: {
        // The delay after which the progress bar will appear, in milliseconds...
        // delay: 250,

        // The color of the progress bar...
        color: 'white',

        // Whether to include the default NProgress styles...
        includeCSS: true,

        // Whether the NProgress spinner will be shown...
        showSpinner: false,
    },
});
