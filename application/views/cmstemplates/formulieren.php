<div class="container">
    <div class="row">
        <h2>Ingevulde formulieren</h2>
    </div>
    <div class="row">
        <table class="table-hover table-condensed table">
            <thead>
                <tr>
                    <th>Naam</th>
                    <th>Email</th>
                    <th>Datum</th>
                    <th> </th>
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($formulieren->result_array() as $row) {
                    echo "<tr class='clickableRow' data-toggle='collapse' data-target='#" . $row['id'] . "'>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td><a href='mailto:" . $row['email'] . "?subject=" . $row['subject'] . "&BODY=" . htmlentities(rawurlencode("\n\nBericht: \n" . $row['message'])) . "'>" . $row['email'] . "</a></td>";
                    echo "<td>" . $row['updatedate'] . "</td>";
                    echo "<td><button type='button' class='btn btn-info' >"
                    . "<span class='glyphicon glyphicon-align-justify'></span>"
                    . "</button></td>";
                    echo "</tr>";
                    echo "<tr>
                          <td style='padding:0;border:0;' colspan='4'>"
                    . "<div id='" . $row['id'] . "' class='collapse' style='padding:5px;'>"
                    . "<h4>" . $row['pageurl'] . " | " . $row['subject'] . "</h4>"
                    . "<p>" . str_replace("\n", "<br>", htmlspecialchars($row['message'])) . "</p>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>