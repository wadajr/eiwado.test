# eiwado.space/

> ブックスペース栄和堂Webサイト

## Jekyll + GitHub Pagesを使った更新

### 0. 一番最初だけの作業

GitHubリモートレポジトリからgitレポジトリを`clone`する。

```
$ git clone git@github.com:eiwado/eiwado.github.io.git
$ cd eiwado.github.io
```

依存ライブラリのインストール

```
$ bundle install --path vendor/bundle
```

### 1. 更新作業

まず。手元でローカルサーバを立ち上げてプレビュー出来るようにする。

```
$ bundle exec jekyll serve --watch
```

とするとサーバが立ち上がるので、Webブラウザから`http://localhost:4000/`へアクセス。

いよいよ更新。テキストエディタで`index.md`などを編集し、`git`の`commit`をする。

```
$ git commit -am 'XXXXXXXXXX'
```

`XXXXXXXXXX`にはコミットメッセージを入れる。日本語でもOK。

`master`に`push`すると本番ページが自動的に更新される。

```
$ git push origin master
```


