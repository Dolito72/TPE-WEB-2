<?php
/* Smarty version 4.2.1, created on 2022-10-13 22:38:02
  from 'C:\xampp\htdocs\web\tpe\templates\showError.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6348772ada1647_07994777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac52a8334af18325d45e5fa3461e692a06f0ec6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\tpe\\templates\\showError.tpl',
      1 => 1665661119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6348772ada1647_07994777 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="card text-bg-danger mb-3 - mt-5 w-25" style="max-width: 18rem;">
  <div class="card-header">Ojo!</div>
  <div class="card-body">No se puede eliminar la especificación.</h5>
    <p class="card-text">Existen productos que la tienen!!!</p>
  </div>

  
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
