/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : cba

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-08-17 16:56:49
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `cba_admin`
-- ----------------------------
DROP TABLE IF EXISTS `cba_admin`;
CREATE TABLE `cba_admin` (
  `admin_id` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT '主键自增id',
  `user_name` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `last_login_ip` varchar(16) NOT NULL DEFAULT '' COMMENT '最后一次登录IP',
  `last_login_time` datetime NOT NULL COMMENT '最后登录时间',
  `create_time` datetime NOT NULL COMMENT '创建时间',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1:显示；0：不显示',
  `role_id` tinyint(4) NOT NULL COMMENT '角色id',
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cba_admin
-- ----------------------------
INSERT INTO `cba_admin` VALUES ('1', 'admin', 'efe6398127928f1b2e9ef3207fb82663', '127.0.0.1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', '1');
INSERT INTO `cba_admin` VALUES ('2', '张三', 'efe6398127928f1b2e9ef3207fb82663', '127.0.0.1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', '2');

-- ----------------------------
-- Table structure for `cba_module`
-- ----------------------------
DROP TABLE IF EXISTS `cba_module`;
CREATE TABLE `cba_module` (
  `id` tinyint(6) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `pid` int(4) NOT NULL,
  `module_name` varchar(25) NOT NULL DEFAULT '' COMMENT '权限名称',
  `module_url` varchar(25) NOT NULL DEFAULT '' COMMENT '权限路径',
  `add_time` varchar(25) NOT NULL COMMENT '添加时间',
  `status` int(4) unsigned NOT NULL DEFAULT '1' COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cba_module
-- ----------------------------

-- ----------------------------
-- Table structure for `cba_module_power`
-- ----------------------------
DROP TABLE IF EXISTS `cba_module_power`;
CREATE TABLE `cba_module_power` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mudule_id` int(11) NOT NULL COMMENT '权限id',
  `role_id` int(11) NOT NULL COMMENT '角色ID',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cba_module_power
-- ----------------------------

-- ----------------------------
-- Table structure for `cba_role`
-- ----------------------------
DROP TABLE IF EXISTS `cba_role`;
CREATE TABLE `cba_role` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(25) NOT NULL DEFAULT '' COMMENT '角色名称',
  `add_time` varchar(25) NOT NULL COMMENT '角色添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cba_role
-- ----------------------------
