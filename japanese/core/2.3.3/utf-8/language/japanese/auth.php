<?php
// $Id: auth.php 2008-07-29 06:05+09:00 2 8 6 $
//%%%%%%		File Name auth.php 		%%%%%

define('_AUTH_MSG_AUTH_METHOD',"%s 認証を使います");
define('_AUTH_LDAP_EXTENSION_NOT_LOAD','PHP LDAP extension がありません(php.ini等で確認してください)');
define('_AUTH_LDAP_SERVER_NOT_FOUND',"サーバに接続できません");
define('_AUTH_LDAP_USER_NOT_FOUND',"メンバー %s は、このディレクトリサーバ(%s) から見つかりませんでした(%s内)");
define('_AUTH_LDAP_CANT_READ_ENTRY',"%sのエントリが読み込めません");
define('_AUTH_LDAP_XOOPS_USER_NOTFOUND',"該当するユーザ情報を、XOOPSデータベースから読み込めませんでした: %s ");
define('_AUTH_LDAP_START_TLS_FAILED',"TLS 接続に失敗しました");

?>