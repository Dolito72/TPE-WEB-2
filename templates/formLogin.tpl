{include 'header.tpl'}

<div class="mt-5 mb-5 w-25 mx-auto">
    <form method="POST" action="validate">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" required class="form-control" id="email" name="email" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" required class="form-control" id="password" name="password">
        </div>

        {if $error} 
            <div class="alert alert-danger mt-3">
                {$error}
            </div>
        {/if}
        <button type="submit" class="btn btn-secondary mt-3">Ingresar</button>
    </form>
</div>

<img src=".//images/scram2.jpg" class="d-block - mx-auto - mb-3 " alt="moto" />
{include file='footer.tpl'}

