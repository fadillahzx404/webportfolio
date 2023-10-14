import { defineConfig, splitVendorChunkPlugin } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/css/splash.css",
                "resources/js/app.js",
                "resources/js/toast.js",
                "resources/js/toast-error.js",
                "resources/js/toast-home.js",
                "resources/js/splider.js",
            ],
            refresh: true,
        }),
        splitVendorChunkPlugin(),
    ],
    output: {
        //...,
        intro: 'const ENVIRONMENT = "production";',
    },
    manualChunks: {
        lodash: ["lodash"],
    },
});
