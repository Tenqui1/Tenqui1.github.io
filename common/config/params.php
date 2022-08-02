<?php
return [
    'domain'=>[
        'www'=>'http://www.58itbook.com',
        'amin'=>'http://admin.58itbook.com',
        'pic'=>'http://pic.58itbook.com',
        'demo'=>'http://demo.58itbook.com',
        'resource'=>'http://www.58itbook.com/resources',
    ],
    'emailConfig'=>[
        'adminEmail'=>'2120371570@qq.com',
        'adminName'=>'Tbook官方',
        'pop3'=>'cdneaergrasfedha',
        'imap'=>'ytdtjitaqzhseaed',
        'expire'=>600,
        'ipLimit'=>10,
        'emailLimit'=>10
    ],
    'redisUserinfoKey'=>'userInfo',
    'web-agreement'=>[
        'reward'=>
            '<p>第1条：奖励分为基础奖励和额外奖励。基础奖励实时发放，额外奖励审核通过后发放。</p>'.
            '<p>第2条：基础奖励为5IT币*用户奖励倍数（个人中心可查看自己的奖励倍数，基础为1，等级越高，奖励倍数越高）</p>'.
            '<p>第3条：额外奖励在审核通过后会发放到用户账号，到账会有邮件和消息提醒，注意查收。</p>'.
            '<p>第4条：每个插件的IT币收益归作者所有，但是存在最高收益，最高收益是插件单次IT币*100</p>'.
            '<p>第5条：原创插件，网站鼓励作者申请插件买断，买断的插件，我们会发放现金币，现金币则可以用来购买IT币，亦可以提现</p>',
        'explain'=>
            '<p>第1条：上传文件为zip或rar格式，请确保有演示文件，并能正常访问代码无错误</p>'.
            '<p>第2条：如果有插件官网地址，请填写，如果没有，可不填</p>'.
            '<p>第3条：如果非原创，请选择标记非原创。如果是原创请选择标记原创，原创内容会获得额外IT币奖励</p>'.
            '<p>第4条：我们鼓励原创，原创内容会获得额外IT币奖励</p>',
        'punishment'=>
            '<p>第1条：网站严厉打击套取基础奖励的行为。经审核发现，会扣取用户的奖励倍数（-0.1/每次）,当减为0后,用户发布任何插件或者参加任何活动将得不到奖励</p>'.
            '<p>第2条：网站严厉打击套取原创额外奖励的行为，非原创请勿标记原创，套取额外奖励，一经发现，会扣取用户的奖励倍数（-0.2/每次）,当减为0后,用户发布任何插件或者参加任何活动将得不到奖励。同时因为虚假原创引起的版权问题，由发布者个人承担</p>'.
            '<p>第3条：惩罚结果会通过邮件，个人中心消息等渠道发送给作者，如有疑惑，可联系客服申诉。</p>'


    ],
];
