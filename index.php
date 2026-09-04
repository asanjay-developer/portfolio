<?php include 'libs/load.php' ?>

<?php
load_templates("_head");
?>

<body>
  <?php
  load_templates("_nav");
  ?>
  <?php
  load_templates("_header");

  load_templates("_projects");
  load_templates("_about");
  load_templates("_exp");
  load_templates("_contect");
  load_template("_footer");
  ?>

  <!-- Bootstrap 5 JS Bundle (CDN) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>