<?php /* Smarty version Smarty-3.1.19, created on 2016-11-06 02:54:08
         compiled from "/home/alejandro1711/public_html/soygarota/themes/leo_underwear/modules/leomanagewidgets/views/widgets/products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:733105109581ee1a011b982-44624059%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffd0f7572ec85d40acdabc2feba97012fed616b3' => 
    array (
      0 => '/home/alejandro1711/public_html/soygarota/themes/leo_underwear/modules/leomanagewidgets/views/widgets/products.tpl',
      1 => 1478389503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '733105109581ee1a011b982-44624059',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'tabname' => 0,
    'itemsperpage' => 0,
    'mproducts' => 0,
    'columnspage' => 0,
    'scolumn' => 0,
    'comparator_max_item' => 0,
    'compared_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_581ee1a01b3674_80302651',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581ee1a01b3674_80302651')) {function content_581ee1a01b3674_80302651($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['products']->value)) {?>
<div class="carousel slide" id="<?php echo $_smarty_tpl->tpl_vars['tabname']->value;?>
">
	<?php if (count($_smarty_tpl->tpl_vars['products']->value)>$_smarty_tpl->tpl_vars['itemsperpage']->value) {?>	 
	 	<a class="carousel-control left" href="#<?php echo $_smarty_tpl->tpl_vars['tabname']->value;?>
"   data-slide="prev">prev<?php echo smartyTranslate(array('s'=>'prev'),$_smarty_tpl);?>
</a>
		<a class="carousel-control right" href="#<?php echo $_smarty_tpl->tpl_vars['tabname']->value;?>
"  data-slide="next"><?php echo smartyTranslate(array('s'=>'next'),$_smarty_tpl);?>
</a>
	<?php }?>

	<div class="carousel-inner">
		<?php $_smarty_tpl->tpl_vars['mproducts'] = new Smarty_variable(array_chunk($_smarty_tpl->tpl_vars['products']->value,$_smarty_tpl->tpl_vars['itemsperpage']->value), null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['products'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['products']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mproducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['products']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['products']->key => $_smarty_tpl->tpl_vars['products']->value) {
$_smarty_tpl->tpl_vars['products']->_loop = true;
 $_smarty_tpl->tpl_vars['products']->index++;
 $_smarty_tpl->tpl_vars['products']->first = $_smarty_tpl->tpl_vars['products']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['mypLoop']['first'] = $_smarty_tpl->tpl_vars['products']->first;
?>
			<div class="item <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['mypLoop']['first']) {?>active<?php }?>">
				<div class="product_list grid">
					<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['first'] = $_smarty_tpl->tpl_vars['product']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['products']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
					<?php if ($_smarty_tpl->tpl_vars['product']->iteration%$_smarty_tpl->tpl_vars['columnspage']->value==1&&$_smarty_tpl->tpl_vars['columnspage']->value>1) {?>
						<div class="row">
					<?php }?>
						<div class=" ajax_block_product product_block <?php if ($_smarty_tpl->tpl_vars['columnspage']->value==5) {?>col-md-2-4 col-lg-2-4<?php } else { ?>col-md-<?php echo $_smarty_tpl->tpl_vars['scolumn']->value;?>
<?php }?> col-xs-6 col-sp-12 <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['first']) {?>first_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['products']['last']) {?>last_item<?php }?>">
							<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

						</div>		
					<?php if (($_smarty_tpl->tpl_vars['product']->iteration%$_smarty_tpl->tpl_vars['columnspage']->value==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['products']['last'])&&$_smarty_tpl->tpl_vars['columnspage']->value>1) {?>
						</div>
					<?php }?>	
					<?php } ?>
				</div>
		</div>		
	<?php } ?>
	</div>
</div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'min_item')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'min_item'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Please select at least one product','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'min_item'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'max_item')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'max_item'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'You cannot add more than %d product(s) to the product comparison','sprintf'=>$_smarty_tpl->tpl_vars['comparator_max_item']->value,'js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'max_item'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('comparator_max_item'=>$_smarty_tpl->tpl_vars['comparator_max_item']->value),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('comparedProductsIds'=>$_smarty_tpl->tpl_vars['compared_products']->value),$_smarty_tpl);?>

<?php }?><?php }} ?>
