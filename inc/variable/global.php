<?php
/* ----------------------------------------------------------------------
汎用的なPHP変数を定義するためのファイルです。
---------------------------------------------------------------------- */

/* ----------------------------------------------------------------------
システム関連。
---------------------------------------------------------------------- */

// ドキュメントルートの設定
$webRoot = $_SERVER['DOCUMENT_ROOT'];

/* ----------------------------------------------------------------------
【require/include処理時の注意点】

/var/www/html
├── index.php
└── inc
    └── header.php

① <?php include($webRoot . '/inc/displayed-component/navigation/header.php'); ?> → OK
② <?php include('/inc/displayed-component/navigation/header.php'); ?> → ERROR
③ <?php include('./inc/displayed-component/navigation/header.php'); ?> → OK

仮に上記のディレクトリがあった場合、②ではパスが通らない。
これは、②がサーバーのファイルシステムの最上位ディレクトリから「inc」フォルダを見つけようとすることが原因。
実際には「/var/www/html/inc/displayed-component/navigation/header.php」を取得したいのに、「/inc/displayed-component/navigation/header.php」を探してしまうためエラーとなる。

そのため、③のように現在のディレクトリからの相対パスを指定することでエラーを回避できるが、これでは階層の違うファイルに同じ処理を記述する際に、都度パスを書き換える手間が発生する。

そこで、①のようにドキュメントルートのパスを格納した変数$webRootを活用することで、どのページ・開発環境からでも共通のルート相対パス記述で該当ファイルを見つけ、効率的にinclude処理することが可能となる。
---------------------------------------------------------------------- */

/* ----------------------------------------------------------------------
URLを元に解析するページ情報。
---------------------------------------------------------------------- */

// 現在のパスを取得。
$currentPath = $_SERVER['SCRIPT_NAME']; // 例） /housemaid/price/index.php ※フラグメントやクエリストリングは除外される。
// ファイル名が「index.*」で終わっている場合は、ファイル名を取り除く。例） /housemaid/price/
if (preg_match('/index\.[^\/]+$/', $currentPath)) {
    $currentPath = preg_replace('/index\.[^\/]+$/', '', $currentPath);
}

// 現在のパス > 最後の「/」より後ろの文字列を除去し、ディレクトリまでのパスを特定。
$currentDirectoryPath = substr($currentPath, 0, strrpos($currentPath, '/') + 1); // 例） /housemaid/price/
// ディレクトリ名のみを格納した配列をセット。
$directorySegments = explode('/', trim($currentDirectoryPath, '/')); // 例） array(2) { [0]=> string(9) "housemaid" [1]=> string(5) "price" }

$lastDirName = !empty($directorySegments) ? end($directorySegments) : null; // 最後のディレクトリ名を取得。
$firstDirName = !empty($directorySegments) ? reset($directorySegments) : null; // 最初のディレクトリ名を取得。

$currentFileName = basename($_SERVER["SCRIPT_FILENAME"]); // 例） index.php ※/(index.php)のように省略されていても取得可能。
$currentBaseName =  pathinfo($currentFileName, PATHINFO_FILENAME); // 例） index

$serviceType = null;

if ($firstDirName) {
    // 第一階層が特定のディレクトリ名に該当する場合、第二階層を$serviceTypeとして扱う。
    if (in_array($firstDirName, ["contact", "faq"])) {
        $secondDirName = isset($directorySegments[1]) ? $directorySegments[1] : null;
        $serviceType = $secondDirName;
    } else {
        $serviceType = $firstDirName;
    }
}

switch ($serviceType) {
    case "housemaid":
        $serviceName = "家政婦";
        break;

    case "house-support":
        $serviceName = "家事代行";
        break;

    case "cooking":
        $serviceName = "料理代行";
        break;

    case "cleaning":
        $serviceName = "掃除代行";
        break;

    case "senior-support":
        $serviceName = "高齢者生活支援";
        break;

    case "home-care":
        $serviceName = "訪問・在宅介護";
        break;

    case "home-nursing":
        $serviceName = "訪問・在宅看護";
        break;

    default:
        $serviceName = "アルファベリーのサービス";
}

$lastAreaName = null;
$fullAreaName = null;

