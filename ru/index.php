<?php

// Set base path here so this works with symbolic links for multiple installations

define('QA_BASE_DIR', dirname(empty($_SERVER['SCRIPT_FILENAME']) ? __FILE__ : $_SERVER['SCRIPT_FILENAME']) . '/');

require 'qa-include/qa-index.php';
