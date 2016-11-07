<?php /* Smarty version Smarty-3.1.19, created on 2015-10-15 15:21:44
         compiled from "/home/alejandro1711/public_html/soygarota/admin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1478800764561fc488d1cd33-62092081%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cfa6ac2f5a37fec4ceebc51029e0fdbac79cd00' => 
    array (
      0 => '/home/alejandro1711/public_html/soygarota/admin/themes/default/template/content.tpl',
      1 => 1444914566,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1478800764561fc488d1cd33-62092081',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_561fc488d60296_06865048',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561fc488d60296_06865048')) {function content_561fc488d60296_06865048($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
