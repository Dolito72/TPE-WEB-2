{include file="header.tpl"}
<!-- formulario de edición de producto-->

<h1>{$titulo}</h1>
<form action="update/product" method="POST" class="my-4">
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" name="precio" value="{$producto->precio}" placeholder="Precio" aria-label="Precio">
        </div>
        <div class="col">
            <input type="text" class="form-control" name="color" value="{$producto->color}" placeholder="Color" aria-label="Color">
        </div>
        <div class="col">
            <input type="text" class="form-control" name="stock" value="{$producto->stock}" placeholder="Stock" aria-label="Stock">
        </div>
        <div class="col">
            <select name="id_especificacion"  class="form-select" aria-label="Default select example">
                {foreach from=$especificaciones item = $especificacion}
                    <option  {if ($producto->id_especificacion == $especificacion->id_especificacion)} selected {/if} value="{$especificacion->id_especificacion}">{$especificacion->modelo}</option>
                {/foreach}
            </select>
        </div>
        <div class="col">
        <input type="hidden" class="form-control" name="id_producto" value="{$producto->id_producto}">
    </div>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>
</div>

{include file="footer.tpl"}