<?php /* Smarty version Smarty-3.1.19, created on 2015-10-15 15:21:47
         compiled from "/home/alejandro1711/public_html/soygarota/admin/themes/default/template/helpers/list/list_action_removestock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1635791409561fc48ba7b931-19806845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b02dfd6126d892a671da600d196bf8b47c6cb91a' => 
    array (
      0 => '/home/alejandro1711/public_html/soygarota/admin/themes/default/template/helpers/list/list_action_removestock.tpl',
      1 => 1444915147,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1635791409561fc48ba7b931-19806845',
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
  'unifunc' => 'content_561fc48bab9949_25737171',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561fc48bab9949_25737171')) {function content_561fc48bab9949_25737171($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<i class="icon-circle-arrow-down"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a>
<?php }} ?>
