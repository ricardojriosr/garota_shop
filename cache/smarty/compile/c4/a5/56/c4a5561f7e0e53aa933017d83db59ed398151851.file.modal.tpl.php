<?php /* Smarty version Smarty-3.1.19, created on 2015-10-15 15:21:54
         compiled from "/home/alejandro1711/public_html/soygarota/admin/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1258904114561fc492da3601-90726454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4a5561f7e0e53aa933017d83db59ed398151851' => 
    array (
      0 => '/home/alejandro1711/public_html/soygarota/admin/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1444915153,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1258904114561fc492da3601-90726454',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_561fc492de2237_98916533',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561fc492de2237_98916533')) {function content_561fc492de2237_98916533($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
