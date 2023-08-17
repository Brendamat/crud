<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Crud PHP com MVC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <nav class="navbar navbar-light bg-light menu">
        <div class="contaiber">
            <a class="navbar-brand" href="#">
                CRUD PHP
            </a>
        </div>

        <form>
            <div class="row">

                <div class="col-md-10">
                    <label> Nome </label>
                    <input type="text" name="nome" value="" autofocus class="form-control" require>
                </div>

                <div class="col-md-10">
                    <label> Sobrenome </label>
                    <input type="text" name="Sobrenome" value="" class="form-control" require>
                </div>

                <div class="col-md-3">
                    <label> Idade </label>
                    <input type="number" name="Idade" value="" class="form-control" require><br>
                </div>

                <div class="col-md-3">
                    <label>Sexo </label>
                    <select class="form-control" name="Sexo" id="sexo">
                        <option value="Fem">Fem</option>
                        <option value="Masc">Masc</option>
                    </select>
                </div>
                <div>
                <button type="submit" class="btn btn-primary" name= "Cadastrar">cadastrar</button>
                </div>
            </div>
        </form>

    </nav>



</body>

</html>