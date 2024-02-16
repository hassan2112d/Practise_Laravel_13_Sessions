import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import autoprefixer from 'autoprefixer'; // Make sure to include this line

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      refresh: true,
      postcss: {
        plugins: [
          autoprefixer(), // Ensure autoprefixer is included here
        ],
      },
    }),
  ],
});
