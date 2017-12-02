<?php
include_once('includes/init.php');
include_once('database/category.php');
include_once('templates/common/header.php');

$categories = getAllCategories();

include_once('templates/category/list_categories.php');
include_once('templates/todo/add_todo.php');

if(!(isset($_SESSION['username']) && $_SESSION != ''))
  header('location:page.php');
?>
