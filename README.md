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




## 環境

Valet を使う。

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
```

これで `http://プロジェクト名.test` でアクセス出来る。

Valet については[ここ](https://readouble.com/laravel/6.0/ja/valet.html)を参照。

