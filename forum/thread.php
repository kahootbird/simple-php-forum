<?php
error_reporting(0);
?>

<?php $ID = $_GET['id'] ?>
<?php $Data = $_GET['Data'] ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Forum</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="./css/carousel.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
	<style media="all"> 
	h2{padding-bottom:10px}.AliceBlue{background-color:#9da450};
	h2{padding-bottom:10px}.AntiqueWhite {background-color:#7cb5bd};
	h2{padding-bottom:10px}.otherClr {background-color:#dfe3c1};
	
	
	</style>
  </head>
<!-- NAVBAR
================================================== -->
 <body>
    <div class="navbar-wrapper">
      <div class="container">
<font color='black' >
        <div class="navbar navbar-inverse navbar-fixed-top navbar-static-top AliceBlue " role="navigation">
          <div class="container AliceBlue ">
            <div class="navbar-header AliceBlue ">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="Create_Account.php"> <font color='black' >Create Account </font> </a>
            </div>
            <div class="navbar-collapse collapse AliceBlue "> 
              <ul class="nav navbar-nav">
                <li class=""><a href="forum.php"> <font color='black'> Main Forum </font> </a></li>
                <li><a href="index.php"> <font color='black' > Back To Main Page </font> </a></li>
				<li><a href="SearchBox.php"> <font color='black'> Search Accounts </font> </a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>

	


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
</br></br></br></br>
<div class="jumbotron">
    <div class="container marketing AntiqueWhite">

	
      <!-- START THE FORUM CODE -->
	   
		 <div class= "container">
	   

	   Thread:
	   <div class="container otherClr">
	
<?php
		
	    require_once('database.php');
			$query = 'select title from thread where threadid = ' . $ID . ' order by threadid';
		$categories = $db->query($query);
	//$categories = mysqli_fetch_all($result);
	
	//print_r($categories);
	
	$query = 'select * from thread where threadid = ' . $ID . ' order by threadid';
			$categoryid = $db->query($query);
			
	$query = 'select * from login';
			$username = $db->query($query);

	//$categoryid = mysqli_fetch_all($result);
		
		foreach ($categoryid as $categories):
		?>
		</br>
		<table bgcolor="black" border="2" > 
		<tr> <td>
		<b> Username: </b>
				<?php
			
		$row = $username->fetch_array(MYSQLI_ASSOC);
printf ("%s\n", $row["username"]);
		?>
		</td><td>
		<b> Title: </b> 
		<?php
		//echo $usr['username'];
		echo $categories['title'];	
		
		$ThreadID = $categories['threadid'];	
		?>
		</tr>
		<tr>
		<td>

		<b> Posts: </b> <?php 
				$row = $username->fetch_array(MYSQLI_ASSOC);
printf ("%s\n", $row["post_count"]);
		?>
		</td>
<td>


		
		
		<?php
		
		?>
		</br>
		<?php
			
		echo $categories['txt_Body'];
		
		?>

		</td>
</tr>
</table> 
		<?php 
		
		endforeach;
	?>
	   <div class='jumbotron'>
	   <a href='Reply.php?id=<?php echo $ID ?>&Data=<?php echo $Data ?>'>
Reply
</a>
</div>
	</br></br>
	   </div>
	   </div>
	    <div class="container AntiqueWhite"> </br> </div>
 </div>


      <!-- /END THE FORUM CODE -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right AntiqueWhite"><a href="#">Back to top</a></p>
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
	</font>
  </body>
</html>
