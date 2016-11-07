<?php /* Smarty version Smarty-3.1.19, created on 2016-11-07 08:35:52
         compiled from "/home/alejandro1711/public_html/soygarota/themes/leo_underwear/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43711989458208338cfaee6-64510128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '382b70a4139fe984e50b83afe45cc6956bcbe5ec' => 
    array (
      0 => '/home/alejandro1711/public_html/soygarota/themes/leo_underwear/category-count.tpl',
      1 => 1478388926,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43711989458208338cfaee6-64510128',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58208338d3ae01_66342384',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58208338d3ae01_66342384')) {function content_58208338d3ae01_66342384($_smarty_tpl) {?>
<small class="heading-counter"><?php if ((isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value->id==1)||(isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==0)) {?><?php echo smartyTranslate(array('s'=>'There are no products in this category.'),$_smarty_tpl);?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==1) {?><?php echo smartyTranslate(array('s'=>'There is 1 product.'),$_smarty_tpl);?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['nb_products']->value)) {?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?></small><?php }} ?>
