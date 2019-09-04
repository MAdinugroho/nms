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

 Date: 04/09/2019 13:38:44
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for account_tacac
-- ----------------------------
DROP TABLE IF EXISTS `account_tacac`;
CREATE TABLE `account_tacac`  (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `name` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `adname` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `group` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` varchar(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of account_tacac
-- ----------------------------
INSERT INTO `account_tacac` VALUES (1, 'admin1', 'admin1@tacacs.local 	', 'admin1', 'BU1Lgws9wX2WXYhP+qLekw==', 'admin_tacacs', 'admin_tacacs', '0');
INSERT INTO `account_tacac` VALUES (2, 'op1', 'op1@tacacs.local', 'op1', 'U4gdL9Xbh0SlxgDr1BJ/5A==', 'op_tacacs', 'op_tacacs', '0');

SET FOREIGN_KEY_CHECKS = 1;
