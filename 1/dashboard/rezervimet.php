<?php include("header.php"); ?>

<style>
    .scrollable-column {
        max-width: 20vh; /* Set the maximum width for the column */
    }

</style>
<div class="dashboard-item" style="margin-top:100px;">
   
        <form id="rezervimi">
        <table class="table-dashboard">
            <tbody>
            <tr>
                <th class="thth">ID</th>
                <th class="thth">Emri i Klienit</th>
                <th class="thth">Numri i Telefonit</th>
                <th class="thth">Tavolina</th>
                <th class="thth">Data dhe Koha</th>
                <th class="thth">Inserted Time</th>
            </tr>
            <?php
        $result = merrRezervimin();
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['ID'] . "</td>";
            echo "<td>" . $row['Emri'] . "</td>";
            echo "<td>" . $row['Phone'] . "</td>";
            echo "<td>" . $row['Tavolina'] . "</td>";
            echo "<td>" . $row['Koha'] . "</td>";
            echo "<td>" . $row['InsertedTime'] . "</td>";
            echo "</tr>";
        }
        ?>
                </tbody>
        </table>
            </form>
    </div>

</body>
