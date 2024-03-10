<?php

// Check PHP Version
$phpVersion = PHP_VERSION;

echo "Current PHP Version: $phpVersion";

// Compare PHP Version
$requiredVersion = "7.3.0";

if (version_compare($phpVersion, $requiredVersion, '<')) {
    echo "\nYour PHP version is outdated. Please upgrade to at least PHP $requiredVersion.";
} else {
    echo "\nYour PHP version meets the minimum requirements.";
}

?>
