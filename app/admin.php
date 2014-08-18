<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>neat</title>

	<!-- Bootstrap Core CSS -->
	<link href="<?php echo asset_dir() ?>css/bootstrap.min.css" rel="stylesheet">

	<!-- MetisMenu CSS -->
	<link href="<?php echo asset_dir() ?>css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

	<!-- Timeline CSS -->
	<!-- <link href="<?php echo asset_dir() ?>css/plugins/timeline.css" rel="stylesheet"> -->

	<!-- Custom CSS -->
	<link href="<?php echo asset_dir() ?>css/sb-admin-2.css" rel="stylesheet">

	<!-- Morris Charts CSS -->
	<!-- <link href="<?php echo asset_dir() ?>css/plugins/morris.css" rel="stylesheet"> -->

	<!-- Custom Fonts -->
	<link href="<?php echo asset_dir() ?>font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Main css file for admin pages -->
	<link href="<?php echo asset_dir() ?>css/main.css" rel="stylesheet">

</head>

<body>
   <div id="wrapper">

		<?php include '_partials/navigation.php'; ?>

		<!-- Page Content -->
		<div id="page-wrapper" class="editing">
<div id="ace-editor-container">function foo(items) {
	var x = "All this is syntax highlighted";
	return x;
}</div>
		</div>
		<!-- /#page-wrapper -->

	</div>
	<!-- /#wrapper -->

	<!-- jQuery Version 1.11.0 -->
	<script src="<?php echo asset_dir() ?>js/jquery-1.11.0.js"></script>


    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo asset_dir() ?>js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo asset_dir() ?>js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo asset_dir() ?>js/sb-admin-2.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/ace/1.1.3/ace.js" type="text/javascript" charset="utf-8"></script>


	<script>
	    var editor = ace.edit("ace-editor-container");
	    editor.setTheme("ace/theme/monokai");
	    editor.getSession().setMode("ace/mode/javascript");
	    editor.setShowPrintMargin(false);

	    $('#ace-editor-container').css({
	    	'height' : $( window ).height() - $('#top-nav').height() - 1 + 'px',
	    });
	</script>

</body>

</html>
