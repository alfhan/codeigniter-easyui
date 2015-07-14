<div class="easyui-layout" data-options="fit:true">
	<div data-options="region:'south',border:false" style="height:40px;background:#E0ECFF;padding:5px;">
		<form name="ff" id="ff" enctype="multipart/form-data" method="POST">
			Browse File to Upload : <input type="file" name="file"> Max Size 5MB
			<a href="#" class="easyui-linkbutton" onclick="onSave()" data-options="iconCls:'icon-save'"><span style="margin-left:10px;">Upload</span></a>
		</form>
	</div>
	<div data-options="region:'center',border:false">
	<?php
	$filterfile = array('pdf','xls','xlsx','doc','docx');
	foreach ($data as $key => $value) {
		$e = explode('.', $value);
		$c = count($e)-1;
		$ext = $e[$c];
		if(in_array($ext, $filterfile)){
			echo "<div style='float:left;text-align:center'>";
			echo "<a href='".base_url($value)."' target='_blank'><img src='".base_url('assets/file.png')."' width='100' height='100' style='margin:5px' title='".str_replace('uploads/','',$value)."'/></a>";
			echo "<br /><a onclick=\"removeFile('$value')\" href='javascript:void(0)' class='easyui-linkbutton' data-options=\"iconCls:'icon-cancel'\">Remove</a>";
			echo "</div>";
		}else{
			echo "<div style='float:left;text-align:center'>";
			echo "<a href='".base_url($value)."' target='_blank'><img src='".base_url($value)."' width='100' height='100' style='margin:5px' title='".str_replace('uploads/','',$value)."'/></a>";
			echo "<br /><a onclick=\"removeFile('$value')\" href='javascript:void(0)' class='easyui-linkbutton' data-options=\"iconCls:'icon-cancel'\">Remove</a>";
			echo "</div>";
		}
	}
	?>
	</div>
</div>
<script type="text/javascript">
function onSave (argument) {
	$('#ff').form('submit',{
	    url:"<?=site_url('admin/file_manager/save')?>",
	    onSubmit: function(){
	        $.messager.progress();
	    },
	    success:function(data){
	    	$.messager.progress('close');
	    	var d = eval("("+data+")");
	    	if(d.success){
	    		window.open("<?=site_url('admin/file_manager')?>","_self");
	    	}else{
	    		$.messager.alert('Error',d.msg,'error');
	    	}
	    }
	});
}
function removeFile (argument) {
	$.ajax({
		beforeSend: function(){
	        $.messager.progress();
	    },
		type:'POST',
		url:"<?=site_url('admin/file_manager/remove')?>",
		data:{filename:argument},
		success:function(){
			window.open("<?=site_url('admin/file_manager')?>","_self");
		}
	});
}
</script>