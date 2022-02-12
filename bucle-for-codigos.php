<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bucle FOR - Codigos en tabla</title>
    <style>
        table{
            width:600px;
            border-collapse: collapse;
        }
        th{
            background-color:lightseagreen;
            color:#ffffff;
            font-family: sans-serif;
            font-size: 14px;
            border: 1px solid;
            border-color: black;
        }
        td{
            text-align:center;
            border:1px solid;
        }
        .codigo{
            background-color: lightgrey;
            width:30px;
        }
    </style>
</head>
<body>
<table>
    <tr><th>Código</th><th>Valor</th><th>Código</th><th>Valor</th><th>Código</th>
        <th>Valor</th><th>Código</th><th>Valor</th><th>Código</th><th>Valor</th>
    </tr>
<?php
    for($i=1,$col=1;$i<=50000;$i++,$col++){
        if($col==6) $col=1;
        if($col==1) echo "<tr>";
        echo "<td class='codigo'>$i</td><td>"."&#".$i."</td>";
        if($col==5) echo "</tr>";
    }
?>
</table>
</body>
</html>