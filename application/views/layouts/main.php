<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php echo $title ?> | NO-TITLE</title>

		<link rel="shortcut icon" href="<?php echo img_url() ?>favicon.png" />

		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<?php if (!empty($css)) foreach($css as $c){echo css($c);} ?>
		<?php if (!empty($js)) foreach($js as $j){echo js($j);} ?>
	</head>
	<body>
		<!--[if lt IE 7]>
			<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

		<header></header>

		<?php $this->load->view($module.'/'.$view_file); ?>

		<footer></footer>
	</body>
</html>
