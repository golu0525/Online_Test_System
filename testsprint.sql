-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2017 at 02:02 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testsprint`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(2) NOT NULL,
  `admin_name` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `admin_name`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(200) NOT NULL,
  `blog_title` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `blog_para1` text NOT NULL,
  `blog_desc` text NOT NULL,
  `blog_quote` text NOT NULL,
  `blog_pre` text NOT NULL,
  `blog_smallimage` text NOT NULL,
  `blog_largeimage` text NOT NULL,
  `blogsec_link` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_title`, `date`, `blog_para1`, `blog_desc`, `blog_quote`, `blog_pre`, `blog_smallimage`, `blog_largeimage`, `blogsec_link`) VALUES
(1, 'Awesome title', '2017-07-05', 'In consectetuer turpis ut velit. Sed lectus. Ut varius tincidunt libero. Vivamus euismod mauris.', 'Lorem ipsum dolor sit amet maecenas vestibulum mollis diam. Duis vel nibh at velit scelerisque suscipit. Proin viverra, ligula sit amet ultrices semper, ligula arcu tristique sapien, a accumsan nisi mauris ac eros. In ac felis quis tortor malesuada pretium. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Nullam vel sem. Praesent egestas neque eu enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Ut tincidunt tincidunt erat. Etiam vitae tortor. Nulla neque dolor, sagittis eget, iaculis quis, molestie non, velit. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Fusce ac felis sit amet ligula pharetra condimentum.Praesent turpis. Suspendisse nisl elit, rhoncus eget, elementum ac, condimentum eget, diam. Quisque rutrum. Morbi nec metus. Phasellus blandit leo ut odio.', 'Nulla consequat massa quis enim. In dui magna, posuere eget, vestibulum et, tempor auctor, justo. Curabitur suscipit suscipit tellus.', 'Suspendisse feugiat. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Etiam feugiat lorem non metus. Vivamus quis mi. Donec vitae sapien ut libero venenatis faucibus. Phasellus gravida semper nisi. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.Vestibulum facilisis, purus nec pulvinar iaculis, ligula mi congue nunc, vitae euismod ligula urna in dolor. Fusce fermentum odio nec arcu. In auctor lobortis lacus. Fusce vel dui. Praesent turpis. Fusce fermentum odio nec arcu. Aenean commodo ligula eget dolor. Etiam iaculis nunc ac metus. Praesent blandit laoreet nibh. In hac habitasse platea dictumst. In hac habitasse platea dictumst. Ut varius tincidunt libero. Donec id justo.', './images/blog/400x400.png', './images/blog/750x400.png', 0),
(2, 'Awesome title2', '2017-07-28', 'Whatever you can do or dream you can do, begin it. Boldness has genius, power and magic in it.', 'GATE Exam is the first choice for every engineering graduate who wants to pursue their career in this sector.To help you prepare well, we present you the GATE Success Story.The preparation for GATE needs hard work and dedication. One has to prepare really well if one wants to clear the exam. In order to achieve success, you need to be prepared with the Complete GATE Syllabus as well as a well-knitted strategy.\r\n\r\nThe best way to get a clear overview for your GATE Exam is to ask those who have cleared the GATE Exam successfully.So, we are presenting the GATE Success Story. Here is one of those stories that will inspire you to follow your dreams and will tell you how to prepare for it.\r\n\r\nWe hope this GATE Success Story will help you to improve your studying strategy and gives you an idea about what books, notes, resources, etc. one should rely on.', 'Any words of wisdom to the next batch of  GATE Aspirants?', 'The only advice is to work on the fundamentals really well before solving problems. It is advisable to practice a good number of previous year questions to get an idea about the general difficulty level of the exam. Appear in mock tests to get used to the exam pattern alongside with own performance. I wish all future GATE aspirants very good luck for their preparations.\r\n\r\nIf you are inspired by this GATE Success Story & want to start your preparation for the same, you can click on the following to start your preparation for GATE 2018.', './images/blog/400x400.png', './images/blog/750x400.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feed_id` int(10) NOT NULL,
  `module_name` varchar(20) DEFAULT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `institute` varchar(100) DEFAULT NULL,
  `feed_option1` varchar(20) NOT NULL,
  `feed_option2` varchar(20) NOT NULL,
  `feed_option3` varchar(20) NOT NULL,
  `feed_option4` varchar(20) NOT NULL,
  `comment` text NOT NULL,
  `email_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feed_id`, `module_name`, `user_name`, `institute`, `feed_option1`, `feed_option2`, `feed_option3`, `feed_option4`, `comment`, `email_id`) VALUES
