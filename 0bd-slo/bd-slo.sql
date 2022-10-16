CREATE DATABASE  IF NOT EXISTS `bd-slo`;
USE `bd-slo`;

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
                         `id` int(11) NOT NULL AUTO_INCREMENT,
                         `email` varchar(45) NOT NULL,
                         `name` varchar(45) NOT NULL,
                         `phoneNumber` char(14) NOT NULL,
                         `password` varchar(255) NOT NULL,
                         `dtBorn` char(10) NOT NULL,
                         `document` char(14) DEFAULT NULL,
                         `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
                         `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
                         PRIMARY KEY (`id`),
                         UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `dentists`;
CREATE TABLE `dentists` (
                         `id` int(11) NOT NULL AUTO_INCREMENT,
                         `email` varchar(45) NOT NULL,
                         `name` varchar(45) NOT NULL,
                         `phoneNumber` char(14) NOT NULL,
                         `password` varchar(255) NOT NULL,
                         `dtBorn` char(10) NOT NULL,
                         `document` char(14) DEFAULT NULL,
                         `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
                         `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
                         PRIMARY KEY (`id`),
                         UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `patients`;
CREATE TABLE `patients` (
                             `id` int(11) NOT NULL AUTO_INCREMENT,
                             `email` varchar(45) NOT NULL,
                             `name` varchar(45) NOT NULL,
                             `phoneNumber` char(14) NOT NULL,
                             `password` varchar(255) NOT NULL,
                             `dtBorn` char(10) NOT NULL,
                             `document` char(14) DEFAULT NULL,
                             `idDentist` int(11) NOT NULL,
                             `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
                             `udated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
                             PRIMARY KEY (`id`),
                             KEY `fk_patients_dentists_idx` (`idDentist`),
                             CONSTRAINT `fk_patients_dentists` FOREIGN KEY (`idDentist`) REFERENCES `dentists` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `schedules`;
CREATE TABLE `schedules` (
                            `id` int(11) NOT NULL AUTO_INCREMENT,
                            `idDentist` int(11) NOT NULL,
                            `idPatient` int(11) NOT NULL,
                            `date` varchar(255) NOT NULL,
                            `hour` varchar(255) NOT NULL,
                            `comments` varchar(255) NOT NULL,
                            `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
                            `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
                            PRIMARY KEY (`id`),
                            KEY `fk_schedules_dentists_idx` (`idDentist`),
                            CONSTRAINT `fk_schecules_dentists` FOREIGN KEY (`idDentist`) REFERENCES `dentists` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
                            KEY `fk_schedules_patients_idx` (`idPatient`),
                            CONSTRAINT `fk_schedules_patients` FOREIGN KEY (`idPatient`) REFERENCES `patients` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;