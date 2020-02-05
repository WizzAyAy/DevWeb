<?php
require ("connexpdo.inc.php");
require_once ("js.php");

try {
    $objdb = connexpdo("voitureZZZ");
} catch (PDOException $e) {
    displayException($e);
}
?>