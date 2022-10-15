<!-- lista de especificaciones -->
{include file="header.tpl"}
<h1 class=" mt-3 mb-3  text-center">{$titulo}</h1>
<div class="bg-image" style="background-image: url('.//images/himalayan.jpg'); opacity:0.8">

<table class="table">
<thead class="table-light" >
        <tr>
            <th scope="col">Modelo</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Cilindrada</th>
            <th scope="col">Potencia</th>
            {if isset($smarty.session.USER_ID)}
            <th scope="col">Acciones</th>
            <th scope="col">      </th>
            {/if}
        </tr>
        </thead>
        <tbody class="table-group-divider text-white">
            {foreach from=$especificaciones item=$especificacion}
            <tr>
                <td>{$especificacion->modelo}</td>
                <td>{$especificacion->descripcion|truncate:30}</td>
                <td>{$especificacion->cilindrada}</td>
                <td>{$especificacion->potencia}</td>
                {if isset($smarty.session.USER_ID)}
                <td>
                    <a href='edit/specification/{$especificacion->id_especificacion}' type='button'
                        class='btn btn-secondary'>Editar</a>
                </td>
                <td>
                    <a href='delete/specification/{$especificacion->id_especificacion}' type='button'
                        class='btn btn-dark'>Borrar</a>
                       
                </td>
                {/if}
            </tr>
            {/foreach}
        </tbody>
</table>
</div>

{include file="footer.tpl"}