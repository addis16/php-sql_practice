<?php
date_default_timezone_set('US/Eastern');
?>

    <footer>
        &copy; <?php echo date('Y'); ?> Globe Bank
    </footer>
  </body>
</html>

<?php
    db_disconnect($db);
?>
