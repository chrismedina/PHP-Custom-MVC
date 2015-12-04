<?php
/* Smarty version 3.1.28-dev/77, created on 2015-12-03 07:32:44
  from "/Applications/MAMP/htdocs/YouTube/app/smarty/templates/home/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/77',
  'unifunc' => 'content_565fe20c668793_17860579',
  'file_dependency' => 
  array (
    '59fc60b721b089160b69f92d5e6907f8c58a02e1' => 
    array (
      0 => '/Applications/MAMP/htdocs/YouTube/app/smarty/templates/home/index.tpl',
      1 => 1449124361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_565fe20c668793_17860579 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<div class="wrapper">
<?php
$_from = $_smarty_tpl->tpl_vars['names']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_i_0_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$__foreach_i_0_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$__foreach_i_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_i_0_total) {
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
$__foreach_i_0_saved_local_item = $_smarty_tpl->tpl_vars['i'];
?>
    Name: <?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
 <br/>
<?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_0_saved_local_item;
}
}
if ($__foreach_i_0_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_0_saved_item;
}
if ($__foreach_i_0_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_i_0_saved_key;
}
?>
</div>

</body>
</html><?php }
}
