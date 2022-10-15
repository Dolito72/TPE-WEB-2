<?php
/* Smarty version 4.2.1, created on 2022-10-01 20:18:22
  from 'C:\xampp\htdocs\web\tpe\templates\show_products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6338846ea2fad7_29307714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a82adf2f08c4e124db88313337729ded3f53760' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\tpe\\templates\\show_products.tpl',
      1 => 1664647661,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6338846ea2fad7_29307714 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- lista de productos -->
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

<table class="table">
    <thead">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Modelo</th>
            <th scope="col">Color</th>
            <th scope="col">Stock</th>
            <th scope="col">Precio</th>
            <th scope="colspan=2-">Acciones</th>
        </tr>
    </thead>
    <tbody class="table-group-divider" >
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>    
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->modelo;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->color;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->stock;?>
</td>
                <td> "u$s" <?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</td>
                <td>
                    <a href='edit_product/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
' type='button' class='btn btn-success'>Editar</a>
                </td>
                <td>
                    <a href='delete_product/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
' type='button' class='btn btn-danger'>Borrar</a>
                </td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
