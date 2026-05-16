import { defineConfig, loadEnv } from 'vite';
import laravel from 'laravel-vite-plugin';

export default ({ mode }) => {
    process.env = { ...process.env, ...loadEnv(mode, process.cwd()) };

    const appUrl = process.env.APP_URL || '/';
    let base = '/';

    try {
        base = new URL(appUrl).pathname;
    } catch (error) {
        base = appUrl;
    }

    if (!base.endsWith('/')) {
        base += '/';
    }

    return defineConfig({
        base,
        plugins: [
            laravel({
                input: ['resources/css/app.css', 'resources/js/app.js'],
                refresh: true,
            }),
        ],
        server: {
            host: '0.0.0.0',
            hmr: {
                host: 'localhost'
            }
        },
        build: {
            minify: 'esbuild',
            cssMinify: true,
            rollupOptions: {
                output: {
                    manualChunks: {
                        alpine: ['alpinejs'],
                    },
                },
            },
        }
    });
};
