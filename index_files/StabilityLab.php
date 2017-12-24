<link rel="stylesheet" type="text/css" href="jsxgraph.css" />
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jsxgraph/0.94/jsxgraphcore.js"></script>
<script class="include" type="text/javascript" src="../jquery/jquery.min.js"></script>



<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Lab 9</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link href="./index_files/favicon.ico" rel="shortcut icon">
<link rel="stylesheet" href="style.css">
<meta name="keywords" content="Yang Chen _2166">
<meta name="description" content="Yang Chen#39;s Homepage on K-State CIS">

</head>

<body>
<?php include 'header.php';?>


<article class="article clearfix">
       <div class="col_100">
	  <h2><a id="projects"></a>Projects</h2>
          <h4>This is the javascript graph:</h4>
		<nav class="projects">	
<center>
<table style="width: 400px; float: center" >
<tr>
        <td/>
	<td class="fn-right"><pre>&nbsp;&nbsp;          <input type="text" name="ans1" id = 'ans1' value="1" size = "1">x''+ <input type="text" name="ans2" id = 'ans2' value="0" size = "1">x'+ </td><td><input type="text" name="ans3" id = 'ans3' value="9" size = "1"></td><td>x = <input type="text" name="ans4" id = 'ans4' value="0" size = "1">cos (<input type="text" name="ans5" id = 'ans5' value="1" size = "1">t)</pre>
	</td>
	
	
	
</tr>
<tr>    <td/>
	<td>
		<pre>&nbsp;&nbsp;<form>                x(0) = <input type="text" name="ans6" id = 'ans6' value="10" size = "1"></form></pre>
	</td>
	<td><td/>
		<form>x'(0) = <input type="text" name="ans7" id = 'ans7' value="0" size = "1"></form>
	</td>
</tr>
<!--</table></center><table>-->
<tr>
	<td><div id="space" class="jxgbox"style="height:300px; width:150px; float:left;"></div></td>
	<td>
	<div id="graph1"  style="height:300px; width:300px; float:left;"></div>
	</td>
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td>
	<div id="graph2" class="jxgbox" style="height:300px; width:300px; float:right;"></div>
	</td>
	<td></td>
	<td></td>
</tr>
<tr><td></td>
	<td>
	<input type="button" value="Update Graphs" onclick="update()" style="float: right;"/>
	</td><td></td>
	<td>
	<input type="button" value="Reset" onclick="reset()" />
	</td>
</tr>

</table>


</nav>
</div>

<div>
<h4>This is The regional java graph:</h4>
<br><center>
<a  href="http://www.math.ksu.edu/math240/java/lab9/lab9.html" title="stability lab" alt="stability lab"><img src="java.PNG" width="900" height="600"></a>
</center>
</article>



<script type="text/javascript">

			
	<!-- var x = parseInt(('input[name="ans1"]').val());-->	


var a = 1.0;
var b = 0.0;
var c = 9.0;
var fa = 0.0;
var fw = 1.0;
var y0 = 10.0;
var y1 = 0.0;	
var p=[];

var xmin,xmax,ymin,ymax; // Limits

    var rparts = [];
	var iparts = [];

    var orders = [];

    var num;
	
	var xmin=0;

    var xmax=18.85;

    var ymin=-10;

    var ymax=10;
	
	 
	

	var xvals = [];
	var yvals = [];
	
	var brd1;
	var brd2;
	

draw();


function reset()
{
	document.getElementById("ans1").value = 1; 
	document.getElementById("ans2").value = 0; 
	document.getElementById("ans3").value = 9; 
	document.getElementById("ans4").value = 0; 
	document.getElementById("ans5").value = 1; 
	document.getElementById("ans6").value = 10; 
	document.getElementById("ans7").value = 0; 
}


