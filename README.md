

##使用帮助

###安装

请先确认已经安装Composer. 编辑项目中的 `composer.json` 文件，然后加入 `cooper/wechat`.

```
"require": {
	"cooper/wechat": "dev-master"
}
```

更新包 `composer update` 或者初始化包 `composer install`。

需要添加以下服务到系统。

打开 `app/config/app.php` ， 然后添加新的值到 `providers` 数组：

```
'Cooper\Wechat\WechatServiceProvider',
```

执行 `php artisan config:publish cooper/wechat` ,然后修改 `app/config/packages/cooper/wechat` 中的配置文件 `wechat.php` 。

把微信公众号的 `Token` `appId` `appSecret` 改为对应的。

##使用

todo

##类（说明）

###WeChatServer

todo

###WeChatClient

todo


##License
This is free software distributed under the terms of the MIT license