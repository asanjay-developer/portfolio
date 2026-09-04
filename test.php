

<pre>
<?php 

print_r($_SERVER);

?>
</pre>
<script>
    document.addEventListener('DOMContentLoaded', function () {
      if (window.bootstrap) {
        return;
      }

      const toggleButton = document.querySelector('.navbar-toggler');
      const navMenu = document.getElementById('navMenu');

      if (!toggleButton || !navMenu) {
        return;
      }

      toggleButton.addEventListener('click', function () {
        const isExpanded = this.getAttribute('aria-expanded') === 'true';
        const nextExpanded = !isExpanded;

        this.setAttribute('aria-expanded', String(nextExpanded));
        navMenu.classList.toggle('show', nextExpanded);
        this.classList.toggle('collapsed', !nextExpanded);
      });
    });
  </script>