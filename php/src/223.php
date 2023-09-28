<?php
$nombre = $_GET["nombre"];

if (isset($nombre)){
    ?>
<table style="border: 2px #333333">
    <thead>
    <tr>
        <th>a</th>
        <th>*</th>
        <th>b</th>
        <th>=</th>
        <th>a*b</th>
    </tr>
    </thead>
    <tbody>
    <?php
    for ($i = 1; $i <=10; $i++) {
        echo "<tr>";
        echo " <td>".$nombre."</td> ";
        echo " <td>*</td> ";
        echo " <td>".$i."</td> ";
        echo " <td>=</td> ";
        echo " <td>".$nombre * $i."</td> ";
        echo "</tr>";
    }
    ?>
    </tbody>
</table>
<?php
}else{
    echo "Posa el nombre pel QueryString";
}
?>



















