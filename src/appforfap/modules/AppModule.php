<?php
namespace appforfap\modules;

use std, gui, framework, appforfap;
use php\gui\UXDialog; 


class AppModule extends AbstractModule
{

    /**
     * @event zipFile.unpackAll 
     */
    function doZipFileUnpackAll(ScriptEvent $e = null)
    {
        
        
        // Generated
        $e = $event ?: $e; // legacy code from 16 rc-2
        
        UXDialog::show('Разархивировано!');
    }




}
