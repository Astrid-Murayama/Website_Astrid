<?php header("Content-Type:text/html;charset=utf-8"); ?>
<?php //error_reporting(E_ALL | E_STRICT);
##-----------------------------------------------------------------------------------------------------------------##
#
#  PHPメールプログラム　フリー版 ver2.0.3 最終更新日2022/02/01
#　改造や改変は自己責任で行ってください。
#	
#  HP: http://www.php-factory.net/
#
#  重要！！サイトでチェックボックスを使用する場合のみですが。。。
#  チェックボックスを使用する場合はinputタグに記述するname属性の値を必ず配列の形にしてください。
#  例　name="当サイトをしったきっかけ[]"  として下さい。
#  nameの値の最後に[と]を付ける。じゃないと複数の値を取得できません！
#
##-----------------------------------------------------------------------------------------------------------------##
if (version_compare(PHP_VERSION, '5.1.0', '>=')) { //PHP5.1.0以上の場合のみタイムゾーンを定義
	date_default_timezone_set('Asia/Tokyo'); //タイムゾーンの設定（日本以外の場合には適宜設定ください）
}
/*-------------------------------------------------------------------------------------------------------------------
* ★以下設定時の注意点　
* ・値（=の後）は数字以外の文字列（一部を除く）はダブルクオーテーション「"」、または「'」で囲んでいます。
* ・これをを外したり削除したりしないでください。後ろのセミコロン「;」も削除しないください。
* ・また先頭に「$」が付いた文字列は変更しないでください。数字の1または0で設定しているものは必ず半角数字で設定下さい。
* ・メールアドレスのname属性の値が「Email」ではない場合、以下必須設定箇所の「$Email」の値も変更下さい。
* ・name属性の値に半角スペースは使用できません。
*以上のことを間違えてしまうとプログラムが動作しなくなりますので注意下さい。
-------------------------------------------------------------------------------------------------------------------*/


//---------------------------　必須設定　必ず設定してください　-----------------------

//サイトのトップページのURL　※デフォルトでは送信完了後に「トップページへ戻る」ボタンが表示されますので
$site_top = "https://astrid.works/";

//管理者のメールアドレス ※メールを受け取るメールアドレス(複数指定する場合は「,」で区切ってください 例 $to = "aa@aa.aa,bb@bb.bb";)
$to = "cfilorvy0325@icloud.com";

//送信元メールアドレス（管理者宛て、及びユーザー宛メールの送信元メールアドレスです）
//必ず実在するメールアドレスでかつ出来る限り設置先サイトのドメインと同じドメインのメールアドレスとすることを強く推奨します
//管理者宛てメールの返信先（reply）はユーザーのメールアドレスになります。
$from = "cfilorvy0325@icloud.com";

//フォームのメールアドレス入力箇所のname属性の値（name="○○"　の○○部分）
$Email = "email";
//---------------------------　必須設定　ここまで　------------------------------------


//---------------------------　セキュリティ、スパム防止のための設定　------------------------------------

//スパム防止のためのリファラチェック（フォーム側とこのファイルが同一ドメインであるかどうかのチェック）(する=1, しない=0)
//※有効にするにはこのファイルとフォームのページが同一ドメイン内にある必要があります
$Referer_check = 1;

//リファラチェックを「する」場合のドメイン ※設置するサイトのドメインを指定して下さい。
//もしこの設定が間違っている場合は送信テストですぐに気付けます。

//localhost環境で画面遷移を確認したい場合は、ドメインを以下に設定。
// $Referer_check_domain = "http://localhost/";
$Referer_check_domain = "https://astrid.works/";

/*セッションによるワンタイムトークン（CSRF対策、及びスパム防止）(する=1, しない=0)
※ただし、この機能を使う場合は↓の送信確認画面の表示が必須です。（デフォルトではON（1）になっています）
※【重要】ガラケーは機種によってはクッキーが使えないためガラケーの利用も想定してる場合は「0」（OFF）にして下さい（PC、スマホは問題ないです）*/
$useToken = 1;
//---------------------------　セキュリティ、スパム防止のための設定　ここまで　------------------------------------


//---------------------- 任意設定　以下は必要に応じて設定してください ------------------------

// Bccで送るメールアドレス(複数指定する場合は「,」で区切ってください 例 $BccMail = "aa@aa.aa,bb@bb.bb";)
$BccMail = "";

