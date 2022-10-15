<?php
/* Smarty version 4.2.1, created on 2022-10-14 23:29:14
  from 'C:\xampp\htdocs\web\tpe\templates\edit_specification.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6349d4aad62005_10459970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '854cae33df690b62a1e92ca6e50f56e1f938e1fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\tpe\\templates\\edit_specification.tpl',
      1 => 1665782948,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6349d4aad62005_10459970 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- formulario de edición de producto-->

<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<form action="update/specification" method="POST" class="my-4">
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" name="modelo" value="<?php echo $_smarty_tpl->tpl_vars['especificacion']->value->modelo;?>
" placeholder="Modelo" aria-label="Modelo">
        </div>
        <div class="col">
            <input type="text" class="form-control" name="descripcion" value="<?php echo $_smarty_tpl->tpl_vars['especificacion']->value->descripcion;?>
" placeholder="Descripcion" aria-label="Descripcion">
        </div>
        <div class="col">
            <input type="text" class="form-control" name="cilindrada" value="<?php echo $_smarty_tpl->tpl_vars['especificacion']->value->cilindrada;?>
" placeholder="Cilindrada" aria-label="Cilindrada">
        </div>
        <div class="col">
            <input type="text" class="form-control" name="potencia" value="<?php echo $_smarty_tpl->tpl_vars['especificacion']->value->potencia;?>
" placeholder="Potencia" aria-label="Potencia">
        </div>
       
        <div class="col">
        <input type="hidden" class="form-control" name="id_especificacion" value="<?php echo $_smarty_tpl->tpl_vars['especificacion']->value->id_especificacion;?>
">
    </div>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