(5, '', '', '', 'on', 'on', 'on', 'on', 'abhishek', 'abhI@gmail.co,'),
(6, '', '', '', 'on', 'on', 'on', 'on', 'abhishek', 'abhI@gmail.co,'),
(40, NULL, NULL, NULL, 'Very Good', 'Good', 'Fair', 'Poor', 'Machaya be!', 'vinay@aol.com'),
(41, NULL, NULL, NULL, 'Very Good', 'Good', 'Fair', 'Poor', 'Machaya be!', 'vinay@aol.com'),
(42, NULL, NULL, NULL, 'Poor', 'Very Good', 'Poor', 'Poor', 'Type here', 'v@aol.com'),
(43, NULL, NULL, NULL, 'Poor', 'Very Good', 'Poor', 'Poor', 'Type here', 'v@aol.com'),
(44, NULL, NULL, NULL, 'Poor', 'Poor', 'Poor', 'Poor', 'Type here', 'v@aol.com'),
(45, NULL, NULL, NULL, 'Poor', 'Poor', 'Poor', 'Poor', 'Type here', 'v@aol.com'),
(46, NULL, NULL, NULL, 'Very Good', 'Very Good', 'Very Good', 'Very Good', 'Type here', 'vinay@aol.com'),
(47, NULL, NULL, NULL, 'Very Good', 'Very Good', 'Very Good', 'Very Good', 'Type here', 'vinay@aol.com'),
(48, NULL, NULL, NULL, 'Very Good', 'Very Good', 'Very Good', 'Very Good', 'Type here', 'vinay@aol.in'),
(49, NULL, NULL, NULL, 'Very Good', 'Very Good', 'Very Good', 'Very Good', 'Type here', 'vinay@aol.in');

-- --------------------------------------------------------

--
-- Table structure for table `funfact`
--

CREATE TABLE `funfact` (
  `fun_id` int(10) NOT NULL,
  `div_name` varchar(100) NOT NULL,
  `fun_value` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `funfact`
--

INSERT INTO `funfact` (`fun_id`, `div_name`, `fun_value`) VALUES
(1, 'STUDENTS LOVE US', 224145),
(2, 'QUESTIONS ATTEMPTED', 90000),
(3, 'TESTS ATTEMPTED', 10);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `module_id` int(255) NOT NULL,
  `module_name` varchar(10000) NOT NULL,
  `maxmarks` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `test_time_hrs` int(12) NOT NULL,
  `test_time_mins` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`module_id`, `module_name`, `maxmarks`, `date`, `test_time_hrs`, `test_time_mins`, `status`, `image`) VALUES
(1, 'Computer Science\r\n', 0, '2017-07-17 08:08:54', 0, 5, 1, './images/skills/400x400.png'),
(2, 'IT', 0, '2017-07-17 08:09:01', 2, 5, 0, './images/skills/400x400.png'),
(3, 'EE', 0, '2017-07-11 11:07:36', 1, 30, 1, './images/skills/400x400.png'),
(4, 'EEE', 0, '2017-07-11 11:07:53', 1, 30, 1, './images/skills/400x400.png'),
(5, 'CE', 0, '2017-07-11 11:08:16', 1, 30, 1, './images/skills/400x400.png');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `module_id` int(100) NOT NULL,
  `question` text NOT NULL,
  `option_one` varchar(10000) NOT NULL,
  `option_two` varchar(10000) NOT NULL,
  `option_three` varchar(10000) NOT NULL,
  `option_four` varchar(10000) NOT NULL,
  `pos_marks` int(2) NOT NULL,
  `neg_marks` int(2) NOT NULL,
  `crt_ans` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`module_id`, `question`, `option_one`, `option_two`, `option_three`, `option_four`, `pos_marks`, `neg_marks`, `crt_ans`) VALUES
