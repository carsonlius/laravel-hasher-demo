[![Build Status](https://travis-ci.org/carsonlius/laravel-hasher-demo.svg?branch=master)](https://travis-ci.org/carsonlius/laravel-hasher-demo)
### package简要说明  

> 简单的实现md5加密校验的功能并通过service provider嵌入laravel系统

### 安装

+ composer require carsonlius/hasher

###  使用

+ 调用方式  
    + Facade `Md5Hasher`
    + app('md5Hasher')
+ 可用方法
    + make() 生成md5加密之后加密值
    + check() 校验值和某个加密之后的值匹配

### publish config file
    + php artisan vendor:publish 
