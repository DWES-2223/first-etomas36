<table>
    <tr>   <!-- CABECERA DE LA TALBA -->
        <th>Prova</th>
        <th>Marca</th>
        <th>Atleta</th>
        <th>Natalici</th>
        <th>Club</th>
        <th>Data</th>
        <th>LLoc</th>
    </tr>
    <?php
    foreach ($records as $prova => $record) {?>
        <tr> <!-- CONTINGUT DE LA TALBA -->
            <td><?=$prova ?></td>
            <?php foreach ($record as $item) {?>
                <td><?=$item?></td>
                <?php
            }
            ?>
        </tr>
        <?php
    }
    ?>
</table>
