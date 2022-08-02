/*
Navicat MySQL Data Transfer

Source Server         : 虚拟机
Source Server Version : 50725
Source Host           : 192.168.33.10:3306
Source Database       : itbook

Target Server Type    : MYSQL
Target Server Version : 50725
File Encoding         : 65001

Date: 2019-03-29 17:59:56
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `uId` int(10) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `userName` varchar(30) DEFAULT '' COMMENT '用户昵称',
  `password` varchar(255) DEFAULT '' COMMENT '密码',
  `photo` varchar(255) DEFAULT '' COMMENT '照片',
  `address` varchar(255) DEFAULT '' COMMENT '个人地址',
  `cName` varchar(30) DEFAULT '' COMMENT '匿名',
  `phone` varchar(20) DEFAULT '' COMMENT '手机号',
  `email` varchar(100) DEFAULT '' COMMENT '邮箱',
  `github` varchar(100) DEFAULT '' COMMENT 'github地址',
  `qq` varchar(20) DEFAULT '' COMMENT '邮箱',
  `wechat` varchar(50) DEFAULT '' COMMENT '微信号',
  `sex` tinyint(1) DEFAULT '2' COMMENT '1-男 0-女 2-保密',
  `level` tinyint(3) DEFAULT '0' COMMENT '等级',
  `levelName` varchar(30) DEFAULT '' COMMENT '等级称号',
  `reputation` int(10) DEFAULT '0' COMMENT '信誉值',
  `lucky` int(10) DEFAULT '0' COMMENT '幸运值',
  `experience` int(10) DEFAULT '0' COMMENT '经验',
  `ITmoney` int(10) DEFAULT '0' COMMENT 'IT币',
  `money` int(10) NOT NULL DEFAULT '0' COMMENT '余额',
  `status` tinyint(2) DEFAULT '0' COMMENT '0-正常  -1-黑名单',
  `isDelete` tinyint(2) DEFAULT '0' COMMENT '0-正常 1-删除',
  `registerTime` datetime DEFAULT NULL COMMENT '注册时间',
  `logoutTime` varchar(20) DEFAULT '' COMMENT '上次退出时间',
  `loginTime` varchar(20) DEFAULT '' COMMENT '最近登陆时间',
  `isSystem` tinyint(2) DEFAULT '0' COMMENT '0-正常用户 1-系统用户',
  `updateTime` varchar(20) DEFAULT '' COMMENT '更新时间',
  `salt` varchar(32) DEFAULT '' COMMENT '密码盐值',
  `label` varchar(255) DEFAULT '' COMMENT '签名',
  `introduction` text COMMENT '简介',
  PRIMARY KEY (`uId`,`money`),
  UNIQUE KEY `userName` (`userName`,`isDelete`) USING BTREE,
  UNIQUE KEY `email` (`email`,`isDelete`) USING BTREE,
  UNIQUE KEY `phone` (`phone`,`isDelete`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('32', 'wfx', '$2y$13$j/Re5CPAQD.cQ6wydbB5quVjclfwrbsXEkwXYJwCIeaPcKmp9e8pe', 'img/profile_small.jpg', '', '', '', '2579552905@qq.com', '', '', '', '2', '1', '小白期', '0', '0', '0', '0', '0', '0', '0', '2019-03-20 03:00:17', '1553069339', '1553050817', '1', '1553052704', 'DzcSlWy1KVogJQ9FI3HNaBrIySxC2K1L', '', null);

-- ----------------------------
-- Table structure for userLevelName
-- ----------------------------
DROP TABLE IF EXISTS `userLevelName`;
CREATE TABLE `userLevelName` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `levelName` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '等级',
  `level` tinyint(3) NOT NULL DEFAULT '0' COMMENT '等级',
  `experience` int(10) NOT NULL DEFAULT '0' COMMENT '经验',
  `describe` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '描述',
  `isDelete` tinyint(2) NOT NULL DEFAULT '0' COMMENT '0-存在 1-删除',
  `reward` float(2,1) NOT NULL DEFAULT '0.0' COMMENT 'IT币奖励倍数',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COMMENT='用户等级表';

-- ----------------------------
-- Records of userLevelName
-- ----------------------------
INSERT INTO `userLevelName` VALUES ('1', '小白期', '1', '10', '', '0', '1.0');
INSERT INTO `userLevelName` VALUES ('2', '菜鸟期', '2', '100', '', '0', '1.5');
INSERT INTO `userLevelName` VALUES ('3', '发车期', '3', '200', '', '0', '2.0');
INSERT INTO `userLevelName` VALUES ('4', '飙车期', '4', '400', '', '0', '2.5');
INSERT INTO `userLevelName` VALUES ('5', '超车期', '5', '800', '', '0', '3.0');
INSERT INTO `userLevelName` VALUES ('6', '老司机', '6', '1600', '', '0', '3.5');
INSERT INTO `userLevelName` VALUES ('7', '脱发期', '7', '3200', '', '0', '4.0');
INSERT INTO `userLevelName` VALUES ('8', '秃顶期', '8', '6400', '', '0', '4.5');
INSERT INTO `userLevelName` VALUES ('9', '顿悟期', '9', '12800', '', '0', '5.0');
INSERT INTO `userLevelName` VALUES ('10', '大佬期', '10', '25600', '', '0', '5.5');
INSERT INTO `userLevelName` VALUES ('11', '女装大佬期', '11', '51200', '', '0', '6.0');

-- ----------------------------
-- Table structure for webSource
-- ----------------------------
DROP TABLE IF EXISTS `webSource`;
CREATE TABLE `webSource` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `uId` int(10) NOT NULL DEFAULT '0' COMMENT '用户Id',
  `title` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '标题',
  `keyword` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '关键字',
  `describe` text CHARACTER SET utf8 COMMENT '描述',
  `manual` text CHARACTER SET utf8 COMMENT '使用手册，说明',
  `oldUrl` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '官网地址',
  `coverUrl` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '封面图',
  `previewUrl` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '预览地址',
  `soureUrl` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '资源Url',
  `browseNum` int(10) NOT NULL DEFAULT '0' COMMENT '浏览量',
  `collectionNum` int(10) NOT NULL DEFAULT '0' COMMENT '收藏数',
  `likeNum` int(10) NOT NULL DEFAULT '0' COMMENT '点赞数',
  `shareNum` int(10) NOT NULL DEFAULT '0' COMMENT '分享数',
  `commentNum` int(10) NOT NULL DEFAULT '0' COMMENT '评论数',
  `downloadNum` int(10) NOT NULL DEFAULT '0' COMMENT '下载数',
  `price` int(10) NOT NULL DEFAULT '0' COMMENT '价格',
  `registerTime` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '创建时间',
  `updateTime` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '更新时间',
  `status` tinyint(2) NOT NULL DEFAULT '0' COMMENT '-1 锁定 0-审核 1上线 ',
  `isDelete` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否删除',
  `IE` tinyint(2) NOT NULL DEFAULT '8' COMMENT 'IE兼容',
  `isIE` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否兼容IE',
  `isFirefox` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否兼容火狐',
  `isChrome` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否兼容Chrome',
  `isSafari` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否兼容Safari',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COMMENT='web资源表';

-- ----------------------------
-- Records of webSource
-- ----------------------------
INSERT INTO `webSource` VALUES ('39', '32', 'H+ 后台主题UI框架', '后端,H+,Bootstrap3,扁平化，html5,css3', 'H+是一个完全响应式，基于Bootstrap3.3.6最新版本开发的扁平化主题,她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术写成的一款后端框架', '<p><span style=\"color: rgb(103, 106, 108); font-family: &quot;open sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px; background-color: rgb(255, 255, 255);\">S+是一个完全响应式，基于Bootstrap3.3.6最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术，她提供了诸多的强大的可以重新组合的UI组件，并集成了最新的jQuery版本(v2.1.4)，当然，也集成了很多功能强大，用途广泛的jQuery插件，她可以用于所有的Web应用程序，如</span><span style=\"box-sizing: border-box; font-weight: 700; color: rgb(103, 106, 108); font-family: &quot;open sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px; background-color: rgb(255, 255, 255);\">网站管理后台</span><span style=\"color: rgb(103, 106, 108); font-family: &quot;open sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px; background-color: rgb(255, 255, 255);\">，</span><span style=\"box-sizing: border-box; font-weight: 700; color: rgb(103, 106, 108); font-family: &quot;open sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px; background-color: rgb(255, 255, 255);\">网站会员中心</span><span style=\"color: rgb(103, 106, 108); font-family: &quot;open sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px; background-color: rgb(255, 255, 255);\">，</span><span style=\"box-sizing: border-box; font-weight: 700; color: rgb(103, 106, 108); font-family: &quot;open sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px; background-color: rgb(255, 255, 255);\">CMS</span><span style=\"color: rgb(103, 106, 108); font-family: &quot;open sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px; background-color: rgb(255, 255, 255);\">，</span><span style=\"box-sizing: border-box; font-weight: 700; color: rgb(103, 106, 108); font-family: &quot;open sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px; background-color: rgb(255, 255, 255);\">CRM</span><span style=\"color: rgb(103, 106, 108); font-family: &quot;open sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px; background-color: rgb(255, 255, 255);\">，</span><span style=\"box-sizing: border-box; font-weight: 700; color: rgb(103, 106, 108); font-family: &quot;open sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px; background-color: rgb(255, 255, 255);\">OA</span><span style=\"color: rgb(103, 106, 108); font-family: &quot;open sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px; background-color: rgb(255, 255, 255);\">等等，当然，您也可以对她进行深度定制，以做出更强系统。</span></p><p><img src=\"/ueditor/php/upload/image/20190327/1553670332137246.png\" title=\"1553670332137246.png\" alt=\"image.png\"/><img src=\"/ueditor/php/upload/image/20190327/1553670350860843.png\" title=\"1553670350860843.png\" alt=\"image.png\"/></p><p><span style=\"color: rgb(103, 106, 108); font-family: &quot;open sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 13px; background-color: rgb(255, 255, 255);\"><br/></span></p>', '', '/previewImg/190327/3267040126.png', '/preview/190327/8998430671', '/resource/190327/8998430671.zip', '4854', '134', '968', '112', '0', '93', '50', '2019-03-28 03:13:26', '1553670935', '1', '0', '8', '1', '1', '1', '1');
INSERT INTO `webSource` VALUES ('42', '32', 'Remodel家具模板网站', '家具，英语，简洁，大气，高端', 'Remodel是一款高端大气得英文家具公司官网网站', '', '', '/previewImg/190328/3114275795.png', '/preview/190328/3969146092', '/resource/190328/3969146092.zip', '2807', '121', '648', '210', '0', '57', '0', '2019-03-28 03:13:30', '1553740209', '1', '0', '8', '1', '1', '1', '1');
INSERT INTO `webSource` VALUES ('43', '32', 'Freight运输企业模板', '运输，高端，大气，简洁', 'Freight是一款高端大气得货运企业模板', null, '', '/previewImg/190328/1195823568.png', '/preview/190328/1846346531', '/resource/190328/1846346531.rar', '4796', '123', '650', '235', '0', '65', '0', '2019-03-28 03:23:44', '1553743390', '1', '0', '8', '1', '1', '1', '1');
INSERT INTO `webSource` VALUES ('44', '32', '婚礼单页宣传网站', '婚礼，结婚，新郎，新娘', '网站适合用于婚礼，婚庆宣传', null, '', '/previewImg/190328/1862971236.png', '/preview/190328/1456437721', '/resource/190328/1456437721.zip', '1112', '111', '534', '125', '0', '67', '0', '2019-03-28 03:36:44', '1553744204', '1', '0', '8', '1', '1', '1', '1');
INSERT INTO `webSource` VALUES ('45', '32', '一款简洁大气的广告分类网站', '广告公司，广告，企业，简介大气', '', null, '', '/previewImg/190329/9770863499.png', '/preview/190329/441960350', '/resource/190329/441960350.zip', '1900', '116', '752', '251', '0', '94', '0', '2019-03-29 08:10:05', '1553847005', '1', '0', '8', '1', '1', '1', '1');
INSERT INTO `webSource` VALUES ('46', '32', '创意的网格布局个人网站模板', '简洁，宽屏，个人，图片，博客', '简洁宽屏的个人图片博客展示网站通用模板，html5响应式的图片博客个人网站模板。', null, '', '/previewImg/190329/9599642532.png', '/preview/190329/1728774319', '/resource/190329/1728774319.zip', '4044', '122', '855', '265', '0', '91', '0', '2019-03-29 08:24:06', '1553847846', '1', '0', '8', '1', '1', '1', '1');
INSERT INTO `webSource` VALUES ('47', '32', '简洁大气的企业模板', '简洁，大气，企业', '简介大气的企业官网模板', null, '', '/previewImg/190329/2672687900.png', '/preview/190329/4329825283', '/resource/190329/4329825283.zip', '1722', '196', '857', '84', '0', '94', '0', '2019-03-29 08:31:04', '1553848264', '1', '0', '8', '1', '1', '1', '1');
INSERT INTO `webSource` VALUES ('48', '32', '白色简洁的产品创意设计公司网站html模板', '白色，简介，设计', '白色简洁的产品创意设计公司网站html模板', null, '', '/previewImg/190329/224146170.png', '/preview/190329/5381225275', '/resource/190329/5381225275.zip', '3778', '174', '908', '288', '0', '86', '0', '2019-03-29 08:35:42', '1553848542', '1', '0', '8', '1', '1', '1', '1');
INSERT INTO `webSource` VALUES ('49', '32', '数码公司中文网站模板', '数码公司，中文模板', '', null, '', '/previewImg/190329/7010964040.png', '/preview/190329/5979594646', '/resource/190329/5979594646.zip', '4425', '102', '962', '164', '0', '93', '0', '2019-03-29 08:43:48', '1553849028', '1', '0', '8', '1', '1', '1', '1');
INSERT INTO `webSource` VALUES ('50', '32', '移动端家居装饰品diy商城网站模板', '移动端，家具，装饰品，商城', '简约通用的移动端DIY网上商城网站，手机家居装饰品购物商城模板。主要有：商品分类、详情页、购物车、我的主页、订单、喜欢、资料、上传创意作品、我的作品、支付页面、配送地址等总共25个手机商城页面html模板。', null, '', '/previewImg/190329/3043775272.png', '/preview/190329/6390161260', '/resource/190329/6390161260.zip', '3939', '110', '643', '226', '0', '70', '0', '2019-03-29 08:47:16', '1553849236', '1', '0', '8', '1', '1', '1', '1');
INSERT INTO `webSource` VALUES ('51', '32', '简洁通用的博客网站后台统计管理模板html源码', ' bootstrap后台模板,响应式后台模板,响应式后台管理模板,cms网站管理系统', '简洁通用的后台管理模板、基于bootstrap的响应式博客网站后台模板下载。', null, '', '/previewImg/190329/7953763160.png', '/preview/190329/9506440991', '/resource/190329/9506440991.zip', '3684', '141', '759', '195', '0', '61', '0', '2019-03-29 08:50:56', '1553849456', '1', '0', '8', '1', '1', '1', '1');
INSERT INTO `webSource` VALUES ('52', '32', '文具公司响应式网站模板', ' 文具,响应式模板', '', null, '', '/previewImg/190329/9074167198.jpg', '/preview/190329/4677380248', '/resource/190329/4677380248.zip', '2918', '134', '708', '218', '0', '65', '0', '2019-03-29 08:53:16', '1553849596', '1', '0', '8', '1', '1', '1', '1');
INSERT INTO `webSource` VALUES ('53', '32', '大气的时尚手表电子商城网站模板', '手表，响应式，Bootstrap3', 'Setra是专业的在线手表电子商城网站HTML5响应式模板，适用于销售手表,时尚配饰或时尚相关物品。基于Bootstrap3开发，Setra拥有一个干净时尚和友好的前端外观可以为你的访问者提供很好的浏览体验。', null, '', '/previewImg/190329/2854855584.jpg', '/preview/190329/586677204', '/resource/190329/586677204.zip', '2032', '189', '832', '291', '0', '58', '0', '2019-03-29 08:57:56', '1553849876', '1', '0', '8', '1', '1', '1', '1');
INSERT INTO `webSource` VALUES ('54', '32', '橙色大气的精品手表配饰商城网站模板', ' 购物，橙色，响应式商城，大气，手表商城', '简洁橙色的响应式设计的电子商务商城模板,适合销售配饰、手表,时尚或任何其他的在线手表品牌购物网站。它是用最新Bootstrap构建框架和HTML5和CSS3。包括所有必要的页面。所以你可以很容易从我们的模板准备你的网站。', '', '', '/previewImg/190329/3557948012.jpg', '/preview/190329/4987692710', '/resource/190329/4987692710.zip', '3516', '193', '521', '294', '0', '94', '0', '2019-03-29 09:08:44', '1553850524', '1', '0', '8', '1', '1', '1', '1');
INSERT INTO `webSource` VALUES ('56', '32', 'layui阳光成单系统后台模板html整站下载', ' 响应式后台模板,响应式后台管理模板,企业后台管理系统,企业后台模板,layui', '', null, '', '/previewImg/190329/4010426410.jpg', '/preview/190329/6741489414', '/resource/190329/6741489414.zip', '1444', '188', '917', '162', '0', '54', '0', '2019-03-29 09:22:42', '1553851362', '1', '0', '8', '1', '1', '1', '1');
INSERT INTO `webSource` VALUES ('57', '32', '国外蓝色的响应式数据统计cms后台模板', '蓝色  国外  bootstrap后台模板  响应式后台模板  响应式后台管理模板  html5后台管理模板  国外后台模板  国外后台管理系统模板  cms后台管理系统  cms网站管理系统  cms后台模板  cms管理系统模板', '', null, '', '/previewImg/190329/9479596247.jpg', '/preview/190329/575047715', '/resource/190329/575047715.zip', '4445', '103', '650', '147', '0', '75', '0', '2019-03-29 09:25:47', '1553851547', '1', '0', '8', '1', '1', '1', '1');
INSERT INTO `webSource` VALUES ('58', '32', '红色的时尚服装包包商城网站html模板', ' 红色  时尚  响应式商城  服装商城  鞋子商城', '', null, '', '/previewImg/190329/7270657746.jpg', '/preview/190329/9681045115', '/resource/190329/9681045115.zip', '1815', '156', '605', '296', '0', '92', '0', '2019-03-29 09:34:43', '1553852083', '1', '0', '8', '1', '1', '1', '1');
INSERT INTO `webSource` VALUES ('59', '32', '人工智能公司响应式网站模板', ' 人工智能  响应式模板', '', null, '', '/previewImg/190329/3488109930.jpg', '/preview/190329/2559187051', '/resource/190329/2559187051.zip', '3010', '171', '907', '91', '0', '91', '0', '2019-03-29 09:36:18', '1553852178', '1', '0', '8', '1', '1', '1', '1');
INSERT INTO `webSource` VALUES ('60', '32', '健身器械响应式网站模板', ' 健身器械  响应式模板', '', null, '', '/previewImg/190329/4518272091.jpg', '/preview/190329/662915741', '/resource/190329/662915741.zip', '3742', '139', '566', '230', '0', '85', '0', '2019-03-29 09:38:33', '1553852313', '1', '0', '8', '1', '1', '1', '1');
INSERT INTO `webSource` VALUES ('61', '32', '医药制造公司网站模板', '医药制造', '', null, '', '/previewImg/190329/4475746788.jpg', '/preview/190329/6593007258', '/resource/190329/6593007258.zip', '1643', '164', '559', '128', '0', '62', '0', '2019-03-29 09:42:03', '1553852523', '1', '0', '8', '1', '1', '1', '1');

-- ----------------------------
-- Table structure for webSubject
-- ----------------------------
DROP TABLE IF EXISTS `webSubject`;
CREATE TABLE `webSubject` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `name` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '科目名称',
  `sort` int(5) NOT NULL DEFAULT '0' COMMENT '排序',
  `isDelete` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否删除',
  `pid` int(10) NOT NULL DEFAULT '0' COMMENT '父级id',
  `level` int(3) NOT NULL DEFAULT '0' COMMENT '等级',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=utf8mb4 COMMENT='web分类表';

-- ----------------------------
-- Records of webSubject
-- ----------------------------
INSERT INTO `webSubject` VALUES ('1', '模板分类', '0', '0', '0', '0');
INSERT INTO `webSubject` VALUES ('2', '模板颜色', '1', '0', '0', '0');
INSERT INTO `webSubject` VALUES ('3', '模板布局', '2', '0', '0', '0');
INSERT INTO `webSubject` VALUES ('4', '模板语言', '3', '0', '0', '0');
INSERT INTO `webSubject` VALUES ('6', '行业', '1', '0', '1', '1');
INSERT INTO `webSubject` VALUES ('7', '商城', '2', '0', '1', '1');
INSERT INTO `webSubject` VALUES ('8', '企业', '3', '0', '1', '1');
INSERT INTO `webSubject` VALUES ('9', '专题', '4', '0', '1', '1');
INSERT INTO `webSubject` VALUES ('10', '后台', '5', '0', '1', '1');
INSERT INTO `webSubject` VALUES ('11', '其他', '6', '0', '1', '1');
INSERT INTO `webSubject` VALUES ('12', '旅游酒店', '1', '0', '6', '2');
INSERT INTO `webSubject` VALUES ('13', '网络设计', '2', '0', '6', '2');
INSERT INTO `webSubject` VALUES ('14', '房地产', '3', '0', '6', '2');
INSERT INTO `webSubject` VALUES ('15', '婚庆摄影', '4', '0', '6', '2');
INSERT INTO `webSubject` VALUES ('16', '家政家教', '5', '0', '6', '2');
INSERT INTO `webSubject` VALUES ('17', '教育培训', '6', '0', '6', '2');
INSERT INTO `webSubject` VALUES ('18', '办公OA', '7', '0', '6', '2');
INSERT INTO `webSubject` VALUES ('19', '求职招聘', '8', '0', '6', '2');
INSERT INTO `webSubject` VALUES ('20', '食品', '9', '0', '6', '2');
INSERT INTO `webSubject` VALUES ('21', '医院医疗', '10', '0', '6', '2');
INSERT INTO `webSubject` VALUES ('22', '金融贷款', '11', '0', '6', '2');
INSERT INTO `webSubject` VALUES ('23', '房产租赁', '12', '0', '6', '2');
INSERT INTO `webSubject` VALUES ('24', '视频影视', '13', '0', '6', '2');
INSERT INTO `webSubject` VALUES ('25', '游戏', '14', '0', '6', '2');
INSERT INTO `webSubject` VALUES ('26', '订餐外送', '15', '0', '6', '2');
INSERT INTO `webSubject` VALUES ('27', '科技', '16', '0', '6', '2');
INSERT INTO `webSubject` VALUES ('28', '生活服务', '17', '0', '6', '2');
INSERT INTO `webSubject` VALUES ('29', '时尚美容', '18', '0', '6', '2');
INSERT INTO `webSubject` VALUES ('30', '情感交友', '19', '0', '6', '2');
INSERT INTO `webSubject` VALUES ('31', '汽车', '20', '0', '6', '2');
INSERT INTO `webSubject` VALUES ('32', '农业养殖', '21', '0', '6', '2');
INSERT INTO `webSubject` VALUES ('33', '养生', '22', '0', '6', '2');
INSERT INTO `webSubject` VALUES ('37', '团购', '1', '0', '7', '2');
INSERT INTO `webSubject` VALUES ('38', '商务平台', '2', '0', '7', '2');
INSERT INTO `webSubject` VALUES ('39', '返利', '3', '0', '7', '2');
INSERT INTO `webSubject` VALUES ('40', '海淘', '4', '0', '7', '2');
INSERT INTO `webSubject` VALUES ('41', '数码电器', '5', '0', '7', '2');
INSERT INTO `webSubject` VALUES ('42', '服装鞋帽', '6', '0', '7', '2');
INSERT INTO `webSubject` VALUES ('43', '水果蔬菜', '7', '0', '7', '2');
INSERT INTO `webSubject` VALUES ('44', '鲜花礼品', '8', '0', '7', '2');
INSERT INTO `webSubject` VALUES ('45', '美容化妆', '9', '0', '7', '2');
INSERT INTO `webSubject` VALUES ('46', '珠宝配饰', '10', '0', '7', '2');
INSERT INTO `webSubject` VALUES ('47', '装饰家居', '11', '0', '7', '2');
INSERT INTO `webSubject` VALUES ('48', '零食食品', '12', '0', '7', '2');
INSERT INTO `webSubject` VALUES ('54', '团购', '1', '0', '7', '2');
INSERT INTO `webSubject` VALUES ('55', '网络公司', '1', '0', '8', '2');
INSERT INTO `webSubject` VALUES ('56', '设计公司', '2', '0', '8', '2');
INSERT INTO `webSubject` VALUES ('57', '婚纱摄影', '3', '0', '8', '2');
INSERT INTO `webSubject` VALUES ('58', '咨询公司', '4', '0', '8', '2');
INSERT INTO `webSubject` VALUES ('59', '软件科技', '5', '0', '8', '2');
INSERT INTO `webSubject` VALUES ('60', '办公家具', '6', '0', '8', '2');
INSERT INTO `webSubject` VALUES ('61', '生活旅游', '7', '0', '8', '2');
INSERT INTO `webSubject` VALUES ('62', '教育培训', '8', '0', '8', '2');
INSERT INTO `webSubject` VALUES ('63', '广告传媒', '9', '0', '8', '2');
INSERT INTO `webSubject` VALUES ('64', '政府部门', '10', '0', '8', '2');
INSERT INTO `webSubject` VALUES ('65', '项目工程', '11', '0', '8', '2');
INSERT INTO `webSubject` VALUES ('66', '设备自动化', '12', '0', '8', '2');
INSERT INTO `webSubject` VALUES ('67', '美容化妆', '13', '0', '8', '2');
INSERT INTO `webSubject` VALUES ('68', '单页模板', '14', '0', '8', '2');
INSERT INTO `webSubject` VALUES ('69', '医院医疗', '15', '0', '8', '2');
INSERT INTO `webSubject` VALUES ('70', '物业租赁', '16', '0', '8', '2');
INSERT INTO `webSubject` VALUES ('71', '环保卫生', '17', '0', '8', '2');
INSERT INTO `webSubject` VALUES ('72', '房地产建筑', '18', '0', '8', '2');
INSERT INTO `webSubject` VALUES ('73', '农业养殖', '19', '0', '8', '2');
INSERT INTO `webSubject` VALUES ('74', '服装', '20', '0', '8', '2');
INSERT INTO `webSubject` VALUES ('75', '亲子母婴', '21', '0', '8', '2');
INSERT INTO `webSubject` VALUES ('76', '快递物流', '22', '0', '8', '2');
INSERT INTO `webSubject` VALUES ('77', '行业模板', '23', '0', '8', '2');
INSERT INTO `webSubject` VALUES ('78', '汽车配件', '24', '0', '8', '2');
INSERT INTO `webSubject` VALUES ('79', '装修公司', '25', '0', '8', '2');
INSERT INTO `webSubject` VALUES ('80', '淘宝', '1', '0', '9', '2');
INSERT INTO `webSubject` VALUES ('81', '医院', '2', '0', '9', '2');
INSERT INTO `webSubject` VALUES ('82', '节日', '3', '0', '9', '2');
INSERT INTO `webSubject` VALUES ('83', '活动', '4', '0', '9', '2');
INSERT INTO `webSubject` VALUES ('84', '测试', '5', '0', '9', '2');
INSERT INTO `webSubject` VALUES ('85', '企业宣传', '6', '0', '9', '2');
INSERT INTO `webSubject` VALUES ('86', '登录界面', '1', '0', '10', '2');
INSERT INTO `webSubject` VALUES ('87', 'bootstrap', '2', '0', '10', '2');
INSERT INTO `webSubject` VALUES ('88', '国外后台模板', '3', '0', '10', '2');
INSERT INTO `webSubject` VALUES ('89', '企业后台模板', '4', '0', '10', '2');
INSERT INTO `webSubject` VALUES ('90', 'CMS后台模板', '5', '0', '10', '2');
INSERT INTO `webSubject` VALUES ('91', 'OA系统', '6', '0', '10', '2');
INSERT INTO `webSubject` VALUES ('92', 'div+css', '7', '0', '10', '2');
INSERT INTO `webSubject` VALUES ('93', '常用后台模板', '8', '0', '10', '2');
INSERT INTO `webSubject` VALUES ('94', '门户资讯', '1', '0', '11', '2');
INSERT INTO `webSubject` VALUES ('95', '个人博客', '2', '0', '11', '2');
INSERT INTO `webSubject` VALUES ('96', '笑话', '3', '0', '11', '2');
INSERT INTO `webSubject` VALUES ('97', '网址导航', '4', '0', '11', '2');
INSERT INTO `webSubject` VALUES ('98', '登录注册', '5', '0', '11', '2');
INSERT INTO `webSubject` VALUES ('99', '个人中心', '6', '0', '11', '2');
INSERT INTO `webSubject` VALUES ('100', '404', '7', '0', '11', '2');
INSERT INTO `webSubject` VALUES ('101', 'app', '8', '0', '11', '2');
INSERT INTO `webSubject` VALUES ('102', '引导', '9', '0', '11', '2');
INSERT INTO `webSubject` VALUES ('103', '蓝色', '1', '0', '2', '1');
INSERT INTO `webSubject` VALUES ('104', '红色', '2', '0', '2', '1');
INSERT INTO `webSubject` VALUES ('105', '橙色', '3', '0', '2', '1');
INSERT INTO `webSubject` VALUES ('106', '黄色', '4', '0', '2', '1');
INSERT INTO `webSubject` VALUES ('107', '绿色', '5', '0', '2', '1');
INSERT INTO `webSubject` VALUES ('108', '黑白', '6', '0', '2', '1');
INSERT INTO `webSubject` VALUES ('109', '灰色', '7', '0', '2', '1');
INSERT INTO `webSubject` VALUES ('110', '黑色', '8', '0', '2', '1');
INSERT INTO `webSubject` VALUES ('111', '白色', '8', '0', '2', '1');
INSERT INTO `webSubject` VALUES ('112', '粉色', '9', '0', '2', '1');
INSERT INTO `webSubject` VALUES ('113', '多色', '10', '0', '2', '1');
INSERT INTO `webSubject` VALUES ('114', '常列', '1', '0', '3', '1');
INSERT INTO `webSubject` VALUES ('115', '两列', '2', '0', '3', '1');
INSERT INTO `webSubject` VALUES ('116', '滚动', '3', '0', '3', '1');
INSERT INTO `webSubject` VALUES ('117', '全屏', '4', '0', '3', '1');
INSERT INTO `webSubject` VALUES ('118', '响应式', '5', '0', '3', '1');
INSERT INTO `webSubject` VALUES ('119', '手机wap', '6', '0', '3', '1');
INSERT INTO `webSubject` VALUES ('120', 'app模板', '7', '0', '3', '1');
INSERT INTO `webSubject` VALUES ('121', 'iframe', '8', '0', '3', '1');
INSERT INTO `webSubject` VALUES ('122', 'table', '9', '0', '3', '1');
INSERT INTO `webSubject` VALUES ('123', '中文模板', '1', '0', '4', '1');
INSERT INTO `webSubject` VALUES ('124', '英文模板', '2', '0', '4', '1');
INSERT INTO `webSubject` VALUES ('125', '俄语模板', '3', '0', '4', '1');

-- ----------------------------
-- Table structure for webSubRelation
-- ----------------------------
DROP TABLE IF EXISTS `webSubRelation`;
CREATE TABLE `webSubRelation` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `subId` int(10) NOT NULL DEFAULT '0' COMMENT '科目ID',
  `webId` int(10) NOT NULL DEFAULT '0' COMMENT '网页Id',
  `isDelete` tinyint(1) NOT NULL DEFAULT '0',
  `level` int(2) NOT NULL DEFAULT '0' COMMENT '分类定级',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=275 DEFAULT CHARSET=utf8mb4 COMMENT='web与分类关系表';

-- ----------------------------
-- Records of webSubRelation
-- ----------------------------
INSERT INTO `webSubRelation` VALUES ('24', '7', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('25', '8', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('26', '9', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('27', '10', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('28', '107', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('29', '117', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('30', '122', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('31', '123', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('32', '18', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('33', '26', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('34', '55', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('35', '62', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('36', '76', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('37', '77', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('38', '80', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('39', '86', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('40', '87', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('41', '89', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('42', '90', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('43', '91', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('44', '92', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('45', '93', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('46', '1', '39', '0', '0');
INSERT INTO `webSubRelation` VALUES ('47', '10', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('48', '86', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('49', '87', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('50', '89', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('51', '90', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('52', '91', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('53', '92', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('54', '93', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('55', '1', '39', '0', '0');
INSERT INTO `webSubRelation` VALUES ('56', '2', '39', '0', '0');
INSERT INTO `webSubRelation` VALUES ('57', '3', '39', '0', '0');
INSERT INTO `webSubRelation` VALUES ('58', '4', '39', '0', '0');
INSERT INTO `webSubRelation` VALUES ('59', '6', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('60', '7', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('61', '8', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('62', '9', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('63', '10', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('64', '107', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('65', '117', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('66', '122', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('67', '123', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('68', '86', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('69', '87', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('70', '89', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('71', '90', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('72', '91', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('73', '92', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('74', '93', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('75', '1', '39', '0', '0');
INSERT INTO `webSubRelation` VALUES ('76', '2', '39', '0', '0');
INSERT INTO `webSubRelation` VALUES ('77', '3', '39', '0', '0');
INSERT INTO `webSubRelation` VALUES ('78', '4', '39', '0', '0');
INSERT INTO `webSubRelation` VALUES ('79', '6', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('80', '7', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('81', '8', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('82', '9', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('83', '10', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('84', '107', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('85', '117', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('86', '122', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('87', '123', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('88', '86', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('89', '87', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('90', '89', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('91', '90', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('92', '91', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('93', '92', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('94', '93', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('95', '1', '39', '0', '0');
INSERT INTO `webSubRelation` VALUES ('96', '2', '39', '0', '0');
INSERT INTO `webSubRelation` VALUES ('97', '3', '39', '0', '0');
INSERT INTO `webSubRelation` VALUES ('98', '4', '39', '0', '0');
INSERT INTO `webSubRelation` VALUES ('99', '6', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('100', '7', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('101', '8', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('102', '9', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('103', '10', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('104', '107', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('105', '117', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('106', '122', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('107', '123', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('108', '17', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('109', '18', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('110', '26', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('111', '86', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('112', '87', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('113', '89', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('114', '90', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('115', '91', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('116', '92', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('117', '93', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('118', '98', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('119', '99', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('120', '1', '39', '0', '0');
INSERT INTO `webSubRelation` VALUES ('121', '2', '39', '0', '0');
INSERT INTO `webSubRelation` VALUES ('122', '3', '39', '0', '0');
INSERT INTO `webSubRelation` VALUES ('123', '4', '39', '0', '0');
INSERT INTO `webSubRelation` VALUES ('124', '6', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('125', '7', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('126', '8', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('127', '9', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('128', '10', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('129', '107', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('130', '117', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('131', '122', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('132', '123', '39', '0', '1');
INSERT INTO `webSubRelation` VALUES ('133', '17', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('134', '18', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('135', '26', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('136', '86', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('137', '87', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('138', '89', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('139', '90', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('140', '91', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('141', '92', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('142', '93', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('143', '98', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('144', '99', '39', '0', '2');
INSERT INTO `webSubRelation` VALUES ('145', '1', '42', '0', '0');
INSERT INTO `webSubRelation` VALUES ('146', '4', '42', '0', '0');
INSERT INTO `webSubRelation` VALUES ('147', '6', '42', '0', '1');
INSERT INTO `webSubRelation` VALUES ('148', '8', '42', '0', '1');
INSERT INTO `webSubRelation` VALUES ('149', '124', '42', '0', '1');
INSERT INTO `webSubRelation` VALUES ('150', '28', '42', '0', '2');
INSERT INTO `webSubRelation` VALUES ('151', '60', '42', '0', '2');
INSERT INTO `webSubRelation` VALUES ('152', '77', '42', '0', '2');
INSERT INTO `webSubRelation` VALUES ('153', '1', '43', '0', '0');
INSERT INTO `webSubRelation` VALUES ('154', '2', '43', '0', '0');
INSERT INTO `webSubRelation` VALUES ('155', '4', '43', '0', '0');
INSERT INTO `webSubRelation` VALUES ('156', '8', '43', '0', '1');
INSERT INTO `webSubRelation` VALUES ('157', '104', '43', '0', '1');
INSERT INTO `webSubRelation` VALUES ('158', '124', '43', '0', '1');
INSERT INTO `webSubRelation` VALUES ('159', '76', '43', '0', '2');
INSERT INTO `webSubRelation` VALUES ('160', '77', '43', '0', '2');
INSERT INTO `webSubRelation` VALUES ('161', '1', '44', '0', '0');
INSERT INTO `webSubRelation` VALUES ('162', '2', '44', '0', '0');
INSERT INTO `webSubRelation` VALUES ('163', '3', '44', '0', '0');
INSERT INTO `webSubRelation` VALUES ('164', '4', '44', '0', '0');
INSERT INTO `webSubRelation` VALUES ('165', '9', '44', '0', '1');
INSERT INTO `webSubRelation` VALUES ('166', '111', '44', '0', '1');
INSERT INTO `webSubRelation` VALUES ('167', '124', '44', '0', '1');
INSERT INTO `webSubRelation` VALUES ('168', '83', '44', '0', '2');
INSERT INTO `webSubRelation` VALUES ('169', '1', '45', '0', '0');
INSERT INTO `webSubRelation` VALUES ('170', '2', '45', '0', '0');
INSERT INTO `webSubRelation` VALUES ('171', '3', '45', '0', '0');
INSERT INTO `webSubRelation` VALUES ('172', '4', '45', '0', '0');
INSERT INTO `webSubRelation` VALUES ('173', '8', '45', '0', '1');
INSERT INTO `webSubRelation` VALUES ('174', '107', '45', '0', '1');
INSERT INTO `webSubRelation` VALUES ('175', '124', '45', '0', '1');
INSERT INTO `webSubRelation` VALUES ('176', '63', '45', '0', '2');
INSERT INTO `webSubRelation` VALUES ('177', '77', '45', '0', '2');
INSERT INTO `webSubRelation` VALUES ('178', '1', '46', '0', '0');
INSERT INTO `webSubRelation` VALUES ('179', '2', '46', '0', '0');
INSERT INTO `webSubRelation` VALUES ('180', '3', '46', '0', '0');
INSERT INTO `webSubRelation` VALUES ('181', '4', '46', '0', '0');
INSERT INTO `webSubRelation` VALUES ('182', '11', '46', '0', '1');
INSERT INTO `webSubRelation` VALUES ('183', '111', '46', '0', '1');
INSERT INTO `webSubRelation` VALUES ('184', '124', '46', '0', '1');
INSERT INTO `webSubRelation` VALUES ('185', '95', '46', '0', '2');
INSERT INTO `webSubRelation` VALUES ('186', '1', '47', '0', '0');
INSERT INTO `webSubRelation` VALUES ('187', '2', '47', '0', '0');
INSERT INTO `webSubRelation` VALUES ('188', '3', '47', '0', '0');
INSERT INTO `webSubRelation` VALUES ('189', '4', '47', '0', '0');
INSERT INTO `webSubRelation` VALUES ('190', '8', '47', '0', '1');
INSERT INTO `webSubRelation` VALUES ('191', '107', '47', '0', '1');
INSERT INTO `webSubRelation` VALUES ('192', '111', '47', '0', '1');
INSERT INTO `webSubRelation` VALUES ('193', '124', '47', '0', '1');
INSERT INTO `webSubRelation` VALUES ('194', '59', '47', '0', '2');
INSERT INTO `webSubRelation` VALUES ('195', '1', '48', '0', '0');
INSERT INTO `webSubRelation` VALUES ('196', '2', '48', '0', '0');
INSERT INTO `webSubRelation` VALUES ('197', '3', '48', '0', '0');
INSERT INTO `webSubRelation` VALUES ('198', '4', '48', '0', '0');
INSERT INTO `webSubRelation` VALUES ('199', '6', '48', '0', '1');
INSERT INTO `webSubRelation` VALUES ('200', '111', '48', '0', '1');
INSERT INTO `webSubRelation` VALUES ('201', '124', '48', '0', '1');
INSERT INTO `webSubRelation` VALUES ('202', '13', '48', '0', '2');
INSERT INTO `webSubRelation` VALUES ('203', '1', '49', '0', '0');
INSERT INTO `webSubRelation` VALUES ('204', '4', '49', '0', '0');
INSERT INTO `webSubRelation` VALUES ('205', '6', '49', '0', '1');
INSERT INTO `webSubRelation` VALUES ('206', '7', '49', '0', '1');
INSERT INTO `webSubRelation` VALUES ('207', '123', '49', '0', '1');
INSERT INTO `webSubRelation` VALUES ('208', '27', '49', '0', '2');
INSERT INTO `webSubRelation` VALUES ('209', '41', '49', '0', '2');
INSERT INTO `webSubRelation` VALUES ('210', '1', '50', '0', '0');
INSERT INTO `webSubRelation` VALUES ('211', '2', '50', '0', '0');
INSERT INTO `webSubRelation` VALUES ('212', '3', '50', '0', '0');
INSERT INTO `webSubRelation` VALUES ('213', '4', '50', '0', '0');
INSERT INTO `webSubRelation` VALUES ('214', '6', '50', '0', '1');
INSERT INTO `webSubRelation` VALUES ('215', '7', '50', '0', '1');
INSERT INTO `webSubRelation` VALUES ('216', '8', '50', '0', '1');
INSERT INTO `webSubRelation` VALUES ('217', '106', '50', '0', '1');
INSERT INTO `webSubRelation` VALUES ('218', '119', '50', '0', '1');
INSERT INTO `webSubRelation` VALUES ('219', '120', '50', '0', '1');
INSERT INTO `webSubRelation` VALUES ('220', '47', '50', '0', '2');
INSERT INTO `webSubRelation` VALUES ('221', '1', '51', '0', '0');
INSERT INTO `webSubRelation` VALUES ('222', '10', '51', '0', '1');
INSERT INTO `webSubRelation` VALUES ('223', '87', '51', '0', '2');
INSERT INTO `webSubRelation` VALUES ('224', '90', '51', '0', '2');
INSERT INTO `webSubRelation` VALUES ('225', '1', '52', '0', '0');
INSERT INTO `webSubRelation` VALUES ('226', '6', '52', '0', '1');
INSERT INTO `webSubRelation` VALUES ('227', '8', '52', '0', '1');
INSERT INTO `webSubRelation` VALUES ('228', '17', '52', '0', '2');
INSERT INTO `webSubRelation` VALUES ('229', '18', '52', '0', '2');
INSERT INTO `webSubRelation` VALUES ('230', '1', '53', '0', '0');
INSERT INTO `webSubRelation` VALUES ('231', '8', '53', '0', '1');
INSERT INTO `webSubRelation` VALUES ('232', '9', '53', '0', '1');
INSERT INTO `webSubRelation` VALUES ('233', '77', '53', '0', '2');
INSERT INTO `webSubRelation` VALUES ('234', '1', '54', '0', '0');
INSERT INTO `webSubRelation` VALUES ('235', '2', '54', '0', '0');
INSERT INTO `webSubRelation` VALUES ('236', '6', '54', '0', '1');
INSERT INTO `webSubRelation` VALUES ('237', '7', '54', '0', '1');
INSERT INTO `webSubRelation` VALUES ('238', '105', '54', '0', '1');
INSERT INTO `webSubRelation` VALUES ('239', '38', '54', '0', '2');
INSERT INTO `webSubRelation` VALUES ('240', '41', '54', '0', '2');
INSERT INTO `webSubRelation` VALUES ('241', '1', '55', '0', '0');
INSERT INTO `webSubRelation` VALUES ('242', '4', '55', '0', '0');
INSERT INTO `webSubRelation` VALUES ('243', '6', '55', '0', '1');
INSERT INTO `webSubRelation` VALUES ('244', '123', '55', '0', '1');
INSERT INTO `webSubRelation` VALUES ('245', '20', '55', '0', '2');
INSERT INTO `webSubRelation` VALUES ('246', '1', '56', '0', '0');
INSERT INTO `webSubRelation` VALUES ('247', '10', '56', '0', '1');
INSERT INTO `webSubRelation` VALUES ('248', '89', '56', '0', '2');
INSERT INTO `webSubRelation` VALUES ('249', '1', '57', '0', '0');
INSERT INTO `webSubRelation` VALUES ('250', '2', '57', '0', '0');
INSERT INTO `webSubRelation` VALUES ('251', '10', '57', '0', '1');
INSERT INTO `webSubRelation` VALUES ('252', '103', '57', '0', '1');
INSERT INTO `webSubRelation` VALUES ('253', '87', '57', '0', '2');
INSERT INTO `webSubRelation` VALUES ('254', '88', '57', '0', '2');
INSERT INTO `webSubRelation` VALUES ('255', '89', '57', '0', '2');
INSERT INTO `webSubRelation` VALUES ('256', '1', '58', '0', '0');
INSERT INTO `webSubRelation` VALUES ('257', '2', '58', '0', '0');
INSERT INTO `webSubRelation` VALUES ('258', '7', '58', '0', '1');
INSERT INTO `webSubRelation` VALUES ('259', '104', '58', '0', '1');
INSERT INTO `webSubRelation` VALUES ('260', '42', '58', '0', '2');
INSERT INTO `webSubRelation` VALUES ('261', '1', '59', '0', '0');
INSERT INTO `webSubRelation` VALUES ('262', '2', '59', '0', '0');
INSERT INTO `webSubRelation` VALUES ('263', '6', '59', '0', '1');
INSERT INTO `webSubRelation` VALUES ('264', '103', '59', '0', '1');
INSERT INTO `webSubRelation` VALUES ('265', '27', '59', '0', '2');
INSERT INTO `webSubRelation` VALUES ('266', '1', '60', '0', '0');
INSERT INTO `webSubRelation` VALUES ('267', '6', '60', '0', '1');
INSERT INTO `webSubRelation` VALUES ('268', '7', '60', '0', '1');
INSERT INTO `webSubRelation` VALUES ('269', '28', '60', '0', '2');
INSERT INTO `webSubRelation` VALUES ('270', '1', '61', '0', '0');
INSERT INTO `webSubRelation` VALUES ('271', '2', '61', '0', '0');
INSERT INTO `webSubRelation` VALUES ('272', '8', '61', '0', '1');
INSERT INTO `webSubRelation` VALUES ('273', '107', '61', '0', '1');
INSERT INTO `webSubRelation` VALUES ('274', '69', '61', '0', '2');
