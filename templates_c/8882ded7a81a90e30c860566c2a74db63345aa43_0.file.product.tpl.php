<?php
/* Smarty version 4.2.1, created on 2022-10-15 16:58:52
  from 'C:\xampp\htdocs\web\tpe\templates\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634acaacccbe64_91611957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8882ded7a81a90e30c860566c2a74db63345aa43' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\tpe\\templates\\product.tpl',
      1 => 1665845929,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634acaacccbe64_91611957 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h4 class="mt-3 mb-3 "><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h4>

<div class="card text-bg-secondary p-2 text-dark bg-opacity-25 mt-3 mb-3" style="max-width: 25rem;">
  <div class="card-header">Modelo: <?php echo $_smarty_tpl->tpl_vars['producto']->value->modelo;?>
</div>
    <div class="card-body">
      <p class="card-text ">Descripción: <?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
</p>
    </div>
    <div class="card-header">Potencia: <?php echo $_smarty_tpl->tpl_vars['producto']->value->potencia;?>
</div>
    <div class="card-header">Cilindrada: <?php echo $_smarty_tpl->tpl_vars['producto']->value->cilindrada;?>
</div>
    <div class="card-header">Color: <?php echo $_smarty_tpl->tpl_vars['producto']->value->color;?>
</div>
    <div class="card-header">Stock: <?php echo $_smarty_tpl->tpl_vars['producto']->value->stock;?>
</div>
    <div class="card-header">Precio: u$s <?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</div>
    <img src=".//images/himalayan.jpg" class="w-80 " alt="moto"/>
  </div>
  
<a class="nav-link  mt-3 mb-3 " aria-current="page" href="home">Volver</a>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