// ディレクトリ配列に"area"が含まれる場合は、閲覧中の地域名も特定。
if (in_array("area", $directorySegments)) {
    // 現在閲覧中のファイル名が「index.」から始まらない場合の処理。
    if (strpos($currentFileName, "index.") !== 0) {
        $directorySegments[] = $currentBaseName; // ファイル名（地域名）を配列に格納。
    }

    $index = array_search("area", $directorySegments);

    if ($index !== false && isset($directorySegments[$index + 1])) { // 「$index && 〜」と略記すると、$indexが0の場合に処理が実行されないため注意。
        $lastAreaName = $directorySegments[$index + 1]; // "area"ディレクトリ直下のディレクトリ名を取得。
        $fullAreaName = $lastAreaName;

        if (isset($directorySegments[$index + 2])) {
            $lastAreaName = $directorySegments[$index + 2]; // area > sapporo > kiyota-ku と続くような場合には、"area"から2つ目のディレクトリ/ファイル名（kiyota-ku）を取得。
            $fullAreaName = $fullAreaName . "-" . $lastAreaName; // area > sapporo > kiyota-ku の場合は、"sapporo-kiyota-ku"という文字列を返す。※末端の地名だけで比較処理すると、他の市で同名の地区がある場合にエラーを起こすため。
        }
    }

    // var_dump($lastAreaName);
    // var_dump($fullAreaName);
}

/* ----------------------------------------------------------------------
パス、URL。
---------------------------------------------------------------------- */

$pathToHousemaid = "/housemaid/";
$pathToHouseSupport = "/house-support/";
$pathToCooking = "/cooking/";
$pathToCleaning = "/cleaning/";
$pathToSeniorSupport = "/senior-support/";
$pathToHomeCare = "/home-care/";
$pathToHomeNursing = "/home-nursing/";

/* ----------------------------------------------------------------------
最低料金/時間。
カンマ付きで呼び出す際は、<?= number_format($minPriceForHousemaidWithTax); ?>と記述します。
※最低料金が改定される際は、JSON-LDのLocal Business情報も更新しましょう。
---------------------------------------------------------------------- */

// 税抜価格→税込価格へ変換する関数。
function addTax($priceWithoutTax)
{
    $taxRate = 0.1;
    return $priceWithoutTax * (1 + $taxRate);
}

// 1時間あたりの最低料金一覧（税抜）。
$minPricesWithoutTax = [
    'Housemaid' => 2000,
    'HouseSupport' => 2000,
    'Cooking' => 2000,
    'Cleaning' => 2000,
    'SeniorSupport' => 2000,
    'HomeCare' => 2000,
    'HomeNursing' => 4000
];

// （PHP8以降の厳格な型チェックによるエラー/エディタ警告回避のため）料金初期値をfloat型で定義。
$minPriceInAllServicesWithoutTax = 0.0;
$minPriceInAllServicesWithTax = 0.0;

// サービスごとの最低料金/時間を、税抜と税込で変数定義。
foreach ($minPricesWithoutTax as $service => $priceWithoutTax) {
    ${'minPriceFor' . $service . 'WithoutTax'} = $priceWithoutTax;
    ${'minPriceFor' . $service . 'WithTax'} = addTax($priceWithoutTax);

    if ($minPriceInAllServicesWithoutTax === 0.0 || $priceWithoutTax < $minPriceInAllServicesWithoutTax) {
        $minPriceInAllServicesWithoutTax = $priceWithoutTax;
        $minPriceInAllServicesWithTax = addTax($priceWithoutTax);
    }
}

$transportationCostWithoutTax = 1000;
$transportationCostWithTax = addTax($transportationCostWithoutTax);

/* ----------------------------------------------------------------------
会社情報。
---------------------------------------------------------------------- */

// フリーダイヤル。
$freeDial = "0120-040-457";

// ファックス番号。
$faxNumber = "011-200-0991";

// お問い合わせメールアドレス。
$contactEmail = "contact@alpha-2015.jp";

// LINEのURL。
$lineUrl = "https://line.me/R/ti/p/@712gpgjh";

// InstagramのURL。
$instagramUrl = "https://www.instagram.com/alphaberry68/";

/* ----------------------------------------------------------------------
随時更新必須のaltテキスト。
---------------------------------------------------------------------- */

$altForAchievements = "「ご利用実績50,000件以上」、「総スタッフ数500名以上」、「顧客満足度97.1%」と記され、輝かしく月桂樹があしらわれた3つの表彰画像";
