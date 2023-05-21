<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Mi Perfil</h3>

    </div>
    <div class="card-body">
    <div class="row">
    <div class="col-4">
        <div class="form-group">

            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese su nombre">

        </div>
    </div>
    <div class="col-4">
        <div class="form-group">
            <label for="ape_materno">Apellido Materno</label>
            <input type="text" class="form-control" name="ape_materno" id="ape_materno" placeholder="Ingrese su apellido materno">
        </div>
    </div>  
    <div class="col-4">
        <div class="form-group">
            <label for="ape_paterno">Apellido Paterno</label>
            <input type="text" class="form-control" name="ape_paterno" id="ape_paterno" placeholder="Ingrese su apellido paterno">
        </div>
    </div>
    </div>
    <div class="row">
    <div class="col-6">   
        <div class="form-group">
            <label for="correo">Correo Electrónico</label>
            <input type="email"class= "form-control" name="correo" id="correo" placeholder="Ingrese su nombre">
        <div>
   </div>
   <div class="col-6">   
        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="text"class= "form-control" name="password" id="password" placeholder="Ingrese su nombre">
        <div>
   </div>
   <div class="col-6">   
       <div class="form-group">
          <label>Sexo</label>
          <select class="form-control select2" name="sexo" id="sexo" data-placeholder="Seleccione">
             <option label="Seleccione"></option>
             <option value="F">Femenino</option>
             <option value="M">Masculino</option>
          </select>
        </div>    
    </div>
   </div> 
</div>
<div class="card-footer">
    <button type="submit" class="btn btn-secondary" id="btnactualizar">Actualizar</button>