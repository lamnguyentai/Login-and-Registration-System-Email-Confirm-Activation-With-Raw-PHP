<?php include "includes/header1.php"; ?>

<?php include "includes/nav.php"; ?>
  



  <div class="jumbotron">
    <h1 class="text-center">
<?php
    if(logged_in()){

    echo "Logged in";
    
} else {
	
	redirect("index.php");
}

?>
	</h1>
  </div>

  <?php include "includes/footer.php"; ?>