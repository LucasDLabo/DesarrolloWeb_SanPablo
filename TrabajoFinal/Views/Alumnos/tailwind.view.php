<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Incluye DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.tailwindcss.css">

</head>
<body>

<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
    
    <h2 class="text-2xl font-bold mb-4">Example Datatable</h2>
    <table id="example" class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Position</th>
                <th class="px-4 py-2">Office</th>
                <th class="px-4 py-2">Age</th>
                <th class="px-4 py-2">Start date</th>
                <th class="px-4 py-2">Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border px-4 py-2">Tiger Nixon</td>
                <td class="border px-4 py-2">System Architect</td>
                <td class="border px-4 py-2">Edinburgh</td>
                <td class="border px-4 py-2">61</td>
                <td class="border px-4 py-2">2011/04/25</td>
                <td class="border px-4 py-2">$320,800</td>
            </tr>
            <tr>
                <td class="border px-4 py-2">Garrett Winters</td>
                <td class="border px-4 py-2">Accountant</td>
                <td class="border px-4 py-2">Tokyo</td>
                <td class="border px-4 py-2">63</td>
                <td class="border px-4 py-2">2011/07/25</td>
                <td class="border px-4 py-2">$170,750</td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            // Add any customization options here
        });
    });
</script>

</body>
</html>