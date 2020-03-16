<?php/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author uzivatel
 */

/**
 * interface Izdroje s funkcemi
 */
interface Izdroje {
    
    /**
     * tri nutne funkce k implementaci
     */
function powerOn();
function getPower();
function powerOff();
}
