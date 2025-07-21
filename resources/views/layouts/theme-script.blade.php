<script>
    // Set theme on page load and listen for changes
    (function() {
        function applyTheme() {
            const theme = localStorage.getItem('theme');
            if(theme === 'dark' || (!theme && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        }
        applyTheme();
        window.addEventListener('storage', function(e) {
            if (e.key === 'theme') applyTheme();
        });
    })();
</script> 