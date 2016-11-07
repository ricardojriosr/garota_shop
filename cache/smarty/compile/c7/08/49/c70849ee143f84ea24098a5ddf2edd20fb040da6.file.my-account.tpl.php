<?php /* Smarty version Smarty-3.1.19, created on 2015-10-15 15:21:34
         compiled from "/home/alejandro1711/public_html/soygarota/themes/default-bootstrap/modules/referralprogram/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1733328852561fc47e219822-82165869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c70849ee143f84ea24098a5ddf2edd20fb040da6' => 
    array (
      0 => '/home/alejandro1711/public_html/soygarota/themes/default-bootstrap/modules/referralprogram/views/templates/hook/my-account.tpl',
      1 => 1444917626,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1733328852561fc47e219822-82165869',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_561fc47e320700_92983563',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561fc47e320700_92983563')) {function content_561fc47e320700_92983563($_smarty_tpl) {?>

<!-- MODULE ReferralProgram -->
<li class="referralprogram">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('referralprogram','program',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Referral program','mod'=>'referralprogram'),$_smarty_tpl);?>
" rel="nofollow"><i class="icon-cogs"></i><span><?php echo smartyTranslate(array('s'=>'Referral program','mod'=>'referralprogram'),$_smarty_tpl);?>
</span></a>
</li>
<!-- END : MODULE ReferralProgram --><?php }} ?>
