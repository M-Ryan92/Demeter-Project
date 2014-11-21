
<div class="container">
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
                    <th>#</th>
                    <th>Titel</th>
                    <th>URL</th>
                    <th>Aangemaakt op</th>
                    <th> </th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($pages->result_array() as $row) {
                    echo '<tr class="clickableRow" href="createpage?id=' . $row['pageId'] . '">';
                    echo '<td>' . $row['pageId'] . '</td>';
                    echo '<td>' . $row['pageTitle'] . '</td>';
                    echo '<td>/' . $row['pageUrl'] . '</td>';
                    echo '<td>' . $row['timestamp'] . '</td>';
                    echo '<td><button type="button" class="btn btn-danger pull-right">'
                    . '<span class="glyphicon glyphicon-trash"></span>'
                    . '</button><button type="button" class="btn btn-default pull-right">'
                    . '<span class="glyphicon glyphicon-wrench"></span>'
                    . '</button>'
                    . '</td>';
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
</script>
</body>
</html>