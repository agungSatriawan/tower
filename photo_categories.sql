/*
 Navicat Premium Dump SQL

 Source Server         : local3307
 Source Server Type    : MySQL
 Source Server Version : 100432 (10.4.32-MariaDB)
 Source Host           : localhost:3307
 Source Schema         : tower

 Target Server Type    : MySQL
 Target Server Version : 100432 (10.4.32-MariaDB)
 File Encoding         : 65001

 Date: 12/03/2026 04:36:32
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for photo_categories
-- ----------------------------
DROP TABLE IF EXISTS `photo_categories`;
CREATE TABLE `photo_categories`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `section_id` int NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `max_photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `date_created` datetime NULL DEFAULT NULL,
  `date_modified` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 24 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of photo_categories
-- ----------------------------
INSERT INTO `photo_categories` VALUES (1, 1, 'MK ONSITE', '1', NULL, NULL);
INSERT INTO `photo_categories` VALUES (2, 1, 'SKOM', '2', NULL, NULL);
INSERT INTO `photo_categories` VALUES (3, 2, 'PEMBESIAN SITE', '6', NULL, NULL);
INSERT INTO `photo_categories` VALUES (4, 3, 'MK ON SITE', '1', NULL, NULL);
INSERT INTO `photo_categories` VALUES (5, 3, 'PERSIAPAN PENGECORAN', '1', NULL, NULL);
INSERT INTO `photo_categories` VALUES (6, 3, 'PENGECORAN', '6', NULL, NULL);
INSERT INTO `photo_categories` VALUES (7, 4, 'MK ON SITE', '1', NULL, NULL);
INSERT INTO `photo_categories` VALUES (8, 4, 'MATERIAL ON SITE', '2', NULL, NULL);
INSERT INTO `photo_categories` VALUES (9, 4, 'ERECTION', '3', NULL, NULL);
INSERT INTO `photo_categories` VALUES (10, 5, 'FOTO MK', '1', NULL, NULL);
INSERT INTO `photo_categories` VALUES (11, 5, 'SITE VIEW', '1', NULL, NULL);
INSERT INTO `photo_categories` VALUES (12, 5, 'PANEL ACPDB', '1', NULL, NULL);
INSERT INTO `photo_categories` VALUES (13, 5, 'PANEL KWH', '1', NULL, NULL);
INSERT INTO `photo_categories` VALUES (14, 5, 'GROUNDING', '2', NULL, NULL);
INSERT INTO `photo_categories` VALUES (15, 5, 'PENGUKURAN TEGANGAN RS', '1', NULL, NULL);
INSERT INTO `photo_categories` VALUES (16, 5, 'PENGUKURAN TEGANGAN RN', '1', NULL, NULL);
INSERT INTO `photo_categories` VALUES (17, 5, 'PENGUKURAN TEGANGAN RT', '1', NULL, NULL);
INSERT INTO `photo_categories` VALUES (18, 5, 'PENGUKURAN TEGANGAN SN', '1', NULL, NULL);
INSERT INTO `photo_categories` VALUES (19, 5, 'PENGUKURAN TEGANGAN ST', '1', NULL, NULL);
INSERT INTO `photo_categories` VALUES (20, 5, 'PENGUKURAN TEGANGAN TN', '1', NULL, NULL);
INSERT INTO `photo_categories` VALUES (21, 5, 'PENGUKURAN TEGANGAN NG', '1', NULL, NULL);
INSERT INTO `photo_categories` VALUES (22, 5, 'PENGUKURAN TEGANGAN', '7', NULL, NULL);
INSERT INTO `photo_categories` VALUES (23, 5, 'VERTICALITY', '4', NULL, NULL);

-- ----------------------------
-- Table structure for photos
-- ----------------------------
DROP TABLE IF EXISTS `photos`;
CREATE TABLE `photos`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `site_id` int NULL DEFAULT NULL,
  `category_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `slot` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `file_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `date_created` datetime NULL DEFAULT NULL,
  `date_modified` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of photos
-- ----------------------------

-- ----------------------------
-- Table structure for section
-- ----------------------------
DROP TABLE IF EXISTS `section`;
CREATE TABLE `section`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `sheet_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `date_created` datetime NULL DEFAULT NULL,
  `date_modified` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of section
-- ----------------------------
INSERT INTO `section` VALUES (1, 'SKOM', 'SKOM', NULL, NULL);
INSERT INTO `section` VALUES (2, 'PEMBESIAN', 'PEMBESIAN SITE', NULL, NULL);
INSERT INTO `section` VALUES (3, 'PENGECORAN', 'PENGECORAN SITE', NULL, NULL);
INSERT INTO `section` VALUES (4, 'ERECTION', 'MOS & ERECTION', NULL, NULL);
INSERT INTO `section` VALUES (5, 'ATP', 'PELAKSANAAN ATP', NULL, NULL);

-- ----------------------------
-- Table structure for sites
-- ----------------------------
DROP TABLE IF EXISTS `sites`;
CREATE TABLE `sites`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `project_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `site_name_po` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `site_name_tenant` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `site_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `start` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `done` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tenant` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `type_tower` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `height` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `latitude` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `longtude` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pekerjaan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `area` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `mitra` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `atp_date` datetime NULL DEFAULT NULL,
  `executive_general_manager` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `manager_construction` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `gm_area_office` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `manager_const` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `project_management` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `waspang_area` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `date_created` datetime NULL DEFAULT NULL,
  `date_modified` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sites
-- ----------------------------
INSERT INTO `sites` VALUES (1, '24TS09B310', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
