/*
 Navicat Premium Data Transfer

 Source Server         : LOCAL
 Source Server Type    : MySQL
 Source Server Version : 80030 (8.0.30)
 Source Host           : localhost:3306
 Source Schema         : emodules

 Target Server Type    : MySQL
 Target Server Version : 80030 (8.0.30)
 File Encoding         : 65001

 Date: 14/12/2022 02:52:01
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for academic_strands
-- ----------------------------
DROP TABLE IF EXISTS `academic_strands`;
CREATE TABLE `academic_strands`  (
  `strandID` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`strandID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of academic_strands
-- ----------------------------
INSERT INTO `academic_strands` VALUES (1, 'ABM', '2022-11-16 21:43:19', NULL);
INSERT INTO `academic_strands` VALUES (2, 'GAS', '2022-11-16 21:43:23', NULL);
INSERT INTO `academic_strands` VALUES (3, 'HUMSS', '2022-11-16 21:43:39', NULL);
INSERT INTO `academic_strands` VALUES (4, 'STEM', '2022-11-16 21:43:52', NULL);
INSERT INTO `academic_strands` VALUES (5, 'TVL', '2022-11-16 21:44:33', NULL);

-- ----------------------------
-- Table structure for academic_tracks
-- ----------------------------
DROP TABLE IF EXISTS `academic_tracks`;
CREATE TABLE `academic_tracks`  (
  `trackID` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `strandID` int NOT NULL,
  `sequence` int NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hours` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `prerequisite` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`trackID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of academic_tracks
-- ----------------------------
INSERT INTO `academic_tracks` VALUES (1, 2, 1, 'Physical Education', '80', NULL, NULL, 'CORE', '2022-12-11 02:07:37', '2022-12-11 02:07:37');
INSERT INTO `academic_tracks` VALUES (2, 2, 2, 'Physical Education', '80', NULL, NULL, 'CORE', '2022-12-11 02:07:37', '2022-12-11 02:07:37');
INSERT INTO `academic_tracks` VALUES (3, 2, 3, 'Physical Education', '80', NULL, NULL, 'CORE', '2022-12-11 02:07:37', '2022-12-11 02:07:37');
INSERT INTO `academic_tracks` VALUES (4, 2, 4, 'Physical Education', '80', NULL, NULL, 'CORE', '2022-12-11 02:07:37', '2022-12-11 02:07:37');
INSERT INTO `academic_tracks` VALUES (5, 2, 5, 'Physical Education', '80', NULL, NULL, 'CORE', '2022-12-11 02:07:37', '2022-12-11 02:07:37');
INSERT INTO `academic_tracks` VALUES (7, 2, 6, 'MAPEH', '80', NULL, NULL, 'CORE', '2022-12-13 03:00:18', '2022-12-13 03:00:18');

-- ----------------------------
-- Table structure for announcements
-- ----------------------------
DROP TABLE IF EXISTS `announcements`;
CREATE TABLE `announcements`  (
  `announceID` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `card` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtext` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `activated` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`announceID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of announcements
-- ----------------------------
INSERT INTO `announcements` VALUES (2, 'New Students Program Orientation', 'New Students Program Orientation1670731734.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 1, '2022-12-11 04:08:54', '2022-12-11 04:08:54');
INSERT INTO `announcements` VALUES (3, 'Sample', 'Sample1670782057.jpg', 'sample', 1, '2022-12-11 18:07:37', '2022-12-11 18:07:37');

-- ----------------------------
-- Table structure for device_keys
-- ----------------------------
DROP TABLE IF EXISTS `device_keys`;
CREATE TABLE `device_keys`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `device_key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of device_keys
-- ----------------------------

-- ----------------------------
-- Table structure for e_users
-- ----------------------------
DROP TABLE IF EXISTS `e_users`;
CREATE TABLE `e_users`  (
  `userID` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `middlename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `lastname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `lrn` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `track` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `userType` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`userID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of e_users
-- ----------------------------
INSERT INTO `e_users` VALUES (1, 'superadmin', '$2y$10$mkYgpEFtp8FTHOJjwu3IiOxhcPI7zs77y2zf9.YiXjc6tVwKtBrHa', NULL, NULL, NULL, NULL, NULL, NULL, 0, '2022-12-01 15:07:34', '2022-12-01 15:07:34');
INSERT INTO `e_users` VALUES (2, 'sample', '$2y$10$iNwmEAQfxIonU91nCgopLO/yXm.2wifnYV1UbTaQjkjiLypSfvgve', 'sample', 'sample', 'sample', '123456', 'GAS', 'sample@gmail.com', 2, '2022-12-01 15:08:14', '2022-12-01 15:08:14');
INSERT INTO `e_users` VALUES (3, 'admin', '$2y$10$AEjwz6818VVU67vEsMXs0.DCUAMqpAgtN9cnltigD/Pjmg.C1hzC2', 'Admin', 'X', 'Admin', NULL, NULL, NULL, 1, '2022-12-11 02:06:12', '2022-12-11 02:06:12');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for messages
-- ----------------------------
DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int UNSIGNED NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of messages
-- ----------------------------

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (5, '2022_10_13_072924_create_e_users_table', 1);
INSERT INTO `migrations` VALUES (6, '2022_11_16_133132_create_academic_tracks_table', 1);
INSERT INTO `migrations` VALUES (7, '2022_11_16_134018_create_academic_strands_table', 1);
INSERT INTO `migrations` VALUES (8, '2022_11_19_184652_create_modules_table', 1);
INSERT INTO `migrations` VALUES (9, '2022_11_21_164149_create_announcements_table', 1);
INSERT INTO `migrations` VALUES (10, '2022_11_22_135835_create_device_keys_table', 1);
INSERT INTO `migrations` VALUES (11, '2022_11_23_074902_create_notifs_table', 1);
INSERT INTO `migrations` VALUES (12, '2022_11_24_182703_create_messages_table', 1);
INSERT INTO `migrations` VALUES (13, '2022_11_30_231404_create_user_pic_profiles_table', 1);

-- ----------------------------
-- Table structure for modules
-- ----------------------------
DROP TABLE IF EXISTS `modules`;
CREATE TABLE `modules`  (
  `moduleID` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `trackID` int NOT NULL,
  `sequence` int NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `filePath` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`moduleID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of modules
-- ----------------------------
INSERT INTO `modules` VALUES (1, 1, 1, 'Unit 1', 'Unit 1221211.pdf', '2022-12-11 02:07:59', '2022-12-11 02:07:59');
INSERT INTO `modules` VALUES (2, 1, 2, 'Unit 2', 'Unit 1221211.pdf', '2022-12-11 02:07:59', '2022-12-11 02:07:59');
INSERT INTO `modules` VALUES (3, 1, 3, 'Unit 1', 'Unit 1221211.pdf', '2022-12-11 02:07:59', '2022-12-11 02:07:59');
INSERT INTO `modules` VALUES (4, 1, 4, 'Unit 1', 'Unit 1221211.pdf', '2022-12-11 02:07:59', '2022-12-11 02:07:59');
INSERT INTO `modules` VALUES (5, 1, 5, 'Unit 1', 'Unit 1221211.pdf', '2022-12-11 02:07:59', '2022-12-11 02:07:59');
INSERT INTO `modules` VALUES (6, 1, 6, 'Unit 1', 'Unit 1221211.pdf', '2022-12-11 02:07:59', '2022-12-11 02:07:59');

-- ----------------------------
-- Table structure for notifs
-- ----------------------------
DROP TABLE IF EXISTS `notifs`;
CREATE TABLE `notifs`  (
  `notifID` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`notifID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of notifs
-- ----------------------------
INSERT INTO `notifs` VALUES (1, 'Sample Announcement', '2022-12-11 02:42:16', '2022-12-11 02:42:16');
INSERT INTO `notifs` VALUES (2, 'Sample Announcement', '2022-12-11 02:43:07', '2022-12-11 02:43:07');
INSERT INTO `notifs` VALUES (3, 'Sample Announcement', '2022-12-11 02:44:29', '2022-12-11 02:44:29');
INSERT INTO `notifs` VALUES (4, 'Sample Announcement', '2022-12-11 03:52:50', '2022-12-11 03:52:50');
INSERT INTO `notifs` VALUES (5, 'New Students Program Orientation', '2022-12-11 04:09:04', '2022-12-11 04:09:04');
INSERT INTO `notifs` VALUES (6, 'Sample', '2022-12-11 18:07:43', '2022-12-11 18:07:43');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email` ASC) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token` ASC) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type` ASC, `tokenable_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for user_pic_profiles
-- ----------------------------
DROP TABLE IF EXISTS `user_pic_profiles`;
CREATE TABLE `user_pic_profiles`  (
  `picProfileID` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `userID` int NOT NULL,
  `filePath` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`picProfileID`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_pic_profiles
-- ----------------------------
INSERT INTO `user_pic_profiles` VALUES (6, 2, '1670780084.JPG', '2022-12-11 17:26:51', '2022-12-11 17:26:51');
INSERT INTO `user_pic_profiles` VALUES (7, 3, '1670899525.JPG', '2022-12-13 02:45:25', '2022-12-13 02:45:25');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `device_key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------

-- ----------------------------
-- View structure for vwallstrands
-- ----------------------------
DROP VIEW IF EXISTS `vwallstrands`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwallstrands` AS select `academic_tracks`.`trackID` AS `trackID`,`academic_strands`.`description` AS `Strand`,`academic_tracks`.`sequence` AS `sequence`,`academic_tracks`.`description` AS `SubjectName`,`academic_tracks`.`hours` AS `hours`,`academic_tracks`.`prerequisite` AS `prerequisite`,`academic_tracks`.`status` AS `status`,`academic_tracks`.`category` AS `category`,`academic_tracks`.`created_at` AS `created_at`,`academic_strands`.`strandID` AS `strandID` from (`academic_strands` join `academic_tracks` on((`academic_strands`.`strandID` = `academic_tracks`.`strandID`)));

-- ----------------------------
-- View structure for vwtotalnewusers
-- ----------------------------
DROP VIEW IF EXISTS `vwtotalnewusers`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwtotalnewusers` AS select count(`e_users`.`userID`) AS `TotalNewUsers` from `e_users` where ((month(`e_users`.`created_at`) = month(now())) and (`e_users`.`userType` <> 1));

SET FOREIGN_KEY_CHECKS = 1;
