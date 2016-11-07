<?php /* Smarty version Smarty-3.1.19, created on 2016-11-06 20:46:09
         compiled from "/home/alejandro1711/public_html/soygarota/backend/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1808773923581fdce124bf84-58880164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65f5d2d64288095275cfa6173962ce332b7f6ec9' => 
    array (
      0 => '/home/alejandro1711/public_html/soygarota/backend/themes/default/template/content.tpl',
      1 => 1458783553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1808773923581fdce124bf84-58880164',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_581fdce126a191_14861183',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581fdce126a191_14861183')) {function content_581fdce126a191_14861183($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
