import "./bootstrap";
import "../css/app.css";

import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import { ZiggyVue } from "../../vendor/tightenco/ziggy/dist/vue.m";
import { Tabs, Tab } from "vue3-tabs-component";
import VueGoodTablePlugin from "vue-good-table-next";
import "vue-good-table-next/dist/vue-good-table-next.css";
import { createVuestic } from "vuestic-ui";
import "vuestic-ui/css";
import config from "../../vuestic.config";
// JS
import VueVisualFilter from "@visual-filter/vue3";

const appName =
    window.document.getElementsByTagName("title")[0]?.innerText || "Laravel";

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob("./Pages/**/*.vue")
        ),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .use(VueGoodTablePlugin)
            .use(createVuestic({ config }))
            .use(VueVisualFilter)
            .component("tabs", Tabs)
            .component("tab", Tab)
            .mount(el);
    },
    progress: {
        color: "#6396EA",
    },
});
