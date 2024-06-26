<p align="center">
  <img src="https://cdn-icons-png.flaticon.com/512/6295/6295417.png" width="100" />
</p>
<p align="center">
    <h1 align="center">KD-WORDPRESS-PLUGIN-DEV</h1>
</p>
<p align="center">
    <em>WordPressプラグイン開発のテンプレート</em>
</p>
<p align="center">
	<img src="https://img.shields.io/github/license/KoseiDaimon/kd-wordpress-plugin-dev?style=flat&color=0080ff" alt="license">
	<img src="https://img.shields.io/github/last-commit/KoseiDaimon/kd-wordpress-plugin-dev?style=flat&logo=git&logoColor=white&color=0080ff" alt="last-commit">
	<img src="https://img.shields.io/github/languages/top/KoseiDaimon/kd-wordpress-plugin-dev?style=flat&color=0080ff" alt="repo-top-language">
	<img src="https://img.shields.io/github/languages/count/KoseiDaimon/kd-wordpress-plugin-dev?style=flat&color=0080ff" alt="repo-language-count">
<p>
<p align="center">
		<em>Developed with the software and tools below.</em>
</p>
<p align="center">
	<img src="https://img.shields.io/badge/JavaScript-F7DF1E.svg?style=flat&logo=JavaScript&logoColor=black" alt="JavaScript">
	<img src="https://img.shields.io/badge/PostCSS-DD3A0A.svg?style=flat&logo=PostCSS&logoColor=white" alt="PostCSS">
	<img src="https://img.shields.io/badge/Autoprefixer-DD3735.svg?style=flat&logo=Autoprefixer&logoColor=white" alt="Autoprefixer">
	<img src="https://img.shields.io/badge/Sass-CC6699.svg?style=flat&logo=Sass&logoColor=white" alt="Sass">
	<img src="https://img.shields.io/badge/sharp-99CC00.svg?style=flat&logo=sharp&logoColor=white" alt="sharp">
	<img src="https://img.shields.io/badge/PHP-777BB4.svg?style=flat&logo=PHP&logoColor=white" alt="PHP">
	<img src="https://img.shields.io/badge/JSON-000000.svg?style=flat&logo=JSON&logoColor=white" alt="JSON">
</p>
<hr>

## 概要

KD-WORDPRESS-PLUGIN-DEV は、npm scriptsを使用した WordPress プラグイン開発のテンプレートです。
タスクの自動化（タスクランナー）を主な機能としております。

WordPress 環境は、別途構築する必要があります。
このディレクトリを `/wp-content/plugins/` の直下に配置するだけです。

## 特徴

- **シンプルなディレクトリ構成**
  とにかくわかりやすいディレクトリ構成にしました。
  使いやすくて汎用性は高いと思います。

- **ホットリロード**
  開発中にブラウザを手動で更新することなく、最新の状態を確認できます。

- **Sass のコンパイル**
  Sass をコンパイルします。
  Dart Sass 対応です。

- **CSSの最適化**
  コンパイルしたCSSを最適化します。
  - プレフィックス付与
  - メディアクエリーをまとめる
  - SMACSSに基づいてソート
  - ２重で記載されているCSSの削除
  - @Charsetの自動付与
  - 圧縮

- **画像の最適化**
  画像を自動的に圧縮・Webp化できます。

- **JavaScriptの最適化**
  JavaScriptを最適化します。

- **オプション（環境変数）**
  `config.js` ファイルを編集することで、多少カスタマイズできるようにしています。
  - 画像・JavaScript・Sassのソースの指定
    ```
    src: {
      images: "src/images",
      js: "src/js",
      sass: "src/scss",
    },
    ```

  - 画像・JavaScript・Sassの出力先の指定
    ```
    dist: {
      images: "assets/images",
      js: "assets/js",
      css: "assets/css",
    },
    ```

  - Webpへ変換するか（true, false）
    ```
    convertToWebp: true,
    ```

  - 画像の品質（0~100）
    ```
    imageQuality: 80,
    ```

  - 画像の最大横幅（pxの数値）
    ```
    maxWidth: 1920,
    ```

  - CSSを圧縮するか（true, false）
    ```
    minifyCss: true,
    ```

  - ログの出力レベル（debug, info, warn, error）
    ```
    logLevel: "debug",
    ```

## Repository Structure

