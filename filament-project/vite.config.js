import {
    defineConfig
} from 'vite'
import laravel, {
    refreshPaths
} from 'laravel-vite-plugin'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/**/*.blade.php', 'resources/**/*.js', 'resources/css/app.css', 'resources/js/app.js', 'resources/css/filament/guest/theme.css'],
            refresh: [
                ...refreshPaths,
                'app/Livewire/**',
            ],
        }),
    ],
})