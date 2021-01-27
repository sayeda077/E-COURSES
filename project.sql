-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 04:38 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'fatema@gmail.com', 'fatema');

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `help` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `subject`, `email`, `help`) VALUES
(1, 'anne', 'About tensorflow', 'anne@gmail.com', 'Want to know about tensorflow'),
(2, 'amina', 'About CSS', 'amina@gmail.com', 'Can I enroll for CSS?');

-- --------------------------------------------------------

--
-- Table structure for table `courseall`
--

CREATE TABLE `courseall` (
  `id` int(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `introduction` text NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courseall`
--

INSERT INTO `courseall` (`id`, `image`, `title`, `description`, `introduction`, `name`) VALUES
(3, '1.jpg', 'Tensorflow', 'TensorFlow is a free and open-source software library for machine learning.', 'It can be used across a range of tasks but has a particular focus on training and inference of deep neural networks. Tensorflow is a symbolic math library based on dataflow and differentiable programming.TensorFlow is an end-to-end open source platform for machine learning. It has a comprehensive, flexible ecosystem of tools, libraries, and community resources.TensorFlow is an end-to-end open source platform for machine learning. It has a comprehensive, flexible ecosystem of tools, libraries and community resources that lets researchers push the state-of-the-art in ML and developers easily build and deploy ML powered applications. Created by the Google Brain team, TensorFlow is an open source library for numerical computation and large-scale machine learning. TensorFlow bundles together a slew of machine learning and deep learning (aka neural networking) models and algorithms and makes them useful by way of a common metaphor.\r\n', 'TensorFlow.mp4'),
(4, '2.jpg', 'Python', 'Python is an interpreted and high-level programming language.', 'Python is a general-purpose coding language—which means that, unlike HTML, CSS, and JavaScript, it can be used for other types of programming and software development besides web development. That includes back end development, software development, data science and writing system scripts among other things.Python is an interpreted, object-oriented, high-level programming language with dynamic semantics. ... Python\'s simple, easy to learn syntax emphasizes readability and therefore reduces the cost of program maintenance. Python supports modules and packages, which encourages program modularity and code reuse.Python is an object oriented programming language like Java. Python is called an interpreted language. Python uses code modules that are interchangeable instead of a single long list of instructions that was standard for functional programming languages. The standard implementation of python is called “cpython”.Game Programming With Python. You can write whole games in Python using PyGame. ', 'python.mp4'),
(8, '3.jpg', 'Deep Learning', 'Deep learning is part of machine learning methods based on artificial neural networks.', 'Deep learning is an AI function that mimics the workings of the human brain in processing data for use in detecting objects, recognizing speech, translating languages, and making decisions. Deep learning AI is able to learn without human supervision, drawing from data that is both unstructured and unlabeled.Deep learning is a class of machine learning algorithms that uses multiple layers to progressively extract higher-level features from the raw input. For example, in image processing, lower layers may identify edges, while higher layers may identify the concepts relevant to a human such as digits or letters or faces.Deep learning can be considered as a subset of machine learning. It is a field that is based on learning and improving on its own by examining computer algorithms. While machine learning uses simpler concepts, deep learning works with artificial neural networks, which are designed to imitate how humans think and learn.', 'deepLearning.mp4'),
(15, '4.png', 'Java', 'Java is a class-based, object-oriented programming language.', 'Java Programming Java8Object Oriented Programming. Mean is an average value of given set of numbers. It is calculated similarly to that of the average value. Adding all given number together and then dividing them by the total number of values produces mean.Most often Java is used to build large enterprise class applications. Java works great within corporate environments, or if you\'re building a very large scale system. ', 'java1.mp4'),
(18, '5.jpg', 'HTML', 'HTML is the set of markup symbols or codes inserted into a file intended for display on the Internet.', 'Hypertext Markup Language is the standard markup language for documents designed to be displayed in a web browser. It can be assisted by technologies such as Cascading Style Sheets and scripting languages such as JavaScript.', 'html.mp4'),
(19, '6.jpg', 'CSS', 'CSS stands for Cascading Style Sheets. CSS describes how HTML elements are to be displayed on screen', 'Cascading Style Sheets is a style sheet language used for describing the presentation of a document written in a markup language such as HTML. CSS is a cornerstone technology of the World Wide Web, alongside HTML and JavaScript.', 'css.mp4'),
(20, '1.jpg', 'Keras', 'TensorFlow is a free and open-source software library for machine learning.', 'It can be used across a range of tasks but has a particular focus on training and inference of deep neural networks. Tensorflow is a symbolic math library based on dataflow and differentiable programming.', '');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cpassword` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `name`, `email`, `phone`, `password`, `cpassword`, `gender`) VALUES
(2, 'a', 'a@gmail.com', '', '12345', '12345', 'female'),
(3, 'a', 'a@gmail.com', '01521562190', '5678', '5678', 'female'),
(4, 'a', 'a@gmail.com', '0194398523', '12345', '12345', 'female'),
(5, 'anne', 'anne@gmail.com', '0194398523', '34567', '34567', 'female'),
(6, 'amina', 'amina@gmail.com', '$', 'abcd', 'abcd', 'female'),
(8, 'ani', 'ani@gmail.com', '01943985231', 'ab12A', 'ab12A', 'female'),
(9, 'an', 'an@gmail.com', '01521562190', 'anA1', 'anA', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(50) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`) VALUES
(3, 'TensorFlow.mp4'),
(4, 'TensorFlow.mp4'),
(5, 'TensorFlow.mp4'),
(6, 'TensorFlow.mp4'),
(7, 'TensorFlow.mp4'),
(8, 'Python1.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courseall`
--
ALTER TABLE `courseall`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courseall`
--
ALTER TABLE `courseall`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
