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

 Date: 16/03/2026 05:20:44
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
) ENGINE = InnoDB AUTO_INCREMENT = 31 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

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
INSERT INTO `photo_categories` VALUES (24, 6, 'TEAM WITH APD', '2', NULL, NULL);
INSERT INTO `photo_categories` VALUES (25, 6, 'K3', '2', NULL, NULL);
INSERT INTO `photo_categories` VALUES (26, 6, 'TOOLS', '4', NULL, NULL);
INSERT INTO `photo_categories` VALUES (27, 7, 'MK ON SITE', '1', NULL, NULL);
INSERT INTO `photo_categories` VALUES (28, 7, 'MOS', '3', NULL, NULL);
INSERT INTO `photo_categories` VALUES (29, 8, 'TOWER VIEW', '2', NULL, NULL);
INSERT INTO `photo_categories` VALUES (30, 8, 'PERKUATAN', '10', NULL, NULL);

-- ----------------------------
-- Table structure for photos
-- ----------------------------
DROP TABLE IF EXISTS `photos`;
CREATE TABLE `photos`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `site_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `category_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `slot` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `file_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `date_created` datetime NULL DEFAULT NULL,
  `date_modified` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 40 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of photos
-- ----------------------------
INSERT INTO `photos` VALUES (34, 'TGR292', '2', '1', 'siteTGR292_cat2_slot1.jpg', NULL, NULL);
INSERT INTO `photos` VALUES (35, 'ewqewqeq', '24', '1', 'siteewqewqeq_cat24_slot1.jpg', NULL, NULL);
INSERT INTO `photos` VALUES (39, 'TGR292', '3', '1', 'siteTGR292_cat3_slot1.jpg', NULL, NULL);

-- ----------------------------
-- Table structure for section
-- ----------------------------
DROP TABLE IF EXISTS `section`;
CREATE TABLE `section`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `pekerjaan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `sheet_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `date_created` datetime NULL DEFAULT NULL,
  `date_modified` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of section
-- ----------------------------
INSERT INTO `section` VALUES (1, 'B2S', 'SKOM', 'SKOM', NULL, NULL);
INSERT INTO `section` VALUES (2, 'B2S', 'PEMBESIAN', 'PEMBESIAN SITE', NULL, NULL);
INSERT INTO `section` VALUES (3, 'B2S', 'PENGECORAN', 'PENGECORAN SITE', NULL, NULL);
INSERT INTO `section` VALUES (4, 'B2S', 'ERECTION', 'MOS & ERECTION', NULL, NULL);
INSERT INTO `section` VALUES (5, 'B2S', 'ATP', 'PELAKSANAAN ATP', NULL, NULL);
INSERT INTO `section` VALUES (6, 'PERKUATAN', 'TEAM & TOOLS', 'FOTO PENDUKUNG TEAM & TOOLS', NULL, NULL);
INSERT INTO `section` VALUES (7, 'PERKUATAN', 'MOS', 'PREPERATION & MOS', NULL, NULL);
INSERT INTO `section` VALUES (8, 'PERKUATAN', 'DOKUMENTASI ATP', 'PELAKSANAAN ATP', NULL, NULL);

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
  `longitude` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pekerjaan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `area` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `mitra` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `atp_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `executive_general_manager` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `manager_construction` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `gm_area_office` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `manager_const` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `project_management` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `waspang_area` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `progress` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `date_created` datetime NULL DEFAULT NULL,
  `date_modified` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sites
-- ----------------------------
INSERT INTO `sites` VALUES (8, '26TS01B0129', '', 'RANCAKALAPAPANONGAN', 'TGR292', '', '', '', '', '', '', '', '', 'B2S', 'Jabodetabek', '', NULL, '', '', '', '', '', '', NULL, NULL, NULL);
INSERT INTO `sites` VALUES (14, 'qweqwe', 'ewqewqe', 'ewqewq', 'ewqewqeq', '', '', '', '', '', '', '', '', 'PERKUATAN', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
