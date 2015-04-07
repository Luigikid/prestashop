<?php /*%%SmartyHeaderCode:2902455239de3491c58-12666047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80b54de37cae4867be36c0ec5b9fe8feaef7b108' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\prestashop\\prestashop\\themes\\default-bootstrap\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1425636560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2902455239de3491c58-12666047',
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_55239de3516ab5_01318909',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55239de3516ab5_01318909')) {function content_55239de3516ab5_01318909($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//localhost/prestashop/prestashop/suche" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Suche" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Suche</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
