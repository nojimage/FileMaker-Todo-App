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
	public $defaultLayout = 'all';

	/**
	 * データベース名
	 * @var string
	 */
	public $fmDatabaseName = 'To Do リスト'; 

	/**
	 * 入力チェック
	 * @var array
	 */
	public $validate = array('アイテム' => 'notempty');

	/**
	 * カテゴリの選択オプション
	 * @var array
	 */
	static $categories_options = array('個人' => '個人', '仕事' => '仕事');

	/**
	 * 優先順位の選択オプション
	 * @var array
	 */
	static $priority_options = array('高' => '高', '中' => '中', '低' => '低');

	/**
	 * 状況の選択オプション
	 * @var array
	 */
	static $status_options = array('公開' => '公開', '非公開' => '非公開');

}