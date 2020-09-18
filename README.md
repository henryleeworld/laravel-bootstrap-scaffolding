# Laravel 8 Bootstrap 支架

Bootstrap 是一種開源的前端開發框架，提供響應式及行動裝置網頁設計的框架，包含 HTML、CSS 及 JS 等內容，它預先做好一套網站的基礎建設，讓開發者能在該框架的基礎上進行開發，不需要再去煩惱瑣碎的設定。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移。
```sh
$ php artisan migrate
```

- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/register` 來進行註冊。
- 完成註冊後，可以經由 `/login` 來進行登入。

----

## 畫面截圖
![](https://i.imgur.com/G4S4cpt.png)
> 建立新的帳號

![](https://i.imgur.com/89qgvGq.png)
> 使用現有的帳號登入

![](https://i.imgur.com/TO39BpA.png)
> 登入成功後進入預設歡迎頁面
