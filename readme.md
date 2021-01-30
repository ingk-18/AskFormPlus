# AskForm
![名称未設定](https://user-images.githubusercontent.com/64448438/106349478-6715ae00-6311-11eb-8ac8-3f00f015c074.jpg)

# 概要
本アプリをタブレット等に組み込み、市役所等の各部署窓口に設置して、お客様自身にマイナンバーと暗証番号を入力していただくと、部署内共有のCHATWORKルームに通知が入るため、職員がマイナンバーを基に担当者を検索して対応するというものです。

# なぜこのアプリを作ったか
市役所等の窓口では、お客様がいらっしゃるたびに、職員が作業を中断して対応しなければなりません。また各部署でお客様に対応する担当職員も様々であるため、窓口で対応した職員から担当者が対応するまでに時間を要してしまい、お客様をお待たせしてしまうため。

# URL
http://cats-latte.work/ask/index
<br>
画面下のユーザー及び管理者をご利用ください。

# 機能一覧
* ログイン機能
* ユーザー情報編集機能（CRUD）
* ChatWorkへ自動投稿機能（Charwork API）
![名称未設定](https://user-images.githubusercontent.com/64448438/106349502-9fb58780-6311-11eb-92a3-310689b0c9d5.jpg)


# 使用技術
* PHP 7.4.7
* Laravel 6.18.38
* Mysql
* AWS (EC2, RDS, VPC, Route53)
* Bootstrap
* Docker/docker-compose
* Nginx
* Git, GitHub

# ネットワーク構成図
![AWS構成図](https://user-images.githubusercontent.com/64448438/106349515-c07ddd00-6311-11eb-910c-903bd5852cc7.png)
