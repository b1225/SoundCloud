<?php

namespace Fuel\Migrations;

class Create_musics {

    public function up() {
        \DBUtil::create_table('musics', array(
            'musicid' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
            'title' => array('type' => 'text'),
            'artist' => array('type' => 'text'),
            'album' => array('type' => 'text'),
            'album_artist' => array('type' => 'text'),
            'genre' => array('type' => 'text'),
            'save_name' => array('type' => 'text'),
            'save_path' => array('type' => 'text'),
            'id' => array('constraint' => 11, 'type' => 'int', 'unsigned' => true),
             ),
                array('musicid'), true, 'InnoDB', null, array(
                    array(
                        'key' => 'id',
                        'reference' => array(
                            'table' => 'users',
                            'column' => 'id'
                            )
                        )
                    )
                );
    }

    public function down() {
        \DBUtil::drop_table('musics');
    }

}
