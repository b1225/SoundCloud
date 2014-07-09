<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title><?php echo $title;?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Bootstrap styles -->
        <?php echo Asset::css('bootstrap.css'); ?>
        <?php echo Asset::css('bootstrap-theme.css'); ?>

        <!-- JavaScript -->
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <?php echo Asset::js('jquery-1.9.1.js'); ?>
        <?php echo Asset::js('SoundCloud.js'); ?>
        <?php echo Asset::js('prototype.js'); ?>
        
        <?php echo Asset::js('bootstrap.js'); ?>
        <!-- Font-Awesome -->

        <!-- Google Webfonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600|PT+Serif:400,400' rel='stylesheet' type='text/css'>

        <!-- Styles -->
        <?php echo Asset::css('soundcloud.css') ?>

        <!--[if lt IE 9]>
            <link rel="stylesheet" href="css/ie8.css">        
            <script src="js/vendor/google/html5-3.6-respond-1.1.0.min.js"></script>
        <![endif]-->

    </head>
    <header>
        <div id="header">
            <div class="container">
                <button class="button_header" onClick="location.href = '<?php echo Uri::base();?>'">Home</button>
                <?php if (Auth::check()) : ?>
                <button class="button_header" onClick="location.href = '/mypage/index'"><i class="glyphicon glyphicon-home"></i> Mypage</button>
                <button class="button_header" onClick="location.href = '/mypage/upload'">MusicUpload</button>
                <button class="button_header" onClick="location.href = '/auth/logout'">Logout</button>
                <?php else : ?>
                    <button class="button_header" onClick="location.href = '/auth/usercreate'">ユーザ登録</button>
                    <button class="button_header" onClick="location.href = '/auth/login/'">Login</button>
                <?php endif; ?>

            </div>
        </div>

        
    </header>
    <body>

        <div id="body">
                <?php echo $content; ?>
            
        </div>
    </body>
    <footer>
        <div id="footer">
            <div class="container">
                <p>asdf</p>
            </div>
        </div>
    </footer>
</html>
<script type="text/javascript">
function ajax_home() {
	var a = new Ajax.Updater(
		"body",
		"/top/index.php",
		{
			"method": "get",
			"parameters": "a=b&c=d&e=f",
			onSuccess: function(request) {
				// 成功時の処理を記述
				// alert('成功しました');
				// jsonの値を処理する場合↓↓
				//  var json;
				//  eval("json="+request.responseText);
			},
			onComplete: function(request) {
				// 完了時の処理を記述
				// alert('読み込みが完了しました');
				// jsonの値を処理する場合↓↓
				//  var json;
				//  eval("json="+request.responseText);
			},
			onFailure: function(request) {
				alert('読み込みに失敗しました');
			},
			onException: function (request) {
				alert('読み込み中にエラーが発生しました');
			}
		}
	);
}
function ajax_mypage() {
	var a = new Ajax.Updater(
		"body",
		"/mypage/index.php",
		{
			"method": "get",
			"parameters": "a=b&c=d&e=f",
			onSuccess: function(request) {
				// 成功時の処理を記述
				// alert('成功しました');
				// jsonの値を処理する場合↓↓
				//  var json;
				//  eval("json="+request.responseText);
			},
			onComplete: function(request) {
				// 完了時の処理を記述
				// alert('読み込みが完了しました');
				// jsonの値を処理する場合↓↓
				//  var json;
				//  eval("json="+request.responseText);
			},
			onFailure: function(request) {
				alert('読み込みに失敗しました');
			},
			onException: function (request) {
				alert('読み込み中にエラーが発生しました');
			}
		}
	);
}
function ajax_mypage_upload() {
	var a = new Ajax.Updater(
		"body",
		"/mypage/upload.php",
		{
			"method": "get",
			"parameters": "a=b&c=d&e=f",
			onSuccess: function(request) {
				// 成功時の処理を記述
				// alert('成功しました');
				// jsonの値を処理する場合↓↓
				//  var json;
				//  eval("json="+request.responseText);
			},
			onComplete: function(request) {
				// 完了時の処理を記述
				// alert('読み込みが完了しました');
				// jsonの値を処理する場合↓↓
				//  var json;
				//  eval("json="+request.responseText);
			},
			onFailure: function(request) {
				alert('読み込みに失敗しました');
			},
			onException: function (request) {
				alert('読み込み中にエラーが発生しました');
			}
		}
	);
}
</script>