<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Apps</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/themes/default/easyui.css')?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/themes/icon.css')?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/demo/demo.css')?>">
	<script type="text/javascript" src="<?=base_url('assets/jquery.min.js')?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/jquery.easyui.min.js')?>"></script>
</head>
<body class="easyui-layout">
	<div data-options="region:'north',border:false" style="height:60px;background:#E0ECFF">
		
	</div>
	<div data-options="region:'west',split:false,title:'Menu'" style="width:175px;">
		<?php $this->load->view('admin/menu');?>
	</div>
	<div data-options="region:'south',border:false" style="height:25px;background:#E0ECFF;padding:5px;">
		
	</div>
	<div data-options="region:'center',title:'<?=isset($title) ? $title : 'Content'?>'"><?=isset($content) ? $content : '';?></div>
</body>
</html>