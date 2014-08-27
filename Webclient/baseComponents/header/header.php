<script type="text/javascript" src="<?php echo $js . "dropdown.js";?>"></script>
<script type="text/javascript" src="<?php echo $jQuery; ?>"></script>
<div class="header container">
    <div class="navbar navbar-default" role="navigation">
        <div class="row">
            <div class="container contentview" >
            <img class="navbar-brand" src="<?php echo $img . 'Demeter_text.png'; ?>" alt="">
            <!--<div class="header-title">Demeter Voeding en Welzijn</div> -->
            <button type="button" class="navbar-toggle navbar-right"  data-toggle="collapse" data-target=".dropdownmenu">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="navbar-collapse collapse pull-right">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="Voedingdd">Voeding <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="Voedingdd">
                            <li><a href="natuurvoeding.php">Natuurvoeding</a></li>
                            <li class="divider"></li>
                            <li><a href="sportvoeding.php">Sportvoeding</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="Therapieendd">Therapieën <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="Therapieendd">
                            <li><a href="holistic-pulsing.php">Holistic Pulising</a></li>
                            <li class="divider"></li>
                            <li><a href="gezichtsmassage.php">Gezichtsmassage</a></li>
                            <li class="divider"></li>
                            <li><a href="oorkaarstherapie.php">Oorkaars-therapie</a></li>
                            <li class="divider"></li>
                            <li><a href="ontzuren.php">Ontzuren</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="Activiteitendd">Activiteiten <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="Activiteitendd">
                            <li><a href="Outdoor-training.php">Outdoor-training</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            </div>
        </div>
    </div>
    <!-- <div class="header-label"> -->
    <div class="dropdownmenu collapse">
        <ul class="nav">
            <li><a href="basicskin.php">Home</a></li>
            <li><a href="#" data-toggle="collapse" data-target="#voeding" onclick="toggleItem(event)" id="less"> Voeding <span class="caret"></span></a>
                <ul class="nav collapse" id="voeding">
                    <li><a href="natuurvoeding.php">Natuurvoeding</a></li>
                    <li><a href="sportvoeding.php">Sportvoeding</a></li>
                </ul>
            </li>
            <li><a href="#" data-toggle="collapse" data-target="#therapie" onclick="toggleItem(event)" id="less"> Therapieën <span class="caret"></span></a>
                    <ul class="nav collapse" id="therapie">
                        <li><a href="holistic-pulsing.php">Holistic Pulsing</a></li>
                        <li><a href="gezichtsmassage.php">Gezichtsmassage</a></li>
                        <li><a href="oorkaarstherapie.php">Oorkaars-Therapie</a></li>
                        <li><a href="ontzuren.php">Ontzuren</a></li>
                    </ul>
            </li>
            <li><a href="#" data-toggle="collapse" data-target="#Activiteiten" onclick="toggleItem(event)" id="less"> Activiteiten <span class="caret"></span></a>
                <ul class="nav collapse" id="Activiteiten">
                    <li><a href="Outdoor-training.php">Outdoor-Training</a></li>
                </ul>
            </li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </div>
</div>
