import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

// Add a global store for theme
Alpine.store('theme', {
    dark: localStorage.getItem('theme') === 'dark' ||
        (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches),
    toggle() {
        this.dark = !this.dark;
        localStorage.setItem('theme', this.dark ? 'dark' : 'light');
        if (this.dark) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    }
});

// Ensure the class is set on page load
if (Alpine.store('theme').dark) {
    document.documentElement.classList.add('dark');
} else {
    document.documentElement.classList.remove('dark');
}

Alpine.start();
