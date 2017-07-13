/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : amall

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-07-13 18:15:38
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for am_admin_menu
-- ----------------------------
DROP TABLE IF EXISTS `am_admin_menu`;
CREATE TABLE `am_admin_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned NOT NULL DEFAULT '0',
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `url` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `sort` int(10) unsigned NOT NULL DEFAULT '0',
  `icons` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of am_admin_menu
-- ----------------------------
INSERT INTO `am_admin_menu` VALUES ('1', '0', '仪表盘', '/', '0', 'fa fa-home', null, null);
INSERT INTO `am_admin_menu` VALUES ('2', '0', '管理员管理', '', '1', 'fa fa-users', null, null);
INSERT INTO `am_admin_menu` VALUES ('3', '2', '管理员', '', '0', 'fa fa-user', null, null);
INSERT INTO `am_admin_menu` VALUES ('4', '2', '权限', '', '1', 'fa fa-suitcase', null, null);
INSERT INTO `am_admin_menu` VALUES ('5', '2', '栏目', '', '2', 'fa fa-columns', null, null);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of am_users
-- ----------------------------
INSERT INTO `am_users` VALUES ('1', 'test', 'test@qq.com', '$2y$10$hV6LLkyLWmFoUEublGZOSO.XOlOyiniwfqILipnr.Ysxu8MpVmqD2', '0w7OZx96S4jguCyY8EnruZaxKJmQRPxywcZGZyxThjEIQKWbfrJXE6uBNfV1', '2017-07-11 01:57:11', '2017-07-11 01:57:11');
SET FOREIGN_KEY_CHECKS=1;
