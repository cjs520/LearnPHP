/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50538
Source Host           : localhost:3306
Source Database       : test-php

Target Server Type    : MYSQL
Target Server Version : 50538
File Encoding         : 65001

Date: 2017-05-04 10:15:15
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(50) NOT NULL,
  `news_content` text,
  `pubuser` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('1', '测试新闻', '测试新闻内容', '张三');
INSERT INTO `news` VALUES ('2', '天气预报', '阴天', '李四');
