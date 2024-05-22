import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            // modifichiamo il percorso del file css/app.css in scss/app.scss
            input: ['resources/scss/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    // inseriamo l'alias per includere il percorso nel js come alias
    resolve: {
        alias: {
            "~resources": "/resources/",
            "~bootstrap": path.resolve(__dirname, "node_modules/bootstrap"),
        },
    },
});
