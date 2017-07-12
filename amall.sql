/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : amall

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-07-12 23:30:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for am_admin_column
-- ----------------------------
DROP TABLE IF EXISTS `am_admin_column`;
CREATE TABLE `am_admin_column` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `level` int(10) unsigned NOT NULL DEFAULT '0',
  `sort` int(10) unsigned NOT NULL DEFAULT '0',
  `fid` int(10) unsigned NOT NULL DEFAULT '0',
  `icons` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of am_admin_column
-- ----------------------------
INSERT INTO `am_admin_column` VALUES ('1', '仪表盘', 'admin.index', '0', '0', '0', 'fa fa-home');
INSERT INTO `am_admin_column` VALUES ('2', '管理员管理', '', '0', '1', '0', 'fa fa-users');
INSERT INTO `am_admin_column` VALUES ('3', '管理员', '', '1', '0', '2', 'fa fa-user');
INSERT INTO `am_admin_column` VALUES ('4', '权限', '', '1', '1', '2', 'fa fa-suitcase');
INSERT INTO `am_admin_column` VALUES ('5', '栏目', '', '1', '2', '2', 'fa fa-columns');

-- ----------------------------
-- Table structure for am_admin_users
-- ----------------------------
DROP TABLE IF EXISTS `am_admin_users`;
CREATE TABLE `am_admin_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of am_admin_users
-- ----------------------------
INSERT INTO `am_admin_users` VALUES ('1', 'admin', 'admin@qq.com', '$2y$10$VVFKl8GPguISoxqsEcyyEe4TR7CPrcqrd7TwrsK0oHcew1eI3gUIy', 'TMLgtIDYrMaLaimYthp19fc7uI4cI4VKqc7U5sXVIksZw9w1Er6eJac0l30z', '2017-07-12 11:17:37', '2017-07-12 11:17:37');

-- ----------------------------
-- Table structure for am_users
-- ----------------------------
DROP TABLE IF EXISTS `am_users`;
CREATE TABLE `am_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of am_users
-- ----------------------------
INSERT INTO `am_users` VALUES ('1', 'test', 'test@qq.com', '$2y$10$hV6LLkyLWmFoUEublGZOSO.XOlOyiniwfqILipnr.Ysxu8MpVmqD2', '0w7OZx96S4jguCyY8EnruZaxKJmQRPxywcZGZyxThjEIQKWbfrJXE6uBNfV1', '2017-07-11 01:57:11', '2017-07-11 01:57:11');
SET FOREIGN_KEY_CHECKS=1;
