<?php /* Smarty version Smarty-3.1.19, created on 2016-11-07 08:18:32
         compiled from "/home/alejandro1711/public_html/soygarota/themes/leo_underwear/modules/leomenusidebar/views/widgets/widget_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212571895658207f286503b7-69772483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '969460ae60f98dc64c6cd2ac46157ed0ff5468ff' => 
    array (
      0 => '/home/alejandro1711/public_html/soygarota/themes/leo_underwear/modules/leomenusidebar/views/widgets/widget_html.tpl',
      1 => 1478389506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212571895658207f286503b7-69772483',
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
  'unifunc' => 'content_58207f2867e7e7_91728259',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58207f2867e7e7_91728259')) {function content_58207f2867e7e7_91728259($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
<div class="widget-html">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<div class="widget-heading">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</div>
	<?php }?>
	<div class="widget-inner">
		<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
