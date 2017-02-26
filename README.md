# Lumen (5.4.4)
laravel製軽量フレームワーク Lumen を使ってみる。

※ Laravel Components 5.4.*

## 必要条件

* PHP >= 5.6.4
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension

## コードを配置する

GitBucketからコードをクローンすることで配置します。
```
$ git clone git@bitbucket.org:reflet/php-lumen.git .
```
※ sshを利用する場合は、SSH認証キーの登録が必要です。

## Lumenをインストールする

composerを使ってLumen本体と各種ライブラリを配置します。

```
$ composer update
```
※ vendorフォルダ内にインストールされます。

## 使い始める前の準備

環境設定ファイルを作成します。
ルート直下にある「.env.example」をコピーして「.env」を作成します。
※ セキュリティの関係上、「.env」ファイルはバージョン管理の対象外としてください。
```
$ cp .env.example .env
```