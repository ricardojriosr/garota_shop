<?php /* Smarty version Smarty-3.1.19, created on 2016-11-06 02:54:06
         compiled from "/home/alejandro1711/public_html/soygarota/themes/leo_underwear/modules/blockcms/blockcms.tpl" */ ?>
<?php /*%%SmartyHeaderCode:823735316581ee19ec60166-14421633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ccbd859ec7a4f02c8b9462a58cdb9192236d625' => 
    array (
      0 => '/home/alejandro1711/public_html/soygarota/themes/leo_underwear/modules/blockcms/blockcms.tpl',
      1 => 1478389099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '823735316581ee19ec60166-14421633',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'block' => 0,
    'cms_titles' => 0,
    'cms_key' => 0,
    'cms_title' => 0,
    'cms_page' => 0,
    'link' => 0,
    'show_price_drop' => 0,
    'PS_CATALOG_MODE' => 0,
    'show_new_products' => 0,
    'show_best_sales' => 0,
    'display_stores_footer' => 0,
    'show_contact' => 0,
    'contact_url' => 0,
    'cmslinks' => 0,
    'cmslink' => 0,
    'show_sitemap' => 0,
    'display_poweredby' => 0,
    'footer_text' => 0,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_581ee19ed799f0_65650755',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581ee19ed799f0_65650755')) {function content_581ee19ed799f0_65650755($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['block']->value==1) {?>
	<!-- Block CMS module -->
	<?php  $_smarty_tpl->tpl_vars['cms_title'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cms_title']->_loop = false;
 $_smarty_tpl->tpl_vars['cms_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cms_titles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cms_title']->key => $_smarty_tpl->tpl_vars['cms_title']->value) {
$_smarty_tpl->tpl_vars['cms_title']->_loop = true;
 $_smarty_tpl->tpl_vars['cms_key']->value = $_smarty_tpl->tpl_vars['cms_title']->key;
?>
		<div id="informations_block_left_<?php echo $_smarty_tpl->tpl_vars['cms_key']->value;?>
" class="block informations_block_left">
			<h4 class="title_block">
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_title']->value['category_link'], ENT_QUOTES, 'UTF-8', true);?>
">
					<?php if (!empty($_smarty_tpl->tpl_vars['cms_title']->value['name'])) {?><?php echo $_smarty_tpl->tpl_vars['cms_title']->value['name'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['cms_title']->value['category_name'];?>
<?php }?>
				</a>
			</h4>
			<div class="block_content list-block">
				<ul>
					<?php  $_smarty_tpl->tpl_vars['cms_page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cms_page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cms_title']->value['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cms_page']->key => $_smarty_tpl->tpl_vars['cms_page']->value) {
$_smarty_tpl->tpl_vars['cms_page']->_loop = true;
?>
						<?php if (isset($_smarty_tpl->tpl_vars['cms_page']->value['link'])) {?>
							<li class="bullet">
								<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_page']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_page']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_page']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

								</a>
							</li>
						<?php }?>
					<?php } ?>
					<?php  $_smarty_tpl->tpl_vars['cms_page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cms_page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cms_title']->value['cms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cms_page']->key => $_smarty_tpl->tpl_vars['cms_page']->value) {
$_smarty_tpl->tpl_vars['cms_page']->_loop = true;
?>
						<?php if (isset($_smarty_tpl->tpl_vars['cms_page']->value['link'])) {?>
							<li>
								<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_page']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_page']->value['meta_title'], ENT_QUOTES, 'UTF-8', true);?>
">
									<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_page']->value['meta_title'], ENT_QUOTES, 'UTF-8', true);?>

								</a>
							</li>
						<?php }?>
					<?php } ?>
					<?php if ($_smarty_tpl->tpl_vars['cms_title']->value['display_store']) {?>
						<li>
							<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('stores'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockcms'),$_smarty_tpl);?>
">
								<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockcms'),$_smarty_tpl);?>

							</a>
						</li>
					<?php }?>
				</ul>
			</div>
		</div>
	<?php } ?>
	<!-- /Block CMS module -->
<?php } else { ?>
	<!-- Block CMS module footer -->
	<div class="footer-block block" id="block_various_links_footer">
		<h4 class="title_block"><?php echo smartyTranslate(array('s'=>'Information','mod'=>'blockcms'),$_smarty_tpl);?>
</h4>
		<ul class="toggle-footer list-group bullet">
			<?php if (isset($_smarty_tpl->tpl_vars['show_price_drop']->value)&&$_smarty_tpl->tpl_vars['show_price_drop']->value&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
				<li class="item">
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('prices-drop'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Specials','mod'=>'blockcms'),$_smarty_tpl);?>
">
						<?php echo smartyTranslate(array('s'=>'Specials','mod'=>'blockcms'),$_smarty_tpl);?>

					</a>
				</li>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['show_new_products']->value)&&$_smarty_tpl->tpl_vars['show_new_products']->value) {?>
			<li class="item">
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('new-products'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'New products','mod'=>'blockcms'),$_smarty_tpl);?>
">
					<?php echo smartyTranslate(array('s'=>'New products','mod'=>'blockcms'),$_smarty_tpl);?>

				</a>
			</li>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['show_best_sales']->value)&&$_smarty_tpl->tpl_vars['show_best_sales']->value&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
				<li class="item">
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('best-sales'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Top sellers','mod'=>'blockcms'),$_smarty_tpl);?>
">
						<?php echo smartyTranslate(array('s'=>'Top sellers','mod'=>'blockcms'),$_smarty_tpl);?>

					</a>
				</li>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['display_stores_footer']->value)&&$_smarty_tpl->tpl_vars['display_stores_footer']->value) {?>
				<li class="item">
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('stores'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockcms'),$_smarty_tpl);?>
">
						<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockcms'),$_smarty_tpl);?>

					</a>
				</li>
			<?php }?>
			<?php if (isset($_smarty_tpl->tpl_vars['show_contact']->value)&&$_smarty_tpl->tpl_vars['show_contact']->value) {?>
			<li class="item">
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink($_smarty_tpl->tpl_vars['contact_url']->value,true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcms'),$_smarty_tpl);?>
">
					<?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockcms'),$_smarty_tpl);?>

				</a>
			</li>
			<?php }?>
			<?php  $_smarty_tpl->tpl_vars['cmslink'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cmslink']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cmslinks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cmslink']->key => $_smarty_tpl->tpl_vars['cmslink']->value) {
$_smarty_tpl->tpl_vars['cmslink']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['cmslink']->value['meta_title']!='') {?>
					<li class="item">
						<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cmslink']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cmslink']->value['meta_title'], ENT_QUOTES, 'UTF-8', true);?>
">
							<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cmslink']->value['meta_title'], ENT_QUOTES, 'UTF-8', true);?>

						</a>
					</li>
				<?php }?>
			<?php } ?>
			<?php if (isset($_smarty_tpl->tpl_vars['show_sitemap']->value)&&$_smarty_tpl->tpl_vars['show_sitemap']->value) {?>
			<li>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('sitemap'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Sitemap','mod'=>'blockcms'),$_smarty_tpl);?>
">
					<?php echo smartyTranslate(array('s'=>'Sitemap','mod'=>'blockcms'),$_smarty_tpl);?>

				</a>
			</li>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['display_poweredby']->value) {?>
			<li>
				<span>
					<?php echo '/*%%SmartyNocache:823735316581ee19ec60166-14421633%%*/<?php echo smartyTranslate(array(\'s\'=>\'[1] %3$s %2$s - Ecommerce software by %1$s [/1]\',\'mod\'=>\'blockcms\',\'sprintf\'=>array(\'PrestaShop™\',date(\'Y\'),\'©\'),\'tags\'=>array(\'<a class="_blank" href="http://www.prestashop.com">\')),$_smarty_tpl);?>
/*/%%SmartyNocache:823735316581ee19ec60166-14421633%%*/';?>

				</span>
			</li>
			<?php }?>
		</ul>
		<?php echo $_smarty_tpl->tpl_vars['footer_text']->value;?>

	</div>
	<!-- /Block CMS module footer -->
<?php }?>
<?php }} ?>
