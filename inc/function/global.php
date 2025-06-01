<!--  渡されたファイルパスに、ファイルの更新日時パラメーターを付加して返すキャッシュバスト関数。 -->
<?php
$webRoot = $_SERVER['DOCUMENT_ROOT'];

function cacheBust($filePath)
{
    $webRoot = $_SERVER['DOCUMENT_ROOT'];

    if (strpos($filePath, '/') === 0) {
        // 引数冒頭が「/」（＝ルート相対パス）の場合。
        $fullPath = $webRoot . $filePath;
    } else {
        // 引数に絶対パスまたは相対パスが渡された場合。
        $fullPath = realpath($filePath); // $fullPathに絶対パスを定義。ファイルが存在しない場合はfalseをセット。

        if ($fullPath === false) {
            return $filePath; // ファイルが存在しない場合は、引数をそのまま返す。
        }
    }

    if (file_exists($fullPath)) {
        $timestamp = date('YmdHis', filemtime($fullPath)); // ファイルの最終更新日時を取得。

        return $filePath . '?lastModified=' . $timestamp; // クエリパラメータとして最終更新日時を付加して返す。
    } else {
        return $filePath; // ファイルが存在しない場合は、引数をそのまま返す。
    }
}
