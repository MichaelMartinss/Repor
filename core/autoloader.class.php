<?php

class AutoLoader {

    private $arquives;

    function __construct() {
        spl_autoload_register([$this, 'folders']);
    }

    private function folders($file) {

        $this->arquives = ['control/' . $file . '.control.php',
            'model/' . $file . '.model.php',
            'core/' . $file . '.class.php'];

        foreach ($this->arquives as $arquive) :
            if (file_exists($arquive)) {
                require_once $arquive;
            }
        endforeach;
    }
}
new AutoLoader();