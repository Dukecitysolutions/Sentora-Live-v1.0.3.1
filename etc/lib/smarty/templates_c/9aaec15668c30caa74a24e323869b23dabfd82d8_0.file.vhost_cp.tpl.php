<?php
/* Smarty version 3.1.33, created on 2019-08-13 15:14:30
  from '/etc/sentora/panel/modules/apache_admin/templates/vhost_cp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d532836852863_05241222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9aaec15668c30caa74a24e323869b23dabfd82d8' => 
    array (
      0 => '/etc/sentora/panel/modules/apache_admin/templates/vhost_cp.tpl',
      1 => 1565727847,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d532836852863_05241222 (Smarty_Internal_Template $_smarty_tpl) {
?># Configuration for Sentora control panel.
<VirtualHost *:<?php echo $_smarty_tpl->tpl_vars['cp']->value['server_port'];?>
>
ServerAdmin <?php echo $_smarty_tpl->tpl_vars['cp']->value['server_admin'];?>

DocumentRoot "<?php echo $_smarty_tpl->tpl_vars['cp']->value['server_root'];?>
"
ServerName <?php echo $_smarty_tpl->tpl_vars['cp']->value['server_name'];?>


<Directory "/etc/sentora/panel/">
Options +FollowSymLinks -Indexes
    AllowOverride All
    Require all granted
</Directory>

AddType application/x-httpd-php .php

ErrorLog "<?php echo $_smarty_tpl->tpl_vars['cp']->value['log_dir'];?>
sentora-error.log" 
CustomLog "<?php echo $_smarty_tpl->tpl_vars['cp']->value['log_dir'];?>
sentora-access.log" combined
CustomLog "<?php echo $_smarty_tpl->tpl_vars['cp']->value['log_dir'];?>
sentora-bandwidth.log" common
<?php }
}
