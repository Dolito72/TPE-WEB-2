<?php
/* Smarty version 4.2.1, created on 2022-10-15 18:51:26
  from 'C:\xampp\htdocs\web\tpe\templates\specifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634ae50eab1b23_19215566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'abdada84bd609bc6992287039da8c624e489e4e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\tpe\\templates\\specifications.tpl',
      1 => 1665852683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634ae50eab1b23_19215566 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\web\\tpe\\libs\\smarty-4.2.1\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<!-- lista de especificaciones -->
<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1 class=" mt-3 mb-3  text-center"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<div class="bg-image" style="background-image: url('.//images/himalayan.jpg'); opacity:0.8">

<table class="table">
<thead class="table-light" >
        <tr>
            <th scope="col">Modelo</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Cilindrada</th>
            <th scope="col">Potencia</th>
            <?php if ((isset($_SESSION['USER_ID']))) {?>
            <th scope="col">Acciones</th>
            <th scope="col">      </th>
            <?php }?>
        </tr>
        </thead>
        <tbody class="table-group-divider text-white">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['especificaciones']->value, 'especificacion');
$_smarty_tpl->tpl_vars['especificacion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['especificacion']->value) {
$_smarty_tpl->tpl_vars['especificacion']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['especificacion']->value->modelo;?>
</td>
                <td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['especificacion']->value->descripcion,30);?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['especificacion']->value->cilindrada;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['especificacion']->value->potencia;?>
</td>
                <?php if ((isset($_SESSION['USER_ID']))) {?>
                <td>
                    <a href='edit/specification/<?php echo $_smarty_tpl->tpl_vars['especificacion']->value->id_especificacion;?>
' type='button'
                        class='btn btn-secondary'>Editar</a>
                </td>
                <td>
                    <a href='delete/specification/<?php echo $_smarty_tpl->tpl_vars['especificacion']->value->id_especificacion;?>
' type='button'
                        class='btn btn-dark'>Borrar</a>
                       
                </td>
                <?php }?>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
</table>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
