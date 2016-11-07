<?php /* Smarty version Smarty-3.1.19, created on 2015-10-15 15:21:40
         compiled from "/home/alejandro1711/public_html/soygarota/admin/themes/default/template/controllers/shop/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:342934605561fc484428852-20405047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62aed3718bca7332a7dd1a923b9a3940a8102361' => 
    array (
      0 => '/home/alejandro1711/public_html/soygarota/admin/themes/default/template/controllers/shop/content.tpl',
      1 => 1444915117,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '342934605561fc484428852-20405047',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shops_tree' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_561fc48443fc00_59203574',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561fc48443fc00_59203574')) {function content_561fc48443fc00_59203574($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div><?php }} ?>
