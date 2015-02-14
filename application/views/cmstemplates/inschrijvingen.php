        <div class="container">
            <?php 
                if(!isset($_POST["adressen"])){
                    $_POST["adressen"] = null;
                } 
            ?>
            <div class="row">
                <h2>Inschrijvingen</h2>
            </div>
            <div class="row">
                <div class="form col-md-6 input-group">
                    <form class="form-group" action="submitsubscription" method="post">
                        <div class="col-md-6">
                            <input type="email" class="form-control" rows="30" name="subscription" placeholder="Enter email">
                        </div>
                        <input class="btn btn-primary" type="submit" value="Submit">
                    </form>
                    <table class="table-hover table-condensed table">
                        <thead>
                            <tr>
                                <th>Email</th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <script type="text/javascript">
                            function deleteRow(o){
                                var deleteUser = confirm("Weet u zeker dat u "+o.email+" uit de subscription verwijderen?");
                                if(deleteUser){
                                    $.ajax({
                                        url: '../cms/deletsubscription',
                                        type: 'POST',
                                        data: {id: o.id},
                                        success: function(e) {
                                            var element = $.find("[data-target='#"+ o.id +"']");
                                            $(element[0]).remove();
                                        },
                                        error: function(e) {

                                        }
                                    });
                                }
                            }

                            function editRow(i){
                                var email = $.find("[id='value"+i+"']");
                                var editUser = confirm("Weet u zeker dat u de subscription wilt aanpassen?");
                                if(editUser){
                                    $.ajax({
                                        url: '../cms/editsubscription',
                                        type: 'POST',
                                        data: {id: i, email: email[0].value},
                                        success: function(e) {
                                            hideBtn(i);
                                        },
                                        error: function(e) {

                                        }                                    
                                    });
                                }
                            }

                            function cancelEdit(o){
                                hideBtn(o.id);
                                var element = $.find("[data-target='#"+ o.id +"']");
                                var input = $(element[0]).find("[id='value"+o.id+"']");
                                input[0].value = o.email;
                            }
                            function hideBtn(id) {
                                var element = $.find("[data-target='#"+ id +"']");
                                var edit = $(element[0]).find("[id='edit"+ id +"']");
                                var cancel = $(element[0]).find("[id='editcancel"+ id +"']");
                                edit[0].style["display"] = "none";
                                cancel[0].style["display"] = "none";                                
                            }
                            function showBtn(id) {
                                var element = $.find("[data-target='#"+ id +"']");
                                var edit = $(element[0]).find("[id='edit"+ id +"']");
                                var cancel = $(element[0]).find("[id='editcancel"+ id +"']");
                                edit[0].style["display"] = "inline-block";
                                cancel[0].style["display"] = "inline-block";
                            }
                            </script>
                            <?php 
                                foreach ($adressen->result_array() as $row) {
                                    
                                    echo "<tr data-target='#" . $row['id'] . "'>";
                                    echo "<td><input type='text' id='value".$row['id']."' oninput='showBtn(".$row['id'].")' class='form-control' value='".$row['email']."'/></td>";
                                    
                                    echo '<td><button class="btn btn-primary btn-sm" style="display: none; margin-right: 5px;" id="edit'.$row['id'].'" onClick="editRow('.$row['id'].')">';
                                    echo '<span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span></button>';
                                    
                                    echo '<button class="btn btn-warning" style="display: none; margin-right: 5px;" id="editcancel'.$row['id'].'" onClick="cancelEdit({id:\''.$row['id'].'\', email:\''.$row['email'].'\'})">';
                                    echo '<span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></button>';

                                    echo '<button onClick="deleteRow({ id:\''.$row['id'].'\',email:\''.$row['email'].'\'})" class="btn btn-danger btn-sm" >';
                                    echo '<span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></td></tr>';
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- <div class="col-md-12 input-group">
                    <form class="form-group" action="submitsubscriptions" method="post">
                        <textarea class="col-md-12" rows="30" style="margin-top: 10px;" name="subscriptions">
                            
                        </textarea>
                    </form>
                </div> -->
            </div>
        </div>
    </body>
</html>