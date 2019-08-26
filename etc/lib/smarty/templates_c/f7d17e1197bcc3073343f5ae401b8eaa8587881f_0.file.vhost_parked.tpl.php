<?php
/* Smarty version 3.1.33, created on 2019-08-15 19:54:48
  from '/etc/sentora/configs/apache/templates/vhost_parked.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d560ce8ed8257_59712219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7d17e1197bcc3073343f5ae401b8eaa8587881f' => 
    array (
      0 => '/etc/sentora/configs/apache/templates/vhost_parked.tpl',
      1 => 1565920238,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:vhost_ssl.tpl' => 1,
  ),
),false)) {
function content_5d560ce8ed8257_59712219 (Smarty_Internal_Template $_smarty_tpl) {
?># DOMAIN: <?php echo $_smarty_tpl->tpl_vars['vh']->value['server_name'];?>

<virtualhost <?php echo $_smarty_tpl->tpl_vars['vh']->value['server_ip'];?>
:<?php echo $_smarty_tpl->tpl_vars['vh']->value['server_port'];?>
>
ServerName <?php echo $_smarty_tpl->tpl_vars['vh']->value['server_name'];?>

ServerAlias <?php echo $_smarty_tpl->tpl_vars['vh']->value['server_alias'];?>

ServerAdmin <?php echo $_smarty_tpl->tpl_vars['vh']->value['server_admiin'];?>

DocumentRoot "<?php echo $_smarty_tpl->tpl_vars['vh']->value['parking_path'];?>
"
<Directory "<?php echo $_smarty_tpl->tpl_vars['vh']->value['parking_path'];?>
">
  Options +FollowSymLinks -Indexes
  AllowOverride All
  Require all granted
</Directory>
AddType application/x-httpd-php .php3 .php
DirectoryIndex index.html index.htm index.php index.asp index.aspx index.jsp index.jspa index.shtml index.shtm

<?php if ($_smarty_tpl->tpl_vars['vh']->value['ssl_enabled'] > 0) {?>
# SSL Engine settings (if any exist)
<?php $_smarty_tpl->_subTemplateRender('file:vhost_ssl.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

# Custom Global Settings (if any exist)
<?php echo $_smarty_tpl->tpl_vars['vh']->value['global_vhcustom'];?>

# Custom VH settings (if any exist)
<?php echo $_smarty_tpl->tpl_vars['vh']->value['vh_custom_tx'];?>

</virtualhost>

<?php }
}
