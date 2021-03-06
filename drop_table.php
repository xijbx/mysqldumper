<?php

/**
 * MySQLDumper v2.2
 * @author JB <jb@p0wersurge.com>
 */

require_once('include/core.php');

// Init MySQLDumper.
$msd->init();

$databaseName = filter_input(INPUT_GET, 'database', FILTER_SANITIZE_STRING);
$tableName    = filter_input(INPUT_GET, 'table', FILTER_SANITIZE_STRING);

if ($databaseName && $tableName) {
    // Drop the table
    $msd->dropTable($databaseName, $tableName);
}

// Issue redirect
$msd->redirect('index');