// 管理者宛に送信されるメールのタイトル（件名）
$subject = "【訪問・在宅看護のアルファベリー】お問い合わせを受け付けました";

// 送信確認画面の表示(する=1, しない=0)
$confirmDsp = 1;

// 送信完了後に自動的に指定のページ(サンクスページなど)に移動する(する=1, しない=0)
// CV率を解析したい場合などはサンクスページを別途用意し、URLをこの下の項目で指定してください。
// 0にすると、デフォルトの送信完了画面が表示されます。
$jumpPage = 1;

// 送信完了後に表示するページURL（上記で1を設定した場合のみ）※httpから始まるURLで指定ください。（相対パスでも基本的には問題ないです）
$thanksPage = "./thanks.php";

// 必須入力項目を設定する(する=1, しない=0)
$requireCheck = 1;

/* 必須入力項目(入力フォームで指定したname属性の値を指定してください。（上記で1を設定した場合のみ）
値はシングルクォーテーションで囲み、複数の場合はカンマで区切ってください。フォーム側と順番を合わせると良いです。 
配列の形「name="○○[]"」の場合には必ず後ろの[]を取ったものを指定して下さい。*/
$require = array('お名前', 'ふりがな', 'メールアドレス', 'メールアドレス（確認用）', '電話番号', '郵便番号', '住所', 'お問い合わせ内容', 'ご利用規約');


//----------------------------------------------------------------------
//  自動返信メール設定(START)
//----------------------------------------------------------------------

// 差出人に送信内容確認メール（自動返信メール）を送る(送る=1, 送らない=0)
// 送る場合は、フォーム側のメール入力欄のname属性の値が上記「$Email」で指定した値と同じである必要があります
$remail = 1;

//自動返信メールの送信者欄に表示される名前　※あなたの名前や会社名など（もし自動返信メールの送信者名が文字化けする場合ここは空にしてください）
$refrom_name = "訪問・在宅看護のアルファベリー";

// 差出人に送信確認メールを送る場合のメールのタイトル（上記で1を設定した場合のみ）
$re_subject = "【訪問・在宅看護のアルファベリー】お問い合わせ受け付け完了のお知らせ";

//フォーム側の「名前」箇所のname属性の値　※自動返信メールの「○○様」の表示で使用します。
//指定しない、または存在しない場合は、○○様と表示されないだけです。あえて無効にしてもOK
$dsp_name = 'お名前';

//自動返信メールの冒頭の文言 ※日本語部分のみ変更可
$remail_text = <<< TEXT
この度は「訪問・在宅看護のアルファベリー」にお問い合わせいただき誠にありがとうございます。

下記内容にて受け付けが完了したことをお知らせいたします。

つきましては、担当者からのご連絡があるまで今しばらくお待ちくださいますようお願い申し上げます。

TEXT;

//自動返信メールに署名（フッター）を表示(する=1, しない=0)※管理者宛にも表示されます。
$mailFooterDsp = 1;

//上記で「1」を選択時に表示する署名（フッター）（FOOTER～FOOTER;の間に記述してください）
$mailSignature = <<< FOOTER
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
訪問・在宅看護のアルファベリー
〒060-0001
北海道札幌市中央区北1条西7丁目1-15 あおいビル7階
TEL：0120-040-457
URL：https://private-nurse-alphaberry.com/
＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝
FOOTER;

//----------------------------------------------------------------------
//  自動返信メール設定(END)
//----------------------------------------------------------------------

//メールアドレスの形式チェックを行うかどうか。(する=1, しない=0)
//※デフォルトは「する」。特に理由がなければ変更しないで下さい。メール入力欄のname属性の値が上記「$Email」で指定した値である必要があります。
$mail_check = 1;

//全角英数字→半角変換を行うかどうか。(する=1, しない=0)
$hankaku = 1;

//全角英数字→半角変換を行う項目のname属性の値（name="○○"の「○○」部分）
//※複数の場合にはカンマで区切って下さい。（上記で「1」を指定した場合のみ有効）
//配列の形「name="○○[]"」の場合には必ず後ろの[]を取ったものを指定して下さい。
$hankaku_array = array('メールアドレス', 'メールアドレス（確認用）', '郵便番号', 'お電話番号');

