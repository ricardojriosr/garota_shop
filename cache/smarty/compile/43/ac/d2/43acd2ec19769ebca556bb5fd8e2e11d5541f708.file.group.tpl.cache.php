<?php /* Smarty version Smarty-3.1.19, created on 2016-11-06 02:54:06
         compiled from "/home/alejandro1711/public_html/soygarota/themes/leo_underwear/modules/leomanagewidgets/views/widgets/group.tpl" */ ?>
<?php /*%%SmartyHeaderCode:556253963581ee19e8f2208-95030661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43acd2ec19769ebca556bb5fd8e2e11d5541f708' => 
    array (
      0 => '/home/alejandro1711/public_html/soygarota/themes/leo_underwear/modules/leomanagewidgets/views/widgets/group.tpl',
      1 => 1478389503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '556253963581ee19e8f2208-95030661',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'leoGroup' => 0,
    'group' => 0,
    'column' => 0,
    'row' => 0,
    'LEO_ANIMATELOAD' => 0,
    'LEO_ANIMATELOAD_CONFIG' => 0,
    'class' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_581ee19e9b1d78_94768963',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581ee19e9b1d78_94768963')) {function content_581ee19e9b1d78_94768963($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['leoGroup']->value)&&$_smarty_tpl->tpl_vars['leoGroup']->value) {?>
    <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['leoGroup']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
       
        <div <?php if (isset($_smarty_tpl->tpl_vars['group']->value['class'])&&$_smarty_tpl->tpl_vars['group']->value['class']) {?>class="<?php echo $_smarty_tpl->tpl_vars['group']->value['class'];?>
"<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['group']->value['background'])&&$_smarty_tpl->tpl_vars['group']->value['background']) {?>style="background-color: <?php echo $_smarty_tpl->tpl_vars['group']->value['background'];?>
"<?php }?>>
        <?php if (isset($_smarty_tpl->tpl_vars['group']->value['title'])&&$_smarty_tpl->tpl_vars['group']->value['title']) {?>
		<h4 class="title_block"><?php echo $_smarty_tpl->tpl_vars['group']->value['title'];?>
</h4>
        <?php }?>
        <?php if (isset($_smarty_tpl->tpl_vars['group']->value['columns'])&&$_smarty_tpl->tpl_vars['group']->value['columns']) {?>
            <?php  $_smarty_tpl->tpl_vars['column'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['column']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value['columns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['column']->key => $_smarty_tpl->tpl_vars['column']->value) {
$_smarty_tpl->tpl_vars['column']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['column']->value['active']) {?>
                     <div class="widget<?php echo $_smarty_tpl->tpl_vars['column']->value['col_value'];?>
<?php if (isset($_smarty_tpl->tpl_vars['column']->value['class'])&&$_smarty_tpl->tpl_vars['column']->value['class']) {?> <?php echo $_smarty_tpl->tpl_vars['column']->value['class'];?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['column']->value['background'])&&$_smarty_tpl->tpl_vars['column']->value['background']) {?>style="background-color: <?php echo $_smarty_tpl->tpl_vars['column']->value['background'];?>
"<?php }?>>
                <?php if (isset($_smarty_tpl->tpl_vars['column']->value['rows'])) {?>
                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['column']->value['rows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                        <?php if (isset($_smarty_tpl->tpl_vars['row']->value['content'])) {?><?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>
<?php }?>
                    <?php } ?>
                <?php }?>
                    </div>
                <?php }?>
            <?php } ?>
        <?php }?>
        </div>
    <?php } ?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['LEO_ANIMATELOAD']->value)&&$_smarty_tpl->tpl_vars['LEO_ANIMATELOAD']->value) {?>
<script type="text/javascript">
    $(document).ready(function () {
            <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['class'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LEO_ANIMATELOAD_CONFIG']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['class']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
            <?php if ($_smarty_tpl->tpl_vars['class']->value!='') {?>
            $('.<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
').waypoint(function () {
                $(this).addClass('animated <?php echo $_smarty_tpl->tpl_vars['value']->value['skin'];?>
').css("animation-delay", "<?php echo $_smarty_tpl->tpl_vars['value']->value['delay'];?>
s").css("-webkit-animation-delay", "<?php echo $_smarty_tpl->tpl_vars['value']->value['delay'];?>
s");
            }, {
                offset: '<?php echo $_smarty_tpl->tpl_vars['value']->value['offset'];?>
%'
            });
            <?php }?>
            <?php } ?>
    });
</script>
<?php }?><?php }} ?>
