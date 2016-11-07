<?php /* Smarty version Smarty-3.1.19, created on 2015-10-26 14:40:33
         compiled from "/home/alejandro1711/public_html/soygarota/modules/leobootstrapmenu/views/widgets/widget_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1799142693562e73a1a02884-33509936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb316baecadde0e45ca6d82ea350c40020e78b9c' => 
    array (
      0 => '/home/alejandro1711/public_html/soygarota/modules/leobootstrapmenu/views/widgets/widget_html.tpl',
      1 => 1445884539,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1799142693562e73a1a02884-33509936',
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
  'unifunc' => 'content_562e73a1a148c3_06108719',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562e73a1a148c3_06108719')) {function content_562e73a1a148c3_06108719($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
<div class="widget-html">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<div class="menu-title">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</div>
	<?php }?>
	<div class="widget-inner">
		<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
