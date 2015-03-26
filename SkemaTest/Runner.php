<?php
/**
 * Created by PhpStorm.
 * User: robert
 * Date: 3/25/15
 * Time: 6:48 PM
 */

namespace SkemaTest;


class Runner
{
	public static function run($tf)
	{
		$thisDir = dirname(__FILE__);
		$testNamespaceFolders = scandir($thisDir);
		foreach($testNamespaceFolders as $testNamespaceFolder) {
			switch ($testNamespaceFolder) {
				case '.':
				case '..':
				case 'Runner.php':
				case 'BaseTest.php':
					continue 2;
			}

			$testFiles = scandir($thisDir . '/' . $testNamespaceFolder);
			foreach($testFiles as $testFile) {
				switch ($testFile) {
					case ".":
					case "..":
						continue 2;
				}

				$className = 'SkemaTest\\' . $testNamespaceFolder . '\\' . substr($testFile, 0, -4);
				$className::run($tf);
			}

		}

	}
}