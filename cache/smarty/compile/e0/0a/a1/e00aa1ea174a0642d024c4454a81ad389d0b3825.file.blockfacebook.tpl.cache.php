<?php /* Smarty version Smarty-3.1.19, created on 2015-10-15 11:27:23
         compiled from "/home/alejandro1711/public_html/soygarota/modules/blockfacebook/blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1444906842561fc5dbc95765-98758102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e00aa1ea174a0642d024c4454a81ad389d0b3825' => 
    array (
      0 => '/home/alejandro1711/public_html/soygarota/modules/blockfacebook/blockfacebook.tpl',
      1 => 1444916665,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1444906842561fc5dbc95765-98758102',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_561fc5dbcb49b7_66370673',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561fc5dbcb49b7_66370673')) {function content_561fc5dbcb49b7_66370673($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
