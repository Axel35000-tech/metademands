<?php

/**
 * -------------------------------------------------------------------------
 * Metademands plugin for GLPI
 * -------------------------------------------------------------------------
 *
 * LICENSE
 *
 * This file is part of Metademands.
 *
 * Metademands is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * Metademands is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Metademands. If not, see <http://www.gnu.org/licenses/>.
 * -------------------------------------------------------------------------
 * @copyright Copyright (C) 2013-2022 by Metademands plugin team.
 * @copyright 2015-2022 Teclib' and contributors.
 * @copyright 2003-2014 by the INDEPNET Development Team.
 * @licence   https://www.gnu.org/licenses/gpl-3.0.html
 * @license   GPLv2 https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://github.com/pluginsGLPI/Metademands
 * -------------------------------------------------------------------------
 */

include('../../../inc/includes.php');
header("Content-Type: text/html; charset=UTF-8");
Html::header_nocache();
Session::checkLoginUser();

if (isset($_POST['fields_id'])) {
    $fields_id = $_POST['fields_id'];
}
$field = new PluginMetademandsField();

if ($field->getFromDB($fields_id)) {

    $type = $field->fields['type'];

    switch ($type) {
        case 'yesno' :
            echo PluginMetademandsYesno::getTypeName();
            break;
        case 'text' :
            echo PluginMetademandsText::getTypeName();
            break;
        case 'number':
            echo PluginMetademandsNumber::getTypeName();
            break;
        case 'checkbox':
            echo PluginMetademandsCheckbox::getTypeName();
            break;
        case 'radio' :
            echo PluginMetademandsRadio::getTypeName();
            break;
        case 'dropdown' :
            echo PluginMetademandsDropdown::getTypeName();
            break;
        case 'dropdown_meta' :
            echo PluginMetademandsDropdownmeta::getTypeName();
            break;

        case 'dropdown_object' :
            echo PluginMetademandsDropdownobject::getTypeName();
            break;
        case 'dropdown_multiple' :
            echo PluginMetademandsDropdownmultiple::getTypeName();
            break;
        case 'textarea' :
            echo PluginMetademandsTextarea::getTypeName();
            break;
        case 'date' :
            echo PluginMetademandsDate::getTypeName();
            break;
        case 'datetime' :
            echo PluginMetademandsDatetime::getTypeName();
            break;
        case 'date_interval' :
            echo PluginMetademandsDateinterval::getTypeName();
            break;

        case 'datetime_interval' :
            echo PluginMetademandsDatetimeinterval::getTypeName();
            break;

    }
}
