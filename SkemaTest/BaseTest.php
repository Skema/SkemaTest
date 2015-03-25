<?php
/**
 * Created by PhpStorm.
 * User: robert
 * Date: 3/25/15
 * Time: 6:57 PM
 */

namespace SkemaTest;

use Testify\Testify;

abstract class BaseTest {
	public abstract static function run(Testify $tf);
}