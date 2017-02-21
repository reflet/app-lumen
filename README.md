# Lumen (5.3.2) 

laravel製軽量フレームワーク Lumen を使ってみる。

※ Laravel Components 5.3.*

## 必要条件

* PHP >= 5.4
* Mcrypt PHP Extension
* OpenSSL PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP ExtensionS

## コードを配置する

GitBucketからコードをクローンすることで配置します。
```
$ git clone git@bitbucket.org:reflet/php-lumen.git .
```
※ sshを利用する場合は、SSH認証キーの登録が必要です。

## Lumenをインストールする

composerを使ってLumen本体と各種ライブラリを配置します。

```
$ php composer.phar update
```
※ vendorフォルダ内にインストールされます。

## 使い始める前の準備

環境設定ファイルを作成します。
ルート直下にある「.env.example」をコピーして「.env」を作成します。
※ セキュリティの関係上、「.env」ファイルはバージョン管理の対象外としてください。
```
$ cp .env.example .env
```

## アプリケーションキーを作成しよう

.envファイルの3行目にある「APP_KEY」にセットする32文字のランダムな英数字を作成しましょう。

※ アプリケーションキーは暗号化のキーとして利用されるため、暗号化された値が保存された後は変更してはいけません。

下記方法にて、artisanコマンドを使えるようにする。

1. 下記URLで配布されている「KeyGenerateCommand.php」を配置する
https://gist.github.com/krisanalfa/0407dd822f2888226f45
```
app/Console/Commands/KeyGenerateCommand.php
```

2. app\Console\Kernel.phpに下記を追加する
```
protected $commands = [
    'App\Console\Commands\KeyGenerateCommand',
];
```

3. コマンドでアプリケーションキーを作成する
```
$ php artisan key:generate
Application key [********************************] set successfully.
```