//-fオプションによるエンベロープFrom（Return-Path）の設定(する=1, しない=0)　
//※宛先不明（間違いなどで存在しないアドレス）の場合に 管理者宛に「Mail Delivery System」から「Undelivered Mail Returned to Sender」というメールが届きます。
//サーバーによっては稀にこの設定が必須の場合もあります。
//設置サーバーでPHPがセーフモードで動作している場合は使用できませんので送信時にエラーが出たりメールが届かない場合は「0」（OFF）として下さい。
$use_envelope = 0;

//機種依存文字の変換
/*たとえば㈱（かっこ株）や①（丸1）、その他特殊な記号や特殊な漢字などは変換できずに「？」と表示されます。それを回避するための機能です。
確認画面表示時に置換処理されます。「変換前の文字」が「変換後の文字」に変換され、送信メール内でも変換された状態で送信されます。（たとえば「㈱」の場合、「（株）」に変換されます） 
必要に応じて自由に追加して下さい。ただし、変換前の文字と変換後の文字の順番と数は必ず合わせる必要がありますのでご注意下さい。*/

//変換前の文字
$replaceStr['before'] = array('①', '②', '③', '④', '⑤', '⑥', '⑦', '⑧', '⑨', '⑩', '№', '㈲', '㈱', '髙');
//変換後の文字
$replaceStr['after'] = array('(1)', '(2)', '(3)', '(4)', '(5)', '(6)', '(7)', '(8)', '(9)', '(10)', 'No.', '（有）', '（株）', '高');

//------------------------------- 任意設定ここまで ---------------------------------------------

