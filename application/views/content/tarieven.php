<div class="tarieven">
    <div class="col-md-12 titlePlaceholder">
        <h1 class="title"><?= $page->title ?></h1>
    </div>
    <div class="col-sm-offset-1 col-md-offset-2 col-xs-12 col-sm-10 col-md-8 clear-padding">

        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading text-center">Natuurvoedingsconsulten</div>
            <div class="panel-body">
                <h4>Kennismaking</h4>
                Voor een eerste kennismaking kun je mij altijd bellen of mailen. Wil je hierna graag verder dan mail ik je een vragenlijst en maken we een afspraak voor het intakegesprek.
                <br><br>
                de onderstaande prijzen zijn inclusief  BTW.
            </div>

            <div id="no-more-tables" class="noMoreTables">
                <!-- Table -->
                <table class="table">
                    <thead>
                        <tr>
                            <th>service</th>
                            <th>duur</th>
                            <th>prijs</th>
                            <th class="fixedwidth"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($fields->natservice as $key => $value): ?>
                            <tr>
                                <td data-title="service"><?=$value?></td>
                                <td data-title="duur"><?= $fields->natduration[$key] ?>ca 60 minuten</td>
                                <td data-title="prijs"><?= $fields->natprice[$key] ?></td>
                                <td>
                                    <div onclick="toggle(event)" data-toggle="collapse" data-target="#toggle<?=$key?>" class="accordion-toggle collapseBtn" style="height: 20px; width: 30px; padding-top: 8px;">
                                        <div class='btnLbl' id='more' ></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>

                                <td class="hiddenRow" colspan="4">
                                    <div class="accordian-body collapse contextPlaceholder" id="toggle<?=$key?>">
                                        <div class="accordion-inner">
                                            <?= $fields->natdetail[$key] ?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>  
                    </tbody>
                </table>
            </div>
        </div>

        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading text-center">Massage therapieën en workshops</div>
            <div id="no-more-tables" class="noMoreTables">
                <table class="table">
                    <thead>
                        <tr>
                            <th>service</th>
                            <th>duur</th>
                            <th>prijs</th>
                            <th class="fixedwidth"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($fields->actservice as $key => $value): ?>
                            <tr>
                                <td data-title="service"><?=$value?></td>
                                <td data-title="duur"><?=$fields->actduration[$key]?></td>
                                <td data-title="prijs"><?=$fields->actprice[$key]?></td>
                                <td class="noBtn"></td>
                            </tr>
                        <?php endforeach; ?>  
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>