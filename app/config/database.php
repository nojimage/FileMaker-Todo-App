<?php
/**
 * This is core configuration file.
 *
 * Use it to configure core behaviour ofCake.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app.config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
/**
 * 
 * @author nojima
 *
 */
class DATABASE_CONFIG {

    public $default = array(
        'driver' => 'fmcakemix',        // datasouceの指定
        'persistent' => false,          // 持続的接続を使うか（使えないので使わない）
        'dataSourceType' => 'FMPro7',   // FileMakerデータベースのバージョン
        'scheme' => 'http',             // FMS接続プロトコル
        'port' => 16080,                // FMS接続ポート(環境により変更)
        'host' => '127.0.0.1',          // FMSサーバホスト名(環境により変更)
        'login' => 'Admin',             // DB接続アカウント ユーザ名(環境により変更)
        'password' => 'admin',          // DB接続アカウント パスワード(環境により変更)
        'database' => 'To Do リスト',    // DB名(環境により変更)
        'encoding' => 'UTF-8'           // データベース文字エンコーディング
    );

}
