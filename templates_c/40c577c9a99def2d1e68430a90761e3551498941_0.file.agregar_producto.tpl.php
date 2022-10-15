<?php
/* Smarty version 4.2.1, created on 2022-10-01 01:31:06
  from 'C:\xampp\htdocs\web\tpe\templates\agregar_producto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63377c3ab17420_57716713',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40c577c9a99def2d1e68430a90761e3551498941' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\tpe\\templates\\agregar_producto.tpl',
      1 => 1664580664,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63377c3ab17420_57716713 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- formulario de alta de producto-->
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="agregar_producto" method="POST" class="my-4">
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" name="precio" placeholder="Precio" aria-label="Precio">
        </div>
        <div class="col">
            <input type="text" class="form-control" name="color" placeholder="Color" aria-label="Color">
        </div>
        <div class="col">
            <input type="text" class="form-control" name="stock" placeholder="Stock" aria-label="Stock">
        </div>
        <div class="col">
            <select class="form-select" name = "id_especificacion"aria-label="Default select example">
                <option selected>Seleccione modelo</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['especificaciones']->value, 'especificacion');
$_smarty_tpl->tpl_vars['especificacion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['especificacion']->value) {
$_smarty_tpl->tpl_vars['especificacion']->do_else = false;
?> 
                var_dump ($especificaciones);
                <option value="<?php echo $_smarty_tpl->tpl_vars['especificaciones']->value->id_especificacion;?>
"><?php echo $_smarty_tpl->tpl_vars['especificaciones']->value->id_especificacion;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
    </div>

    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
