<?php /* Smarty version Smarty-3.1.19, created on 2015-10-15 15:21:55
         compiled from "/home/alejandro1711/public_html/soygarota/admin/themes/default/template/helpers/tree/tree_node_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:989353709561fc49348ec89-39834787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '493d7b04706ecbd28635e90469f12b211ce12c00' => 
    array (
      0 => '/home/alejandro1711/public_html/soygarota/admin/themes/default/template/helpers/tree/tree_node_item.tpl',
      1 => 1444915162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '989353709561fc49348ec89-39834787',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_561fc4934d24a2_12524437',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561fc4934d24a2_12524437')) {function content_561fc4934d24a2_12524437($_smarty_tpl) {?>

<li class="tree-item">
	<span class="tree-item-name">
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
