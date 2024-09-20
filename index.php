<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi 20</title>
    <link rel="stylesheet" href="resources\css\bootstrap.min.css">
</head>
<body>
    <div class="container mt-3">
        <h1>Operaciones</h1>
        <form action="" method="post">
        <div class="card">
            <div class="card-header">
                <h3 class="h3">Operaciones Matemáticas</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <label for="">Numero 1</label>
                        <input type="number" name="n1"
                        class="form-control">
                        <label for="">Numero 2</label>
                        <input type="number" name="n2"
                        class="form-control">
                        <label for="">Operacion</label>
                        <select name="operacion" class="form-control">
                            <option value="suma">Suma</option>
                            <option value="resta">Resta</option>
                            <option value="multiplicacion">Multiplicacion</option>
                            <option value="division">Division</option>
                        </select>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <?php if(isset($_POST['operacion'])){ ?>
                            <?php switch ($_POST['operacion']) {
                                case 'suma':
                                    $resultado = $_POST['n1'] + $_POST['n2'];
                                    break;
                                case 'resta':
                                    $resultado = $_POST['n1'] - $_POST['n2'];
                                    break;
                            } ?>
                            <p class="mt-4" >El resultado de la operacion:
                            <?php echo $_POST['operacion']; ?> de <?php echo $_POST['n1'] ?> 
                            y <?php echo $_POST['n2'] ?> es igual a: <?php echo $resultado ?>+ </p>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">
                    Enviar
                </button>
            </div>
        </div>
        </form>
    </div>"
</body>
</html>