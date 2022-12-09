# 公佈欄練習

### 取得公佈欄資料
Api Url: /api/boards  
Api 呼叫方式: GET  
不用丟參數，執行流程為開啟網站呼叫cotroller資料丟給view做顯示  

### 新增公佈欄資料
Api Url: /api/boards  
Api 呼叫方式: POST  
header:  
Content-Type: application/x-www-form-urlencoded; charset=UTF-8  
body:  
title string required 標題  
desc string required  內文  
### Response
{code: '1'}

### 修改公佈欄資料
Api Url: /api/boards/{id}  
Api 呼叫方式: PUT  
header:  
Content-Type: application/x-www-form-urlencoded; charset=UTF-8  
body:  
no string required 判斷修改哪筆資料  
title string required 標題  
desc string required  內文  
### Response
{code: '1'}

### 刪除公佈欄資料
Api Url: /api/boards/{id}  
Api 呼叫方式: DELETE  
header:  
Content-Type: application/x-www-form-urlencoded; charset=UTF-8  
body:  
no string required 判斷刪除哪筆資料  
### Response
{code: '1'}
