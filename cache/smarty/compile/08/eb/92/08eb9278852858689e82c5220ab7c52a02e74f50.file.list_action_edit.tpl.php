<?php /* Smarty version Smarty-3.1.19, created on 2016-11-06 20:46:16
         compiled from "/home/alejandro1711/public_html/soygarota/backend/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1970377931581fdce8d29401-42506800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08eb9278852858689e82c5220ab7c52a02e74f50' => 
    array (
      0 => '/home/alejandro1711/public_html/soygarota/backend/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1458783867,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1970377931581fdce8d29401-42506800',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_581fdce8d3a122_63040584',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581fdce8d3a122_63040584')) {function content_581fdce8d3a122_63040584($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
