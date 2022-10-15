<?php
/* Smarty version 4.2.1, created on 2022-10-01 13:23:12
  from 'C:\xampp\htdocs\web\tpe\templates\add_producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6338232087e010_94499318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7558cc253ab6077d9bb3722f380c29ea2f5c996' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\tpe\\templates\\add_producto.tpl',
      1 => 1664623387,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6338232087e010_94499318 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- formulario de alta de producto-->

<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<select class="form-select" aria-label="Default select example">

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['especificaciones']->value, 'especificacion');
$_smarty_tpl->tpl_vars['especificacion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['especificacion']->value) {
$_smarty_tpl->tpl_vars['especificacion']->do_else = false;
?>
        <option value=<?php echo $_smarty_tpl->tpl_vars['especificacion']->value->id_especificacion;?>
><?php echo $_smarty_tpl->tpl_vars['especificacion']->value->modelo;?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
