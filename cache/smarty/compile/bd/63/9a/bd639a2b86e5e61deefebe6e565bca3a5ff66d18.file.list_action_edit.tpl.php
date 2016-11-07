<?php /* Smarty version Smarty-3.1.19, created on 2015-10-15 15:21:47
         compiled from "/home/alejandro1711/public_html/soygarota/admin/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1216012109561fc48b9df720-22073541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd639a2b86e5e61deefebe6e565bca3a5ff66d18' => 
    array (
      0 => '/home/alejandro1711/public_html/soygarota/admin/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1444915146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1216012109561fc48b9df720-22073541',
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
  'unifunc' => 'content_561fc48ba2e2d3_29528814',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561fc48ba2e2d3_29528814')) {function content_561fc48ba2e2d3_29528814($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
