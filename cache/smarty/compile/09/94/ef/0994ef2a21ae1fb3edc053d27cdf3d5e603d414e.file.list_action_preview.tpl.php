<?php /* Smarty version Smarty-3.1.19, created on 2016-11-07 08:37:59
         compiled from "/home/alejandro1711/public_html/soygarota/backend/themes/default/template/helpers/list/list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:939289086582083b70d9af4-10315688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0994ef2a21ae1fb3edc053d27cdf3d5e603d414e' => 
    array (
      0 => '/home/alejandro1711/public_html/soygarota/backend/themes/default/template/helpers/list/list_action_preview.tpl',
      1 => 1458783868,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '939289086582083b70d9af4-10315688',
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
  'unifunc' => 'content_582083b728eb71_22199320',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582083b728eb71_22199320')) {function content_582083b728eb71_22199320($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
