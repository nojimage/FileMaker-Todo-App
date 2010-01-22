<?php
/**
 * Todo Model
 *
 * PHP versions 5
 *
 * Copyright 2010, ELASTIC Consultants Inc. (http://elasticconsultants.com/)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @package    app
 * @subpackage app.models
 * @author     nojimage <nojimage at gmail.com>
 * @copyright  2010 ELASTIC Consultants Inc.
 * @license    http://www.opensource.org/licenses/mit-license.php The MIT License
 *
 */
class Todo extends AppModel {

    /**
     * クラス名と一緒
     *
     * @var string
     */
    public $name = 'Todo';

    /**
     * プライマリキー
     *
     * @var string
     */
    public $primaryKey = '-recid';

    // -- FMCakeMix独自の属性 ここから
    /**
    * デフォルトのレイアウト
    *
    * @var string
    */
    public $defaultLayout = 'WebLayout';

    /**
     * データベース名
     *
     * @var string
     */
    public $fmDatabaseName = 'To Do リスト'; 

    /**
     * 値一覧を取得する場合 true
     *
     * @var boolean
     */
    public $returnValueLists = true;

    // -- FMCakeMix独自の属性 ここまで

    /**
     * 値一覧を取得するビヘイビアをセット
     * 
     * @var array
     */
    public $actsAs = array('FmValueList');

    /**
     * 値一覧のリスト格納用
     * 
     * @var array
     */
    public $valueLists = array();

    /**
     * 入力チェック
     * @var array
     */
    public $validate = array('アイテム' => 'notempty');

}