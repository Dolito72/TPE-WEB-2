{include file="header.tpl"}

<h4 class="mt-3 mb-3  text-center" >{$titulo}</h4>
<!-- filtra productos por especificacion-->

<form action="products/specification" method="POST" class="mt-3 mb-3  mx-auto w-75 row row-cols-lg-auto g-3 align-items-center">
  <div class="col">
    <select name="id_especificacion" class="form-select" aria-label="Default select example">
      <option selected>Selecciona un modelo</option>
      {foreach from=$especificaciones item=$especificacion}
        <option value={$especificacion->id_especificacion}>{$especificacion->modelo}</option>
      {/foreach}
    </select>
  </div>
  <button type="submit" href="products/specification/{$especificacion->id_especificacion}" class="btn btn-dark">Filtrar</button>
  </div>
</form>



<table class= "table mx-auto w-75 p-3 mt-3 mb-3 rounded  p-2 text-dark bg-opacity-10">
<thead  class="table-light">
    <tr>
      <th scope="col">Modelo</th>
      <th scope="col">Color</th>
      <th scope="col">Stock</th>
      <th scope="col">Precio</th>
    </tr>
    </thead>
    <tbody class="table-group-divider">
      {foreach from=$productos item=$producto}
      <tr>
        <td>{$producto->modelo}</td>
        <td>{$producto->color}</td>
        <td>{$producto->stock}</td>
        <td> u$s {$producto->precio}</td>

        {/foreach}
    </tbody>
</table>

{include file="footer.tpl"}