import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin'; // Import the Laravel plugin
import tailwindcss from '@tailwindcss/vite'; // Optional, but helps if using the Vite-specific Tailwind plugin

export default defineConfig({
    plugins: [
        laravel({ // Use the Laravel plugin
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: [
                'resources/views/**', // This line enables auto-reload on Blade file changes
                'routes/**',
            ],
        }),
        tailwindcss(),
        // ... any other plugins
    ],
});