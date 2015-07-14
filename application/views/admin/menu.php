<div class="easyui-accordion" data-options="border:false,fit:true">
	<div title="Setting & Master" style="padding:5px;" data-options="<?=$selected == 1 ? "selected:true":""?>">
		<a href="<?=site_url('admin/profile')?>" class="easyui-linkbutton" data-options="iconCls:'icon-back'" style="display:block;text-align:left"><span style="margin-left:10px;">Profile</span></a>
	</div>
	<div title="Content Management" style="padding:5px;" data-options="<?=$selected == 2 ? "selected:true":""?>">
		<a href="<?=site_url('admin/article')?>" class="easyui-linkbutton" data-options="iconCls:'icon-back'" style="display:block;text-align:left"><span style="margin-left:10px;">Article</span></a>
		<br />
		<a href="<?=site_url('admin/banner')?>" class="easyui-linkbutton" data-options="iconCls:'icon-back'" style="display:block;text-align:left"><span style="margin-left:10px;">Banner</span></a>
		<br />
		<a href="<?=site_url('admin/file_manager')?>" class="easyui-linkbutton" data-options="iconCls:'icon-back'" style="display:block;text-align:left"><span style="margin-left:10px;">File & Image Manager</span></a>
	</div>
</div>