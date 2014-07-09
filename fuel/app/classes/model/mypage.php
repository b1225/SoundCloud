<?php

use Orm\Model;

class Model_Mypage extends Model {

    protected static $_properties = array(
        'musicid',
        'title',
        'artist',
        'album',
        'album_artist',
        'genre',
        'save_name', 
        'save_path',
        'id',
    );
    

    public static function insert($title, $artist, $album, $album_artist, $genre, $save_name, $save_path, $id) {

        $columns = array('title', 'artist', 'album', 'album_artist', 'genre', 'save_name', 'save_path', 'id');
        $values = array(
        'title' => $title,
        'artist' => $artist,
        'album' => $album,
        'album_artist' => $album_artist,
        'genre' => $genre,
        'save_name' => $save_name,
        'save_path' => $save_path,
        'id' => $id,
        );
        DB::insert('musics')->columns($columns)->values($values)->execute();
    }
    //ユーザーが投稿した音楽一覧
    public static function get_user_music($user)
    {
        $result = DB::select('musicid','title','artist','album','album_artist','genre')->from('musics')->distinct(true)->where('id','=',$user)->execute();
        return $result;
    }
    //ユーザーが投稿したジャンル一覧
    public static function get_user_genre($user)
    {
        $result = DB::select('genre')->from('musics')->distinct(true)->where('id','=',$user)->execute();
        return $result;
    }
    //ユーザーが投稿したアーティスト一覧
    public static function get_user_artist($user)
    {
        $result = DB::select('artist')->from('musics')->distinct(true)->where('id','=',$user)->execute();
        return $result;
    }
    
    //再生する音楽データ取得
    public static function get_music($id)
    {
        $result = DB::select('title','artist','album','album_artist','genre','save_path','save_name')->
                from('musics')->
                where('musicid','=',$id)->
                execute();
        return $result->as_array();
    }
    public static function getOneMusic($save_name) {
        $result = DB::select('title','artist','album','album_artist','genre','save_path','save_name')
                    ->from("music")
                    ->where("save_name", $save_name)
                    ->execute()
                    ->as_array();
        return $result;
    }

}