<?php
/* Smarty version 4.2.1, created on 2022-10-15 17:36:29
  from 'C:\xampp\htdocs\web\tpe\templates\add_specification.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634ad37dd3f802_34065434',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e4456a0f080f9c5a16c36581a68a59efc2f4522' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\tpe\\templates\\add_specification.tpl',
      1 => 1665848185,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634ad37dd3f802_34065434 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- formulario de alta de especificación-->
<h2 class=" mt-3 mb-3 text-center"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>

<form action="add/specification" method="POST" enctype="multipart/form-data" class="my-4">
    <div class="row">
    <div class="col">
            <input type="text" class="form-control" name="modelo" placeholder="Modelo" aria-label="Modelo">
        </div>

        <div class="col">
            <input type="text" class="form-control" name="descripcion" placeholder="Descripción" aria-label="Descropción">
        </div>
        <div class="col">
            <input type="text" class="form-control" name="cilindrada" placeholder="Cilindrada" aria-label="Cilindrada">
        </div>
        <div class="col">
            <input type="text" class="form-control" name="potencia" placeholder="Potencia" aria-label="Potencia">
        </div>   
    </div>
    <button type="submit" class="btn btn-secondary mt-3 mb-3">Guardar</button>
</form>

<img src=".//images/meteor.jpg" class="d-block - mx-auto - mb-3" alt="moto" />
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
