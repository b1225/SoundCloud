
<div class="widewrapper main">
    <div class="container">
        <div class="row">
            <div class='row'>
                <form method="post" action="music">
                    <div class="tabbable">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#all" data-toggle="tab">all</a></li>
                            <li><a href="#artist" data-toggle="tab">artist</a></li>
                            <li><a href="#genre" data-toggle="tab">genre</a></li>
                        </ul>
                        <div class="max-height-75">
                            <div id="my-tab-content" class="tab-content">
                                <div class="tab-pane fade in active max-height-75" id="all">
                                    <div class="scr-box">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="table-check"><input type="checkbox" name="all_check" value="all" id="all_check"></th>
                                                    <th class="table-data">title</th>
                                                    <th class="table-data">artist</th>
                                                    <th class="table-data">album</th>
                                                    <th class="table-data">album_artist</th>
                                                    <th class="table-data">genre</th>
                                                </tr>
                                            </thead>
                                        </table>
                                        <div class="scr">
                                            <table class="table">
                                                <tbody>
                                                    <?php if (isset($all_music)) : ?>
                                                        <?php foreach ($all_music as $value): ?>
                                                            <tr>
                                                                <td class="table-check"><input type="checkbox" name="all_music[]" value="<?php echo $value['musicid'] ?>"></td>
                                                                <td class="table-data"><div class="area"><?php echo $value['title']; ?></div></td>
                                                                <td class="table-data"><div class="area"><?php echo $value['artist']; ?></div></td>
                                                                <td class="table-data"><div class="area"><?php echo $value['album']; ?></div></td>
                                                                <td class="table-data"><div class="area"><?php echo $value['album_artist']; ?></div></td>
                                                                <td class="table-data"><div class="area"><?php echo $value['genre']; ?></div></td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="artist">
                                    <div class="scr-box">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="table-check"><input type="checkbox" name="artist_check" value="" id="artist_check"></th>
                                                    <th class="table-data">artist</th>
                                                </tr>
                                            </thead>
                                        </table>
                                        <div class="scr">
                                            <table class="table">
                                                <tbody>
                                                    <?php if (isset($artist)) : ?>
                                                        <?php foreach ($artist as $value): ?>
                                                            <tr>
                                                                <td class="table-check"><input type="checkbox" name="all_artist[]" value=""></td>
                                                                <td class="table-data"><div class="area"><?php echo $value['artist']; ?></div></td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="genre">
                                    <div class="scr-box">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th class="table-check"><input type="checkbox" name="album_check" value="all" id="album_check"></th>
                                                    <th class="table-data">album</th>
                                                </tr>
                                            </thead>
                                        </table>
                                        <div class="scr">
                                            <table class="table">
                                                <tbody>
                                                    <?php if (isset($genre)) : ?>
                                                        <?php foreach ($genre as $value): ?>
                                                            <tr>
                                                                <td class="table-check"><input type="checkbox" name="all_album[]" value=""></td>
                                                                <td class="table-data"><div class="area"><?php echo $value['genre']; ?></div></td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 margin-top-2 margin-bottom-2 music_button text-right">
                        <input type="submit" value="開く">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--
<button onclick="window.open('index.htm', '_blank', 'width=500,height=500');
        return false;">XXX</button>

<div class="checkbox">
<?php if (!empty($genre)): ?>
                                    <form method="post" action="check">
                                        <p>ジャンル<br>
    <?php foreach ($genre as $value) : ?>
                                                                            <label><input class="checkbox-inline" type="checkbox" name="genre[]" value="<?php echo $value['genre']; ?>"><?php echo $value['genre']; ?><br></label>
    <?php endforeach; ?>
                                                <input type="button" value="Post" onclick="openWindowAndPost()"/>
                                                <input type="submit" value="再生"  name="button1" onclick="music()"><br>
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
function openWindowAndPost()
{
    window.open('music.php','formpost','width=800,height=600,scrollbars=yes');
    var form = document.form1;
    form.action = '/music.php';
    form.target = 'formpost';
    form.method = 'post';
    form.submit();
}
</script>