<?php
/* Smarty version 3.1.33, created on 2019-08-15 18:35:38
  from '/etc/sentora/configs/apache/templates/vhost_cp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d55fa5aaa6747_18455104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05fd53ee9bf9a5edee377bfe7af43464c8612636' => 
    array (
      0 => '/etc/sentora/configs/apache/templates/vhost_cp.tpl',
      1 => 1565915732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d55fa5aaa6747_18455104 (Smarty_Internal_Template $_smarty_tpl) {
?># Configuration for Sentora control panel.
<VirtualHost *:<?php echo $_smarty_tpl->tpl_vars['cp']->value['server_port'];?>
>
ServerAdmin <?php echo $_smarty_tpl->tpl_vars['cp']->value['server_admin'];?>

DocumentRoot "<?php echo $_smarty_tpl->tpl_vars['cp']->value['server_root'];?>
"
ServerName <?php echo $_smarty_tpl->tpl_vars['cp']->value['server_name'];?>


<Directory "<?php echo $_smarty_tpl->tpl_vars['cp']->value['server_root'];?>
">
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

<?php if ($_smarty_tpl->tpl_vars['panel_ssl_txt']->value != null) {?>
#<?php echo $_smarty_tpl->tpl_vars['panel_ssl_txt']->value;?>

<?php }?>

# Custom settings are loaded below this line (if any exist)
<?php echo $_smarty_tpl->tpl_vars['global_zpcustom']->value;?>


</VirtualHost><?php }
}
