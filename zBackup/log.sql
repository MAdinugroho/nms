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

 Date: 05/09/2019 10:49:16
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for log
-- ----------------------------
DROP TABLE IF EXISTS `log`;
CREATE TABLE `log`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `time` timestamp(0) NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of log
-- ----------------------------
INSERT INTO `log` VALUES (1, 'superadmin', '2019-09-04 17:45:52', 'Login');
INSERT INTO `log` VALUES (2, 'superadmin', '2019-09-04 17:47:05', 'Create admin');
INSERT INTO `log` VALUES (3, 'superadmin', '2019-09-04 17:47:15', 'Delete admin');
INSERT INTO `log` VALUES (4, 'superadmin', '2019-09-04 17:48:37', 'Logout');
INSERT INTO `log` VALUES (5, 'superadmin', '2019-09-04 17:49:48', 'Login');
INSERT INTO `log` VALUES (6, 'superadmin', '2019-09-04 18:01:53', 'Logout');
INSERT INTO `log` VALUES (7, 'superadmin', '2019-09-04 18:02:33', 'Login');
INSERT INTO `log` VALUES (8, 'superadmin', '2019-09-04 18:11:55', 'Login');
INSERT INTO `log` VALUES (9, 'superadmin', '2019-09-04 18:12:46', 'Login');
INSERT INTO `log` VALUES (10, 'superadmin', '2019-09-04 18:15:41', 'Login');
INSERT INTO `log` VALUES (11, NULL, '2019-09-04 18:26:36', 'Logout');
INSERT INTO `log` VALUES (12, 'superadmin', '2019-09-04 18:26:46', 'Login');
INSERT INTO `log` VALUES (13, 'SuperAdmin', '2019-09-04 18:28:32', 'Update Profile');
INSERT INTO `log` VALUES (14, 'SuperAdmin2', '2019-09-04 18:28:40', 'Update Profile');
INSERT INTO `log` VALUES (15, 'superadmin', '2019-09-04 22:01:12', 'Login');
INSERT INTO `log` VALUES (16, 'superadmin', '2019-09-04 22:42:23', 'Create user');
INSERT INTO `log` VALUES (17, 'superadmin', '2019-09-04 22:54:48', 'Logout');
INSERT INTO `log` VALUES (18, 'user2', '2019-09-04 22:54:59', 'Login');
INSERT INTO `log` VALUES (19, 'user2', '2019-09-04 22:55:03', 'Logout');
INSERT INTO `log` VALUES (20, 'superadmin', '2019-09-04 22:57:01', 'Login');
INSERT INTO `log` VALUES (21, 'superadmin', '2019-09-05 00:58:15', 'Login');
INSERT INTO `log` VALUES (22, 'superadmin', '2019-09-05 10:45:38', 'Login');

SET FOREIGN_KEY_CHECKS = 1;
