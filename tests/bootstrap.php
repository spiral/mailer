<?php

/**
 * Spiral Framework, SpiralScout LLC.
 *
 * @author Anton Titov (Wolfy-J)
 */

declare(strict_types=1);

// phpcs:disable
define('SPIRAL_INITIAL_TIME', microtime(true));

error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', '1');
mb_internal_encoding('UTF-8');

//Composer
require dirname(__DIR__) . '/vendor/autoload.php';