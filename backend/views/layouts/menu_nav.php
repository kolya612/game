<?php
    $menu=\backend\models\Menu::getItems();
?>


<ul class="menu-nav">
    <? foreach ($menu as $row){ ?>
        <? if(!$row->module){ ?>
            <li class="menu-section">
                <h4 class="menu-text"><?=$row->label?></h4>
                <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
            </li>
        <? }else{ ?>
            <li class="menu-item <? if($row->isActive()) echo "menu-item-active menu-item-open"; ?> <? if($row->haveSubMenu()) echo "menu-item-submenu"; ?>" aria-haspopup="true" <? if($row->haveSubMenu()) echo "data-menu-toggle=\"hover\""; ?> >
                <a href="<? if (!$row->haveSubMenu()) echo \yii\helpers\Url::to($row->getUrl()); else echo "javascript:;";?>" class="menu-link <? if($row->haveSubMenu()) echo "menu-toggle"; ?>">
                    <span class="svg-icon menu-icon"><?=$row->svg?></span>
                    <span class="menu-text"><?=$row->label?></span>
                    <? if($row->haveSubMenu()){ ?>
                        <i class="menu-arrow"></i>
                    <? } ?>
                </a>
                <? if($row->haveSubMenu()){ ?>
                    <div class="menu-submenu <? if($row->isActive()) echo "menu-item-open"; ?>">
                        <i class="menu-arrow"></i>
                        <ul class="menu-subnav">
                            <? foreach ($row->getChilds() as $child){ ?>
                                <li class="menu-item <? if($child->isActive()) echo "menu-item-active"; ?>" aria-haspopup="true">
                                    <a href="<?=\yii\helpers\Url::to($child->getUrl())?>" class="menu-link">
                                        <i class="menu-bullet menu-bullet-dot"><span></span></i>
                                        <span class="menu-text"><?=$child->label?></span>
                                    </a>
                                </li>
                            <? } ?>
                        </ul>
                    </div>
                <? } ?>
            </li>
        <? } ?>
    <? } ?>



</ul>