```sh
└── kd-wordpress-plugin-dev/
    ├── 404.php
    ├── README.md
    ├── archive.php
    ├── config.js
    ├── footer.php
    ├── front-page.php
    ├── functions.php
    ├── header.php
    ├── home.php
    ├── index.php
    ├── package-lock.json
    ├── package.json
    ├── page.php
    ├── scripts
    │   ├── build
    │   │   ├── optimizeImages.js
    │   │   ├── optimizeJs.js
    │   │   ├── optimizeSass.js
    │   │   └── removeDist.js
    │   ├── dev
    │   │   ├── compileSass.js
    │   │   ├── syncImages.js
    │   │   └── syncJs.js
    │   └── utils
    │       ├── FileSystemHelper.js
    │       ├── Logger.js
    │       ├── PostCssProcessor.js
    │       └── ScssProcessor.js
    ├── sidebar.php
    ├── single.php
    ├── src
    │   ├── images
    │   │   ├── common
    │   │   │   └── logo.png
    │   │   └── front-page
    │   │       ├── fire.heic
    │   │       └── water.jpg
    │   ├── js
    │   │   ├── components
    │   │   │   ├── scroll-to-top.js
    │   │   │   └── smooth-scroll.js
    │   │   └── main.js
    │   └── scss
    │       ├── _global
    │       │   ├── _functions.scss
    │       │   ├── _index.scss
    │       │   └── _variables.scss
    │       ├── common
    │       │   ├── common.scss
    │       │   ├── foundation
    │       │   │   ├── _base.scss
    │       │   │   ├── _destyle.min.scss
    │       │   │   └── _index.scss
    │       │   ├── layout
    │       │   │   ├── _index.scss
    │       │   │   ├── _l-.scss
    │       │   │   ├── _l-contents.scss
    │       │   │   ├── _l-footer.scss
    │       │   │   ├── _l-header.scss
    │       │   │   └── _l-inner.scss
    │       │   └── object
    │       │       ├── component
    │       │       ├── project
    │       │       └── utility
    │       └── front-page
    │           ├── foundation
    │           │   ├── _base.scss
    │           │   ├── _destyle.min.scss
    │           │   └── _index.scss
    │           ├── front-page.scss
    │           ├── layout
    │           │   ├── _index.scss
    │           │   ├── _l-.scss
    │           │   ├── _l-contents.scss
    │           │   ├── _l-footer.scss
    │           │   ├── _l-header.scss
    │           │   └── _l-inner.scss
    │           └── object
    │               ├── component
    │               ├── project
    │               └── utility
    └── style.css
```

## 使い方

**_必須環境_**

以下の環境が必要です。

- **Node.js**
- **npm or yarn**

### インストール

1. お好きなWordPress環境を構築してください。
[Local](https://localwp.com/)や、下記Docker環境などで構築できます。
https://github.com/KoseiDaimon/kd-wordpress-docker-dev

2. Clone または、[ダウンロード](https://github.com/KoseiDaimon/kd-wordpress-plugin-dev/archive/refs/heads/main.zip)します。

コマンドで行う場合 :
構築済みの WordPress 環境の、`/wp-content/plugins/` にて下記コマンドを実行してください。

```sh
git clone https://github.com/KoseiDaimon/kd-wordpress-plugin-dev
```

コマンドで行わない場合 :
[こちら](https://github.com/KoseiDaimon/kd-wordpress-plugin-dev/archive/refs/heads/main.zip)から、ダウンロードしてください。
ダウンロードしたら解凍してください。

1. WordPress プラグインの基本設定

設置した`kd-wordpress-plugin-dev`ディレクトリ名を、自作テーマ名に変更します。
`kd-wordpress-plugin-dev.php`内の`Plugin Name`などを変更します。
`kd-wordpress-plugin-dev.php`のファイル名も変更します。

```php
/**
 * Plugin Name: KD WordPress Plugin Dev
 * Description: 大門光星のプラグイン開発テンプレートです。
 * Version: 1.0
 */
```

1. プロジェクトのディレクトリ内で、必要なパッケージをインストールします。

```sh
npm i
```

### 初期設定

`config.js`で設定を行います。

1. `config.server.url`を、既存のWordPress環境のURLに設定します。
  ```javascript
  server: {
    url: "http://localhost:8001",
  },
  ```

2. `config.src`に指定したディレクトリ内で、開発してください。
  変更可能です。
  ```javascript
  src: {
    images: "src/images",
    js: "src/js",
    sass: "src/scss",
  },
  ```

3. `config.dist`に指定したディレクトリ内に出力されます。
  変更可能です。
  ```javascript
  dist: {
    images: "assets/images",
    js: "assets/js",
    css: "assets/css",
  },
  ```

4. `config.options`を好きな設定にします。
  ```javascript
  options: {
    convertToWebp: true,
    imageQuality: 80,
    maxWidth: 1920,
    minifyCss: true,
    logLevel: "debug",
  },
  ```

5. 下記コマンドで、開発を開始・再開できます。
  自動で`config.server.url`に設定したサーバーのサイトが開かれます。
  `.php`や`config.src`内のファイルを編集すると、ホットリロードされます。
  開発中は、SassはCSSにコンパイル・ソースマップが出力され、JSと画像はそのまま出力されます。
  ```sh
  npm run dev
  ```

1. [<kbd>Ctrl</kbd> + <kbd>c</kbd>] で、開発を中断できます。

2. 開発が終了したら、下記コマンドで最適化できます。
  CSS、JS、画像が最適化されます。
  CSSのソースマップは出力されません。
  `config.src.images`内のファイルは、`.jpeg`, `.jpg`, `.png`, `.webp`, `.gif`, `.avif`, `.tiff`, `.svg`以外は、そのままコピーされます。
  ```sh
  npm run build
  ```
