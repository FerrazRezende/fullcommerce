import '../css/app.css';
import './bootstrap';

import ElementPlus from 'element-plus';
import 'element-plus/dist/index.css';

import '../css/global.css'

import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { createApp, DefineComponent, h } from 'vue';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

import {
    IoSearchOutline,
    BiCart3,
    HiHeart,
    LaUserSolid,
} from 'oh-vue-icons/icons'
import { OhVueIcon, addIcons } from 'oh-vue-icons';


addIcons(
    IoSearchOutline,
    BiCart3,
    HiHeart,
    LaUserSolid,
)



const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob<DefineComponent>('./Pages/**/*.vue'),
        ),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .component('v-icon', OhVueIcon)
            .use(ZiggyVue)
            .use(ElementPlus)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