// POSTデータを取得
$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
$furigana = htmlspecialchars($_POST['furigana'], ENT_QUOTES, 'UTF-8');
$companyName = htmlspecialchars($_POST['company-name'], ENT_QUOTES, 'UTF-8');
$companyFurigana = htmlspecialchars($_POST['company-furigana'], ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
$emailConfirmation = htmlspecialchars($_POST['email-confirmation'], ENT_QUOTES, 'UTF-8');
$phone = htmlspecialchars($_POST['phone'], ENT_QUOTES, 'UTF-8');
$inquiry = htmlspecialchars($_POST['inquiry'], ENT_QUOTES, 'UTF-8');

// 必須項目のチェック（空の場合エラーメッセージを出す）
$errors = [];
if (!$name) $errors[] = "お名前は必須です。";
if (!$furigana) $errors[] = "ふりがなは必須です。";
if (!$email) $errors[] = "メールアドレスは必須です。";
if ($email !== $emailConfirmation) $errors[] = "メールアドレスが一致しません。";

?>

<!DOCTYPE html>
<html lang="ja">

	<head>

		<!-- 定義済みPHP変数の読み込み -->
		<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/inc/variable/global.php'); ?>

		<!-- 全ページ共通の要素を読み込み -->
		<?php require_once($webRoot . '/inc/head/common.php'); ?>

		<!-- ページ固有のメタデータ設定 -->

		<!-- 全ページ共通の要素を読み込み -->					

		<!-- JavaScriptファイルの読み込み -->
		<!-- ajaxzip3.jsは、HTML内のonKeyUpイベントよりも先に読み込ませる必要があり、deferをかけるとバグが発生するので注意です。 -->
		<script src="/js/form/ajaxzip3.js" async></script>
		<script type="module" src="/js/form/form.js"></script>
		<script type="module" src="/js/form/autokana.js"></script>

		<!-- 「サイト名」のJSON-LD構造化データ（トップページ限定の記述、外部参照不可） -->
		
		<!-- 「ローカルビジネス」のJSON-LD構造化データ -->

	</head>

	<body>
		<!-- ヘッダーセクション -->
		<?php include($webRoot . '/inc/head/navigation/header.php'); ?>

		<!-- パンくずリスト -->
		<ol class="breadcrumb">
			<li><a href="">TOP</a></li>
			<li>お問い合わせ</li>
			<li>入力内容の確認</li>
		</ol>

		<main>
			<section class="confirmation">
				<div class="confirmation-container">
					<h1>入力内容の確認</h1>

					<?php if ($errors): ?>
						<ul class="error-messages">
							<?php foreach ($errors as $error): ?>
								<li><?php echo $error; ?></li>
							<?php endforeach; ?>
						</ul>
						<p><a href="form.html">フォームに戻る</a></p>
					<?php else: ?>
						<p>以下の内容で送信します。問題がなければ、<span>送信</span>ボタンを押してください。</p>
						<form action="/contact/general/thanks.php" method="post">
							<table>
								<tr>
									<th>お名前</th>
									<td><?php echo $name; ?></td>
								</tr>
								<tr>
									<th>ふりがな</th>
									<td><?php echo $furigana; ?></td>
								</tr>
								<tr>
									<th>法人名</th>
									<td><?php echo $companyName; ?></td>
								</tr>
								<tr>
									<th>法人名ふりがな</th>
									<td><?php echo $companyFurigana; ?></td>
								</tr>
								<tr>
									<th>メールアドレス</th>
									<td><?php echo $email; ?></td>
								</tr>
								<tr>
									<th>電話番号</th>
									<td><?php echo $phone; ?></td>
								</tr>
								<tr>
									<th>ご相談内容</th>
									<td><?php echo nl2br($inquiry); ?></td>
								</tr>
							</table>

							<!-- hidden要素でデータを次のページへ渡す -->
							<input type="hidden" name="name" value="<?php echo $name; ?>">
							<input type="hidden" name="furigana" value="<?php echo $furigana; ?>">
							<input type="hidden" name="company-name" value="<?php echo $companyName; ?>">
							<input type="hidden" name="company-furigana" value="<?php echo $companyFurigana; ?>">
							<input type="hidden" name="email" value="<?php echo $email; ?>">
							<input type="hidden" name="phone" value="<?php echo $phone; ?>">
							<input type="hidden" name="inquiry" value="<?php echo $inquiry; ?>">

							<div class="confirmation-btn-box">
								<button type="button" onclick="history.back()">修正</button>
								<button type="submit">送信</button>
							</div>

						</form>
					<?php endif; ?>
				</div>
			</section>
		</main>
	</body>

</html>
<?php
		// 	} else {
		// 		header("Location: " . $thanksPage);
		// 	}
		// }

		// 以下の変更は知識のある方のみ自己責任でお願いします。

		//----------------------------------------------------------------------
		//  関数定義(START)
		//----------------------------------------------------------------------
		function checkMail($str)
		{
			$mailaddress_array = explode('@', $str);
			if (preg_match("/^[\.!#%&\-_0-9a-zA-Z\?\/\+]+\@[!#%&\-_0-9a-zA-Z]+(\.[!#%&\-_0-9a-zA-Z]+)+$/", "$str") && count($mailaddress_array) == 2) {
				return true;
			} else {
				return false;
			}
		}
		function h($string)
		{
			global $encode;
			return htmlspecialchars($string, ENT_QUOTES, $encode);
		}
		function sanitize($arr)
		{
			if (is_array($arr)) {
				return array_map('sanitize', $arr);
			}
			return str_replace("\0", "", $arr);
		}
		//Shift-JISの場合に誤変換文字の置換関数
		function sjisReplace($arr, $encode)
		{
			foreach ($arr as $key => $val) {
				$key = str_replace('＼', 'ー', $key);
				$resArray[$key] = $val;
			}
			return $resArray;
		}
		//送信メールにPOSTデータをセットする関数
		function postToMail($arr)
		{
			global $hankaku, $hankaku_array;
			$resArray = '';
			foreach ($arr as $key => $val) {
				$out = '';
				if (is_array($val)) {
					foreach ($val as $key02 => $item) {
						//連結項目の処理
						if (is_array($item)) {
							$out .= connect2val($item);
						} else {
							$out .= $item . ', ';
						}
					}
					$out = rtrim($out, ', ');
				} else {
					$out = $val;
				} //チェックボックス（配列）追記ここまで

				if (version_compare(PHP_VERSION, '5.1.0', '<=')) { //PHP5.1.0以下の場合のみ実行（7.4でget_magic_quotes_gpcが非推奨になったため）
					if (get_magic_quotes_gpc()) {
						$out = stripslashes($out);
					}
				}

				//全角→半角変換
				if ($hankaku == 1) {
					$out = zenkaku2hankaku($key, $out, $hankaku_array);
				}

				// if ($out != "confirm_submit" && $key != "httpReferer") {
				//     $resArray .= "【 " . h($key) . " 】 " . h($out) . "\n";
				// }

				// 未入力のinput項目があった場合、メール本文にはそのキーとバリューを出力しないように改良。（2023.04.17 近藤）
				if (!empty($val) && $out != "confirm_submit" && $key != "httpReferer") {
					$resArray .= "【 " . h($key) . " 】 " . h($out) . "\n";
				}
			}
			return $resArray;
		}
		//確認画面の入力内容出力用関数
		function confirmOutput($arr)
		{
			global $hankaku, $hankaku_array, $useToken, $confirmDsp, $replaceStr;
			$html = '';
			foreach ($arr as $key => $val) {
				$out = '';
				if (is_array($val)) {
					foreach ($val as $key02 => $item) {
						//連結項目の処理
						if (is_array($item)) {
							$out .= connect2val($item);
						} else {
							$out .= $item . ', ';
						}
					}
					$out = rtrim($out, ', ');
				} else {
					$out = $val;
				} //チェックボックス（配列）追記ここまで

				if (version_compare(PHP_VERSION, '5.1.0', '<=')) { //PHP5.1.0以下の場合のみ実行（7.4でget_magic_quotes_gpcが非推奨になったため）
					if (get_magic_quotes_gpc()) {
						$out = stripslashes($out);
					}
				}

				//全角→半角変換
				if ($hankaku == 1) {
					$out = zenkaku2hankaku($key, $out, $hankaku_array);
				}

				$out = nl2br(h($out)); //※追記 改行コードを<br>タグに変換
				$key = h($key);
				$out = str_replace($replaceStr['before'], $replaceStr['after'], $out); //機種依存文字の置換処理

				// $html .= "<tr><th>" . $key . "</th><td>" . $out;
				// $html .= '<input type="hidden" name="' . $key . '" value="' . str_replace(array("<br />", "<br>"), "", $out) . '" />';
				// $html .= "</td></tr>\n";

				//↓複数選択項目以外にも、値が未入力のinputがあればテーブルへの出力をスキップするための処理を追加。（2023.04.17 近藤）
				if (!empty($val)) { // $valが空でない場合にのみ処理を実行
					$html .= "<div class=\"form__item\"><dt class=\"form__label\">" . $key . "</dt><dd class=\"form__confirmContent\">" . $out;
					$html .= '<input type="hidden" name="' . $key . '" value="' . str_replace(array("<br />", "<br>"), "", $out) . '" />';
					$html .= "</dd></div>\n";
				}
			}
			//トークンをセット
			if ($useToken == 1 && $confirmDsp == 1) {
				$token = sha1(uniqid(mt_rand(), true));
				$_SESSION['user_form_token'] = $token;
				$html .= '<input type="hidden" name="user_form_token" value="' . $token . '" />';
			}

			return $html;
		}

		//全角→半角変換
		function zenkaku2hankaku($key, $out, $hankaku_array)
		{
			global $encode;
			if (is_array($hankaku_array) && function_exists('mb_convert_kana')) {
				foreach ($hankaku_array as $hankaku_array_val) {
					if ($key == $hankaku_array_val) {
						$out = mb_convert_kana($out, 'a', $encode);
					}
				}
			}
			return $out;
		}
		//配列連結の処理
		function connect2val($arr)
		{
			$out = '';
			foreach ($arr as $key => $val) {
				if ($key === 0 || $val == '') { //配列が未記入（0）、または内容が空の場合には連結文字を付加しない（型まで調べる必要あり）
					$key = '';
				} elseif (strpos($key, "円") !== false && $val != '' && preg_match("/^[0-9]+$/", $val)) {
					$val = number_format($val); //金額の場合には3桁ごとにカンマを追加
				}
				$out .= $val . $key;
			}
			return $out;
		}

		//管理者宛送信メールヘッダ
		function adminHeader($post_mail, $BccMail)
		{
			global $from;
			$header = "From: $from\n";
			if ($BccMail != '') {
				$header .= "Bcc: $BccMail\n";
			}
			if (!empty($post_mail)) {
				$header .= "Reply-To: " . $post_mail . "\n";
			}
			$header .= "Content-Type:text/plain;charset=iso-2022-jp\nX-Mailer: PHP/" . phpversion();
			return $header;
		}
		//管理者宛送信メールボディ
		function mailToAdmin($arr, $subject, $mailFooterDsp, $mailSignature, $encode, $confirmDsp)
		{
			$adminBody = "";
			$adminBody .= "受付ご担当者様\n\n";
			$adminBody .= "お客様より、以下のお問い合わせが届きました。\n";
			$adminBody .= "確認の上、ご対応ください。\n\n";
			$adminBody .= "＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝\n";
			$adminBody .= postToMail($arr); //POSTデータを関数からセット
			$adminBody .= "\n";
			$adminBody .= "送信された日時：" . date("Y/m/d (D) H:i:s", time()) . "\n";
			$adminBody .= "送信者のIPアドレス：" . @$_SERVER["REMOTE_ADDR"] . "\n";
			$adminBody .= "送信者のホスト名：" . getHostByAddr(getenv('REMOTE_ADDR')) . "\n";
			if ($confirmDsp != 1) {
				$adminBody .= "問い合わせのページURL：" . @$_SERVER['HTTP_REFERER'] . "\n";
			} else {
				$adminBody .= "問い合わせのページURL：" . @$arr['httpReferer'] . "\n";
			}
			$adminBody .= "＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝\n\n";
			if ($mailFooterDsp == 1) $adminBody .= $mailSignature;
			return mb_convert_encoding($adminBody, "JIS", $encode);
		}

		//ユーザ宛送信メールヘッダ
		function userHeader($refrom_name, $to, $encode)
		{
			$reheader = "From: ";
			if (!empty($refrom_name)) {
				$default_internal_encode = mb_internal_encoding();
				if ($default_internal_encode != $encode) {
					mb_internal_encoding($encode);
				}
				$reheader .= mb_encode_mimeheader($refrom_name) . " <" . $to . ">\nReply-To: " . $to;
			} else {
				$reheader .= "$to\nReply-To: " . $to;
			}
			$reheader .= "\nContent-Type: text/plain;charset=iso-2022-jp\nX-Mailer: PHP/" . phpversion();
			return $reheader;
		}
		//ユーザ宛送信メールボディ
		function mailToUser($arr, $dsp_name, $remail_text, $mailFooterDsp, $mailSignature, $encode)
		{
			$userBody = '';
			if (isset($arr[$dsp_name])) $userBody = h($arr[$dsp_name]) . " 様\n\n";
			$userBody .= $remail_text;
			$userBody .= "\n＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝\n";
			$userBody .= postToMail($arr); //POSTデータを関数からセット
			$userBody .= "\n";
			$userBody .= "送信日時：" . date("Y/m/d (D) H:i:s", time());
			$userBody .= "\n＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝＝\n\n";
			if ($mailFooterDsp == 1) $userBody .= $mailSignature;
			return mb_convert_encoding($userBody, "JIS", $encode);
		}
		//必須チェック関数
		function requireCheck($require)
		{
			$res['errm'] = '';
			$res['empty_flag'] = 0;
			foreach ($require as $requireVal) {
				$existsFalg = '';
				foreach ($_POST as $key => $val) {
					if ($key == $requireVal) {

						//連結指定の項目（配列）のための必須チェック
						if (is_array($val)) {
							$connectEmpty = 0;
							foreach ($val as $kk => $vv) {
								if (is_array($vv)) {
									foreach ($vv as $kk02 => $vv02) {
										if ($vv02 == '') {
											$connectEmpty++;
										}
									}
								}
							}
							if ($connectEmpty > 0) {
								$res['errm'] .= "<p class=\"error_messe\">【" . h($key) . "】は必須項目です。</p>\n";
								$res['empty_flag'] = 1;
							}
						}
						//デフォルト必須チェック
						elseif ($val == '') {
							$res['errm'] .= "<p class=\"error_messe\">【" . h($key) . "】は必須項目です。</p>\n";
							$res['empty_flag'] = 1;
						}

						$existsFalg = 1;
						break;
					}
				}
				if ($existsFalg != 1) {
					$res['errm'] .= "<p class=\"error_messe\">【" . $requireVal . "】が未選択です。</p>\n";
					$res['empty_flag'] = 1;
				}
			}

			return $res;
		}
		//リファラチェック
		function refererCheck($Referer_check, $Referer_check_domain)
		{
			if ($Referer_check == 1 && !empty($Referer_check_domain)) {
				if (strpos($_SERVER['HTTP_REFERER'], $Referer_check_domain) === false) {
					return exit('<p align="center">リファラチェックエラー。フォームページのドメインとこのファイルのドメインが一致しません。</p>');
				}
			}
		}
		function copyright()
		{
			echo '<a style="display:block;text-align:center;margin:15px 0;font-size:11px;color:#aaa;text-decoration:none" href="http://www.php-factory.net/" target="_blank">- PHP工房 -</a>';
		}
		//----------------------------------------------------------------------
		//  関数定義(END)
		//----------------------------------------------------------------------
?>
