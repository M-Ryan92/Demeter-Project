<body id='footermargin'>
    <div class="header container">
        <div class="navbar navbar-default" role="navigation">
            <div class="row">
                <div class="container contentview" >
                    <img class="navbar-brand" src="<?php echo 'assets/img/Demeter_text.png'; ?>" alt="">
                    <button type="button" class="navbar-toggle navbar-right"  data-toggle="collapse" data-target=".dropdownmenu">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-collapse collapse pull-right">
                        <ul class="nav navbar-nav">
                            <?php
                            Class Menu {
                                function checkMatches($mId, $m){
                                    $list = $m;
                                    while(sizeof($list)>0){
                                        $menuItem = array_pop($list);
                                        if($mId == $menuItem['submenu']){
                                            return true;
                                        }
                                    }
                                    return false;
                                }

                                function getSubMenuItems($mItem, $menu) {                               
                                    $list = $menu;
                                    $devider = true;
                                    $submenu = "";
                                    while(sizeof($list)>0){
                                        $menuItem = array_pop($list);
                                        if($menuItem['submenu'] == $mItem){
                                            $submenu .= '<li><a href="'.$menuItem['pageurl'].'">'.$menuItem['label'].'</a></li>';
                                            if($this->checkMatches($menuItem['submenu'],$list)){
                                                $submenu .= '<li class="divider"></li>';
                                            }
                                        }

                                    }
                                    return $submenu;
                                }

                                function displayMenuList($m, $smallstyle) {
                                    $tempMenu = "";
                                    $list = $m;
                                    while(sizeof($list)>0){
                                        $menuItem = array_pop($list);
                                        if($this->checkMatches($menuItem['id'],$list) == false && $menuItem['submenu'] == null){
                                            $tempMenu .= '<li><a href="'. $menuItem['pageurl'].'">'. $menuItem['label'] . '</a></li>';
                                        }else if($menuItem['submenu'] == null){
                                            $tempMenu .= '<li class="';
                                            if ($smallstyle) {
                                                $tempMenu .= 'nav collapse';
                                            }
                                            $tempMenu .= '"><a class="dropdown-toggle" data-toggle="dropdown" id="'.$menuItem['label'].'">'.$menuItem['label'].'<span class="caret"></span></a>';
                                            $submenu = $this->getSubMenuItems($menuItem['id'],$m);
                                            $tempMenu .= '<ul class="';
                                            if ($smallstyle) {
                                                $tempMenu .= 'dropdown nav collapse';
                                            } else {
                                                $tempMenu .= 'dropdown-menu';
                                            }
                                            $tempMenu .='" role="menu" aria-labelledby="'.$menuItem['label'].'dd">'.$submenu.'</ul>';
                                            $tempMenu .= '</li>';    
                                        }
                                    }
                                    return $tempMenu;
                                }
                            }

                            $menuObj = new Menu();
                            echo $menuObj->displayMenuList($menu, false);
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropdownmenu collapse">
            <ul class="nav">
                <?php
                echo $menuObj->displayMenuList($menu, true);
                ?>
            </ul>
        </div>
    </div>
    <div class="container contentview">
