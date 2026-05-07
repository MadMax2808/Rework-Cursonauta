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
                "resources/css/guest/details-course.css",
                "resources/css/student/completion.css",
                "resources/css/student/kardex.css",
                "resources/css/student/pago.css",
                "resources/css/guest/perfil.css",
                "resources/css/instructor/sales.css",
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
