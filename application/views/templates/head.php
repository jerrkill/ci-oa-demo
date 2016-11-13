<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<LINK rel="Bookmark" href="/favicon.ico" >
<LINK rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/core/h-ui/css/H-ui.min.css')?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/core/h-ui.admin/css/H-ui.admin.css')?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/lib/Hui-iconfont/1.0.7/iconfont.css')?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/lib/icheck/icheck.css')?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/core/h-ui.admin/skin/default/skin.css')?>" id="skin" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('public/core/h-ui.admin/css/style.css')?>" />
<!--[if IE 6]>
<script type="text/javascript" src="<?php echo base_url('public/lib/DD_belatedPNG_0.0.8a-min.js')?>" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<?php 
	//var_dump($css);
		if (isset($css)) {
			foreach ($css as $_css) {
				echo '<link rel="stylesheet" href="'.base_url('public/css/'.$_css.'.css').'">';
			}
		}
		/*if (isset($js)) {
			foreach ($js as $_js) {
				echo '<script src="'.base_url('public/js/'.$_js.'.js').'"></script>';
			}
		}*/
	?>
<title><?php echo isset($title)?$title:'OA系统'?></title>
<meta name="keywords" content="关键字">
<meta name="description" content="">
</head>
<body>