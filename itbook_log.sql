/*
Navicat MySQL Data Transfer

Source Server         : 虚拟机
Source Server Version : 50725
Source Host           : 192.168.33.10:3306
Source Database       : itbook_log

Target Server Type    : MYSQL
Target Server Version : 50725
File Encoding         : 65001

Date: 2019-03-29 18:00:14
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for everDayData
-- ----------------------------
DROP TABLE IF EXISTS `everDayData`;
CREATE TABLE `everDayData` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `registerNum` int(10) NOT NULL DEFAULT '0' COMMENT '注册数',
  `loginNum` int(10) NOT NULL DEFAULT '0' COMMENT '登陆数',
  `indexPv` int(10) NOT NULL DEFAULT '0' COMMENT '首页pv',
  `indexIp` int(10) NOT NULL DEFAULT '0' COMMENT '首页ip',
  `submitWebNum` int(10) NOT NULL DEFAULT '0' COMMENT '当日新发布的网站模板数',
  `newWebNum` int(10) NOT NULL DEFAULT '0' COMMENT '当日新发布的网站模板数',
  `date` date DEFAULT NULL COMMENT '日期',
  PRIMARY KEY (`id`),
  UNIQUE KEY `date` (`date`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of everDayData
-- ----------------------------
INSERT INTO `everDayData` VALUES ('8', '1', '8', '0', '0', '23', '31', '2019-03-20');
INSERT INTO `everDayData` VALUES ('9', '0', '0', '0', '0', '2', '31', '2019-03-21');
INSERT INTO `everDayData` VALUES ('10', '0', '0', '0', '0', '0', '32', '2019-03-27');
INSERT INTO `everDayData` VALUES ('11', '0', '0', '0', '0', '0', '19', '2019-03-28');
INSERT INTO `everDayData` VALUES ('12', '0', '0', '0', '0', '0', '17', '2019-03-29');

-- ----------------------------
-- Table structure for forgetpassword
-- ----------------------------
DROP TABLE IF EXISTS `forgetpassword`;
CREATE TABLE `forgetpassword` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL DEFAULT '0' COMMENT 'uid',
  `password` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '旧密码',
  `client` varchar(255) CHARACTER SET utf8 DEFAULT '' COMMENT '登陆客户端',
  `ip` varchar(50) CHARACTER SET utf8 DEFAULT '' COMMENT 'ip',
  `address` varchar(255) CHARACTER SET utf8 DEFAULT '' COMMENT '地址',
  `country` varchar(255) CHARACTER SET utf8 DEFAULT '' COMMENT '国家',
  `salt` varchar(32) NOT NULL DEFAULT '' COMMENT '盐值',
  `createTime` varchar(20) NOT NULL DEFAULT '' COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of forgetpassword
-- ----------------------------
INSERT INTO `forgetpassword` VALUES ('1', '32', '$2y$13$3w8yUmwd8HJHwpz1zKWsNu4a55.6R6joYiZIeG3PXi/2YKjx.WNdi', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', '192.168.33.1', '对方和您在同一内部网', '局域网', 'UZRp0MhGWkKGdgfYJ_GJ4n5v9FLOtAG-', '1553052704');

-- ----------------------------
-- Table structure for userLogin
-- ----------------------------
DROP TABLE IF EXISTS `userLogin`;
CREATE TABLE `userLogin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL DEFAULT '0' COMMENT 'uid',
  `loginTime` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '登陆时间',
  `logoutTime` varchar(30) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '退出时间',
  `client` varchar(255) CHARACTER SET utf8 DEFAULT '' COMMENT '登陆客户端',
  `ip` varchar(50) CHARACTER SET utf8 DEFAULT '' COMMENT 'ip',
  `address` varchar(255) CHARACTER SET utf8 DEFAULT '' COMMENT '地址',
  `country` varchar(255) CHARACTER SET utf8 DEFAULT '' COMMENT '国家',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of userLogin
-- ----------------------------
INSERT INTO `userLogin` VALUES ('28', '32', '1553050818', '', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', '192.168.33.1', '对方和您在同一内部网', '局域网');
INSERT INTO `userLogin` VALUES ('29', '32', '1553050973', '', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', '192.168.33.1', '对方和您在同一内部网', '局域网');
INSERT INTO `userLogin` VALUES ('30', '32', '1553051240', '', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', '192.168.33.1', '对方和您在同一内部网', '局域网');
INSERT INTO `userLogin` VALUES ('31', '32', '1553052811', '', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', '192.168.33.1', '对方和您在同一内部网', '局域网');
INSERT INTO `userLogin` VALUES ('32', '32', '1553066697', '', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', '192.168.33.1', '对方和您在同一内部网', '局域网');
INSERT INTO `userLogin` VALUES ('33', '32', '1553068182', '1553069339', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', '192.168.33.1', '对方和您在同一内部网', '局域网');
INSERT INTO `userLogin` VALUES ('34', '32', '1553069375', '', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', '192.168.33.1', '对方和您在同一内部网', '局域网');
INSERT INTO `userLogin` VALUES ('35', '32', '1553069425', '', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', '192.168.33.1', '对方和您在同一内部网', '局域网');
