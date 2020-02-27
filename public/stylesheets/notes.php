<!-- if statement in php 

v1
if(isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = '1';
}

ternary
$page  isset($_GET['page']) ? $_GET['page'] : '1';

PHP 7.0
$page = $_GET['page'] ?? '1'; -->