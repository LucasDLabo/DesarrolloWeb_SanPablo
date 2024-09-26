<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master Detail</title>
</head>
<body>
    <form action="" style="display: flex, flex-direction: column">
        <table>
            <tr>
                <th><input type="text" placeholder="Código" name="" id="itemCode"></th>
                <th><input type="text" placeholder="Nombre" name="" id="itemName"></th>
                <th><input type="text" placeholder="Precio" name="" id="itemPrice"></th>
                <th><input type="text" placeholder="Cantidad" name="" id="itemQty"></th>
                <th>Acción</th>
            </tr>

            <tbody id="itemList">
                <tr>
                    <td>1</td>
                    <td>Item</td>
                    <td>100</td>
                    <td>2</td>
                    <td><button>Eliminar❌</button></td>
                </tr>
            </tbody>
            
        </table>
        <input type="submit" name="submit" value="Guardar">
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>

    $('#itemCode').keypress(function(e){
        if(e.keyCode == 13){
            e.preventDefault();
            $('#itemName').focus();
        }
    })
    $('#itemName').keypress(function(e){
        if(e.keyCode == 13){
            e.preventDefault();
            $('#itemPrice').focus();
        }
    })
    $('#itemPrice').keypress(function(e){
        if(e.keyCode == 13){
            e.preventDefault();
            $('#itemQty').focus();
        }
    })

    $('#itemQty').on('keypress', function(e){
        if(e.keyCode == 13){
            e.preventDefault();
            var itemCode = $('#itemCode').val();
            var itemName = $('#itemName').val();
            var itemPrice = $('#itemPrice').val();
            var itemQty = $('#itemQty').val();

            // console.log(` code: ${itemCode}, name: ${itemName}, precio: ${itemPrice}, cantidad: ${itemQty} `);
            // console.log("Guardado");

            clear();
        }
    })

    function clear(){
        $('#itemCode').val('');
        $('#itemName').val('');
        $('#itemPrice').val('');
        $('#itemQty').val('');
        $('#itemCode').focus('');
    }

    </script>
</body>
</html>