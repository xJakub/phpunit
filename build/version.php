#!/usr/bin/env php
<?php
require __DIR__ . '/../vendor/autoload.php';

use SebastianBergmann\Version;

$version = new Version(file_get_contents(__DIR__ . '/../.version'), __DIR__ . '/../');

print $version->getVersion();
