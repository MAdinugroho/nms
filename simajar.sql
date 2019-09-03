/*
 Navicat Premium Data Transfer

 Source Server         : xampp
 Source Server Type    : MySQL
 Source Server Version : 100129
 Source Host           : localhost:3306
 Source Schema         : simajar

 Target Server Type    : MySQL
 Target Server Version : 100129
 File Encoding         : 65001

 Date: 03/09/2019 16:04:04
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for account
-- ----------------------------
DROP TABLE IF EXISTS `account`;
CREATE TABLE `account`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `name` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(256) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `level` varchar(5) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date_created` date NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of account
-- ----------------------------
INSERT INTO `account` VALUES (1, 'superadmin', 'SuperAdmin', '$2y$10$rnAZSlMdFcPj0dsvV9Ikbuw8mOLpWXtNWxpV5/P8yPbxsWQB624YW', 'admin', '2019-09-02', 'Adminict@undip.ac.id', '0');
INSERT INTO `account` VALUES (2, 'user', 'User', '$2y$10$E0wE1gwXOSAHUNYLXz3fu.q7OxH5z0qy4772GERzqOf0WX7tApI1a', 'user', '2019-08-04', 'userict@undip.ac.id', '0');
INSERT INTO `account` VALUES (3, 'admin1@gmail.com', 'admin1', '$2y$10$/BuFBAnHoNhen0QPjjOUuuW1IpLyMgMPO9ZyoT2mmwrecl.DpNu7K', 'admin', '2019-07-13', NULL, NULL);
INSERT INTO `account` VALUES (8, 'adi2', 'adi nugroho`', '$2y$10$yZpXTRdnG9LJajGxm3/z8.98/pJK5hN31.mNKSNHUwBGCoObmKBZy', 'admin', '2019-08-31', 'nugiecool04@gmail.com', '1');
INSERT INTO `account` VALUES (9, 'user2', 'user', '$2y$10$M1DJaTzojphIa42HSZ/05un.52oGaulMnT/y7sk6HXYrL47aphAx2', 'user', '2019-08-31', 'user@gmail.com', '1');

-- ----------------------------
-- Table structure for account_tacac
-- ----------------------------
DROP TABLE IF EXISTS `account_tacac`;
CREATE TABLE `account_tacac`  (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `name` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `adname` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `group` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of account_tacac
-- ----------------------------
INSERT INTO `account_tacac` VALUES (1, 'adi', 'nugiecool04@gmail.com', 'adi', 'adi', 'admin_tacacs', 'admin_tacacs', '0');
INSERT INTO `account_tacac` VALUES (2, 'adi', 'nugiecool04@gmail.com', 'adi', 'adi', 'op_tacacs', 'op_tacacs', '0');

-- ----------------------------
-- Table structure for webconf
-- ----------------------------
DROP TABLE IF EXISTS `webconf`;
CREATE TABLE `webconf`  (
  `id` int(1) NOT NULL,
  `main_color` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `office_name` varchar(18) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `office_address` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `office_phone_number` varchar(14) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `slogan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `host` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `port` varchar(4) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `crypto` varchar(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of webconf
-- ----------------------------
INSERT INTO `webconf` VALUES (1, 'primary', 'NEMESIS', 'Jalan Sudarto', '081212583838', 'Network Management System', 'Memanajemen Kebutuhan Jaringan Di UNDIP', 'smtp.office365.com', 'admin@sipmaft.com', 'teknik@2019', '587', 'TLS');

SET FOREIGN_KEY_CHECKS = 1;
