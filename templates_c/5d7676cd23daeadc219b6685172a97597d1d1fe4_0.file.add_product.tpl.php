<?php
/* Smarty version 4.2.1, created on 2022-10-15 17:23:47
  from 'C:\xampp\htdocs\web\tpe\templates\add_product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634ad083e22f54_21083351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d7676cd23daeadc219b6685172a97597d1d1fe4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\tpe\\templates\\add_product.tpl',
      1 => 1665847425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634ad083e22f54_21083351 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- formulario de alta de producto-->

<h2 class=" mt-3 mb-3 text-center"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>


<form action="add/product" method="POST" class="my-4">
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
           <select name ="id_especificacion" class="form-select" aria-label="Default select example">
           <option selected>Selecciona un modelo</option>
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
        </div>
    </div>
    <button type="submit" class="btn btn-secondary mt-3 mb-3">Guardar</button>
</form>

<img src=".//images/himalayan.jpg" class="d-block - mx-auto - mb-3 " alt="moto" />
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
