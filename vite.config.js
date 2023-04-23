import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/contact.css', 
                'resources/css/offers.css', 
                'resources/css/news.css',  
                'resources/js/app.js',
                'resources/js/offers.js',
                'resources/js/news.js'
            ],
            refresh: true,
        }),
    ],
});
