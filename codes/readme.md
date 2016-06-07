# 书店进销存管理系统

## install 

`npm install`

`bower install`

`grunt`

/application/config/database.php下改自己的密码

## 各部分命名规范

1. 各模块前缀
    1. 基础管理模块：base
    2. 进货管理模块：purchase
    3. 库存管理模块：stock
    4. 销售管理模块：sale
2. 类命名
    mvc中的一个字母 下划线 自定义
    eg: m_user

3. 方法命名
    以下字段_自定义
        增：add
        删：del
        改：change
        查：check
    eg: addUser

4. 方法中参数命名
    第一个字符使用小写字母
    eg: $newPassword

5. 变量命名
    所有字母都小写
    eg: $msg_error