<?php /* Smarty version Smarty-3.1.19, created on 2016-11-06 02:54:08
         compiled from "/home/alejandro1711/public_html/soygarota/themes/leo_underwear/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1707376356581ee1a0c90bb7-48643559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de9a8f0f8cdbe3455cff309f0b27e95eb20e2b75' => 
    array (
      0 => '/home/alejandro1711/public_html/soygarota/themes/leo_underwear/footer.tpl',
      1 => 1478388928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1707376356581ee1a0c90bb7-48643559',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'LEO_LAYOUT_DIRECTION' => 0,
    'HOOK_BOTTOM' => 0,
    'page_name' => 0,
    'HOOK_FOOTERTOP' => 0,
    'HOOK_FOOTER' => 0,
    'HOOK_FOOTERBOTTOM' => 0,
    'ENABLE_COPYRIGHT' => 0,
    'CUSTOM_COPYRIGHT' => 0,
    'HOOK_FOOTNAV' => 0,
    'LEO_PANELTOOL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_581ee1a0d172b2_19900918',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581ee1a0d172b2_19900918')) {function content_581ee1a0d172b2_19900918($_smarty_tpl) {?>
<?php if (!isset($_smarty_tpl->tpl_vars['content_only']->value)||!$_smarty_tpl->tpl_vars['content_only']->value) {?>
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./layout/".((string)$_smarty_tpl->tpl_vars['LEO_LAYOUT_DIRECTION']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                	</div>
				</div>
            </section>
<!-- Footer -->
			
            <?php if (isset($_smarty_tpl->tpl_vars['HOOK_BOTTOM']->value)&&!empty($_smarty_tpl->tpl_vars['HOOK_BOTTOM']->value)&&in_array($_smarty_tpl->tpl_vars['page_name']->value,array('index'))) {?>
				<section id="bottom">
					<div class="container">
						<?php echo $_smarty_tpl->tpl_vars['HOOK_BOTTOM']->value;?>

					</div>
				</section>
			<?php }?>
			<footer id="footer" class="footer-container">
                <?php if (isset($_smarty_tpl->tpl_vars['HOOK_FOOTERTOP']->value)&&!empty($_smarty_tpl->tpl_vars['HOOK_FOOTERTOP']->value)) {?>
					<section id="leo-footer-top" class="footer-top"> 
						<div class="container"> 
							<div class="inner">			  
								<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTERTOP']->value;?>
  
							</div>
						</div> 
					</section><!-- #footertop -->
                <?php }?>
                <section id="leo-footer-center" class="footer-center">
					<div class="container"> 
						<div class="inner">			
							<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

						</div> 
					</div>
				</section><!-- #footercenter -->
                <?php if (isset($_smarty_tpl->tpl_vars['HOOK_FOOTERBOTTOM']->value)&&!empty($_smarty_tpl->tpl_vars['HOOK_FOOTERBOTTOM']->value)) {?>
					<section id="leo-footer-bottom" class="footer-bottom">
						<div class="container">
							<div class="inner">			
								<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTERBOTTOM']->value;?>

							</div>
						</div>
					</section><!-- #footerbottom -->
                <?php }?>
				<section id="footernav" class="footer-nav">
					<div class="container">
						<div class="row">
							<?php if (isset($_smarty_tpl->tpl_vars['ENABLE_COPYRIGHT']->value)&&$_smarty_tpl->tpl_vars['ENABLE_COPYRIGHT']->value==1) {?>
										<div id="powered" class="col-sm-12 col-md-12 col-xs-12">
										<?php if (isset($_smarty_tpl->tpl_vars['CUSTOM_COPYRIGHT']->value)&&!empty($_smarty_tpl->tpl_vars['CUSTOM_COPYRIGHT']->value)) {?>
											<?php echo $_smarty_tpl->tpl_vars['CUSTOM_COPYRIGHT']->value;?>

										<?php } else { ?>
											&copy; 2014 <?php echo smartyTranslate(array('s'=>'Powered by PrestaShop. All Rights Reserved.'),$_smarty_tpl);?>
 
										<?php }?>
											<?php echo smartyTranslate(array('s'=>'Developed By'),$_smarty_tpl);?>
 <span>LeoTheme</span>
									</div><!-- #poweredby -->
								<?php }?>
						
						</div>
					</div>
				</section>
				<section id="footernav-bottom">
					<?php if (isset($_smarty_tpl->tpl_vars['HOOK_FOOTNAV']->value)&&!empty($_smarty_tpl->tpl_vars['HOOK_FOOTNAV']->value)) {?>
						<div id="footnav" class="col-sm-12 col-md-12 col-xs-12">
							<div class="container">
								<div class="row">
									<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTNAV']->value;?>

							  </div>
							</div>
						</div>
					<?php }?>
				</section>
            </footer><!-- .footer-container -->
		</section><!-- #page -->
<?php }?>

<p id="back-top">
<a href="#top" title="<?php echo smartyTranslate(array('s'=>'Scroll To Top'),$_smarty_tpl);?>
" alt=""><?php echo smartyTranslate(array('s'=>'Scroll To Top'),$_smarty_tpl);?>
</a>
</p>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if (isset($_smarty_tpl->tpl_vars['LEO_PANELTOOL']->value)&&$_smarty_tpl->tpl_vars['LEO_PANELTOOL']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./info/paneltool.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
	</body>
</html><?php }} ?>
