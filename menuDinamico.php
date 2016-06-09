<?php

/*
 * Jonnyalexbh
 * @Descripcion: menú dinámico
 */

//error_reporting(E_ALL);
//ini_set('display_errors', 'On');

class Menu {

    public static function datArray() {
        $menu = Array
            (
            "0" => Array
                (
                "id" => 1,
                "idPadre" => 0,
                "nombre" => "Inicio",
                "icono" => "<i class='fa fa-bar-chart-o fa-fw'></i>",
                "iconoNew" => "<span class='label label-warning'>New</span>",
                "iconoAux" => "<span class='fa arrow'></span>",
                "link" => ""
            ),
            "1" => Array
                (
                "id" => 2,
                "idPadre" => 0,
                "nombre" => " Reportes generales",
                "icono" => "<i class='fa fa-bar-chart-o fa-fw'></i>",
                "iconoNew" => "",
                "iconoAux" => "",
                "link" => "generales"
            ),
            "2" => Array
                (
                "id" => 3,
                "idPadre" => 1,
                "nombre" => "Hijo del uno",
                "icono" => "",
                "iconoNew" => "",
                "iconoAux" => "",
                "link" => "hijo1"
            ),
            "3" => Array
                (
                "id" => 4,
                "idPadre" => 1,
                "nombre" => "Hijo dos del uno",
                "icono" => "",
                "iconoNew" => "<span class='label label-warning'>New</span>",
                "iconoAux" => "",
                "link" => "hijo2"
            )
        );

        return $menu;
    }

    static public function getMenu() {
        return 0;
    }

    static public function Arbol($menu, $padre) {
        $datArbol = array();
        foreach ($menu as $item) {
            if ($item['idPadre'] == $padre) {
                $datArbol[$item['id']] = $item;
                $datArbol[$item['id']]['submenu'] = Menu::Arbol($menu, $item['id']);
            }
        }
        return $datArbol;
    }

    static function echoMenuSt($menu_array) {
        //go through each top level menu item
        foreach ($menu_array as $menu) {
            echo "<li><a href='{$menu['link']}'>{$menu['nombre']}</a>";
            //see if this menu has children
            if (array_key_exists('submenu', $menu)) {
                echo '<ul>';
                //echo the child menu
                Menu::echoMenuSt($menu['submenu']);

                echo '</ul>';
            }
            echo '</li>';
        }
    }

}

$dato = Menu::Arbol(Menu::datArray(), 0);

//echo '<ul>';
//Menu::echoMenuSt($dato);
//echo '</ul>';

echo "<pre>";
echo print_r($dato);
echo "</pre>";
