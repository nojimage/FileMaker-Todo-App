<?php
class Todo extends AppModel {

    /**
     * クラス名と一緒
     * @var string
     */
    public $name = 'Todo';

    /**
     *
     * @var string
     */
    public $primaryKey = '-recid';

    // -- FMCakeMix独自の属性
    /**
    * デフォルトのレイアウト
    * @var string
    */
    public $defaultLayout = 'WebLayout';

    /**
     * データベース名
     * @var string
     */
    public $fmDatabaseName = 'To Do リスト'; 

    /**
     * 値一覧を取得する場合 true
     * @var boolean
     */
    public $returnValueLists = true;
    
    /**
     * call behavior
     * @var array
     */
    public $actsAs = array('FmValueList');
    
    /**
     * 入力チェック
     * @var array
     */
    public $validate = array('アイテム' => 'notempty');
    
    /**
     * 値一覧のリスト
     * @var array
     */
    public $valueLists = array();
}