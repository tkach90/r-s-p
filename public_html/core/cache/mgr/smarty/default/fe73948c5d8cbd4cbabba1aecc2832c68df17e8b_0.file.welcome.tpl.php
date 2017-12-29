<?php /* Smarty version 3.1.27, created on 2017-09-13 12:28:55
         compiled from "/home/geovlad/domains/geo-vlad.ru/public_html/manager/templates/default/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:153101891259b8fa57e3fd06_34041475%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe73948c5d8cbd4cbabba1aecc2832c68df17e8b' => 
    array (
      0 => '/home/geovlad/domains/geo-vlad.ru/public_html/manager/templates/default/welcome.tpl',
      1 => 1484551204,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153101891259b8fa57e3fd06_34041475',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59b8fa57e41cb4_27705859',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59b8fa57e41cb4_27705859')) {
function content_59b8fa57e41cb4_27705859 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '153101891259b8fa57e3fd06_34041475';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>