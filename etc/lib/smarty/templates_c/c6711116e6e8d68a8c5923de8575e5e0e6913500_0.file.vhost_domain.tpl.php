<?php
/* Smarty version 3.1.33, created on 2019-08-15 22:17:47
  from '/etc/sentora/configs/apache/templates/vhost_domain.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d562e6b78e917_91606282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6711116e6e8d68a8c5923de8575e5e0e6913500' => 
    array (
      0 => '/etc/sentora/configs/apache/templates/vhost_domain.tpl',
      1 => 1565928842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:vhost_ssl.tpl' => 1,
  ),
),false)) {
function content_5d562e6b78e917_91606282 (Smarty_Internal_Template $_smarty_tpl) {
?># DOMAIN: <?php echo $_smarty_tpl->tpl_vars['vh']->value['server_name'];?>

<Virtualhost *:<?php echo $_smarty_tpl->tpl_vars['vh']->value['server_port'];?>
>
ServerName <?php echo $_smarty_tpl->tpl_vars['vh']->value['server_name'];?>

<?php if ($_smarty_tpl->tpl_vars['vh']->value['server_alias'] != '') {?>
ServerAlias <?php echo $_smarty_tpl->tpl_vars['vh']->value['server_alias'];?>
	
<?php }?>
ServerAdmin <?php echo $_smarty_tpl->tpl_vars['vh']->value['server_admiin'];?>

DocumentRoot "<?php echo $_smarty_tpl->tpl_vars['vh']->value['server_root'];?>
"

<Directory <?php echo $_smarty_tpl->tpl_vars['vh']->value['server_root'];?>
>
  Options +FollowSymLinks -Indexes
  AllowOverride All
  Require all granted
</Directory>

<?php echo $_smarty_tpl->tpl_vars['vh']->value['server_addtype'];?>

AddOutputFilterByType DEFLATE text/html text/plain text/xml text/css text/javascript application/javascript
DirectoryIndex index.html index.htm index.php index.asp index.aspx index.jsp index.jspa index.shtml index.shtm

# PHP Admin Values
<?php if ($_smarty_tpl->tpl_vars['vh']->value['use_openbase'] == "true") {
if ($_smarty_tpl->tpl_vars['vh']->value['obasedir_in'] <> 0) {?>
php_admin_value open_basedir <?php echo $_smarty_tpl->tpl_vars['vh']->value['php_values'];?>

<?php }
}?>

<?php if ($_smarty_tpl->tpl_vars['vh']->value['use_suhosin'] == "true") {
if ($_smarty_tpl->tpl_vars['vh']->value['suhosin_in'] <> 0) {
echo $_smarty_tpl->tpl_vars['vh']->value['php_func_blacklist'];?>

<?php }
}?>
php_admin_value upload_tmp_dir <?php echo $_smarty_tpl->tpl_vars['vh']->value['php_upload_dir'];?>

php_admin_value session.save_path <?php echo $_smarty_tpl->tpl_vars['vh']->value['php_session_path'];?>


ErrorLog <?php echo $_smarty_tpl->tpl_vars['vh']->value['error_log'];?>
 
CustomLog <?php echo $_smarty_tpl->tpl_vars['vh']->value['access_log'];?>

CustomLog <?php echo $_smarty_tpl->tpl_vars['vh']->value['bandwidth_log'];?>


<?php if ($_smarty_tpl->tpl_vars['loaderrorpages']->value <> "0") {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['loaderrorpages']->value, 'errorpage');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['errorpage']->value) {
echo $_smarty_tpl->tpl_vars['errorpage']->value;?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>

<?php if ($_smarty_tpl->tpl_vars['vh']->value['ssl_enabled'] > 0) {
$_smarty_tpl->_subTemplateRender('file:vhost_ssl.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

# Custom Global Settings (if any exist)
<?php echo $_smarty_tpl->tpl_vars['vh']->value['global_vhcustom'];?>

# Custom VH settings (if any exist)
<?php echo $_smarty_tpl->tpl_vars['vh']->value['vh_custom_tx'];?>

</virtualhost>
<?php }
}
