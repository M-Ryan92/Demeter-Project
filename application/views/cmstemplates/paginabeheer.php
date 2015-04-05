<div class="container">
    <?php
    if (isset($message)) {
        if ($message != FALSE) {
            echo $message;
        }
    }
    ?>
    <div class="row">
        <h2 style="display: inline-block">Pagina's beheren</h2>
        <a href="createpage" class="btn btn-success pull-right" style="margin-top: 20px;">
            <span class="glyphicon glyphicon-plus"></span>
            Nieuwe pagina
        </a>
    </div>
    <div class="row">
        <table class="table-hover table-condensed table">
            <thead>
                <tr>
                    <th>Titel</th>
                    <th>URL</th>
                    <th>Aangemaakt op</th>
                    <th> </th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($pages->result_array() as $row) {
                    echo '<tr href="createpage?id=' . $row['id'] . '">';
                    echo '<td>' . $row['pagetitle'] . '</td>';
                    echo '<td><a href="../'.$row['pageurl'].'">' . $row['pageurl'] . '</a></td>';
                    echo '<td>' . $row['updatedate'] . '</td>';
                    echo '<td><div class="btn-group" role="group" aria-label="...">'
                    . '<a href="editpage?id=' . $row['id'] . '" type="button" class="btn btn-default">'
                    . '<span class="glyphicon glyphicon-wrench"></span>'
                    . '</a>'
                    . '<button type="button" class="btn btn-danger" onclick="removePage(\'removepage?id=' . $row['id'] . '\')">'
                    . '<span class="glyphicon glyphicon-trash"></span>'
                    . '</button>'
                    . '</div></td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<script type="text/javascript">
    $(".clickableRow").click(function () {
        window.document.location = $(this).attr("href");
    });
    function removePage(link) {
        var removal = confirm("Weet u zeker dat u deze pagina wilt verwijderen?");
        if (removal) {
            window.location.href = link;
        }
    }
</script>
</body>
</html>