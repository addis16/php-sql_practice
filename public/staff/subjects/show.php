<?php require_once('../../../private/initialize.php'); ?>

<?php

$id = isset($_GET['id']) ? $_GET['id'] : '1';

$sql = "SELECT * FROM subjects ";
$sql .= "WHERE id='" . $id . "'";
$result = mysqli_query($db, $sql);
confirm_result_set($result);

$subject = mysqli_fetch_assoc($result);
mysqli_free_result($result);

?>

<?php $page_title = "Show Subject"; ?>
<?php include(SHARED_PATH . "/staff_header.php"); ?>

<div id="content">
    <a class="back-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to Subjects List</a>
    <div class="subject show">

        <h1> Subject ID: <?php echo htmlspecialchars(subject['menu_name']); ?> </h1>

        <div class="attributes">
            <dl>
                <dt>Menu Name</dt>
                <dd> <?php echo htmlspecialchars($subject['menu_name']); ?> </dd>
            </dl>
            <dl>
                <dt>Position</dt>
                <dd> <?php echo htmlspecialchars($subject['position']); ?> </dd>
            </dl>
            <dl>
                <dt>Menu Name</dt>
                <dd> <?php echo $subject['visible'] == '1' ? 'true' : 'false'; ?> </dd>
            </dl>
        </div>

    </div>
</div>

<?php include(SHARED_PATH . "/staff_footer.php"); ?>
