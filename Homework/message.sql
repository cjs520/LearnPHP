/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : myweb

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-06-19 02:51:27
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for message
-- ----------------------------
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `id` tinyint(1) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `content` tinytext NOT NULL,
  `lastdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of message
-- ----------------------------
INSERT INTO `message` VALUES ('11', 'ssss', 'ssssssss', '2017-06-18');
INSERT INTO `message` VALUES ('12', 'sfsafsafsa', 'fsafsafasfasfs', '0000-00-00');
INSERT INTO `message` VALUES ('13', 'fsafsaf', 'safsafasfasf', '0000-00-00');
INSERT INTO `message` VALUES ('14', 'fasfasfa', 's法萨芬撒飞洒', '2017-06-18');
INSERT INTO `message` VALUES ('15', '222222222', 'fdsfssssssssssssssss', '2017-06-18');
INSERT INTO `message` VALUES ('16', 'werwewqewqe', 'fdasdfasdasda', '2017-06-18');
INSERT INTO `message` VALUES ('17', 'gdssssssssss', 'gdsssssssssssssssssss', '2017-06-18');
