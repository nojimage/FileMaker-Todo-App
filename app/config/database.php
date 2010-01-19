<?php
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
        'prefix' => '',                 // テーブル接頭詞
        'encoding' => 'UTF-8'           // データベース文字エンコーディング
    );

    public $mysql = array(
        'driver' => 'mysql',      // datasouceの指定
        'persistent' => false,    // 持続的接続を使うか（使えないので使わない）
        'host' => '127.0.0.1',    // サーバホスト名(環境により変更)
        'login' => 'elastic',     // DB接続アカウント ユーザ名(環境により変更)
        'password' => 'elastic',  // DB接続アカウント パスワード(環境により変更)
        'port' => 3306,
        'database' => 'test',     // DB名(環境により変更)
        'prefix' => ''            // テーブル接頭詞
    );

}
