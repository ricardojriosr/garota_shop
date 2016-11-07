<?php /* Smarty version Smarty-3.1.19, created on 2015-10-29 10:13:50
         compiled from "/home/alejandro1711/public_html/soygarota/themes/leo_underwear/modules/blockwishlist/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10178334555632299e1f1dd9-25219851%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2dd56d46274e2255bc99cc59670e8b002daea2c' => 
    array (
      0 => '/home/alejandro1711/public_html/soygarota/themes/leo_underwear/modules/blockwishlist/my-account.tpl',
      1 => 1445884522,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10178334555632299e1f1dd9-25219851',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5632299e251286_09539985',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5632299e251286_09539985')) {function content_5632299e251286_09539985($_smarty_tpl) {?>

<!-- MODULE WishList -->
<li class="lnk_wishlist">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<i class="fa fa-heart"></i>
		<span><?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
	</a>
</li>
<!-- END : MODULE WishList --><?php }} ?>
