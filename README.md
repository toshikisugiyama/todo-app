# Todo-App



## 構成

1. タスク一覧ページ
2. フォルダ作成ページ
3. タスク作成ページ
4. タスク編集ページ
5. ログインページ
6. 会員登録ページ
7. パスワード再設定メール送信ページ
8. パスワード再設定ページ

### テーブル

テーブル名|項目名|型|長さ|小数|初期値|必須|主キー|外部キー|
|---|---|---|---|---|---|---|---|---|
|folders|id|bigInteger|20|N||Y|Y||
||user_id|bigInteger|20|N||Y||Y|
||title|varchar|20|||Y|||
||created_at|timestamp|||null||||
||updated_at|timestamp|||null||||


テーブル名|項目名|型|長さ|小数|初期値|必須|主キー|外部キー|
|---|---|---|---|---|---|---|---|---|
|tasks|id|bigInteger|20|N||Y|Y||
||folder_id|bigInteger|20|N||Y||Y|
||title|varchar|20|||Y|||
||status|integer|11||1|Y|||
||due_date|date|11|||Y|||
||created_at|timestamp|||null||||
||updated_at|timestamp|||null||||


テーブル名|項目名|型|長さ|小数|初期値|必須|主キー|外部キー|
|---|---|---|---|---|---|---|---|---|
|users|id|bigInteger|20|N||Y|Y||
||name|varchar|255|||Y|||
||email|varchar|255|||Y|||
||email_verified_at|timestamp|20||null|Y|||
||password|varchar|255|||Y|||
||remember_token|varchar|100||null|Y|||
||created_at|timestamp|||null||||
||updated_at|timestamp|||null||||

## 環境

- Laravel Valet 2.5.1
- Laravel Installer 2.1.0
- Laravel Framework 6.4.0
- PHP 7.3.11
- MySQL 5.7.26

### Valet のインストール

```
composer global require laravel/valet
valet install
```

### Laravel のインストール

```
laravel new プロジェクト名
```

### Valet の設定

```
cd プロジェクト名
valet link プロジェクト名
valet start
```

`http://プロジェクト名.test` にアクセス出来る。

Valet については[ここ](https://readouble.com/laravel/6.0/ja/valet.html)を参照。
