<?php

/**
 * The Welcome ajax rest controller.
 *
 * @package  app
 * @author   MT2 Team
 * @extends  Controller_Rest
 * 
 * 説明：ajaxリクエスト用
 */
class Controller_Ajax extends Controller_Rest {

    /**
     * @brief   [曲の再生後処理]
     * @param   [musicname] [曲名]
     * @param   [musicinfo] [曲情報]
     * @access  public
     * @return  Response
     */
    public function post_musicoperate() {
        $musicname = $_POST['name'];

        // 曲情報を取得
        $musicinfo = Model_Music::getOneMusic($musicname);

       
    }
}
?>