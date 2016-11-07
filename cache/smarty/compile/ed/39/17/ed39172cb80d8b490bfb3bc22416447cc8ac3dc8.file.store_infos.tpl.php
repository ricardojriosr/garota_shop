<?php /* Smarty version Smarty-3.1.19, created on 2016-02-05 13:13:34
         compiled from "/home/alejandro1711/public_html/soygarota/themes/leo_underwear/store_infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174602529056b4e64eed72e3-29360086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed39172cb80d8b490bfb3bc22416447cc8ac3dc8' => 
    array (
      0 => '/home/alejandro1711/public_html/soygarota/themes/leo_underwear/store_infos.tpl',
      1 => 1445884532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174602529056b4e64eed72e3-29360086',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'days_datas' => 0,
    'one_day' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56b4e64ef25e24_54260900',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56b4e64ef25e24_54260900')) {function content_56b4e64ef25e24_54260900($_smarty_tpl) {?>


	<?php  $_smarty_tpl->tpl_vars['one_day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one_day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['days_datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one_day']->key => $_smarty_tpl->tpl_vars['one_day']->value) {
$_smarty_tpl->tpl_vars['one_day']->_loop = true;
?>
	<p>
		<strong class="dark"><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['one_day']->value['day']),$_smarty_tpl);?>
: </strong> &nbsp;<span><?php echo $_smarty_tpl->tpl_vars['one_day']->value['hours'];?>
</span>
	</p>
	<?php } ?>

<?php }} ?>
