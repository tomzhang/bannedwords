#bannedwords－违禁词，敏感词库
论坛、社交网站、博客、微博等允许用户生成内容的网站，常常遇到屏蔽违禁词、敏感词、广告、色情等文字的问题。这里给出一份违禁词列表，供大家参考。

共分以下几类：
* 政治
* 色情
* 违法犯罪
* 广告
* 脏话

#如何使用
发布违禁词本身就是违禁的。。。所以生成的词库都用base64编码。
大家使用时，可以用 decrypt.php filename 解码，例如：

    /usr/bin/php decrypt.php pub_sms_banned_words.txt

pub_sms_banned_words.txt.out.txt文件里即是违禁词。

或者使用 [在线服务](http://tool.chinaz.com/tools/base64.aspx) 解码，将pub_sms_banned_words.txt的内容粘贴在右边框里，点击“Base64解密”，违禁词就出现在左边框里。

免责声明
所有词库均来自网络，或利用爬虫抓取公开数据得到。
使用者不得将此词库用于非法目的。

#ChangeLog
2016-04-17 发布短信专用违禁词库，共2696条。

2016-04-16 发布第一份违禁词库，共1673条。