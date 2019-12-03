<!DOCTYPE HTML>
<html lang="en_US">
<head>
     <meta charset="UTF-8">
	 <title></title>
	 <style type="text/css">
	 #fromtext{
	position:absolute;
	top:200px;
	left: 400px;
	color: purple;
	font-size: 250%;
	animation:anim 5s infinite;
	 }
	 
@keyframes anim{
		 0%{color:yellow;}
		 25%{color:Green; transform:scale(1.5);}
		 50%{color:aqua; transform:scale(0.8);}
		 75%{color:Black; transform:scale(1.5);}
		 100%{color:blue; transform:scale(1);}
	 }
	 
	 </style>
</head>
<body background="images/2.jpg" style="background-size:1366px 760px;">
   <h1 id="fromtext">  <?php echo $_GET['name']; ?> </h1>
   <canvas id="canvas"></canvas>
   <script type="text/javascript" src="js/crackers.js"></script>
</body>
</html>
