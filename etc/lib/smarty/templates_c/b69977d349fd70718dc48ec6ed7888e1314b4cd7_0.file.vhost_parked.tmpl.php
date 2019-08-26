<?php
/* Smarty version 3.1.33, created on 2019-08-13 15:14:30
  from '/etc/sentora/panel/modules/apache_admin/templates/vhost_parked.tmpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5328369b3c43_84393539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b69977d349fd70718dc48ec6ed7888e1314b4cd7' => 
    array (
      0 => '/etc/sentora/panel/modules/apache_admin/templates/vhost_parked.tmpl',
      1 => 1565729540,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5328369b3c43_84393539 (Smarty_Internal_Template $_smarty_tpl) {
?># DOMAIN: <?php echo $_smarty_tpl->tpl_vars['vh']->value['server_name'];?>

<virtualhost <?php echo $_smarty_tpl->tpl_vars['vh']->value['server_ip'];?>
:<?php echo $_smarty_tpl->tpl_vars['vh']->value['server_port'];?>
>
ServerName <?php echo $_smarty_tpl->tpl_vars['vh']->value['server_name'];?>

<?php echo $_smarty_tpl->tpl_vars['vh']->value['server_alias'];?>

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
<?php }
}
