<?php
/* Smarty version 4.2.1, created on 2022-10-14 23:49:39
  from 'C:\xampp\htdocs\web\tpe\templates\edit_product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349d9736dc3e0_02516168',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '209436fd69a4a2c42467774a898455505eb7e52a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\tpe\\templates\\edit_product.tpl',
      1 => 1665784143,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6349d9736dc3e0_02516168 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- formulario de edición de producto-->

<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<form action="update/product" method="POST" class="my-4">
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" name="precio" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
" placeholder="Precio" aria-label="Precio">
        </div>
        <div class="col">
            <input type="text" class="form-control" name="color" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->color;?>
" placeholder="Color" aria-label="Color">
        </div>
        <div class="col">
            <input type="text" class="form-control" name="stock" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->stock;?>
" placeholder="Stock" aria-label="Stock">
        </div>
        <div class="col">
            <select name="id_especificacion"  class="form-select" aria-label="Default select example">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['especificaciones']->value, 'especificacion');
$_smarty_tpl->tpl_vars['especificacion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['especificacion']->value) {
$_smarty_tpl->tpl_vars['especificacion']->do_else = false;
?>
                    <option  <?php if (($_smarty_tpl->tpl_vars['producto']->value->id_especificacion == $_smarty_tpl->tpl_vars['especificacion']->value->id_especificacion)) {?> selected <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['especificacion']->value->id_especificacion;?>
"><?php echo $_smarty_tpl->tpl_vars['especificacion']->value->modelo;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
        <div class="col">
        <input type="hidden" class="form-control" name="id_producto" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
">
    </div>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
