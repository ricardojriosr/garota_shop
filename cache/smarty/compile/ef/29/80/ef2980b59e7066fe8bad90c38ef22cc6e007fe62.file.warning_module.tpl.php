<?php /* Smarty version Smarty-3.1.19, created on 2016-11-07 08:21:42
         compiled from "/home/alejandro1711/public_html/soygarota/backend/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:46827057158207fe6b0a6d5-98005990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef2980b59e7066fe8bad90c38ef22cc6e007fe62' => 
    array (
      0 => '/home/alejandro1711/public_html/soygarota/backend/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1458783800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '46827057158207fe6b0a6d5-98005990',
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
  'unifunc' => 'content_58207fe6b3cf21_74843585',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58207fe6b3cf21_74843585')) {function content_58207fe6b3cf21_74843585($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
