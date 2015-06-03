<?php
class AppSchema extends CakeSchema {

    public function before($event = array()) {
        return true;
    }

    public function after($event = array()) {
    }

    public $user = array(
        'id'=>array(
            'type'=>'integer',
            'null'=>false,
            'key'=>'primary',
        ),
        'username'=>array(
            'type'=>'string',
            'null'=>false,
            'default'=>'testusers'
        )
);
    var $comments = array(
        'id' => array(
            'type' => 'integer',
            'null' => false,
            'default' => 0,
            'key' => 'primary'
        ),
        'post_id' => array('type' => 'integer', 'null' => false, 'default' => 0),
        'comment' => array('type' => 'text'),
        'indexes' => array(
            'PRIMARY' => array('column' => 'id', 'unique' => true),
            'post_id' => array('column' => 'post_id'),
        ),
        'tableParameters' => array(
            'engine' => 'InnoDB',
            'charset' => 'latin1',
            'collate' => 'latin1_general_ci'
        )
    );

}
