{include file="header.tpl"}
<!-- formulario de edición de producto-->

<h1>{$titulo}</h1>
<form action="update/specification" method="POST" class="my-4">
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" name="modelo" value="{$especificacion->modelo}" placeholder="Modelo" aria-label="Modelo" required>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="descripcion" value="{$especificacion->descripcion}" placeholder="Descripcion" aria-label="Descripcion" required>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="cilindrada" value="{$especificacion->cilindrada}" placeholder="Cilindrada" aria-label="Cilindrada" required>
        </div>
        <div class="col">
            <input type="text" class="form-control" name="potencia" value="{$especificacion->potencia}" placeholder="Potencia" aria-label="Potencia" required>
        </div>
       
        <div class="col">
        <input type="hidden" class="form-control" name="id_especificacion" value="{$especificacion->id_especificacion}">
    </div>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Guardar</button>
</form>
</div>

{include file="footer.tpl"}