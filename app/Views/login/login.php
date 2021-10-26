<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>


<div class="container">
<div class="row">
    <div class="col-6">
        <form action="<?= base_url('user/autenticate') ?>" method="POST">
            <input type="hidden" name="id" value="" >
            <div class="row mb-3">
                <label for="inputUsername" class="col-sm-4 col-form-label">Nombre de usuario</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputUsername" name="username">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPass" class="col-sm-4 col-form-label">Contraseña</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="inputPass" name="pass">
                </div>
            </div>
        

            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</div>


</div> <!-- CIERRA CONTEINER -->
</body>
</html>