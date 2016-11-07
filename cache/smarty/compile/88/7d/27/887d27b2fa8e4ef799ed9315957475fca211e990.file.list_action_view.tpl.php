<?php /* Smarty version Smarty-3.1.19, created on 2015-10-15 15:21:47
         compiled from "/home/alejandro1711/public_html/soygarota/admin/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1675474331561fc48ba30413-58567592%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '887d27b2fa8e4ef799ed9315957475fca211e990' => 
    array (
      0 => '/home/alejandro1711/public_html/soygarota/admin/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1444915149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1675474331561fc48ba30413-58567592',
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
  'unifunc' => 'content_561fc48ba79997_06275185',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561fc48ba79997_06275185')) {function content_561fc48ba79997_06275185($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
	<i class="icon-search-plus"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
