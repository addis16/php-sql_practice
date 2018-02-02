<?php
require_once('../../../private/initialize.php');

if(!isset($_GET['id'])) {
    redirect_to(url_for('/staff/subjects/index.php'));
}
$id = $_GET['id'];

if(is_post_request()) {
    
    // Handle form values sent by this page (single page form processing)

    $menu_name = $_POST['menu_name'] ? $_POST['menu_name'] : '';
    $position = $_POST['position'] ? $_POST['position'] : '';
    $visible = $_POST['visible'] ? $_POST['visible'] : '';

    echo "Form parameters<br/>";
    echo "Menu name: " . $menu_name . "<br/>";
    echo "Position: " . $position . "<br/>";
    echo "Visible: " . $visible . "<br/>";
    
} else {

    $subject = find_subject_by_id($id);

}

?>

<?php $page_title = 'Edit Page'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to List</a>

  <div class="subject edit">
    <h1>Edit Page</h1>

    <form action="<?php echo url_for('/staff/subjects/edit.php?id=' . htmlspecialchars($id)); ?>" method="post">
      <dl>
        <dt>Menu Name</dt>
        <dd><input type="text" name="menu_name" value="<?php echo htmlspecialchars($subject['menu_name']); ?>" /></dd>
      </dl>
      <dl>
        <dt>Position</dt>
        <dd>
          <select name="position">
            <option value="1" <?php if($subject['position'] == "1") { echo " selected"; } ?> >1</option>
          </select>
        </dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd>
          <input type="hidden" name="visible" value="0" />
          <input type="checkbox" name="visible" value="1" <?php if($subject['visible'] == "1") { echo " checked"; }  ?> />
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Edit Subject" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
