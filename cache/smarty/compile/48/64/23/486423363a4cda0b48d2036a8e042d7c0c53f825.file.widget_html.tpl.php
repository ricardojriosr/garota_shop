<?php /* Smarty version Smarty-3.1.19, created on 2016-11-06 02:54:06
         compiled from "/home/alejandro1711/public_html/soygarota/themes/leo_underwear/modules/leomanagewidgets/views/widgets/widget_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1809449357581ee19e8b8c04-33490697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '486423363a4cda0b48d2036a8e042d7c0c53f825' => 
    array (
      0 => '/home/alejandro1711/public_html/soygarota/themes/leo_underwear/modules/leomanagewidgets/views/widgets/widget_html.tpl',
      1 => 1478389504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1809449357581ee19e8b8c04-33490697',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'html' => 0,
    'widget_heading' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_581ee19e8ead04_43798519',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581ee19e8ead04_43798519')) {function content_581ee19e8ead04_43798519($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
<div class="widget-html block">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<div>
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

		</div>
	</h4>
	<?php }?>
	<div class="block_content">
		<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
