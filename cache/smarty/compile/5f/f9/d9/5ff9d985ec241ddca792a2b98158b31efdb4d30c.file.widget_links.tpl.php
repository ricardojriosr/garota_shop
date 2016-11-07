<?php /* Smarty version Smarty-3.1.19, created on 2016-11-06 02:54:06
         compiled from "/home/alejandro1711/public_html/soygarota/themes/leo_underwear/modules/leomanagewidgets/views/widgets/displayfooterbottom/widget_links.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1905690764581ee19ed8db25-54063703%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ff9d985ec241ddca792a2b98158b31efdb4d30c' => 
    array (
      0 => '/home/alejandro1711/public_html/soygarota/themes/leo_underwear/modules/leomanagewidgets/views/widgets/displayfooterbottom/widget_links.tpl',
      1 => 1478389535,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1905690764581ee19ed8db25-54063703',
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
  'unifunc' => 'content_581ee19edad0c6_89688666',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581ee19edad0c6_89688666')) {function content_581ee19edad0c6_89688666($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['links']->value)&&$_smarty_tpl->tpl_vars['links']->value) {?>
	<div class="widget-links footer-block block">
		<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
			<h4 class="title_block">
				<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

			</h4>
		<?php }?>
		<div class="block_content toggle-footer">	
			<div id="tabs<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="panel-group">
				<ul class="nav-links bullet toggle-footer">
					<?php  $_smarty_tpl->tpl_vars['ac'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ac']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ac']->key => $_smarty_tpl->tpl_vars['ac']->value) {
$_smarty_tpl->tpl_vars['ac']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['ac']->key;
?>  
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['ac']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['ac']->value['text'];?>
</a></li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
<?php }?>


<?php }} ?>
