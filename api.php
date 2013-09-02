<?php

include_once("snoopy.class.php");
include_once("htmlsql.class.php");
$mode = $_GET["m"];
$name = htmlspecialchars($_GET["i"]);
if (empty($name)){
    exit;
}
$wsql = new htmlsql();
//URLから取得する処理
if (!$wsql->connect('url', 'http://dev.bukkit.org/bukkit-plugins/' . $name . '/files/')) {
    print 'Error while connecting: ' . $wsql->error;
    exit;
}
if (!$wsql->query('SELECT * FROM tr WHERE $class == "odd"')) {
    print "Query error: " . $wsql->error;
    exit;
}


$result = $wsql->fetch_array();

if ($mode == "ver") {
//GetLastVer
    if (!$wsql->connect('string', $result[0]["text"])) {
        print 'Error while connecting: ' . $wsql->error;
        exit;
    }
    if (!$wsql->query('SELECT * FROM ul WHERE $class == "comma-separated-list"')) {
        print "Query error: " . $wsql->error;
        exit;
    }
    $result = $wsql->fetch_array();
    print strip_tags($result[0]["text"]);
}

if ($mode == "fname") {
//GetFileName
    if (!$wsql->connect('string', $result[0]["text"])) {
        print 'Error while connecting: ' . $wsql->error;
        exit;
    }
    if (!$wsql->query('SELECT * FROM td WHERE $class == "col-filename"')) {
        print "Query error: " . $wsql->error;
        exit;
    }
    $result = $wsql->fetch_array();
    print strip_tags($result[0]["text"]);
}

if ($mode == "date") {
//GetDate
    if (!$wsql->connect('string', $result[0]["text"])) {
        print 'Error while connecting: ' . $wsql->error;
        exit;
    }
    if (!$wsql->query('SELECT * FROM td WHERE $class == "col-date"')) {
        print "Query error: " . $wsql->error;
        exit;
    }
    $result = $wsql->fetch_array();
    print strip_tags($result[0]["text"]);
}
?>
