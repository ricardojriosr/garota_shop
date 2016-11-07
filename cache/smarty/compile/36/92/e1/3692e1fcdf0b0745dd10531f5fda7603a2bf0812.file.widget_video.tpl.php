<?php /* Smarty version Smarty-3.1.19, created on 2016-11-07 08:18:32
         compiled from "/home/alejandro1711/public_html/soygarota/themes/leo_underwear/modules/leomenusidebar/views/widgets/widget_video.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52211331258207f28682839-72179962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3692e1fcdf0b0745dd10531f5fda7603a2bf0812' => 
    array (
      0 => '/home/alejandro1711/public_html/soygarota/themes/leo_underwear/modules/leomenusidebar/views/widgets/widget_video.tpl',
      1 => 1478389509,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52211331258207f28682839-72179962',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'video_code' => 0,
    'widget_heading' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58207f286c26d9_86462954',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58207f286c26d9_86462954')) {function content_58207f286c26d9_86462954($_smarty_tpl) {?> <?php if (isset($_smarty_tpl->tpl_vars['video_code']->value)) {?>
<div class="widget-video">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<div class="widget-heading">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</div>
	<?php }?>
	<div class="widget-inner">
		<?php echo $_smarty_tpl->tpl_vars['video_code']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
