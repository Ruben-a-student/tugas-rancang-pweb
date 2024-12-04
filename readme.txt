-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2024 at 05:42 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tugasrancang`
--

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` int(255) NOT NULL,
  `title` mediumtext NOT NULL,
  `content` text NOT NULL,
  `requirements` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `title`, `content`, `requirements`) VALUES
(1, 'C++ introduction', '<h3>What is C++?</h3>\r\nC++ is a cross-platform language that can be used to create high-performance applications.\r\n\r\nC++ was developed by Bjarne Stroustrup, as an extension to the C language.\r\n\r\nC++ gives programmers a high level of control over system resources and memory.\r\n\r\nThe language was updated 5 major times in 2011, 2014, 2017, 2020, and 2023 to C++11, C++14, C++17, C++20, and C++23.\r\n<hr>\r\n<h3>Why Use C++</h3>\r\nC++ is one of the world\'s most popular programming languages.\r\n\r\nC++ can be found in today\'s operating systems, Graphical User Interfaces, and embedded systems.\r\n\r\nC++ is an object-oriented programming language which gives a clear structure to programs and allows code to be reused, lowering development costs.\r\n\r\nC++ is portable and can be used to develop applications that can be adapted to multiple platforms.\r\n\r\nC++ is fun and easy to learn!\r\n\r\nAs C++ is close to C, C# and Java, it makes it easy for programmers to switch to C++ or vice versa.\r\n<hr>\r\n<h3>Difference between C and C++</h3>\r\nC++ was developed as an extension of C, and both languages have almost the same syntax.\r\n\r\nThe main difference between C and C++ is that C++ supports classes and objects, while C does not.', ''),
(2, 'C++ Getting Started', '<h3>C++ Get Started</h3>\r\nTo start using C++, you need two things:\r\n<ul>\r\n<li>A text editor, like Notepad, to write C++ code</li>\r\n<li>A compiler, like GCC, to translate the C++ code into a language that the computer will understand</li>\r\n</ul>\r\nThere are many text editors and compilers to choose from. In this tutorial, we will use an IDE (see below).\r\n<hr>\r\n<h3>c++ Install IDE</h3>\r\nAn IDE (Integrated Development Environment) is used to edit AND compile the code.\r\n\r\nPopular IDE\'s include Code::Blocks, Eclipse, and Visual Studio. These are all free, and they can be used to both edit and debug C++ code.\r\n\r\nNote: Web-based IDE\'s can work as well, but functionality is limited.\r\n\r\nWe will use Code::Blocks in our tutorial, which we believe is a good place to start.\r\n\r\nYou can find the latest version of Codeblocks at <a href=\"https://www.codeblocks.org/downloads/binaries/\" target=\"_blank\">http://www.codeblocks.org/</a> Download the mingw-setup.exe file, which will install the text editor with a compiler.', ''),
(3, 'C++ Syntax', '<h3>C++ Syntax</h3>\r\nLet\'s break up the following code to understand it better:<div class=\"example\"><h2 class=\"example-title\">Example</h2><pre class=\"snippet\"><code>#include &lt;iostream&gt;<br>using namespace std;\r\nint main() {<br>    cout << \"Hello World!\";<br>    return 0;<br>}</code></pre></div>\r\n<h4>Example explained</h4>\r\nLine 1: #include <iostream> is a header file library that lets us work with input and output objects, such as cout (used in line 5). Header files add functionality to C++ programs.\r\n\r\nLine 2: using namespace std means that we can use names for objects and variables from the standard library.\r\n\r\nDon\'t worry if you don\'t understand how #include <iostream> and using namespace std works. Just think of it as something that (almost) always appears in your program.\r\n\r\nLine 3: A blank line. C++ ignores white space. But we use it to make the code more readable.\r\n\r\nLine 4: Another thing that always appear in a C++ program is int main(). This is called a function. Any code inside its curly brackets {} will be executed.\r\n\r\nLine 5: cout (pronounced \"see-out\") is an object used together with the insertion operator (<<) to output/print text. In our example, it will output \"Hello World!\".\r\n\r\nNote: C++ is case-sensitive: \"cout\" and \"Cout\" has different meaning.\r\n\r\nNote: Every C++ statement ends with a semicolon ;.\r\n\r\nNote: The body of int main() could also been written as:\r\nint main () { cout << \"Hello World! \"; return 0; }\r\n\r\nRemember: The compiler ignores white spaces. However, multiple lines makes the code more readable.\r\n\r\nLine 6: return 0; ends the main function.\r\n\r\nLine 7: Do not forget to add the closing curly bracket } to actually end the main function.\r\n<hr>\r\n<h4>Omitting Namespace</h4>\r\nYou might see some C++ programs that runs without the standard namespace library. The using namespace std line can be omitted and replaced with the std keyword, followed by the :: operator for some objects:<div class=\"example\"><h2 class=\"example-title\">Example</h2><pre class=\"snippet\"><code>#include &lt;iostream&gt;\r\nint main() {<br>    std::cout << \"Hello World!\";<br>  return 0;<br>}</code></pre></div>', ''),
(4, 'C++ Statements', '<h3>C++ Statements</h3>\r\nA computer program is a list of \"instructions\" to be \"executed\" by a computer.\r\n\r\nIn a programming language, these programming instructions are called statements.\r\n\r\nThe following statement \"instructs\" the compiler to print the text \"Hello World\" to the screen:<div class=\"example\"><h2 class=\"example-title\">Example</h2><pre class=\"snippet\"><code>cout << \"hello world!\";</code></pre></div>\r\nIt is important that you end the statement with a semicolon ;\r\n\r\nIf you forget the semicolon (;), an error will occur and the program will not run\r\n<hr>\r\n<h3>Many Statements</h3>\r\nMost C++ programs contain many statements.\r\n\r\nThe statements are executed, one by one, in the same order as they are written:<div class=\"example\"><h2 class=\"example-title\">Example</h2><pre class=\"snippet\"><code>cout << \"hello world!\";<br>cout << \"have a good day!\";<br>return 0;</code></pre></div>\r\n<h4>Example explained</h4>\r\nExample explained\r\nFrom the example above, we have three statements:<ol type=\"1\">\r\n<li>cout << \"Hello World!\";</li>\r\n<li>cout << \"Have a good day!\";</li>\r\n<li>return 0;</li>\r\n</ol>\r\nThe first statement is executed first (print \"Hello World!\" to the screen).\r\nThen the second statement is executed (print \"Have a good day!\" to the screen).\r\nAnd at last, the third statement is executed (end the C++ program successfully).', ''),
(5, 'agd', 'gads', ''),
(6, 'gadga', 'gagasd', ''),
(7, 'C++ Introduction', '<h2>What is C++?</h2>\r\nC++ is a cross-platform language that can be used to create high-performance applications.\r\n\r\nC++ was developed by Bjarne Stroustrup, as an extension to the C language.\r\n\r\nC++ gives programmers a high level of control over system resources and memory.\r\n\r\nThe language was updated 5 major times in 2011, 2014, 2017, 2020, and 2023 to C++11, C++14, C++17, C++20, and C++23.\r\n\r\nWhy Use C++\r\nC++ is one of the world\'s most popular programming languages.\r\n\r\nC++ can be found in today\'s operating systems, Graphical User Interfaces, and embedded systems.\r\n\r\nC++ is an object-oriented programming language which gives a clear structure to programs and allows code to be reused, lowering development costs.\r\n\r\nC++ is portable and can be used to develop applications that can be adapted to multiple platforms.\r\n\r\nC++ is fun and easy to learn!\r\n\r\nAs C++ is close to C, C# and Java, it makes it easy for programmers to switch to C++ or vice versa.\r\n\r\nDifference between C and C++\r\nC++ was developed as an extension of C, and both languages have almost the same syntax.\r\n\r\nThe main difference between C and C++ is that C++ supports classes and objects, while C does not.', ''),
(8, 'test 8', '88888', ''),
(9, 'test 8', '88888', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(255) NOT NULL,
  `NAMA` varchar(100) DEFAULT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PASSWORD` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_progress`
--

CREATE TABLE `user_progress` (
  `user_id` int(255) NOT NULL,
  `level_id` int(255) NOT NULL,
  `completed_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

--
-- Indexes for table `user_progress`
--
ALTER TABLE `user_progress`
  ADD KEY `level` (`level_id`),
  ADD KEY `user` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_progress`
--
ALTER TABLE `user_progress`
  ADD CONSTRAINT `level` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
