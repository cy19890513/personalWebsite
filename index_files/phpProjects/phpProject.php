<html>
    <head>
        <title>Kansas State University Math Department Homework System</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link href="./index_files/favicon.ico" rel="shortcut icon">
		<link rel="stylesheet" href="../style.css">
		<meta name="keywords" content="Yang Chen _2166">
		<meta name="description" content="Yang Chen#39;s Homepage on K-State CIS">
    </head>
    <body>
	<?php include '../header.php';?>
	<article class="hero clearfix">
        <h1>Kansas State University Math Department Homework System</h1>
        
		<hr>
		<div class="col_50">
		<h3>Introduction:</h3>
		<p>
		I have helped continue to build the m100 algebra course online homework system. For each question we need to construct the generate, grading, second grading and help
		section using php. Here is the offical site <a href="http://www.math.ksu.edu/math100/oha/">Online Homework</a>.
		</p>
		<h3>Sample Code:</h3>
		<p>
		(?php<p/>
if (!$utilsloaded) { include "utils.php"; }<p/>
$eqnlineloaded=true;<p/>
function eqnlinegen($start=0) {<p/>
  $varlist="class,start,numer,denom,sl,b,sgn,x0,y0";<p/>
  $class="eqnline";<p/>
  if ($start==0) $start=rand();<p/>
  srand($start);<p/>
  for ($i=0;$i(13;$i++) {<p/>
    rand();<p/>
  }<p/>
  $b=rand(-7,7);<p/>
  $numer=rand(1,6);<p/>
  if ($numer)2) $denom=rand(1,$numer-1);<p/>
           else $denom=1;<p/>
  if (rand(0,1)) {<p/>
    $dummy=$denom;<p/>
    $denom=$numer;<p/>
    $numer=$dummy;<p/>
  }<p/>
  $cf=gcd($numer,$denom);<p/>
  $numer=$numer/$cf;<p/>
  $denom=$denom/$cf;<p/>
  if (rand(0,1)) $sgn=1;<p/>
            else $sgn=-1;<p/>
  $sl=$sgn*$numer/$denom;<p/>

		</p>
		
		
		<p>
		<h3>Picture One: </h3>
		The list of algebra question sets.
		</p>
		<img src="step2.PNG" alt="step1 php project" class="img_floatleft" width="350" height="200"> 

		</div>
		<div class="col_50">
		<p>
		
		<h3>Picture Two: </h3>
		Php generate random question under certain requirements. solve and store the answer.
		</p>
		
		<img src="step3.PNG" alt="step1 php project" class="img_floatleft" width="350" height="200"> 
		<p></p>
		</div>
		<div class="col_50">
		<p>
		<h3>Picture Three: </h3>
		Grade the first time, show students which one is wrong and which one is right. Give them one  more chance to revise their answer.
		</p>
		
		<img src="step6.PNG" alt="step1 php project" class="img_floatleft" width="350" height="200"> 

		</div>
		
		<div class="col_50">
		<p>
		<h3>Picture Four:</h3> 
		Final Grade. Give the correct answer of each question. Provide Help section for each wrong questions.
		</p>
		
		<img src="step7.PNG" alt="step1 php project" class="img_floatleft" width="350" height="200"> 

		</div>
		
		<div class="col_50" style="left: 0px; top: 100%;">
		<p>
		<h3>Picture Five:</h3> 
		This is the help section created base on each random question.
		</p>
		
		<img src="step8.PNG" alt="step1 php project" class="img_floatleft" width="350" height="200"> 

		</div>
        <hr>
        <p>
        
        
        
	</article>
    </body>
</html>
