import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    base: "https://plataforma-cursos-teste.vercel.app/",

    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
});
