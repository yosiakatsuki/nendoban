# nendoban : 粘土板 : Bootstrap 4 ベースのブランクWordPressテーマ

Bootstrap 4ベースで特に機能的なものは入っていない使いやすいテーマがあったほうがいいかな？と思って作ったテーマ

こねくり回す土台のイメージで「粘土板」という名前にしました。

## 使い方

1. テーマをダウンロードします。公式プラグインではないのでGitHubよりダウンロードする
2. 解凍したテーマのフォルダ名を作成するテーマの名前に変更する
3. テーマ内の`nendoban`という関数プレフィックスを作成するテーマのものに一括置換する
4. テーマ内の`NDBN`という定数プレフィックスを作成するテーマのものに一括置換する
5. `inc/config.php`からテーマの設定を行う
6. 管理画面（プラグイン/install plugins）から推奨プラグインをインストールする
7. コーディング
8. リリース時に`inc/config.php`の開発中フラグを`false`にすることを忘れないようにする

## テーマ内でサポートしているプラグイン

* WP-PageNavi
  * https://wordpress.org/plugins/wp-pagenavi/

## Third-party resources

### jQuery
- License : MIT License
- Source  : https://jquery.org/license/

### Bootstrap 4
- License : MIT License
- Source  : https://github.com/twbs/bootstrap

### Font Awesome 5
- Font License: SIL OFL 1.1
- Code License: MIT License
- Source      : https://fontawesome.com/

## Credits
* nendoban is based on Underscores https://underscores.me/, (C) 2012-2017 Automattic, Inc., [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)
