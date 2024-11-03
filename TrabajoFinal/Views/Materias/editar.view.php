<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Materia</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="editarValidaciones.js"></script>

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
        <div class="grid grid-cols-6 items-start justify-items-center py-8">

            <a href="index.php"
                class="w-3/5  bg-blue-500 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded text-center">
                Volver atrás
            </a>

            <div class="w-full col-start-2 col-end-6">
                <div class= "mx-20 rounded-lg border-2 border-solid border-indigo-500 bg-white px-20 py-8 shadow">
                    <h2 class="text-center text-2xl font-bold uppercase text-gray-600">
                        Ingrese los datos de la Materia 📚
                    </h2>
                    <hr class="border-3 my-5 border-solid border-indigo-500">

                    <form action="" method="post" id="editMateria">

                        <div class="mb-3">
                            <label for="nombreMateria" class="mb-2 block font-bold text-gray-600">Nombre</label>
                            <input type="text" id="nombreEditMateria" name="nombreMateria"
                                value="<?=$materia->nombre?>"
                                class="border border-gray-300 shadow p-3 w-full rounded">
                            <p class="mt-2 h-5 text-sm text-indigo-700"></p>
                        </div>

                        <div class="flex justify-end">
                            <button
                            type="button"
                            onclick="clean()"
                                class="mx-8 w-1/5 rounded-lg bg-gray-200 p-4 font-bold text-black hover:bg-gray-300">Reiniciar</button>

                            <button class="w-1/4 rounded-lg bg-indigo-500 p-4 font-bold text-white hover:bg-indigo-700"
                                type="submit" id="submitEditMateria" name="submitEditMateria">Crear</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </main>

    <footer>
        <div class=" bg-slate-600">
            Footer
        </div>
    </footer>
    <script>
        const formulario = document.getElementById('editMateria');
        function clean() {
            formulario.reset();
            cleanErrores();
        }
    </script>
</body>

</html>
