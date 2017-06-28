
--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `parentid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parentid`, `name`) VALUES
(1, 0, 'electrician'),
(2, 1, 'wiring'),
(3, 1, 'homeappliance'),
(4, 0, 'carpanter'),
(5, 4, 'carpanter1'),
(6, 4, 'carpanter2'),
(7, 0, 'beautician'),
(8, 7, 'groom'),
(9, 7, 'bride'),
(10, 2, 'wrring1'),
(11, 2, 'wiring2'),
(12, 6, 'carpanter21'),
(13, 6, 'carpanter62'),
(14, 8, 'groom1'),
(15, 8, 'groom2');


ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
