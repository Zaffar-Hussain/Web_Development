<?php 
  
  $page = isset($_GET['page'])?$_GET['page']:NULL;
  try {
    if(!$page ||$page == 'home') {
      include 'home.php';
    }
    else if($page == 'header') {
        include 'header.php';
    }
    else {
        $this->showError("Page not found", "".$page."Page was not found!");
    }
  }
  catch ( Exception $e ) {
    $this->showError("Application error", $e->getMessage());
  }

?>