<div>
    <p>mypage</p>
    <button class="button_header" onClick="location.href = 'music'">MusicUpload</button>
</div>
<script type="text/javascript">
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