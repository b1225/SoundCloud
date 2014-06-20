<?php

class Controller_Mypage extends Controller_Template {

    function action_index() {
        // titleの設定
        $this->template->title = 'MyPage';
        // viewの適用
        $this->template->content = View::forge('mypage/index');
        //ログイン中のユーザーID取得
        $userid = Auth::get_user_id()[1];
        //ユーザーが投稿したジャンル取得
        $genre = Model_Mypage::get_genre($userid);
        //ユーザーが投稿したアーティスト取得
        $all_music = Model_Mypage::get_music($userid);
        //ユーザーが投稿したアーティスト取得
        $artist = Model_Mypage::get_artist($userid);

        //viewに渡す
        $this->template->content->set_safe('all_music', $all_music->as_array());
        $this->template->content->set_safe('genre', $genre->as_array());
        $this->template->content->set_safe('artist', $artist->as_array());
    }

    function action_upload() {
        $files = Input::post('title');
        // titleの設定
        $this->template->title = 'Music_upload';
        // viewの適用
        $this->template->content = View::forge('mypage/upload');
        if (is_null($files)) {
            
        } else {
            $token = Input::post('token');
            // 送信されたトークンがセッションのトークン配列の中にあるか調べる
            if (Session::get($token) === $token) {
                // 正常な POST
                $message = '';
                // 初期設定
                $config = array(
                    'path' => DOCROOT . 'uploadmusic',
                    'randomize' => true,
                    'ext_whitelist' => array('mp3'),
                );


                // cofigを適用
                Upload::process($config);
                // 指定された型かチェック
                if (Upload::is_valid()) {
                    // アップロード確定
                    Upload::save();

                    foreach (Upload::get_files() as $file) {
                        //ファイル情報を使用した処理

                        if (Input::method() == 'POST') {

                            $message = 'Upload完了';
                            Session::delete($token); // 使用済みトークンを破棄
                            //投稿するユーザーのID取得
                            $id = Auth::get_user_id();
                            $filename = DOCROOT . 'uploadmusic/' . $file['saved_as'];
                            $getID3 = new getId3();
                            $music_temp = $getID3->analyze($filename);
                            getid3_lib::CopyTagsToComments($music_temp);
                            $music = $music_temp["tags"]["id3v2"];
                            //モデルに保存したファイル名とファイルパスを渡す
                            Model_Mypage::insert($music['title'], $music['artist'], $music['album'], $music['band'], $music['genre'], $music_temp['filename'], $music_temp['filepath'], $id[1]);

                            $this->template->content->set_safe('message', $message);
                        }
                    }
                } else {

                    // error処理
                    foreach (Upload::get_errors() as $error) {
                        $message .= $error['errors'][0]['message'] . '<br />';
                    }

                    $this->template->content->set_safe('message', $message);
                }
            } else {
                $message = 'トークンが不正です';
                $this->template->content->set_safe('message', $message);
            }
        }
    }

    function action_music() {
        // titleの設定
        $this->template->title = 'MyPage';
        // viewの適用
        $this->template->content = View::forge('mypage/music');
        $genre = Input::post('genre');
        var_dump($genre);
        exit;
    }

    function action_check() {
        $genre = Input::post();
        if (isset($_POST['playback'])) {
            //再生処理
            var_dump($genre);
            exit;
        } elseif (isset($_POST['edit'])) {
            //編集処理
        }
    }

}
