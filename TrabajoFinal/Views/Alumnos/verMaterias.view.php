<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="min-h-screen flex flex-col">

    <header>
        <nav class=" bg-blue-400 flex text-center items-center">
            <div class="flex hover:bg-blue-300">
                <a href="../Index/Index.php" class="py-2 px-3 text-lg font-bold text-white">🏡 Ir a Vista General </a>
            </div>

            <section class=" text-white text-lg"> | </section>
        </nav>
    </header>

    <main class="flex-grow">
        <div class="grid grid-cols-6 pt-8 mx-7 items-start justify-items-center h-auto">

            <a href="index.php"
                class=" bg-blue-500 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded text-center">
                Volver atrás
            </a>
            <div class="col-start-2 col-end-6 flex w-full flex-col items-center text-center">
                <h2 class="class=text-center text-gray-600 font-bold text-2xl uppercase">Materias del Alumno <?= $alumno->nombre . ' ' . $alumno->apellido ?> </h2>
                <hr class="w-full border-6 border-solid border-indigo-500 my-3">

                <ul class="flex flex-col w-1/4">
                    <?php
        if($alumno->materias()){
            foreach ($alumno->materias() as $materias) {
                ?>
                    <li class="py-1 my-3 bg-indigo-500 font-bold text-white text-xl rounded"> <?= $materias->nombre ?> </li>
                    
                    <?php
                }
        }else{ ?>
        </ul>
                    <p class="col-start-2 col-end-6 text-indigo-500 w-full ">El alumno no cuenta con materias asignadas.</p>
                    <a href="editar.php?id=<?= $alumno->id ?>" class="my-3 rounded bg-emerald-800 px-2 py-2 font-bold text-white hover:bg-emerald-900"><button>Asignar Materias</button></a>
                    <?php
        };
        ?>

                
            </div>
        </div>



    </main>


    <footer>
        <div class=" bg-slate-600">
            Footer
        </div>
    </footer>
</body>

</html>
