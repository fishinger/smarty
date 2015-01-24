<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-24 20:14:23
         compiled from "templates\template-1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2959654c38243573a77-34529807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f45d7f12d71bdb3a55afde5982262978733c008' => 
    array (
      0 => 'templates\\template-1.tpl',
      1 => 1422119662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2959654c38243573a77-34529807',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c38243689038_09993662',
  'variables' => 
  array (
    'title' => 0,
    'data' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c38243689038_09993662')) {function content_54c38243689038_09993662($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\OpenServer\\domains\\email\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:\\OpenServer\\domains\\email\\libs\\plugins\\modifier.truncate.php';
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<style>
		.container{
			width: 960px;
			margin: 0 auto;
		}
		article{
			border-bottom: 1px solid #414D40;
			margin: 15px;
		}
	</style>
</head>
<body>
	<div class="container">
		<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['posts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
			<article>
				<h1><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['post']->value['name'], 'UTF-8');?>
</h1>
				<h2><?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
</h2>
				<h3><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['data'],"%Y %m %d");?>
</h3>
				<p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['post']->value['text'],300);?>
</p>
			</article>
		<?php }
if (!$_smarty_tpl->tpl_vars['post']->_loop) {
?>
			<h1>Постов нет</h1>
		<?php } ?>
	</div>
	
</body>
</html><?php }} ?>
