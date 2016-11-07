<?php /* Smarty version Smarty-3.1.19, created on 2016-11-07 08:30:27
         compiled from "/home/alejandro1711/public_html/soygarota/themes/leo_underwear/modules/productcomments//tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:369917847582081f35bd4a3-95613681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e8ac3846a8568a5a3459d46b2d1995124ecd733' => 
    array (
      0 => '/home/alejandro1711/public_html/soygarota/themes/leo_underwear/modules/productcomments//tab.tpl',
      1 => 1478389130,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '369917847582081f35bd4a3-95613681',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USE_PTABS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_582081f35df504_90418622',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582081f35df504_90418622')) {function content_582081f35df504_90418622($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['USE_PTABS']->value)&&$_smarty_tpl->tpl_vars['USE_PTABS']->value) {?>
    <li><a id="link_idTab5" href="#idTab5" data-toggle="tab"><?php echo smartyTranslate(array('s'=>'Reviews','mod'=>'productcomments'),$_smarty_tpl);?>
</a></li>
<?php } else { ?>
    <h3 id="#idTab5" class="idTabHrefShort page-subheading"><?php echo smartyTranslate(array('s'=>'Reviews','mod'=>'productcomments'),$_smarty_tpl);?>
</h3>
<?php }?><?php }} ?>
