<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<div class="modal-dialog">

<div class="modal-content">

    <div class="modal-header">
        <h5>Escriba sus datos señor</h5>
        <button
        type="button"
        class="btn-close"
        data-bs-dismiss="modal"
        aria-label="">
        </button>
    </div>

<form action="insert6.php" method="post">

<div class="modal-body">

    <div class="col-md-12">

        <div class="form-group">
            <label>Nombre </label>
            <input
            type="text"
            class="form-control"
            name="nombre"
            required>
        </div>

        <div class="form-group">
            <label>Apellido</label>
            <input
            type="text"
            class="form-control"
            name="apellido"
            required>
        </div>

        <div class="form-group">
            <label>Direccion</label>
            <input
            type="text"
            class="form-control"
            name="direccion"
            required>
        </div>

      

        <div class="form-group">
            <label>Email</label>
            <input
            type="text"
            class="form-control"
            name="email"
            required>
        </div>


        <div class="form-group">
            <textarea name="comentario" id="" cols="30" rows="10"></textarea>
            
           
        </div>



                           






                          

                            <div class="modal-footer">
                            
                            <input type="submit" name="enviar" value="Registrar nuevo">
                            </div>

                        </div>

                    </div>

                </div>
                </form> 












</body>
</html>