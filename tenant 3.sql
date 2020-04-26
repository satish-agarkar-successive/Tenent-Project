

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `accommodation_type` (
  `accommodation_type_id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `name` longtext NOT NULL,
  `phone` varchar(10) NOT NULL,
  `password` longtext NOT NULL,
  `type` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `adminlogin` (`id`, `name`, `phone`, `password`, `type`) VALUES
(1, 'Mrudul Addipalli', '8446184884', '$2y$10$rDRYBQUgt9Gla2stKVCCk.1NfR4T.xNaL.Cg21D.bPfa7TXGfpiua', 1),
(2, 'Mrudul Addipalli', '8446184885', '$2y$10$1/7frSHYoP63yZSJ0NXGEuFr.IulW65qsOS.IvbkOEJSrgBknZ8FG', 1),
(3, 'Mrudul Addipalli', '8446184886', '$2y$10$5QOKpcyekF3NjF0iK50kme9/gEhwa5OrDEjPQ7xHXYlGrcYALV53i', 1),
(4, 'Mrudu', '8338133738', '$2y$10$Rom.Tv1PtkdeWdTK14/Y6er1rWmkY7QNqmIL74K.FDHEY1oazCC5m', 1);


CREATE TABLE `bed` (
  `bed_id` int(11) NOT NULL,
  `property_id` int(11) DEFAULT NULL,
  `block_id` int(11) DEFAULT NULL,
  `floor` longtext DEFAULT NULL,
  `room_id` int(11) DEFAULT NULL,
  `bed_number` longtext DEFAULT NULL,
  `rent_amount` int(11) DEFAULT NULL,
  `deposit_amount` int(11) DEFAULT NULL,
  `maintenance_amount` int(11) DEFAULT NULL,
  `bed_status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `block` (
  `block_id` int(11) NOT NULL,
  `property_id` int(11) DEFAULT NULL,
  `block_name` longtext DEFAULT NULL,
  `floor_count` int(11) DEFAULT NULL,
  `have_basement` tinyint(1) DEFAULT NULL,
  `have_terrace` tinyint(1) DEFAULT NULL,
  `block_status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `booking_type` (
  `booking_type_id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `business` (
  `business_id` int(11) NOT NULL,
  `business_name` longtext DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `business_pincode` varchar(6) DEFAULT NULL,
  `business_url` longtext DEFAULT NULL,
  `business_type_id` int(11) DEFAULT NULL,
  `business_employee_count` varchar(4) DEFAULT NULL,
  `business_est_year` varchar(4) DEFAULT NULL,
  `business_gst` varchar(15) DEFAULT NULL,
  `business_pan` varchar(10) DEFAULT NULL,
  `business_fssai` varchar(14) DEFAULT NULL,
  `business_logo` longtext DEFAULT NULL,
  `business_status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `business` (`business_id`, `business_name`, `user_id`, `state_id`, `city`, `business_pincode`, `business_url`, `business_type_id`, `business_employee_count`, `business_est_year`, `business_gst`, `business_pan`, `business_fssai`, `business_logo`, `business_status`) VALUES
(10, 'Mac', 3, 1, 'Nalasopara East', '401209', 'https://laravel.com/docs/7.x/filesystem', 3, '1132', '1132', '113211321132333', '1132113215', '11321132113234', 'IMG_20181021_212725_20200425121042.jpg', 1),
(11, 'Mac Pvt Ltd', 4, 3, 'Nalasopara East', '401209', 'https://laravel.com/docs/7.x/filesystem', 3, '1132', '1132', '113211321132333', '1132113215', '11321132113234', 'IMG_20181021_212725_20200425121051.jpg', 0),
(12, 'Shree Moulds Pvt Ltd', 1, 2, 'Nalasopara East', '401209', 'https://laravel.com/docs/7.x/filesystem', 3, '1132', '1132', '113211321132333', '1132113215', '11321132113234', 'IMG_20181021_212725_20200425121105.jpg', 1);



CREATE TABLE `business_type` (
  `business_type_id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `business_type` (`business_type_id`, `type`) VALUES
(1, 'LLP'),
(2, 'Propriotor'),
(3, 'Partnership'),
(4, 'Private Limited');


CREATE TABLE `guest` (
  `guest_id` int(11) NOT NULL,
  `property_id` int(11) DEFAULT NULL,
  `block_id` int(11) DEFAULT NULL,
  `floor` longtext DEFAULT NULL,
  `room_id` int(11) DEFAULT NULL,
  `bed_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `booking_type_id` int(11) DEFAULT NULL,
  `guest_name` longtext DEFAULT NULL,
  `guest_email` longtext DEFAULT NULL,
  `guest_mobile` varchar(10) DEFAULT NULL,
  `guest_alt_mobile` varchar(10) DEFAULT NULL,
  `guest_address` longtext DEFAULT NULL,
  `guest_aadhar_no` varchar(12) DEFAULT NULL,
  `guest_org` varchar(15) DEFAULT NULL,
  `guest_org_address` longtext DEFAULT NULL,
  `guest_book_date` date DEFAULT NULL,
  `guest_book_amount` int(11) DEFAULT NULL,
  `guest_checkin_date` date DEFAULT NULL,
  `guest_checkout_date` date DEFAULT NULL,
  `guest_rent_amount` int(11) DEFAULT NULL,
  `guest_deposit_amount` int(11) DEFAULT NULL,
  `guest_discount_amount` int(11) DEFAULT NULL,
  `vehicle_type` varchar(50) DEFAULT NULL,
  `vehicle_number` varchar(15) DEFAULT NULL,
  `guest_maintenance_charge` int(11) DEFAULT NULL,
  `guest_gender` varchar(50) DEFAULT NULL,
  `guest_aadhar_file` longtext DEFAULT NULL,
  `guest_id_file` longtext DEFAULT NULL,
  `guest_selfie_file` longtext DEFAULT NULL,
  `guest_status` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `other_charges` (
  `other_charges_id` int(11) NOT NULL,
  `property_id` int(11) DEFAULT NULL,
  `other_charges_des` longtext DEFAULT NULL,
  `other_charges_type_id` int(11) DEFAULT NULL,
  `other_charges_rate` int(11) DEFAULT NULL,
  `other_charges_status` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `other_charges_type` (
  `other_charges_type_id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `other_charges_type` (`other_charges_type_id`, `type`) VALUES
(1, 'Lumpsum'),
(2, 'Per Unit');

CREATE TABLE `property` (
  `property_id` int(11) NOT NULL,
  `property_name` longtext DEFAULT NULL,
  `building_name` longtext DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `property_address_1` longtext DEFAULT NULL,
  `property_address_2` longtext DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `property_pincode` varchar(6) DEFAULT NULL,
  `property_landmark` longtext DEFAULT NULL,
  `property_type_id` int(11) DEFAULT NULL,
  `accommodation_type_id` int(11) DEFAULT NULL,
  `property_gender` varchar(50) DEFAULT NULL,
  `property_amenities` longtext DEFAULT NULL,
  `property_furnishing` longtext DEFAULT NULL,
  `property_tc` longtext DEFAULT NULL,
  `property_status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `property_type` (
  `property_type_id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `property_type` (`property_type_id`, `type`) VALUES
(1, 'Paying Guest'),
(2, 'Hostel'),
(3, 'Private');



CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `property_id` int(11) DEFAULT NULL,
  `block_id` int(11) DEFAULT NULL,
  `floor` longtext DEFAULT NULL,
  `room_number` longtext DEFAULT NULL,
  `room_status` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `state` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `state` (`state_id`, `state`) VALUES
(1, 'Andaman And Nicobar Islands'),
(2, 'Andhra Pradesh'),
(3, 'Arunachal Pradesh'),
(4, 'Assam'),
(5, 'Bihar'),
(6, 'Chandigarh'),
(7, 'Chhattisgarh'),
(8, 'Dadra And Nagar Haveli'),
(9, 'Daman And Diu'),
(10, 'Delhi'),
(11, 'Goa'),
(12, 'Gujarat'),
(13, 'Haryana'),
(14, 'Himachal Pradesh'),
(15, 'Jammu And Kashmir'),
(16, 'Jharkhand'),
(17, 'Karnataka'),
(18, 'Kerala'),
(19, 'Lakshadweep'),
(20, 'Madhya Pradesh'),
(21, 'Maharashtra'),
(22, 'Manipur'),
(23, 'Meghalaya'),
(24, 'Mizoram'),
(25, 'Nagaland'),
(26, 'Odisha'),
(27, 'Puducherry'),
(28, 'Punjab'),
(29, 'Rajasthan'),
(30, 'Sikkim'),
(31, 'Tamil Nadu'),
(32, 'Tripura'),
(33, 'Uttar Pradesh'),
(34, 'Uttarakhand'),
(35, 'West Bengal');


CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` longtext DEFAULT NULL,
  `user_mobile` varchar(10) DEFAULT NULL,
  `user_address` longtext DEFAULT NULL,
  `user_email` longtext DEFAULT NULL,
  `user_gender` varchar(6) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `user_city` varchar(50) DEFAULT NULL,
  `zip` varchar(6) DEFAULT NULL,
  `user_activation_date` date DEFAULT NULL,
  `user_renewal_date` date DEFAULT NULL,
  `user_deal_value` varchar(10) DEFAULT NULL,
  `user_status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `users` (`user_id`, `user_name`, `user_mobile`, `user_address`, `user_email`, `user_gender`, `state_id`, `user_city`, `zip`, `user_activation_date`, `user_renewal_date`, `user_deal_value`, `user_status`) VALUES
(1, 'shankar', '8329755346', '202 , Girnar Accord , Near Vasant Nagari Ground , Vasant Nagari', 'mruduladdipalli@gmail.com', 'Male', 2, 'Nalasopara East', '401209', '2020-04-25', '2020-04-25', '144431', 0),
(2, 'shankar', '8319755336', '202 , Girnar Accord , Near Vasant Nagari Ground , Vasant Nagari', 'mruduladdipalli@gmail.com', 'Male', 2, 'Nalasopara East', '401209', '2020-04-25', '2020-04-25', '144431', 0),
(3, 'shankar', '8362755246', '202 , Girnar Accord , Near Vasant Nagari Ground , Vasant Nagari', 'mruduladdipalli@gmail.com', 'Male', 2, 'Nalasopara East', '401209', '2020-04-25', '2020-04-25', '144431', 0),
(4, 'shankar', '8369152346', '202 , Girnar Accord , Near Vasant Nagari Ground , Vasant Nagari', 'mruduladdipalli@gmail.com', 'Male', 2, 'Nalasopara East', '401209', '2020-04-25', '2020-04-25', '144431', 0),
(5, 'shankar', '8369751346', '202 , Girnar Accord , Near Vasant Nagari Ground , Vasant Nagari', 'mruduladdipalli@gmail.com', 'Male', 2, 'Nalasopara East', '401209', '2020-04-25', '2020-04-25', '144431', 1),
(13, 'shankarcom two', '8369755752', '202 , Girnar Accord , Near Vasant Nagari Ground , Vasant Nagari', 'mruduladdipalli@gmail.com', 'Male', 21, 'Nalasopara East', '401209', '2020-04-25', '2020-04-25', '34234344', 1);

ALTER TABLE `accommodation_type`
  ADD PRIMARY KEY (`accommodation_type_id`);


ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `bed`
  ADD PRIMARY KEY (`bed_id`),
  ADD KEY `block_id_FK_4` (`block_id`),
  ADD KEY `property_id_FK_4` (`property_id`),
  ADD KEY `room_id_FK_4` (`room_id`);

ALTER TABLE `block`
  ADD PRIMARY KEY (`block_id`),
  ADD KEY `property_id_FK2` (`property_id`);

ALTER TABLE `booking_type`
  ADD PRIMARY KEY (`booking_type_id`);

ALTER TABLE `business`
  ADD PRIMARY KEY (`business_id`),
  ADD KEY `user_id_FK` (`user_id`),
  ADD KEY `state_id_FK` (`state_id`),
  ADD KEY `business_type_id_FK` (`business_type_id`);

ALTER TABLE `business_type`
  ADD PRIMARY KEY (`business_type_id`);


ALTER TABLE `guest`
  ADD PRIMARY KEY (`guest_id`),
  ADD KEY `property_id_FK_6` (`property_id`),
  ADD KEY `block_id_FK_6` (`block_id`),
  ADD KEY `room_id_FK_6` (`room_id`),
  ADD KEY `bed_id_Fk_6` (`bed_id`),
  ADD KEY `state_id_FK_6` (`state_id`),
  ADD KEY `booking_type_id_FK_6` (`booking_type_id`);

ALTER TABLE `other_charges`
  ADD PRIMARY KEY (`other_charges_id`),
  ADD KEY `property_id_FK_5` (`property_id`),
  ADD KEY `other_charges_type_id_FK_5` (`other_charges_type_id`);

ALTER TABLE `other_charges_type`
  ADD PRIMARY KEY (`other_charges_type_id`);

ALTER TABLE `property`
  ADD PRIMARY KEY (`property_id`),
  ADD KEY `property_type_id_FK` (`property_type_id`),
  ADD KEY `accommodation_type_id_FK` (`accommodation_type_id`),
  ADD KEY `user_id_FK2` (`user_id`),
  ADD KEY `state_id_FK2` (`state_id`);

ALTER TABLE `property_type`
  ADD PRIMARY KEY (`property_type_id`);


ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `property_id_FK_3` (`property_id`),
  ADD KEY `block_id_FK_3` (`block_id`);

ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_mobile` (`user_mobile`),
  ADD KEY `state_FK` (`state_id`);

ALTER TABLE `accommodation_type`
  MODIFY `accommodation_type_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `bed`
  MODIFY `bed_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `block`
  MODIFY `block_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `booking_type`
  MODIFY `booking_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

ALTER TABLE `business`
  MODIFY `business_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

ALTER TABLE `business_type`
  MODIFY `business_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `guest`
  MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `other_charges`
  MODIFY `other_charges_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `other_charges_type`
  MODIFY `other_charges_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `property`
  MODIFY `property_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `property_type`
  MODIFY `property_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

ALTER TABLE `bed`
  ADD CONSTRAINT `block_id_FK_4` FOREIGN KEY (`block_id`) REFERENCES `block` (`block_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `property_id_FK_4` FOREIGN KEY (`property_id`) REFERENCES `property` (`property_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `room_id_FK_4` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `block`
  ADD CONSTRAINT `property_id_FK2` FOREIGN KEY (`property_id`) REFERENCES `property` (`property_id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `business`
  ADD CONSTRAINT `business_type_id_FK` FOREIGN KEY (`business_type_id`) REFERENCES `business_type` (`business_type_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `state_id_FK` FOREIGN KEY (`state_id`) REFERENCES `state` (`state_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `user_id_FK` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `guest`
  ADD CONSTRAINT `bed_id_Fk_6` FOREIGN KEY (`bed_id`) REFERENCES `bed` (`bed_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `block_id_FK_6` FOREIGN KEY (`block_id`) REFERENCES `block` (`block_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_type_id_FK_6` FOREIGN KEY (`booking_type_id`) REFERENCES `booking_type` (`booking_type_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `property_id_FK_6` FOREIGN KEY (`property_id`) REFERENCES `property` (`property_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `room_id_FK_6` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `state_id_FK_6` FOREIGN KEY (`state_id`) REFERENCES `state` (`state_id`) ON DELETE SET NULL ON UPDATE CASCADE;

ALTER TABLE `other_charges`
  ADD CONSTRAINT `other_charges_type_id_FK_5` FOREIGN KEY (`other_charges_type_id`) REFERENCES `other_charges_type` (`other_charges_type_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `property_id_FK_5` FOREIGN KEY (`property_id`) REFERENCES `property` (`property_id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `property`
  ADD CONSTRAINT `accommodation_type_id_FK` FOREIGN KEY (`accommodation_type_id`) REFERENCES `accommodation_type` (`accommodation_type_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `property_type_id_FK` FOREIGN KEY (`property_type_id`) REFERENCES `property_type` (`property_type_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `state_id_FK2` FOREIGN KEY (`state_id`) REFERENCES `state` (`state_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `user_id_FK2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `room`
  ADD CONSTRAINT `block_id_FK_3` FOREIGN KEY (`block_id`) REFERENCES `block` (`block_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `property_id_FK_3` FOREIGN KEY (`property_id`) REFERENCES `property` (`property_id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `users`
  ADD CONSTRAINT `state_FK` FOREIGN KEY (`state_id`) REFERENCES `state` (`state_id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;
