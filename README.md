# Lumen (5.3.3)
laravel製軽量フレームワーク Lumen を使ってみる。

※ Laravel Components 5.3.*

## 必要条件

* PHP >= 5.6.4
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension

## Lumenをインストールする

GitBucketからコードをクローンし、composerを使ってLumen本体と各種ライブラリを配置します。

※ vendorフォルダ内にインストールされます。

**開発環境の場合)**
```
$ git clone git@bitbucket.org:reflet/app-lumen.git .
$ composer create-project
```

**本番環境の場合)**
```
$ git clone git@bitbucket.org:reflet/app-lumen.git .
$ composer install
```

## アプリケーションキーを作成しよう

.envファイルの3行目にある「APP_KEY」にセットする32文字のランダムな英数字を作成しましょう。

下記方法にて、artisanコマンドを使えるようにする。

下記URLで配布されている「KeyGenerateCommand.php」を配置する
https://gist.github.com/krisanalfa/0407dd822f2888226f45
```
app/Console/Commands/KeyGenerateCommand.php
```

app\Console\Kernel.phpに下記を追加する
```
protected $commands = [
    'App\Console\Commands\KeyGenerateCommand',
];
```

コマンドでアプリケーションキーを作成する
```
$ php artisan key:generate
Application key [********************************] set successfully.
```