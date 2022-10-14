{include file="header.tpl"}
<h4 class="mt-3 mb-3 ">{$titulo}</h4>




<div class="card text-bg-secondary p-2 text-dark bg-opacity-25 mt-3 mb-3" style="max-width: 25rem;">
  <div class="card-header">Modelo: {$producto->modelo}</div>
  <div class="card-body">
    <p class="card-text ">Descripción: {$producto->descripcion}</p>
  </div>
  <div class="card-header">Potencia: {$producto->potencia}</div>
  <div class="card-header">Cilindrada: {$producto->cilindrada}</div>
  <div class="card-header">Color: {$producto->color}</div>
  <div class="card-header">Stock: {$producto->stock}</div>
  <div class="card-header">Precio: u$s {$producto->precio}</div>

</div>
  
<a class="nav-link  mt-3 mb-3 " aria-current="page" href="home">Volver</a>


{include file="footer.tpl"}