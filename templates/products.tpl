<!-- lista de productos -->
{include file="header.tpl"}

<h1 class="mt-3 mb-3 text-center">{$titulo}</h1>

<table class="table rounded  p-2 text-dark bg -opacity-10">

    <thead class="table-light" >
        <tr >
            <th scope="col">Modelo</th>
            <th scope="col">Color</th>
            <th scope="col">Stock</th>
            <th scope="col">Precio</th>
            <th scope="col"></th>
            <th class= "scope:col text center">Acciones</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody class="table-group-divider" >
        {foreach from=$productos item=$producto}    
            <tr>
                <td>{$producto->modelo}</td>
                <td>{$producto->color}</td>
                <td>{$producto->stock}</td>
                <td> u$s {$producto->precio}</td>
                <td>
                    <a href='product/{$producto->id_producto}' type='button' class='btn btn-outline-secondary'>Ver detalle</a>
                </td>
                {if isset($smarty.session.USER_ID)}
                <td>
                    <a href='edit/product/{$producto->id_producto}' type='button' class='btn  btn-outline-secondary'>Editar</a>
                </td>
                <td>
                    <a href='delete/product/{$producto->id_producto}' type='button' class= 'btn  btn-outline-secondary'>Borrar</a>
                </td>
            {/if}
            </tr>
        {/foreach}
    </tbody>
</table>

{include file="footer.tpl"}