<!-- TELLS SESSION.PHP IF YOU LOG OUT -->
<?php 
  session_start();
  unset($_SESSION['success']);
  unset($_SESSION['username']);
  header('Refresh: 0; URL=../index.php');
?>