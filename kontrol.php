<?php
$currentVersion = "1.0.1";
$clientVersion = $_GET['version'] ?? null;

if (!$clientVersion) {
    echo "ERROR: Version parameter is missing.";
} elseif ($clientVersion === $currentVersion) {
    echo "OK: Your application is up to date.";
} else {
    echo "UPDATE: New version available ($currentVersion).";
}
?>
