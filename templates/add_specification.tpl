{include file="header.tpl"}
<!-- formulario de alta de especificación-->
<h2 class=" mt-3 mb-3 text-center">{$titulo}</h2>

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
{include file="footer.tpl"}