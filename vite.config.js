import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/2048.css',
                'resources/js/app.js',
                'resources/js/2048/jquery.min.js', 
                'resources/js/2048/support2048.js', 
                'resources/js/showanimation2048.js', 
                'resources/js/main2048.js', 
            ],
            refresh: true,
        }),
        {
            name: 'static-js',
            apply: 'serve',
            enforce: 'pre',
            resolveId(source, importer) {
                if (source.endsWith('main2048.js')) {
                    return '\ufeff' + source;
                }
            }
        }
    ],
});
