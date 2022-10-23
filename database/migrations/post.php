<?php


return [

    "

CREATE TABLE `posts` (
  `id` bigint(20) NOT NULL,
  `title` varchar(191) NOT NULL,
  `body` text NOT NULL,
  `image` text NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `published_at` datetime NOT NULL,
  `status` tinyint(5) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

    
    "


];