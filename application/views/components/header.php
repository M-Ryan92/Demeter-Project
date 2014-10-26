<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- load jquery before html since some components depends on this -->
        
        <!-- Meta tags die gevuld moeten worden.
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
        <title>Title</title>
        <link rel="canonical" href="http://www.demetervoeding.nl">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="keywords" content="test, test2, test3" >
        <meta name="description" content="short description of the website">-->
        <link href="<?php echo $bootstrapCSS; ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo $baseCSS; ?>" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="<?php echo $js . "dropdown.js"; ?>"></script>
        <script type="text/javascript" src="<?php echo $jquery; ?>"></script>
    </head>
    <body id='footermargin'>
        <div class="header container">
            <div class="navbar navbar-default" role="navigation">
                <div class="row">
                    <div class="container contentview" >
                        <img class="navbar-brand" src="<?php echo $img . 'Demeter_text.png'; ?>" alt="">
                        <button type="button" class="navbar-toggle navbar-right"  data-toggle="collapse" data-target=".dropdownmenu">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-collapse collapse pull-right">
                            <ul class="nav navbar-nav">
                                <?php

                                function displayMenuList($l, $s) {
                                    $i = 0;
                                    $ref = "";

                                    $renderedList;

                                    $hasSubItems = false;
                                    $subList;

                                    foreach ($l as $lr) {
                                        $index = 0;
                                        foreach ($s as $sr) {
                                            //checks if list item has a subitem
                                            if ($sr->parentMenu == $lr->menuId) {
                                                $hasSubItems = true;
                                                $subList[$index] = $sr;
                                                $index++;
                                            }
                                        }
                                        //has no subitems add it as normal item
                                        if ($hasSubItems == false) {
                                            if ($lr->pageRef != null) {
                                                $ref = "href=\"" . $lr->pageUrl . "\"";
                                            } else {
                                                $ref = null;
                                            }
                                            if (!isset($renderedList[$lr->menuId])) {
                                                $renderedList[$lr->menuId] = "<li><a " . $ref . ">" . $lr->menuName . "</a></li>";
                                                echo $renderedList[$lr->menuId];
                                            }
                                        } else {
                                            $hasSubItems = false;
                                            $renderedList[$lr->menuId] = "<li class=\"dropdown\">";
                                            $renderedList[$lr->menuId] .= "<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" id=\"" . $lr->menuName . "dd\">" . $lr->menuName . " <span class=\"caret\"></span></a>";
                                            $renderedList[$lr->menuId] .= "<ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"" . $lr->menuName . "dd\">";
                                            for ($i = 0; $i < $index; $i++) {
                                                if ($subList[$i]->pageRef != null) {
                                                    $ref = "href=\"" . $subList[$i]->pageUrl . "\"";
                                                } else {
                                                    $ref = null;
                                                }
                                                if ($subList[$i]->parentMenu == $subList[$i]->parentMenu) {
                                                    $renderedList[$lr->menuId] .= "<li><a " . $ref . ">" . $subList[$i]->menuName . "</a></li>";
                                                    if ($i != $index - 1) {
                                                        $renderedList[$lr->menuId] .= "<li class=\"divider\"></li>";
                                                    }
                                                }
                                            }
                                            $renderedList[$lr->menuId] .= "</ul>";
                                            $renderedList[$lr->menuId] .= "</li>";
                                            echo $renderedList[$lr->menuId];
                                        }
                                    }
                                }

                                $list;
                                $sub;
                                $i = 0;
                                foreach ($results as $row) {
                                    if ($row->parentMenu == null) {
                                        $list[$row->menuId] = $row;
                                    } else {
                                        if ($row->parentMenu > 0) {
                                            $sub[$i] = $row;
                                            $i++;
                                        }
                                    }
                                }
                                displayMenuList($list, $sub);
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dropdownmenu collapse">
                <ul class="nav">
                    <?php
                    displaySecondMenuList($list, $sub);

                    function displaySecondMenuList($l, $s) {
                        $i = 0;
                        $ref = "";

                        $renderedList;

                        $hasSubItems = false;
                        $subList;

                        foreach ($l as $lr) {
                            $index = 0;
                            foreach ($s as $sr) {
                                //checks if list item has a subitem
                                if ($sr->parentMenu == $lr->menuId) {
                                    $hasSubItems = true;
                                    $subList[$index] = $sr;
                                    $index++;
                                }
                            }
                            //has no subitems add it as normal item
                            if ($hasSubItems == false) {
                                if ($lr->pageRef != null) {
                                    $ref = "href=\"" . $lr->pageUrl . "\"";
                                } else {
                                    $ref = null;
                                }
                                if (!isset($renderedList[$lr->menuId])) {
                                    $renderedList[$lr->menuId] = "<li><a " . $ref . ">" . $lr->menuName . "</a></li>";
                                    echo $renderedList[$lr->menuId];
                                }
                            } else {
                                $hasSubItems = false;
                                $renderedList[$lr->menuId] = "<li>";
                                $renderedList[$lr->menuId] .= "<a data-toggle=\"collapse\" data-target=\"#" . $lr->menuName . "\" onclick=\"toggleItem(event)\" id=\"less\"> " . $lr->menuName . " <span class=\"caret\"></span></a>";
                                $renderedList[$lr->menuId] .= "<ul class=\"nav collapse\" id=\"" . $lr->menuName . "\">";
                                for ($i = 0; $i < $index; $i++) {
                                    if ($subList[$i]->pageRef != null) {
                                        $ref = "href=\"" . $subList[$i]->pageUrl . "\"";
                                    } else {
                                        $ref = null;
                                    }
                                    if ($subList[$i]->parentMenu == $subList[$i]->parentMenu) {
                                        $renderedList[$lr->menuId] .= "<li><a " . $ref . ">" . $subList[$i]->menuName . "</a></li>";
                                    }
                                }
                                $renderedList[$lr->menuId] .= "</ul>";
                                $renderedList[$lr->menuId] .= "</li>";
                                echo $renderedList[$lr->menuId];
                            }
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="container contentview">
