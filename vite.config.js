import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/global.css",
                "resources/css/guest/principal.css",
                "resources/css/guest/auth.css",
                "resources/css/guest/allcurses.css",
                "resources/css/guest/details-course",
                "resources/css/student/completion.css",
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        watch: {
            ignored: ["**/storage/framework/views/**"],
        },
    },
});
