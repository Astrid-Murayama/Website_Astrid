<?php
/* ----------------------------------------------------------------------
現在閲覧中のパス情報。
---------------------------------------------------------------------- */

// 現在のURLのプロトコル、ホスト名、パスを取得。
$currentLocation = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; // 例） http://localhost/contact/general/index.php

// 現在のURLのパス部分のみを取得。
$currentPathname = $_SERVER['REQUEST_URI']; // 例） /contact/general/index.php

// パスをスラッシュで分割し、空の要素を除外
$currentUrlSegments = array_filter(explode('/', trim($currentPathname, '/'))); // 例） ['contact', 'general', 'index.php']

// currentPathnameがスラッシュで終わらない場合、最後の要素（ファイル名）を除外したディレクトリ部分を取得
$currentDirectoryItems = $currentPathname[strlen($currentPathname) - 1] === '/' ? $currentUrlSegments : array_slice($currentUrlSegments, 0, -1); // 例） ['housemaid', 'price']

// currentPathnameから最後のスラッシュまでのディレクトリパスを取得
$currentDirectoryPath = substr($currentPathname, 0, strrpos($currentPathname, '/') + 1); // 例） /contact/general/

// 現在のディレクトリ名を取得
$currentDirectoryName = end($currentDirectoryItems); // 例） general