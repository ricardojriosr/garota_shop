<?php /* Smarty version Smarty-3.1.19, created on 2016-11-06 02:54:05
         compiled from "/home/alejandro1711/public_html/soygarota/modules/leobootstrapmenu/views/widgets/widget_links.tpl" */ ?>
<?php /*%%SmartyHeaderCode:747152388581ee19dd85fb2-39463788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '581f41c8cf8550ea0d0cbef12bc18bd1eb367cca' => 
    array (
      0 => '/home/alejandro1711/public_html/soygarota/modules/leobootstrapmenu/views/widgets/widget_links.tpl',
      1 => 1478388799,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '747152388581ee19dd85fb2-39463788',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'links' => 0,
    'widget_heading' => 0,
    'id' => 0,
    'ac' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_581ee19e05d767_87499406',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581ee19e05d767_87499406')) {function content_581ee19e05d767_87499406($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['links']->value)) {?>
<div class="widget-links">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<div class="menu-title">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</div>
	<?php }?>
	<div class="widget-inner">	
		<div id="tabs<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="panel-group">
			<ul class="nav-links">
				<?php  $_smarty_tpl->tpl_vars['ac'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ac']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ac']->key => $_smarty_tpl->tpl_vars['ac']->value) {
$_smarty_tpl->tpl_vars['ac']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['ac']->key;
?>  
					<li ><a href="<?php echo $_smarty_tpl->tpl_vars['ac']->value['link'];?>
" ><?php echo $_smarty_tpl->tpl_vars['ac']->value['text'];?>
</a></li>
				<?php } ?>
			</ul>
		</div>
	</div>
</div>
<?php }?>


<?php }} ?>
