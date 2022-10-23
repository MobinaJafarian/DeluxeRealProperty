<?php

return [

    "

CREATE TABLE `galleries` (
  `id` bigint(20) NOT NULL,
  `image` varchar(191) NOT NULL,
  `advertise_id` bigint(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

    
    "

];