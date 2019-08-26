<?php
/* Smarty version 3.1.33, created on 2019-08-15 21:57:36
  from '/etc/sentora/configs/apache/templates/vhost_ssl.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5629b00fd371_01028366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed83bc2da946d6b039d662eac4359fd803e4952a' => 
    array (
      0 => '/etc/sentora/configs/apache/templates/vhost_ssl.tpl',
      1 => 1565927841,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5629b00fd371_01028366 (Smarty_Internal_Template $_smarty_tpl) {
?>SSLProtocol All -SSLv2 -SSLv3
SSLHonorCipherOrder on
SSLCipherSuite ECDH+AESGCM:DH+AESGCM:ECDH+AES256:DH+AES256:ECDH+AES128:DH+AES:ECDH+3DES:DH+3DES:RSA+AESGCM:RSA+AES:RSA+3DES:!aNULL:!MD5:!DSS
SSLEngine On
SSLCertificateFile <?php echo $_smarty_tpl->tpl_vars['vh']->value['hosted_dir'];
echo $_smarty_tpl->tpl_vars['vhost_user']->value;?>
ssl/<?php echo $_smarty_tpl->tpl_vars['vh']->value['server_name'];?>
/cert.pem
SSLCertificateKeyFile <?php echo $_smarty_tpl->tpl_vars['vh']->value['hosted_dir'];
echo $_smarty_tpl->tpl_vars['vhost_user']->value;?>
ssl/<?php echo $_smarty_tpl->tpl_vars['vh']->value['server_name'];?>
/privkey.pem
SSLCertificateChainFile <?php echo $_smarty_tpl->tpl_vars['vh']->value['hosted_dir'];
echo $_smarty_tpl->tpl_vars['vhost_user']->value;?>
ssl/<?php echo $_smarty_tpl->tpl_vars['vh']->value['server_name'];?>
/chain.pem
SSLCompression off<?php }
}
