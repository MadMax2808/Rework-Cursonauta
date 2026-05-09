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
                "resources/css/instructor/sales.css",
                "resources/css/instructor/newcourse.css",
                "resources/css/user/perfil.css",
                "resources/css/user/message.css",

                "resources/js/instructor/newcourse.js",
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
