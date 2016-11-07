<?php /* Smarty version Smarty-3.1.19, created on 2016-11-07 08:30:26
         compiled from "/home/alejandro1711/public_html/soygarota/themes/leo_underwear/modules/blockviewed/blockviewed.tpl" */ ?>
<?php /*%%SmartyHeaderCode:547197928582081f2d5b0e8-44174711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c131007ff838794e293ab61a3e5a57189f0d9f9' => 
    array (
      0 => '/home/alejandro1711/public_html/soygarota/themes/leo_underwear/modules/blockviewed/blockviewed.tpl',
      1 => 1478389119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '547197928582081f2d5b0e8-44174711',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'productsViewedObj' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_582081f2d9fb71_19789425',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582081f2d9fb71_19789425')) {function content_582081f2d9fb71_19789425($_smarty_tpl) {?>

<!-- Block Viewed products -->
<div id="viewed-products_block_left" class="block block-info">
	<h4 class="title_block"><?php echo smartyTranslate(array('s'=>'Viewed products','mod'=>'blockviewed'),$_smarty_tpl);?>
</h4>
	<div class="block_content">
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./sub/product/sidebar-obj.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['productsViewedObj']->value,'mod'=>'blockspecials'), 0);?>
 
	</div>
</div>
<?php }} ?>
