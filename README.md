# Lumen (5.4.4)
laravel製軽量フレームワーク Lumen を使ってみる。

※ Laravel Components 5.4.*

## 必要条件

* PHP >= 5.6.4
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension

## コードを配置する

GitHubからコードをクローンすることで配置します。

```
$ git clone https://github.com/reflet/app-lumen.git .
```

## Lumenをインストールする

composerを使ってLumen本体と各種ライブラリを配置します。

```
$ composer update
$ composer set-env
```
※ vendorフォルダ内にインストールされます。
※ .envファイル作成

