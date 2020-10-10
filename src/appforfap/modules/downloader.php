<?php
namespace appforfap\modules;

use std, gui, framework, appforfap;
use php\gui\UXDialog; 


class downloader extends AbstractModule
{

    /**
     * @event downloader.done 
     */
    function doDownloaderDone(ScriptEvent $e = null)
    {
        
        
        // Generated
        $e = $event ?: $e; // legacy code from 16 rc-2
        
        UXDialog::show('Выполнено! Осталось разархивировать!');
        $this->appModule()->call();
    }


}
