<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php" style="text-decoration: none; color:black; font-size:17px"><button>Volver atrás ↩️</button></a>
    
    <h1>Materias del Alumno <?=$alumno->nombre ." ". $alumno->apellido?> :</h1>
    <ul>
        <?php
        //var_dump($alumno->materias());
        if($alumno->materias()){
            foreach ($alumno->materias() as $materias) {
                ?>
                    <li> <?=$materias->nombre?> </li>
                <?php
                }
        }else{ ?>
            <p>El alumno no cuenta con materias asignadas.</p>
            <button><a href="">Asignar Materias</a></button>
        <?php
        };
        ?>
        
    </ul>
</body>
</html>