<?php require_once('../../../private/initialize.php'); ?>

<?php 
    // -------AWESOME NEW TERNARY-------
    $id = $_GET['id'] ?? '1'; 
?>
<?php $page_title = 'Show Page'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
    
    <a href="<?php echo url_for('/staff/pages/index.php'); ?>" class="back-link">&laquo; Back To List</a>

    <div class="page show">

        Page ID: <?php echo h($id); ?>

    </div>

</div>


<a href="show.php?name=<?php echo u('Jon Doe'); ?>">Link</a>
<a href="show.php?company=<?php echo u('Widgets&More'); ?>">Link</a>
<a href="show.php?query=<?php echo u('!#*?'); ?>">Link</a>