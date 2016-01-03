<?php

function getView($View,$Category,$Data) {
    switch ($View) {
        case 'zones':
            echo '<div class="page-header"><h3>Zonen';
            
            switch ($Category) {
                case 'addzone':
                    echo '<small>/ Zone erstellen</small></h3></div>';
                    getNav($View, $Category);
                    break;
                case 'delzone':
                    echo '<small>/ Zone loeschen</small></h3></div>';
                    getNav($View, $Category);
                    break;
                case 'editzone':
                    echo '<small>/ Zone bearbeiten</small></h3></div>';
                    getNav($View, $Category);
                    break;
                case 'addzonetempl':
                    echo '<small>/ Zonen Template bearbeiten</small></h3></div>';
                    getNav($View, $Category);
                    break;
                case 'delzonetempl':
                    echo '<small>/ Zonen Template bearbeiten</small></h3></div>';
                    getNav($View, $Category);
                    break;
                case 'editzonetempl':
                    echo '<small>/ Zonen Template bearbeiten</small></h3></div>';
                    getNav($View, $Category);
                    break;
                default:
                    echo '<small>/ Uebersicht</small></h3></div>';
                    getNav($View, $Category);
                    
                    break;
            }
            
            break;
        case 'records':
            echo '<div class="page-header"><h3>Eintr&auml;ge</h3></div>';
            
            switch ($Category) {
                case 'addrecord':
                    echo '<small>/ Eintrag erstellen</small></h3></div>';
                    getNav($View, $Category);
                    break;
                case 'delrecord':
                    echo '<small>/ Eintrag loeschen</small></h3></div>';
                    getNav($View, $Category);
                    break;
                case 'editrecord':
                    echo '<small>/ Eintrag bearbeiten</small></h3></div>';
                    getNav($View, $Category);
                    break;
                default:
                    echo '</h3></div>';
                    getNav($View, $Category);
                    break;
            }
            break;
        case 'ns':
            echo '<div class="page-header"><h3>Nameserver</h3></div>';
            
            switch ($Category) {
                case 'addns':
                    echo '<small>/ Nameserver hinzufuegen</small></h3></div>';
                    getNav($View, $Category);
                    break;
                case 'delns':
                    echo '<small>/ Nameserver loeschen</small></h3></div>';
                    getNav($View, $Category);
                    break;
                case 'editns':
                    echo '<small>/ Nameserver bearbeiten</small></h3></div>';
                    getNav($View, $Category);
                    break;
                default:
                    echo '</h3></div>';
                    getNav($View, $Category);
                    break;
            }
            
            break;
        case 'users':
            echo '<div class="page-header"><h3>Benutzer</h3></div>';
            
            switch ($Category) {
                case 'adduser':
                    echo '<small>/ Benutzer erstellen</small></h3></div>';
                    getNav($View, $Category);
                    break;
                case 'deluser':
                    echo '<small>/ Benutzer loeschen</small></h3></div>';
                    getNav($View, $Category);
                    break;
                case 'edituser':
                    echo '<small>/ Benutzer bearbeiten</small></h3></div>';
                    getNav($View, $Category);
                    break;
                default:
                    echo '</h3></div>';
                    getNav($View, $Category);
                    break;
            }
            
            break;
        default:
            echo '<div class="page-header"><h3>Hallo User</h3></div>';
            break;
    }
    
}

function getNavActive($active, $link) {
    if ($active == $link) { return 'class="active"'; }
}

function getNav($type, $active) {
    
        switch ($type) {
        case 'zones':
            
            echo '
                    <ul class="nav nav-pills nav-justified">
                    <li role="presentation" '. getNavActive($active, "") .'><a href="?view='. $type .'">Uebersicht</a></li>
                    <li role="presentation" '. getNavActive($active, "addzone") .'><a href="?view='. $type .'&category=addzone">Zone hinzufuegen</a></li>
                    <li role="presentation" '. getNavActive($active, "addzonetempl") .'><a href="?view='. $type .'&category=addzonetempl">Template hinzufuegen</a></li>
                    </ul>
            ';
            break;
        case 'records':
            echo '
                    <ul class=" nav nav-pills nav-justified">
                    <li role="presentation" '. getNavActive($active) .'><a href="#">Uebersicht</a></li>
                    <li role="presentation" '. getNavActive($active) .'><a href="#">Eintrag hinzufuegen</a></li>
                    </ul>
            ';
            break;
        case 'ns':
            echo '
                    <ul class=" nav nav-pills nav-justified">
                    <li role="presentation" '. getNavActive($active) .'><a href="#">Uebersicht</a></li>
                    <li role="presentation" '. getNavActive($active) .'><a href="#">Namenserver hinzufuegen</a></li>
                    </ul>
            ';
            break;
        case 'users':
            echo '
                    <ul class=" nav nav-pills nav-justified">
                    <li role="presentation" '. getNavActive($active) .'><a href="#">Uebersicht</a></li>
                    <li role="presentation" '. getNavActive($active) .'><a href="#">Benutzer hinzufuegen</a></li>
                    </ul>
            ';
            break;
    }
}
