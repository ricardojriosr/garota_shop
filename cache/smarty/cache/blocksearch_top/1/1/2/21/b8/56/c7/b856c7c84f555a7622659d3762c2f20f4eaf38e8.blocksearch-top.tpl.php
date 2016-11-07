<?php /*%%SmartyHeaderCode:297219477562e73a2deb5a5-66789970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b856c7c84f555a7622659d3762c2f20f4eaf38e8' => 
    array (
      0 => '/home/alejandro1711/public_html/soygarota/themes/leo_underwear/modules/blocksearch/blocksearch-top.tpl',
      1 => 1445884523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '297219477562e73a2deb5a5-66789970',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_581cc844186533_71364457',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581cc844186533_71364457')) {function content_581cc844186533_71364457($_smarty_tpl) {?><script type="text/javascript">
$(document).ready( function(){
//search 
		$("#search_block_top").each( function(){
		var content = $(".groupe");
		$(".groupe-btn", this ).click( function(){
				content.toggleClass("show");
			}) ;
		} );
	 
});
</script>
<!-- Block search module TOP -->
<div id="search_block_top" class="pull-right">
	<a  class="groupe-btn dropdown hidden-md hidden-lg" title="Buscar" href="#"><i class="fa fa-search"></i></a>
	<form id="searchbox" method="get" action="//www.soygarota.com/soygarota/es/search" class="groupe" >
		<div class="input-group">
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Buscar" value="" />
			<span class="input-group-btn">
				<button type="submit" name="submit_search" class="btn btn-outline-inverse">
				<span class="button-search fa fa-search"><span class="unvisible">Buscar</span></span>
			</button></span>
		</div>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
