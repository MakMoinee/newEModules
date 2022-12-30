SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for announcements
-- ----------------------------
DROP TABLE IF EXISTS `announcements`;
CREATE TABLE `announcements`  (
  `announceID` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `card` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtext` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `activated` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`announceID`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;

-- View structure for vwallstrands
-- ----------------------------
DROP VIEW IF EXISTS `vwallstrands`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwallstrands` AS select `academic_tracks`.`trackID` AS `trackID`,`academic_strands`.`description` AS `Strand`,`academic_tracks`.`sequence` AS `sequence`,`academic_tracks`.`description` AS `SubjectName`,`academic_tracks`.`hours` AS `hours`,`academic_tracks`.`prerequisite` AS `prerequisite`,`academic_tracks`.`status` AS `status`,`academic_tracks`.`category` AS `category`,`academic_tracks`.`created_at` AS `created_at`,`academic_strands`.`strandID` AS `strandID` from (`academic_strands` join `academic_tracks` on((`academic_strands`.`strandID` = `academic_tracks`.`strandID`)));

-- ----------------------------
-- View structure for vwlistmodules
-- ----------------------------
DROP VIEW IF EXISTS `vwlistmodules`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwlistmodules` AS select `modules`.`moduleID` AS `moduleID`,`academic_tracks`.`description` AS `SubjectName`,`modules`.`description` AS `description` from (`modules` join `academic_tracks` on((`modules`.`trackID` = `academic_tracks`.`trackID`))) where (cast(`modules`.`created_at` as date) = cast(now() as date));

-- ----------------------------
-- View structure for vwnewsuperadminusers
-- ----------------------------
DROP VIEW IF EXISTS `vwnewsuperadminusers`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwnewsuperadminusers` AS select `e_users`.`userID` AS `userID`,`e_users`.`username` AS `username`,`e_users`.`password` AS `password`,`e_users`.`firstname` AS `firstname`,`e_users`.`middlename` AS `middlename`,`e_users`.`lastname` AS `lastname`,`e_users`.`lrn` AS `lrn`,`e_users`.`track` AS `track`,`e_users`.`email` AS `email`,`e_users`.`gradelevel` AS `gradelevel`,`e_users`.`userType` AS `userType`,`e_users`.`created_at` AS `created_at`,`e_users`.`updated_at` AS `updated_at` from `e_users` where ((month(cast(`e_users`.`created_at` as date)) = month(cast(now() as date))) and (`e_users`.`userType` <> 0));

-- ----------------------------
-- View structure for vwnewusers
-- ----------------------------
DROP VIEW IF EXISTS `vwnewusers`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwnewusers` AS select `e_users`.`userID` AS `userID`,`e_users`.`username` AS `username`,`e_users`.`password` AS `password`,`e_users`.`firstname` AS `firstname`,`e_users`.`middlename` AS `middlename`,`e_users`.`lastname` AS `lastname`,`e_users`.`lrn` AS `lrn`,`e_users`.`track` AS `track`,`e_users`.`email` AS `email`,`e_users`.`gradelevel` AS `gradelevel`,`e_users`.`userType` AS `userType`,`e_users`.`created_at` AS `created_at`,`e_users`.`updated_at` AS `updated_at` from `e_users` where ((month(cast(`e_users`.`created_at` as date)) = month(cast(now() as date))) and (`e_users`.`userType` = 2) and (`e_users`.`userType` <> 3));

-- ----------------------------
-- View structure for vwtotalnewmodules
-- ----------------------------
DROP VIEW IF EXISTS `vwtotalnewmodules`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwtotalnewmodules` AS select count(`modules`.`moduleID`) AS `TotalCount` from `modules` where (month(`modules`.`created_at`) = month(now()));

-- ----------------------------
-- View structure for vwtotalnewusers
-- ----------------------------
DROP VIEW IF EXISTS `vwtotalnewusers`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwtotalnewusers` AS select count(`e_users`.`userID`) AS `TotalNewUsers` from `e_users` where ((month(`e_users`.`created_at`) = month(now())) and (`e_users`.`userType` <> 1) and (`e_users`.`userType` <> 0) and (`e_users`.`userType` <> 3));

-- ----------------------------
-- View structure for vwtotalnewuserssuperadmin
-- ----------------------------
DROP VIEW IF EXISTS `vwtotalnewuserssuperadmin`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `vwtotalnewuserssuperadmin` AS select count(`e_users`.`userID`) AS `TotalNewUsers` from `e_users` where ((month(`e_users`.`created_at`) = month(now())) and (`e_users`.`userType` <> 0) and (`e_users`.`userType` <> 3));
