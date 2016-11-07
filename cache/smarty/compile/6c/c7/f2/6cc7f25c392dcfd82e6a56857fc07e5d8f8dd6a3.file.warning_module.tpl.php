<?php /* Smarty version Smarty-3.1.19, created on 2015-10-15 15:21:32
         compiled from "/home/alejandro1711/public_html/soygarota/admin/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:699552791561fc47cc7dd33-99093924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cc7f25c392dcfd82e6a56857fc07e5d8f8dd6a3' => 
    array (
      0 => '/home/alejandro1711/public_html/soygarota/admin/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1444914757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '699552791561fc47cc7dd33-99093924',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_561fc47ccaf5c3_68895080',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561fc47ccaf5c3_68895080')) {function content_561fc47ccaf5c3_68895080($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
