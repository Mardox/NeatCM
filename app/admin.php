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
			<div class="row">
				<div class="col-lg-9">
					<div id="source-view">
						<div id="ace-editor-container"><?php echo htmlspecialchars(file_get_contents('test_editor_content.php')); ?></div>
					</div>
					<!-- http://appbusinessclass.com/f/blueprint.php -->
					<iframe id="page-view" src="about:blank"></iframe>
				</div>
				<div id="snippets" class="col-lg-3">
					<h4>Views</h4>
					<div class="form-group">
						<div class="btn-group">
							<button class="btn btn-lg btn-default" id="view-source">Source</button>
							<button class="btn btn-lg btn-default" id="view-page">Page</button>
						</div>
					</div>
					<h4>Blocks</h4>
					<div class="block">
						<div class="block-heading">Google Analytics</div>
						<div class="block-body text-muted">
							insert tracking code for google analyitics
						</div>
					</div>
					<div class="block">
						<div class="block-heading">Facebook Targeting</div>
						<div class="block-body text-muted">
							insert facebook targeting code
						</div>
					</div>
					<div class="block">
						<div class="block-heading">Inspectlet</div>
						<div class="block-body text-muted">
							insert inspeclet viewer code
						</div>
					</div>
					<h4>Libraries</h4>
					<div class="block">
						<div class="block-heading">jQuery</div>
						<div class="block-body text-muted">
							import javascript jquery library
						</div>
					</div>
					<div class="block">
						<div class="block-heading">Bootstrap</div>
						<div class="block-body text-muted">
							import twitter boostrap library
						</div>
					</div>
					<div class="block">
						<div class="block-heading">Modernizer</div>
						<div class="block-body text-muted">
							import javascript modernizer library
						</div>
					</div>
				</div>
			</div>
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

    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/ace/1.1.3/ace.js" type="text/javascript" charset="utf-8"></script> -->

    <script src="<?php echo asset_dir() ?>js/plugins/ace/ace.js"></script>
    <script src="<?php echo asset_dir() ?>js/neat.dev.js"></script>

</body>

</html>
