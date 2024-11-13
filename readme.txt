db structure

name : db_tugasrancang


CREATE TABLE `tb_user` (
  `NAMA` varchar(100) DEFAULT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PASSWORD` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`EMAIL`);
COMMIT;

CREATE TABLE `db_tugasrancang`.`levels` (`id` INT(255) NOT NULL AUTO_INCREMENT , `title` VARCHAR(65535) NOT NULL , `content` TEXT NOT NULL , `requirements` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;


table name : user_progress



















CREATE TABLE `user_progress` (
  `email` varchar(100) NOT NULL,
  `level_id` int(11) NOT NULL,
  `completed_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_progress`
--
ALTER TABLE `user_progress`
  ADD PRIMARY KEY (`email`,`level_id`),
  ADD KEY `level connection` (`level_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_progress`
--
ALTER TABLE `user_progress`
  ADD CONSTRAINT `email connection` FOREIGN KEY (`email`) REFERENCES `tb_user` (`EMAIL`) ON DELETE CASCADE,
  ADD CONSTRAINT `level connection` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`) ON DELETE CASCADE;
COMMIT;