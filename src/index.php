<?php
$ip=$_SERVER['REMOTE_ADDR'];
?>

<!DOCTYPE HTML>
	<head>
		<title>AtulBhatS</title>
		<meta charset="utf-8">
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="AtulBhatS" />
		<meta property="og:description" content="My Webspace." />
		<meta property="og:url" content="http://atulbhats.com/" />
		<meta property="og:keywords" content="AtulBhatS, Atul Bhat, Physics, Cosmology, Photoshop, Ambigrams, Coding, atulbhats, Mangalore." />
		<meta property="og:site_name" content="AtulBhatS Personal Webspace" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="AtulBhatS, Atul Bhat, Physics, Cosmology, Photoshop, Ambigrams, Coding, atulbhats, Mangalore.">
		<meta name="description" content="AtulBhat, a physics student from Mangalore.">
		<meta property="og:image" content="favicon.ico" />
		<!--<link href='http://fonts.googleapis.com/css?family=Cutive+Mono:400,700' rel='stylesheet' type='text/css'>-->
		<!-- Note to Learners

		Hey There, If you are here to read the site code, and in the process of learning webdesigning, Then Cheers! This is exactly How i learnt it the initial days. 
		Feel Free to Read each bit and understand. If you know something better that i can implement, the 'message' is the command. 
		Stay Curious.
		Ciao

		-->
		<meta name="robots" content="index,follow">
		<link href='http://fonts.googleapis.com/css?family=Inconsolata:700,400' rel='stylesheet' type='text/css'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script>
		 	ip='<?php echo $ip; ?>';
		 	year='<?php echo date("Y");?>';
		</script>
		<script type="text/javascript" src="js.js"></script>
		<style>
		body{
			padding:10px;
			/*overflow:hidden;*/
			background: #181320;
			color:#eee;
			font-family: Inconsolata,courier new,courier,sans-serif;
			line-height: 1.5;
			font-size:17px;
		}

		.cursor{
			width: 10px;
			height:20px;
			display:inline-block;
			vertical-align: bottom;
			background-color: #eee;
		}

		#actualinput{
			display: block;
			background: transparent;
			color: transparent;
			outline: none;
			border:none;
			width: 0px;

		}

		.defaulttext,#ascii{
			color:rgb(219, 158, 0);
		}

		.commandline,
		#defaultline{
			margin-top: 20px;
		}

		b {
			color: #FFEC88;
			font-weight: lighter;
		}

		.guilink{
			color:orange;
			text-decoration: none;
		}

		.profilepic{
			border:5px solid #fff;
			margin-top:10px;
		}

		div.help b:first-child {
			padding-right: 20px;
		}

		a{
			color:orange;
			text-decoration: none;
		}

		.ascii span {
			display: block;
			line-height: 1.0;
		}

		.weather d{
			position: relative;
			top: -8px;
			padding-left: 5px;
			font-size: 10px;
		}

		.help div{
			display: block;
		}
			
		.news-item {
    display: block;
    vertical-align: top;
    margin-top: 20px;
    border-bottom: 1px dashed #222;
    padding: 10px 0px;
}

.news-item span {
    display: inline-block;
}

span.news-title {
    font-weight: bold;
}

span.news-description {
    font-size: 15px;
}

span.news-timestamp {
    font-size: 12px;
    margin: 0;
}

span.news-link {
    width: 100%;
}

		@viewport {  
		    width: device-width;  
		} 

		</style>
			<?php echo $script; ?>
    <script>
        $(document).on('click','#defaultline', function(){
        $('#actualinput').focus();
});
</script>
	</head>
	<body>
		<noscript>
			<div class="line"><span class="defaulttext">welcome@atulbhats : ~$ </span> Welcome atulbhats.com. </div></br>
			<div class="line"><span class="defaulttext">no_javascript@atulbhats : ~$ </span> It looks like Javascript has been disabled on your browser. This website runs on javascript for user experience. Please enable it and reload the website. If you cannot do so, please visit <a href="http://atulbhats.com/gui">http://atulbhats.com/gui</a></div><br>
		</noscript>
		<div id="introdiv">
				<span class="defaulttext"><?php echo $ip; ?>@atulbhats : ~$  </span><span id="commandcontainer">Oops! Jquery could not be loaded. The connection was either too slow or interrupted. Please Reload the page for a better UX.</span>
		</div>
		<div id="commands">
			<div id="defaultline"><span class="defaulttext"><?php echo $ip; ?>@atulbhats : ~$  </span><span id="commandcontainer"></span><span class="cursor"></span><input type="text" id="actualinput"></div>
		</div>
	</body>
</html>
