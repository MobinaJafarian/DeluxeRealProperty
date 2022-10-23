<?php


return [



    "

CREATE TABLE `comments` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `post_id` bigint(20) NOT NULL,
  `comment` text NOT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `status` tinyint(5) NOT NULL DEFAULT '0',
  `approved` tinyint(5) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

    "



];