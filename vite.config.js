import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/scss/app.scss",
                "resources/js/app.js",
                "resources/js/private.js",
            ],
            refresh: true,
        }),
    ],
    build: {
        manifest: true,
        outDir: "public/build",
    },
});
