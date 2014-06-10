<?php

class Controller_Top extends Controller_Template {

    public function action_index() {
        // titleの設定
        $this->template->title='SoundCloud';
        // viewの適用
        $this->template->content = View::forge('top/index');
    }

    public function action_404() {
        // titleの設定
        $this->template->title='error';
        // viewの適用
        $this->template->content = View::forge('top/404');
    }

}
