<?php
$producto1=20;
$producto2=20;
$producto3=20;
$producto4=40;
$producto5=100;
$subtotal=$producto1+$producto2+$producto3+$producto4+$producto5;
$iva=$subtotal*.16;
$total=$iva+$subtotal;
?>
<html>
<body>
<table border=1>
	<tr>
        <td>Productos</td>
        <td>$</td>
    </tr>
    <tr>
        <td>Producto 1</td>
        <td><?php echo $producto1;?></td>
    </tr>
    <tr>
        <td>Producto 2</td>
        <td><?php echo $producto2;?></td>
    </tr>
    <tr>
        <td>Producto 3</td>
        <td><?php echo $producto3;?></td>
    </tr>
    <tr>
        <td>Producto 4</td>
        <td><?php echo $producto4;?></td>
    </tr>
    <tr>
        <td>Producto 5</td>
        <td><?php echo $producto5;?></td>
    </tr>
    <tr>
        <td>Subtotal </td>
        <td><?php echo $subtotal;?></td>
    </tr>
    <tr>
        <td>IVA </td>
        <td><?php echo $iva;?></td>
    </tr>
    <tr>
        <td>Total </td>
        <td><?php echo $total;?></td>

    </tr>
</table>
</body>
</html>