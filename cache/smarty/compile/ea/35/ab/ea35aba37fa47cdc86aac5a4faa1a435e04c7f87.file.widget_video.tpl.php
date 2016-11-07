<?php /* Smarty version Smarty-3.1.19, created on 2015-10-26 14:40:33
         compiled from "/home/alejandro1711/public_html/soygarota/modules/leobootstrapmenu/views/widgets/widget_video.tpl" */ ?>
<?php /*%%SmartyHeaderCode:997434045562e73a1a45152-16972912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea35aba37fa47cdc86aac5a4faa1a435e04c7f87' => 
    array (
      0 => '/home/alejandro1711/public_html/soygarota/modules/leobootstrapmenu/views/widgets/widget_video.tpl',
      1 => 1445884539,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '997434045562e73a1a45152-16972912',
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
  'unifunc' => 'content_562e73a1a5e093_88179086',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562e73a1a5e093_88179086')) {function content_562e73a1a5e093_88179086($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['video_code']->value)) {?>
<div class="widget-video">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<div class="menu-title">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</div>
	<?php }?>
	<div class="widget-inner">
		<?php echo $_smarty_tpl->tpl_vars['video_code']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