(1, 'What is CSS?', 'Cascade Style Sheet', 'Cascading Style Sheet', 'Cascade Style Sheet', 'None Of Above', 3, 1, 2),
(2, 'What is JS?', 'Just Snapshot', 'JavaSnap', 'JavaScript', 'NONE', 3, 1, 3),
(3, 'HTML is?', 'Markup Language', 'Object Language', 'Server-side Language', 'NONE', 3, 1, 1),
(4, 'What is Jquery?', 'Query', 'Language', 'Shit', 'IDK', 3, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `result_id` int(2) NOT NULL,
  `module_name` varchar(100) NOT NULL,
  `usr_name` varchar(100) NOT NULL,
  `institute` varchar(100) NOT NULL,
  `marks_obtained` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`result_id`, `module_name`, `usr_name`, `institute`, `marks_obtained`) VALUES
(1, 'CS', 'tyrion', 'kn modi', 123),
(2, 'EE', 'danerys', 'got', 145),
(3, 'CS', 'user_name', 'CS', 434);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `skill_id` int(2) NOT NULL,
  `skill_title` varchar(100) NOT NULL,
  `skill_count` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`skill_id`, `skill_title`, `skill_count`) VALUES
(1, 'Photoshop', 80),
(2, 'JavaScript', 60),
(3, 'Python', 48),
(4, 'PHP', 70),
(5, 'CSS', 56),
(6, 'JQuery', 56),
(7, 'HTML', 78);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `name`, `designation`, `image`) VALUES
(1, 'John Doe', 'Web Developer', './images/team/user2.png'),
(2, 'Tyrion Laninster', 'Module Developer', './images/team/user2.png'),
(3, 'Abhishek Pandey', 'Back End Developer', './images/team/user3.jpg'),
(4, 'Vinay Bothra', 'Front End Developer', './images/team/user1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `test_id` int(10) NOT NULL,
  `test_name` varchar(100) NOT NULL,
  `institute` varchar(100) NOT NULL,
  `image_ex` text NOT NULL,
  `content` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`test_id`, `test_name`, `institute`, `image_ex`, `content`) VALUES
(1, 'Vinay Bothra', 'Global Institute of Technology', './images/testimonial/user1.jpg', 'TestSprint is often a source of inspiration. It simplifies life and makes a usually complicated process easy. '),
(2, 'Abhishek Pandey', 'JECRC Foundation', './images/testimonial/user3.jpg', 'The online test on TestSprint is so simple, its so easy to use. And from the students standpoint its very intuitive.'),
(3, 'Name Surname', 'Institute Name', './images/testimonial/user2.png', 'TestSprint is often a source of inspiration. It simplifies everything and makes a usually complicated process easy. ');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `user_id` int(2) NOT NULL,
  `full_name` varchar(20) NOT NULL,
  `institute` varchar(100) NOT NULL,
  `user_name` varchar(10) NOT NULL,
  `upassword` varchar(10) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `dob` text NOT NULL,
  `status` int(1) DEFAULT NULL,
  `dinaak` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`user_id`, `full_name`, `institute`, `user_name`, `upassword`, `email_id`, `dob`, `status`, `dinaak`) VALUES
(1, 'abhishek pandey', 'Jaipur engineering college and resrach center', 'golu', 'golu@123', 'golu@gmail.com', '', 0, '07/12/2017'),
(2, 'virus', 'Jaipur engineering college and resrach center', 'virus', 'virus@123', 'golu@gmail.com', '', 0, '07/12/2017'),
(3, 'abhishek', 'Jaipur engineering college and resrach center', 'sam', 'sam@123', 'sam@gmail.com', '', 0, '09/21/2017'),
(8, 'yashika gupta', 'skit', 'juju', '1234', 'yashikagupta1805@gmail.com', '09/23/2017', 0, '09/23/2017'),
(9, 'Nikhil', 'GIT', 'rajnickhil', 'Nickhil123', 'rajnickhil@gmail.com', '12/10/1996', 1, '12/10/1996'),
(10, 'Vinay', 'GIT', 'Vinay', 'qwerty123', 'vinay@gmail.com', '09/14/2017', 1, '09/14/2017'),
(11, 'richa', 'abc', 'abc', '123', 'ABC@GMAIL.COM', '09/12/2017', 1, '09/12/2017');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_name` (`admin_name`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `funfact`
--
ALTER TABLE `funfact`
  ADD PRIMARY KEY (`fun_id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`module_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`module_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`result_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skill_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feed_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `funfact`
--
ALTER TABLE `funfact`
  MODIFY `fun_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `module_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `result_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `skill_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `test_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `user_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
