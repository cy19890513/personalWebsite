<html>
    <head>
        <title>Kansas State University Math Department Homework System</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link href="http://www.boostshore.com/index_files/favicon.ico" rel="shortcut icon">
		<link rel="stylesheet" href="../style.css">
		<meta name="keywords" content="Yang Chen _2166">
		<meta name="description" content="Yang Chen#39;s Homepage on K-State CIS">
    </head>
    <body>
	<?php include '../header.php';?>
	<article class="hero clearfix">
        <h1>Kansas State University Math Department Homework System</h1>
        
		<hr>
		<div class="col_50 phpProj">
		<h3>Introduction:</h3>
		<p>
		I have helped continue to build the m100 algebra course online homework system. For each question we need to construct the generate, grading, second grading and help
		section using php. Here is the offical site <a href="http://www.math.ksu.edu/math100/oha/">Online Homework</a>.
		</p>
		</div>
		<div class="col_50 phpProj">
		<h3>Sample Code:</h3>
		<p/>
		<a href="sampleCode.PNG" title="Open picture in new window" target="_blank">
		<img src="sampleCode.PNG" alt="step1 php project" class="img_floatleft" width="350" height="200"> 
		</a>
		<p/>
		</div>
		<div class="col_50 phpProj">
		<h3>Picture One: </h3>
		<p>The list of algebra question sets.
		</p>
		<a href="step2.PNG" title="Open picture in new window" target="_blank">
		<img src="step2.PNG" alt="step1 php project" class="img_floatleft" width="350" height="200"> 
		</a>
		</div>
		<div class="col_50 phpProj">
		
		
		<h3>Picture Two: </h3>
		<p>Php generate random question under certain requirements. solve and store the answer.
		</p>
		<a href="step3.PNG" title="Open picture in new window" target="_blank">
		<img src="step3.PNG" alt="step1 php project" class="img_floatleft" width="350" height="200">
		</a> 
		<p></p>
		</div>
		<div class="col_50 phpProj">
		
		<h3>Picture Three: </h3>
		<p>
		Grade the first time, show students which one is wrong and which one is right. Give them one  more chance to revise their answer.
		</p>
		<a href="step6.PNG" title="Open picture in new window" target="_blank">
		<img src="step6.PNG" alt="step1 php project" class="img_floatleft" width="350" height="200"> 
		</a>
		</div>
		
		<div class="col_50 phpProj">
		
		<h3>Picture Four:</h3>
		<p> 
		Final Grade. Give the correct answer of each question. Provide Help section for each wrong questions.
		</p>
		<a href="step7.PNG" title="Open picture in new window" target="_blank">
		<img src="step7.PNG" alt="step1 php project" class="img_floatleft" width="350" height="200"> 
		</a>
		</div>
		
		<div class="col_50 phpProj" style="left: 0px; top: 100%;">
		
		<h3>Picture Five:</h3>
		<p> 
		This is the help section created base on each random question.
		</p>
		<a href="step8.PNG" title="Open picture in new window" target="_blank">
		<img src="step8.PNG" alt="step1 php project" class="img_floatleft" width="350" height="200"> 
		</a>
		</div>
        <hr>
        <p>
        
        
        
	</article>
	<?php include 'footer.php';?>
    </body>
</html>


<!-- 	<?php
	if (!$utilsloaded) { include "utils.php"; }
	$eqnlineloaded=true;

	function eqnlinegen($start=0) {
	    $varlist="class,start,numer,denom,sl,b,sgn,x0,y0";
		$class="eqnline";
		if ($start==0) $start=rand();
		srand($start);
		for ($i=0;$i<13;$i++) {
			rand();
		}
		$b=rand(-7,7);
		$numer=rand(1,6);
	  	if ($numer)
	    	$denom=rand(1,$numer-1);
	    else $denom=1;
	  
		if (rand(0,1)) {
			$dummy=$denom;
			$denom=$numer;
			$numer=$dummy;
		}

		$cf=gcd($numer,$denom);
		$numer=$numer/$cf;
		$denom=$denom/$cf;
		if (rand(0,1)) $sgn=1;
		else $sgn=-1;
	    $sl=$sgn*$numer/$denom;
	}
	?>
		 -->