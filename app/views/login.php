<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <title>Login</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a href="index.php" class="navbar-brand">Tienda</a>
</nav>
<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-2">

        </div>
        <div class="col-sm-8">
            <form>
                <div class="form-group text-left">

                    <label for="user">Usuario:</label>
                    <input type="text" name="user" class="form-control">
                </div>
                <div class="form-group text-left">
                    <label for="password">Clave de acceso:</label>
                    <td><input type="password" name="password" class="form-control"></td>
                </div>
                <div class="form-group text-left">
                    <input type="submit" value="Enviar" class="btn btn-success"></td>
                </div>


            </form>
        </div>
        <div class="col-sm-2">

        </div>
    </div>
</div>

</body>
</html>