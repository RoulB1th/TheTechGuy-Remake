import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css'
            ,'resources/scss/login.scss'
            ,'resources/scss/app.scss'
            ,'resources/js/app.js'
            ,'resources/scss/register.scss'],
            refresh: true,
        }),
    ],
});