function update()
{
	
	a = document.getElementById('ans1').value;
	b = document.getElementById('ans2').value;
	c = document.getElementById('ans3').value;
	fa = document.getElementById('ans4').value;
	fw = document.getElementById('ans5').value;
	y0 = document.getElementById('ans6').value;
	y1 = document.getElementById('ans7').value;
	
	//document.write("<h1>Elements of the first array:</h1>" + a + b + c);
	
	JXG.JSXGraph.freeBoard(brd1);
	JXG.JSXGraph.freeBoard(brd2);
	
	draw();
}

function draw()
{
brd1 = JXG.JSXGraph.initBoard('graph1', {
			boundingbox: [-10, 10, 2, -10], 
			axis: true, 
			grid: true, 
			showNavigation: false, 
			showCopyright: false});



			





brd2 = JXG.JSXGraph.initBoard('graph2', {
			boundingbox: [-2, 10, 18, -10], 
			axis: true, 
			grid: true, 
			showNavigation: false, 
			showCopyright: false});	
	
	for (var i=0;i<51;i++) 
	{

            xvals[i]=xmin+(i/50)*(xmax-xmin);

            yvals[i]=10*Math.cos(xvals[i]);

    }
    //Font lf;

    //FontMetrics lfm;

    var lfmSet = false;
	
	
	

		var disc = b*b-4*a*c;

		var srd;         // square root of disc                 

        var r1,r2;       // exponents of solution

        var c1,c2;       // arbitary constants in solution

        var w;           // circular frequency of solution

        var re,im,d0,d1; // real and imaginary parts of particular solution

		var polecount;
		
		
		if (disc>0) {

            // Homogeneous solution parameters

            srd=Math.sqrt(disc);

            r1=(-b+srd)/(2*a);

            r2=(-b-srd)/(2*a);

            // Particular solution parameters

            re=c-a*fw*fw;

            im=b*fw;

            d0=(fa*re)/(re*re+im*im);

            d1=(fa*im)/(re*re+im*im);

            // Adjust initial values for particular solution

            y0=y0-d0;

            y1=y1-d1*fw;

            // Arbitrary constants

            c1=(r2*y0-y1)/(r2-r1);

            c2=(r1*y0-y1)/(r1-r2);

            // Evaluate solution curve
	
            polecount=0;

            if (!(c1==0)) {

                rparts[polecount]=r1;
				
				//change 0d;
                iparts[polecount]=0;

                orders[polecount]=1;

                polecount++;

            }

            if (!(c2==0)) {

                rparts[polecount]=r2;
				//change 0d;
                iparts[polecount]=0;

                orders[polecount]=1;

                polecount++;

            }

            if (!(fa==0)) {
				//change 0d;
                rparts[polecount]=0;

                iparts[polecount]=fw;

                orders[polecount]=1;

                polecount++;
				//change 0d;
                rparts[polecount]=0;

                iparts[polecount]=-fw;

                orders[polecount]=1;

                polecount++;

            }

            num=polecount;
        }
		
		if (disc==0) {

            // Homogeneous solution parameter

            r1=-b/(2*a);

            // Particular solution parameters

            re=c-a*fw*fw;

            im=b*fw;

            d0=(fa*re)/(re*re+im*im);

            d1=(fa*im)/(re*re+im*im);

            // Adjust initial values for particular solution

            y0=y0-d0;

            y1=y1-d1*fw;

            // Arbitrary constants

            c1=y0;

            c2=y1-r1*y0;

            // Evaluate solution curve

            polecount=0;

            if (!(c1==0 && c2==0)) {

                rparts[polecount]=r1;

                iparts[polecount]=0;

                if (c2==0) {

                    orders[polecount]=1;

                } else {

                    orders[polecount]=2;

                }

                polecount++;

            }

            if (!(fa==0)) {
				//change 0d;
                rparts[polecount]=0;

                iparts[polecount]=fw;

                orders[polecount]=1;

                polecount++;
				//change 0d;
                rparts[polecount]=0;

                iparts[polecount]=-fw;

                orders[polecount]=1;

                polecount++;

            }

            num=polecount;

        }
		
		if (disc<0 && !((b==0) && ((c-a*fw*fw)==0))) {

            // Homogeneous solution parameters

            srd=Math.sqrt(-disc);

            w=srd/(2*a);

            r1=-b/(2*a);

            // Particular solution parameters

            re=c-a*fw*fw;

            im=b*fw;

            d0=(fa*re)/(re*re+im*im);

            d1=(fa*im)/(re*re+im*im);

            // Adjust initial values for particular solution

            y0=y0-d0;

            y1=y1-d1*fw;

            // Arbitrary constants

            c1=y0;

            c2=(y1-y0*r1)/w;

            // Evaluate solution curve

            polecount=0;

            if (!(c1==0 && c2==0)) {

                rparts[polecount]=r1;

                iparts[polecount]=w;

                orders[polecount]=1;

                polecount++;

                rparts[polecount]=r1;

                iparts[polecount]=-w;

                orders[polecount]=1;

                polecount++;

            }

            if (!(fa==0)) {
				//change 0d;
                rparts[polecount]=0;

                iparts[polecount]=fw;

                orders[polecount]=1;

                polecount++;
				//change 0d;
                rparts[polecount]=0;

                iparts[polecount]=-fw;

                orders[polecount]=1;

                polecount++;

            }

            num=polecount;

        }
		
		// Resonance

        if (b==0 && (c-a*fw*fw)==0) {

            // Homogeneous solution parameter known (w = fw)

            // Particular solution parameter

            d1=fa/(2*a*fw);

            // Initial values need no adjustments

            // Arbitrary constants

            c1=y0;

            c2=y1/fw;

            // Evaluate solution curve

            polecount=0;

            if (!(d1==0)) {
				//change 0d;
                rparts[polecount]=0;

                iparts[polecount]=fw;

                orders[polecount]=2;

                polecount++;
				//change 0d;
                rparts[polecount]=0;

                iparts[polecount]=-fw;

                orders[polecount]=2;

                polecount++;

            } else {

                if (!(c1==0 && c2==0)) {
					//change 0d;
                    rparts[polecount]=0;

                    iparts[polecount]=fw;

                    orders[polecount]=1;

                    polecount++;
					//change 0d;
                    rparts[polecount]=0;

                    iparts[polecount]=-fw;

                    orders[polecount]=2;

                    polecount++;

                }

            }

            num=polecount;

        }
		
		for (var i=0;i<num;i++) {

            if (orders[i]==1) {


				col = 'red'; 			
				var corrpt2 = brd1.create('point',[rparts[i],iparts[i]],{strokeColor:col,fillColor:col, snapToGrid: true,face:'[]', fixed: true}); 
            }

            if (orders[i]==2) {

                col = 'yellow'; 			
				var corrpt2 = brd1.create('point',[rparts[i],iparts[i]],{strokeColor:col,fillColor:col, snapToGrid: true,face:'[]', fixed: true}); 

            }

        }
		
///////////////////////////////////begin here		
		
		
		
		var disc=b*b-4*a*c;      // discriminant

        var srd;         // square root of disc                 

        var r1,r2;       // exponents of solution

        var c1,c2;       // arbitary constants in solution

        var w;           // circular frequency of solution

        var re,im,d0,d1; // real and imaginary parts of particular solution

        

        // Overdamped

        if (disc>0) {

            // Homogeneous solution parameters

            srd=Math.sqrt(disc);

            r1=(-b+srd)/(2*a);

            r2=(-b-srd)/(2*a);

            // Particular solution parameters

            re=c-a*fw*fw;

            im=b*fw;

            d0=(fa*re)/(re*re+im*im);

            d1=(fa*im)/(re*re+im*im);

            // Adjust initial values for particular solution

            y0=y0-d0;

            y1=y1-d1*fw;

            // Arbitrary constants

            c1=(r2*y0-y1)/(r2-r1);

            c2=(r1*y0-y1)/(r1-r2);

            // Evaluate solution curve

            for (var i=0;i<51;i++) {

                xvals[i]=xmin+(i/50)*(xmax-xmin);

                yvals[i]=c1*Math.exp(r1*xvals[i])+c2*Math.exp(r2*xvals[i])+d0*Math.cos(fw*xvals[i])+d1*Math.sin(fw*xvals[i]);

            }

        }

        // Critically Damped

        if (disc==0) {

            // Homogeneous solution parameter

            r1=-b/(2*a);

            // Particular solution parameters

            re=c-a*fw*fw;

            im=b*fw;

            d0=(fa*re)/(re*re+im*im);

            d1=(fa*im)/(re*re+im*im);

            // Adjust initial values for particular solution

            y0=y0-d0;

            y1=y1-d1*fw;

            // Arbitrary constants

            c1=y0;

            c2=y1-r1*y0;

            // Evaluate solution curve

            for (var i=0;i<51;i++) {

                xvals[i]=xmin+(i/50)*(xmax-xmin);

                yvals[i]=(c1+c2*xvals[i])*Math.exp(r1*xvals[i])+d0*Math.cos(fw*xvals[i])+d1*Math.sin(fw*xvals[i]);

            }

        }

        // Underdamped (not resonant)

        if (disc<0 && !((b==0) && ((c-a*fw*fw)==0))) {

            // Homogeneous solution parameters

            srd=Math.sqrt(-disc);

            w=srd/(2*a);

            r1=-b/(2*a);

            // Particular solution parameters

            re=c-a*fw*fw;

            im=b*fw;

            d0=(fa*re)/(re*re+im*im);

            d1=(fa*im)/(re*re+im*im);

            // Adjust initial values for particular solution

            y0=y0-d0;

            y1=y1-d1*fw;

            // Arbitrary constants

            c1=y0;

            c2=(y1-y0*r1)/w;

            // Evaluate solution curve

            for (var i=0;i<51;i++) {

                xvals[i]=xmin+(i/50)*(xmax-xmin);

                yvals[i]=(c1*Math.cos(w*xvals[i])+c2*Math.sin(w*xvals[i]))*Math.exp(r1*xvals[i])+d0*Math.cos(fw*xvals[i])+d1*Math.sin(fw*xvals[i]);

            }

        }

        // Resonance

        if (b==0 && (c-a*fw*fw)==0) {

            // Homogeneous solution parameter known (w = fw)

            // Particular solution parameter

            d1=fa/(2*a*fw);

            // Initial values need no adjustments

            // Arbitrary constants

            c1=y0;

            c2=y1/fw;

            // Evaluate solution curve

            for (var i=0;i<51;i++) {

                xvals[i]=xmin+(i/50)*(xmax-xmin);

                yvals[i]=c1*Math.cos(fw*xvals[i])+c2*Math.sin(fw*xvals[i])+d1*xvals[i]*Math.sin(fw*xvals[i]);

            }

        }
		
		
		

    
		<!-- col = 'yellow'; -->
		 for (var i=0;i<50;i++) 
		{
            <!-- g.drawLine(x2scr(xvals[i]),y2scr(yvals[i]),x2scr(xvals[i+1]),y2scr(yvals[i+1])); -->
			 p[i] = brd2.create('point',[xvals[i],yvals[i]], {name: 'A', size: 3, snapToGrid: true, fixed: true, withLabel: false,visible: false});
			
			// p[i] = brd2.create('point',[xvals[i+1],yvals[i+1]], {name: 'B', size: 3, snapToGrid: true, fixed: true, withLabel: false});
			//var line = brd2.create('line',["A","B"], {strokeColor:'#00ff00',strokeWidth:2}); 
        }
		var pol = JXG.Math.Numerics.lagrangePolynomial(p);
		var g = brd2.create('functiongraph', [pol, 0, 20], {strokeWidth:1});
}	

</script>


<p>

Copyright 2013, Yang Chen

</body>
</html>