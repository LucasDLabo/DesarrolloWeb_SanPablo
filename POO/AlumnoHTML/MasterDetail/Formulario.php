<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master Detail</title>
</head>
<body>
    <?php

    if(isset($_POST['submit'])){

        $detalles = $_POST["item"];
        
        $items = [];
        
        for ($i=0; $i < count($detalles['code']); $i++) {

            array_push($items, array(
                'code' => $detalles['code'][$i],
                'price' => $detalles['price'][$i],
                'qty' => $detalles['qty'][$i]
            ));
        }

        foreach ($items as $item) {
            echo "Código: ".$item['code']."<br>";
            echo "Precio: ".$item['price']."<br>";
            echo "Cantidad: ".$item['qty']."<br>";
            echo "<hr>";
        }
    }

    
    ?>

    <form action="" method="POST">
        <table>
            <tr>
                <th><input type="text" placeholder="Código" name="" id="itemCode"></th>
                <th><input type="text" placeholder="Nombre" name="" id="itemName"></th>
                <th><input type="text" placeholder="Precio" name="" id="itemPrice"></th>
                <th><input type="text" placeholder="Cantidad" name="" id="itemQty"></th>
                <th>Acción</th>
            </tr>

            <tbody id="itemList">
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

            var items = "";
            items += "<tr>";
            items += "<td> <input name='item[code][]' type='text' value='" +itemCode+ "'> </td>";
            items += "<td>" +itemName+ "</td>";
            items += "<td> <input name='item[price][]' type='text' value='" +itemPrice+ "'> </td>";
            items += "<td> <input name='item[qty][]' type='text' value='" +itemQty+ "'> </td>";
            items += "<td> <button class='btn-delete'>Eliminar❌</button> </td>";
            items += "</tr>";
            
            $('#itemList').append(items);

            clear();
            $('#itemCode').focus();
        }
    })

    $("tbody#itemList").on('click', ".btn-delete", function(){
        $(this).closest('tr').remove();
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