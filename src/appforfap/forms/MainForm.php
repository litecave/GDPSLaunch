<?php
namespace appforfap\forms;

use std, gui, framework, appforfap;


class MainForm extends AbstractForm
{

    /**
     * @event buttonAlt.click 
     */
    function doButtonAltClick(UXMouseEvent $e = null)
    {
        
        
        // Generated
        $e = $event ?: $e; // legacy code from 16 rc-2
        
        execute('C:\GDPS\HolyDash\GeometryDragon.exe', false);
    }

    /**
     * @event button3.click 
     */
    function doButton3Click(UXMouseEvent $e = null)
    {
        
        
        // Generated
        $e = $event ?: $e; // legacy code from 16 rc-2
        
        browse('http://discord.gg/wcSFX4p');
    }

}
