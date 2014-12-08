<?php
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Simple Forum</title>
    <link href="./css/bootstrap.css" rel="stylesheet">
	 

    <link href="./css/carousel.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
	<link href="Main_Page_Layout.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

	<?php
	include'Bootstrap/navbar.php';
	?>
      </div>
   
    <div class="container marketing">
 <div class="jumbotron">
  <div class="container">



	Create an Account for this website:

</br></br>
</br></br>

</br>

			<?php 
			if (isset($error_message))
			{
			$error_message .= "";
			echo $error_message;
			}
			?>

<form action="process_account.php" method="post">

Username* <input name="username" size="18" <?php echo (isset($_POST['usr']) ? $firstN : '') ?> >
	</br></br> Password* <input type="password" name="password" size="18" <?php echo (isset($_POST['paswrd']) ? $firstN : '') ?> >
	</br> <input type="submit" value="Submit Form" />
</form>
</div>
</br></br>
	  </div>
</div>
      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p> &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/holder.js"></script>
    <!--<script src="./js/main.js"></script>-->
  </body>
</html>
