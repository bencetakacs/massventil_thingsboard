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
 * Brief: This PHP script file contains a template for building up patient summary base state widgets.
 *
 */

<?php
$stateTemplate = '"XXX_STATE_NAME_XXX": {
      "name": "Patients Summary",
      "root": true,
      "layouts": {
        "main": {
          "widgets": {XXX_WIDGETS_XXX},
          "gridSettings": {
            "backgroundColor": "#ffffff",
            "color": "rgba(0,0,0,0.870588)",
            "columns": 24,
            "margins": [
              10,
              10
            ],
            "backgroundSizeMode": "100%",
            "autoFillHeight": false,
            "mobileAutoFillHeight": false,
            "mobileRowHeight": 70
          }
        }
      }
    }';
?>
