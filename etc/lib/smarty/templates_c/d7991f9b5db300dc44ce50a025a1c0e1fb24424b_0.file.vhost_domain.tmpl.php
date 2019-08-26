<?php
/* Smarty version 3.1.33, created on 2019-08-13 15:14:30
  from '/etc/sentora/panel/modules/apache_admin/templates/vhost_domain.tmpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d532836937b77_87096398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7991f9b5db300dc44ce50a025a1c0e1fb24424b' => 
    array (
      0 => '/etc/sentora/panel/modules/apache_admin/templates/vhost_domain.tmpl',
      1 => 1565730062,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d532836937b77_87096398 (Smarty_Internal_Template $_smarty_tpl) {
?># DOMAIN: <?php echo $_smarty_tpl->tpl_vars['vh']->value['server_name'];?>

<Virtualhost *:<?php echo $_smarty_tpl->tpl_vars['vh']->value['server_port'];?>
>
ServerName <?php echo $_smarty_tpl->tpl_vars['vh']->value['server_name'];?>

<?php echo $_smarty_tpl->tpl_vars['vh']->value['server_alias'];?>

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
<?php echo $_smarty_tpl->tpl_vars['vh']->value['php_values'];?>

<?php echo $_smarty_tpl->tpl_vars['vh']->value['php_func_blacklist'];?>

php_admin_value upload_tmp_dir <?php echo $_smarty_tpl->tpl_vars['vh']->value['php_upload_dir'];?>

php_admin_value session.save_path <?php echo $_smarty_tpl->tpl_vars['vh']->value['php_session_path'];?>


ErrorLog <?php echo $_smarty_tpl->tpl_vars['vh']->value['error_log'];?>
 
CustomLog <?php echo $_smarty_tpl->tpl_vars['vh']->value['access_log'];?>

CustomLog <?php echo $_smarty_tpl->tpl_vars['vh']->value['bandwidth_log'];?>


# VHost Error pages
ErrorDocument 500 /_errorpages/500.html
ErrorDocument 510 /_errorpages/510.html
ErrorDocument 403 /_errorpages/403.html
ErrorDocument 404 /_errorpages/404.html
<?php }
}
