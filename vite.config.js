import { defineConfig } from 'vite'
import react from '@vitejs/plugin-react'

export default defineConfig({
  plugins: [react()],
  base: '/', // إضافة المسار الأساسي لضمان الربط
  build: {
    outDir: 'dist',
  }
})