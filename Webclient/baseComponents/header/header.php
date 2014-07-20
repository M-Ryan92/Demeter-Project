<div class="header container">
    <div class="navbar navbar-default" role="navigation">
        <div class="row textcenter">
            <div class="navbar-right navbar-collapse collapse">
                <div class="input-group">
                    <input type="text" placeholder="Search" class="form-control">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                    </span>
                </div>
            </div>
            <img class="navbar-brand" src="<?php echo $img . 'demeter.png'; ?>" alt="">
            <span class="header-title">Demeter Voeding en Welzijn</span>
            <button type="button" class="navbar-toggle navbar-right"  data-toggle="collapse" data-target=".dropdownmenu">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="basicskin.php">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Voeding <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Sportvoeding</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Natuurvoeding</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Therapieën <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Holistic Pulising</a></li>
                            <li class="divider"></li>
                            <li><a href="/Gezichtsmassage.php">Gezichtsmassage</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Oorkaars-therapie</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Ontzuren</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Activiteiten <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Outdoor-training</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- <div class="header-label"> -->
    <div class="dropdownmenu collapse">
        <ul class="nav">
            <li><a href="basicskin.php">Home</a></li>
            <li><a href="Category.php">Workshops overzicht</a></li>
            <li><a href="tarieven.php">tarieven</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </div>
    <!-- </div> -->
</div>