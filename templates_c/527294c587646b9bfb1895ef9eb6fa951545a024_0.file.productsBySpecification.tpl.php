<?php
/* Smarty version 4.2.1, created on 2022-10-15 19:06:02
  from 'C:\xampp\htdocs\web\tpe\templates\productsBySpecification.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634ae87aa68879_25325716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '527294c587646b9bfb1895ef9eb6fa951545a024' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\tpe\\templates\\productsBySpecification.tpl',
      1 => 1665853557,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634ae87aa68879_25325716 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="mt-3 mb-3 text-center">
<h4 class="mt-3 mb-3  text-center" ><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h4>
<!-- filtra productos por especificacion-->

<form action="products/specification" method="POST" class="mt-3 mb-3  mx-auto w-75 row row-cols-lg-auto g-3 align-items-center">
  <div class="col">
    <select name="id_especificacion" class="form-select" aria-label="Default select example">
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
  <button type="submit" href="products/specification/<?php echo $_smarty_tpl->tpl_vars['especificacion']->value->id_especificacion;?>
" class="btn btn-dark">Filtrar</button>
  </div>
</form>

<table class= "table mx-auto w-75 p-3 mt-3 mb-3 rounded  p-2 text-dark bg-opacity-10">
<thead>
    <tr>
      <th scope="col">Modelo</th>
      <th scope="col">Color</th>
      <th scope="col">Stock</th>
      <th scope="col">Precio</th>
    </tr>
    </thead>
    <tbody class="table-group-divider">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->modelo;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->color;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->stock;?>
</td>
        <td> u$s <?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</td>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>
<img src=".//images/scram.jpg" class="w-75   d-block - mx-auto - mb-3 " alt="moto" />

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
