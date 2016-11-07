<?php /* Smarty version Smarty-3.1.19, created on 2016-11-07 08:18:32
         compiled from "/home/alejandro1711/public_html/soygarota/themes/leo_underwear/modules/leomenusidebar/views/templates/hook/megamenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209913311258207f286cf768-55032170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03802c56dd581c611305394346ace7c6e5edfa8e' => 
    array (
      0 => '/home/alejandro1711/public_html/soygarota/themes/leo_underwear/modules/leomenusidebar/views/templates/hook/megamenu.tpl',
      1 => 1478389536,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209913311258207f286cf768-55032170',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'boostrapmenu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58207f286f54f4_44919714',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58207f286f54f4_44919714')) {function content_58207f286f54f4_44919714($_smarty_tpl) {?><div id="leo-verticalmenu" class="leo-verticalmenu block-highlighted block nopadding">
	<h4 class="title_block float-vertical-button"><?php echo smartyTranslate(array('s'=>'Shop by categories','mod'=>'leomenusidebar'),$_smarty_tpl);?>
</h4>
    <div class="box-content block_content">
		<div id="verticalmenu" class="verticalmenu" role="navigation">
				<?php echo $_smarty_tpl->tpl_vars['boostrapmenu']->value;?>

		</div>
    </div>
</div>
<?php }} ?>
