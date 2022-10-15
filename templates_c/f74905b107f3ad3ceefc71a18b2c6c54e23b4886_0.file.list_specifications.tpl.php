<?php
/* Smarty version 4.2.1, created on 2022-10-01 22:13:16
  from 'C:\xampp\htdocs\web\tpe\templates\list_specifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63389f5ce64734_14727686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f74905b107f3ad3ceefc71a18b2c6c54e23b4886' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\tpe\\templates\\list_specifications.tpl',
      1 => 1664655189,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63389f5ce64734_14727686 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\web\\tpe\\libs\\smarty-4.2.1\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<!-- lista de especificaciones -->
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

<table class="table">
    <thead">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Modelo</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Cilindrada</th>
            <th scope="col">Potencia</th>
            <th scope="colspan=2-">Acciones</th>
        </tr>
    </thead>
    <tbody class="table-group-divider" >
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['especificaciones']->value, 'especificacion');
$_smarty_tpl->tpl_vars['especificacion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['especificacion']->value) {
$_smarty_tpl->tpl_vars['especificacion']->do_else = false;
?>    
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['especificacion']->value->id_especificacion;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['especificacion']->value->modelo;?>
</td>
                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['especificacion']->value->descripcion,30);?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['especificacion']->value->cilindrada;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['especificacion']->value->potencia;?>
</td>
                <td>
                    <a href='edit_specification/<?php echo $_smarty_tpl->tpl_vars['especificacion']->value->id_especificacion;?>
' type='button' class='btn btn-success'>Editar</a>
                </td>
                <td>
                    <a href='delete_specification/<?php echo $_smarty_tpl->tpl_vars['especificacion']->value->id_especificacion;?>
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
