/*
 * This file is part of the MassVentil Data Acquisition System V1.0 distribution 
 * http://www.massventil.org
 * 
 * This program is free software: you can redistribute it and/or modify  
 * it under the terms of the GNU General Public License as published by  
 * the Free Software Foundation, version 3.
 *
 * This program is distributed in the hope that it will be useful, but 
 * WITHOUT ANY WARRANTY; without even the implied warranty of 
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU 
 * General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License 
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 *
 * For further information contact:
 * 		Author: Roland Dóczi <doczi.roli@gmail.com>
 * 		MassVentil official channel: <http://massventil.org/en/contact/>
 *
 * Date: February 1st, 2021
 *
 * Brief: This PHP script file contains a template for building up widget aliases.
 *
 */

<?php
$summaryAliases = 
'
"XXX_ALIAS_ID_XXX": {
      "id": "XXX_ALIAS_ID_XXX",
      "alias": "XXX_ALIAS_NAME_XXX",
      "filter": {
        "type": "deviceType",
        "resolveMultiple": true,
        "deviceType": "default",
        "deviceNameFilter": "XXX_ALIAS_NAME_XXX"
      }
    }
';
?>
