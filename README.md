## Laravel_Hey_Drink_Bar

### 環境需求：

-   後端語言及框架：
    -   PHP 8.1.4
    -   Laravel 9.8.1
-   資料庫：
    -   MySQL 5.7 / PostgreSQL 13 任一
-   前端：
    -   不限，介面可以正常操作使用即可

### 訂飲料功能需求：

-   會員系統
    -   註冊、登入、登出
-   訂單系統
    -   發起一個飲料訂單
    -   可自訂訂單標題、上傳飲料菜單圖片
    -   新增飲料品項，並可指定冰量、糖度、數量及備註
    -   刪除飲料品項
    -   檢視訂單狀態
    -   統計飲料數量
    -   結束訂單
-   部署至 GCP，可在 Demo 時直接讓使用者操作
    -   Compute Engine
        -   g1-small 1 vCPU, 1.7 GB
        -   disk: [Balanced persistent disk] 15GB
    -   Cloud SQL - 以最小規格為主
        -   Share core 1 vCPU, 0.614 GB
        -   disk: [SSD] 10 GB
