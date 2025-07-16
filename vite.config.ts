import { defineConfig } from 'vite';
import react from '@vitejs/plugin-react';

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [react()],
  optimizeDeps: {
    exclude: ['lucide-react'],
  },
  // Base URL for GitHub Pages deployment
  // Replace 'boomerang--2026' with your GitHub repo name
  base: '/boomerang--2026/',
});
