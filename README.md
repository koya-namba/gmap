# Memory spot
記憶に残った場所を地図とともに記録できるアプリケーション．  
登録するのは名前と住所だけでシンプル．  
地図には今まで記録した全てのスポットにピンが立っている．  

# DEMO
こちらで試すことができます．  
(今は使用することができません)

# Features
以下にwebアプリの画面を紹介する．
<img width="1271" alt="スクリーンショット 2023-01-03 12 25 28" src="https://user-images.githubusercontent.com/82089820/210296530-8295e476-36fd-4a78-9635-bd940fac88c8.png">

# Requirement
- php: ^8.0.2
- guzzlehttp/guzzle: ^7.2
- laravel/framework: ^9.19
- laravel/sanctum: ^3.0
- laravel/tinker: ^2.7

# Installation
インストールと初期設定
```bash
git clone git@github.com:koya-namba/gmap.git
cd gmap
composer install
cp .env.example .env
php artisan key:generate
```

.envの中身を設定
```.env
DB_DATABASE={db_name}
DB_USERNAME={db_username}
DB_PASSWORD={db_password}
```

マイグレーションとシーディングを実行して，サーバを起動
```bash
php artisan migrate:fresh --seed
php artisan serve --port=8080
```

# Note
作成中のアプリのためバグがあった際には下記まで連絡をお願いします．

# Author
- 作成者: 難波洸也
- 所属: 九州大学システム情報科学府
- E-mail: namba.koya@arakawa-lab.com

# License
"Memory spot" is under MIT license.