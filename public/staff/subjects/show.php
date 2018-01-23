<?php require_once('../../../private/initialize.php'); ?>

<?php

$id = isset($_GET['id']) ? $_GET['id'] : '1';

$sql = "SELECT * FROM subjects ";
$sql .= "WHERE id='" . $id . "'";
$result = mysqli_result_set($result);
confirm_result_set($result);

$subject = mysqli_fetch_assoc($result);
mysqli_free_result($result);

?>

<?php $page_title = "Show Subject"; ?>
<?php include(SHARED_PATH . "/staff_header.php"); ?>

<div id="content">
    <a class="back-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to Subjects List</a>
    <div class="subject show">
        Subject ID: <?php echo htmlspecialchars($id); ?>
    </div>
</div>

<?php include(SHARED_PATH . "/staff_footer.php"); ?>
