 <!--The initialization of the page-->
 <?php require_once('../../../private/initialize.php'); 
 
 //if not set redirect to pages/index
 if(!isset($_GET['id'])) {
     redirect_to(url_for('/staff/pages/index.php'));
 }

//Creating id, menu-name, position and visible variables
 $id = $_GET['id'];
 $menu_name = '';
 $position = '';
 $visible = '';

 if(is_post_request()) {
//Handle form values sent by new php

$menu_name = $_POST['menu_name'] ?? '';
$position = $_POST['position'] ?? '';
$visible = $_POST['visible'] ?? '';

echo "Form Parameters<br />";
echo "Menu Name: " . $menu_name . "<br />";
echo "Position: " . $position . "<br />";
echo "Visible: " . $visible . "<br />";
} else {
//redirect_to(url_for('/staff/pages/new.php));
}
?> 

<!--Page Title-->
<?php $page_title = 'Edit Page'; ?>
<!--Header Component-->
<?php include(SHARED_PATH . '/staff_header.php'); ?>
<!--Main Content-->
<div id="content">
<!--Link back to the list-->
    <a href="<?php echo url_for('/staff/pages/index.php'); ?>" class="back-link"> &laquo; Back to List</a>
<!--Header for the page-->
    <div class="pages edit">
        <h1>Edit Page</h1>
<!--The beginning of the form-->
        <form action="<?php echo url_for('/staff/pages/edit.php?id=' . h(u($id))); ?>" method="post">
<!--Definition List-->
            <dl>
<!--Definition Term/Name-->
                <dt>Menu Name</dt>
<!--Definition Desctiption-->
                <dd>
<!--Input for the menu name-->
                    <input type="text" name="menu_name" value="<?php echo $menu_name; ?>" />
                </dd>
            </dl>
            <dl>
                <dt>Position</dt>
                <dd>
                    <select name="position">
                        <option value="1">1</option>
                    </select>
                </dd>
            </dl>
            <dl>
                <dt>Visible</dt>
                <dd>
<!--The following is for the checkbox. The 0 is there to make sure that if it is not checked there is still some value being returned. since it is hidden, nobody would even know its there-->
                    <input type="hidden" name="visible" value="0">
                    <input type="checkbox" name="visible" value="1">
                </dd>
            </dl>
            <div id="operations">
<!--The magic! SUBMIT-->
                <input type="submit" value="Edit Page" />
            </div>
        </form>

    </div>

</div>
<!--The Footer Component-->
<?php include(SHARED_PATH . '/staff_footer.php'); ?>
