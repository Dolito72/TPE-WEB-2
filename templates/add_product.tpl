{include file="header.tpl"}
<!-- formulario de alta de producto-->

<h2 class=" mt-3 mb-3 text-center">{$titulo}</h2>


<form action="add/product" method="POST" class="my-4">
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" name="precio" placeholder="Precio" aria-label="Precio" required>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="color" placeholder="Color" aria-label="Color" required>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="stock" placeholder="Stock" aria-label="Stock" required>
        </div>
        <div class="col">
           <select name ="id_especificacion" class="form-select" aria-label="Default select example" required>
           <option selected>Selecciona un modelo</option>
                {foreach from=$especificaciones item=$especificacion}
                    <option value={$especificacion->id_especificacion}>{$especificacion->modelo}</option>
                {/foreach}
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-secondary mt-3 mb-3">Guardar</button>
</form>

<img src=".//images/himalayan.jpg" class="d-block - mx-auto - mb-3 " alt="moto" />
{include file="footer.tpl"}