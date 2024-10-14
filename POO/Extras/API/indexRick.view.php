<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La maldita API </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-3">
        <h1>Personjes </h1>
        <hr>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <?php 
                    foreach ($personajes->results as $personaje) {?>
                    
                    <div class="col col-12 col-md-3">
                        <div class="card">
                            <div class="card-title">
                                <h5 class="text-center"><?=$personaje->name ?></h5>
                            </div>
                            <div class="card-body">
                                <img src="<?=$personaje->image?>" alt="<?=$personaje->name ?>" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    
                    <?php
                    }
                    ?>
                    
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col col-12 col-md-6">
                <form action="" method="">
                    <input type="hidden" name="prev" value="<?=$personajes->info->prev;?>">
                    <button type="submit"  class="btn btn-secondary ">Anterior</button>
                </form>
                
            </div>
            <div class="col col-12 col-md-6">
            <form action="" method="">
                    <input type="hidden" name="next" value="<?=$personajes->info->next;?>">
                    <button type="submit"  class="btn btn-primary ">Siguiente</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>