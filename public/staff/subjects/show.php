<?php require_once('../../../private/initialize.php'); ?>

<?php 
    // -------AWESOME NEW TERNARY-------
    $id = $_GET['id'] ?? '1'; 

    echo h($id);


?>

<a href="show.php?name=<?php echo u('Jon Doe'); ?>">Link</a>
<a href="show.php?company=<?php echo u('Widgets&More'); ?>">Link</a>
<a href="show.php?query=<?php echo u('!#*?'); ?>">Link</a>