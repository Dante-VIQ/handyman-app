import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './app/Livewire/**/*.php', // Livewire components
        './resources/js/**/*.js',  // Alpine.js components or custom scripts
        './resources/**/*.vue',
    ],
  theme: {
    extend: {
      colors: {
        'gb-blue': '#60A5FA',      // light blue
        'gb-green': '#86EFAC',     // light green
        'gb-yellow': '#FCD34D',    // soft yellow
        'gb-gray': '#F9FAFB',
      },
    },
  },
  plugins: [require('@tailwindcss/forms')],
}