import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/css/app.css',
                'resources/lib/animate/animate.min.css',
                'resources/js/app.js',
                'resources/js/main.js',
                'resources/lib/counterup/counterup.min.js',
                'resources/lib/easing/easing.min.js',
                'resources/lib/owlcarousel/assets/owl.carousel.min.css',
                'resources/lib/owlcarousel/owl.carousel.min.js',
                'resources/lib/waypoints/waypoints.min.js',
                // 'resources/lib/wow/wow.min.js',
            ],
            refresh: true,
        }),
    ],
    build: {
        commonjsOptions: { transformMixedEsModules: true } // Change
    }
});
