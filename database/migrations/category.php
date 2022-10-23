<?php


return [

    "

CREATE TABLE `categories` (
  `id` int(20) NOT NULL,
  `name` varchar(191) NOT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

    "

];