<div>
    <p>mypage</p>
    <button class="button_header" onClick="location.href = 'upload'">MusicUpload</button>
    <button onclick="window.open('index.htm', '_blank', 'width=500,height=500');
            return false;">XXX</button>

    <div class="checkbox">
        <?php if (!empty($genre)): ?>
            <form method="post" action="check">
                <p>ジャンル<br>
                    <?php foreach ($genre as $value) :?>
                        <label><input class="checkbox-inline" type="checkbox" name="genre[]" value="<?php echo $value['genre'];?>"><?php echo $value['genre'];?><br></label>
                    <?php endforeach;?>
                        <input type="submit" value="再生"  name="button1"><br>
                        <input type="submit" value="編集"  name="button2"><br>
            </form>
<?php endif; ?>
    </div>
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
                    onException: function(request) {
                        alert('読み込み中にエラーが発生しました');
                    }
                }
        );
    }
</script>