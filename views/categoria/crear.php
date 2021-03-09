<div>
    <h1>Crear nueva Categoria </h1>

    <form action="<?=base_url?>categoria/save" method="post">


        <div>
            <div class="d-flex">
                <label class="label" for="nombre">Nombre</label>
            </div>
            <div class="d-flex">
                <input  class="input" type="text" name="nombre" required/>
            </div>  
        </div>

        <div class="d-flex">
            <input class="btn" type="submit" value="Guardar" >
        </div>    

    </form>

</div>