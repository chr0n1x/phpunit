<?php
//
// +------------------------------------------------------------------------+
// | PEAR :: PHPUnit                                                        |
// +------------------------------------------------------------------------+
// | Copyright (c) 2002-2004 Sebastian Bergmann <sb@sebastian-bergmann.de>. |
// +------------------------------------------------------------------------+
// | This source file is subject to version 3.00 of the PHP License,        |
// | that is available at http://www.php.net/license/3_0.txt.               |
// | If you did not receive a copy of the PHP license and are unable to     |
// | obtain it through the world-wide-web, please send a note to            |
// | license@php.net so we can mail you a copy immediately.                 |
// +------------------------------------------------------------------------+
//
// $Id: Text.php 539 2006-02-13 16:08:42Z sb $
//

require_once 'PHPUnit2/Extensions/TestDox/ResultPrinter.php';

/**
 * @author      Sebastian Bergmann <sb@sebastian-bergmann.de>
 * @copyright   Copyright &copy; 2002-2004 Sebastian Bergmann <sb@sebastian-bergmann.de>
 * @license     http://www.php.net/license/3_0.txt The PHP License, Version 3.0
 * @category    PHP
 * @package     PHPUnit2
 * @subpackage  Extensions
 * @since       2.1.0
 */
class PHPUnit2_Extensions_TestDox_ResultPrinter_Text extends PHPUnit2_Extensions_TestDox_ResultPrinter {
    // {{{ public function startClass($name)

    /**
    * Handler for 'start class' event.
    *
    * @param  string $name
    * @access public
    */
    public function startClass($name) {
        $this->write($name . "\n");
    }

    // }}}
    // {{{ public function onTest($name)

    /**
    * Handler for 'on test' event.
    *
    * @param  string $name
    * @access public
    */
    public function onTest($name) {
        $this->write(' - ' . $name . "\n");
    }

    // }}}
    // {{{ public function endClass($name)

    /**
    * Handler for 'end class' event.
    *
    * @param  string $name
    * @access public
    */
    public function endClass($name) {
    }

    // }}}
    // {{{ public function startRun()

    /**
    * Handler for 'start run' event.
    *
    * @access public
    */
    public function startRun() {
    }

    // }}}
    // {{{ public function endRun()

    /**
    * Handler for 'end run' event.
    *
    * @access public
    */
    public function endRun() {
    }

    // }}}
}

/*
 * vim600:  et sw=2 ts=2 fdm=marker
 * vim<600: et sw=2 ts=2
 */
?>
