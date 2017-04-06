<html>
<head>
<?php
	@include("bvl5/php/base.php");
	/*-- if cvalue is set than it's a post, calculate and add to the list */
	if (isset($_POST['cvalue'])==1) {
		$cval=stripslashes($_POST['cvalue']);
		$fval=9*$cval/5.0+32.0;
		$_SESSION['cflist']="<BR>".$cval."C = ".$fval."F".$_SESSION['cflist'];
	}

?>
</head>

<body>
    <SCRIPT src="bvl5/js/menu.js"></script>
	<SCRIPT>mainmenu();</SCRIPT>
	<div CLASS="container container-bottomline theme-showcase">
	  
		<H1 CLASS="pagetitle">Celcius Convertor</H1>
				
		<div CLASS="row"><!-- line -->
			<div CLASS="col-md-4 bgwhite">
			<?php
				if (!isset($_SESSION['cflist'])) $_SESSION['cflist']="";
				echo "Previous Results:";
				echo $_SESSION['cflist'];
			?>
			</div><!--/col-md-4-->
			<div CLASS="col-md-4">

			Enter a temperature in Celcius and press Convert
  <form action="cf.php" method="post">
   <P>&nbsp;
   <?php
   $nr=rand(1,100);
   echo "<P>Celcius: <input type=\"text\" name=\"cvalue\" value=\"".$nr."\" />";
   ?>
   <P>&nbsp;
   <P><input type="submit" value="Convert" class="btn btn-default"   />
  </form>

	<?php	
	if (isset($_POST['cvalue'])==1) {
		print("<BR>".$cval."C =".$fval."F (without SPAN)");
		print("<BR><SPAN ID=CELCIUS>".$cval."</SPAN>C =<SPAN ID=FARHENHEIT>".$fval."</SPAN>F (with SPAN)");
	}
	?>		
			
			</div><!--/col-md-4-->
			<div CLASS="col-md-4 bgblue">
				<h2>Explain</h2> 

				<p>Convert a Celcius temperature to Fahrenheit.
				<pre>
F = 9*C/5+32</pre>
			<p>Suggested tests:
			<ul>
			<li>Check value calculated.
			<li>Read proposed random value, submit, check value.
			<li>Check if list is build.
			</div><!--/col-md-4-->
		</div><!-- line -->
      
		</div> <!-- /container -->
         
<?php EndOfPage() ?>
</body>
</HTML>