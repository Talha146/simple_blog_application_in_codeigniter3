-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2024 at 04:07 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_blog_application`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `author` varchar(50) NOT NULL,
  `special` enum('promo','featured') NOT NULL,
  `created_at` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `title`, `description`, `author`, `special`, `created_at`) VALUES
(1, 'The Future of Artificial Intelligence: What to Expect by 2030', 'Artificial Intelligence (AI) is transforming industries and daily life in remarkable ways, but what does the future hold? This blog post explores the potential developments in AI technology over the next decade, including breakthroughs in natural language processing, AI-driven healthcare, autonomous vehicles, and smart cities. We also delve into ethical considerations surrounding AI, such as job displacement, data privacy, and the role of AI in human decision-making. By 2030, AI will likely be deeply embedded in society—are we ready for it?', 'Talha Shahzad', 'promo', '2024-10-09'),
(2, 'A Beginner\'s Guide to Data Science: Where to Start', 'Data science is an exciting and rapidly growing field, but for newcomers, the sheer number of tools, programming languages, and techniques can feel overwhelming. This comprehensive guide helps beginners navigate the data science landscape by outlining the fundamental concepts, such as statistics, data wrangling, and machine learning. We explore popular programming languages like Python and R, essential libraries (e.g., Pandas, NumPy, and SciKit-Learn), and tools such as Jupyter Notebooks. By the end of this post, you\'ll have a clear roadmap for starting your data science journey and making sense of big data.', 'Talha Shahzad', 'featured', '2024-10-09'),
(3, 'The Importance of Cybersecurity in a Digital World', 'As businesses and individuals continue to move online, the risk of cyberattacks and data breaches has never been greater. This post explains the growing importance of cybersecurity in today\'s digital world. It covers common threats, such as phishing, ransomware, and identity theft, and provides practical tips to improve online security, including strong password management, two-factor authentication, and data encryption. With case studies of recent high-profile breaches, readers will gain a deeper understanding of why robust cybersecurity measures are essential for safeguarding sensitive information.', 'Talha Shahzad', 'featured', '2024-10-09'),
(4, 'How Cloud Computing is Transforming Small Businesses', 'Cloud computing has revolutionized the way businesses operate, offering unprecedented scalability, flexibility, and cost-efficiency. In this blog post, we explore how small businesses can harness the power of cloud services to improve their workflows, store data securely, and access powerful tools without hefty upfront investments. Whether it’s leveraging SaaS platforms for accounting, CRM, or collaboration, or using cloud storage solutions like AWS or Google Cloud, this post shows how small businesses can compete with larger enterprises by adopting cloud technologies to streamline operations and foster growth.', 'Talha Shahzad', '', '2024-10-09'),
(5, 'Why Sustainable Web Development is the Future', 'As the global demand for more sustainable practices rises, web development is not exempt from the conversation. This blog post delves into the principles of sustainable web development and why it\'s crucial for the environment. We discuss the strategies developers can implement to reduce the energy consumption of websites, such as minimizing server requests, optimizing images, using green hosting services, and ensuring fast load times. By building eco-friendly websites, developers can help reduce carbon footprints, improve user experience, and contribute to a more sustainable future.', 'Talha Shahzad', '', '2024-10-09'),
(6, 'Top 10 Web Development Trends to Watch in 2024', 'The world of web development is ever-evolving, with new technologies and frameworks constantly emerging. This blog post looks ahead to the biggest web development trends in 2024. From the rise of Web3 and decentralized applications to the increasing use of AI-driven web features like chatbots, this post highlights the technologies that will shape the digital landscape. We also cover trends in responsive design, voice search optimization, and the growing focus on user privacy and security. Developers need to stay ahead of these trends to build future-ready websites.', 'Talha Shahzad', 'featured', '2024-10-09'),
(7, 'How to Improve Your Website’s SEO in 2024: Key Strategies', 'With constant changes in Google’s algorithms, staying on top of SEO best practices is essential for maintaining a high search ranking. This blog post offers actionable strategies to improve your website’s SEO in 2024, including optimizing for mobile-first indexing, creating high-quality and relevant content, and mastering voice search. We also dive into technical SEO elements like page speed, schema markup, and improving site architecture. By implementing these strategies, you can ensure your website remains competitive in search engine results and attracts organic traffic.', 'Talha Shahzad', 'featured', '2024-10-09'),
(8, 'The Rise of Remote Work: How to Stay Productive and Balanced', 'Remote work has quickly become the new normal, but it comes with its own set of challenges. This post explores how professionals can stay productive while working from home without sacrificing work-life balance. We offer practical tips on setting up an ergonomic home office, creating a structured daily routine, using productivity tools like Slack and Trello, and maintaining clear boundaries between work and personal life. Additionally, we address the importance of regular breaks, mental health check-ins, and how to stay connected with colleagues in a virtual environment.', 'Talha Shahzad', 'featured', '2024-10-09'),
(9, 'Understanding Blockchain: How It’s Revolutionizing Industries', 'Blockchain technology is no longer just about cryptocurrencies like Bitcoin. This blog post explains how blockchain is disrupting various industries, from finance to healthcare, and beyond. We explore the underlying principles of blockchain, such as decentralization, transparency, and immutability, and how these characteristics make it ideal for applications like supply chain management, digital identity verification, and smart contracts. With real-world examples of blockchain implementation, this post helps readers understand the far-reaching impact of this technology on different sectors.', 'Talha Shahzad', 'featured', '2024-10-09'),
(10, 'Power BI vs. Tableau: Which Data Visualization Tool is Best?', 'Power BI and Tableau are two of the most popular data visualization tools available, but which one is the right fit for your business? This blog post compares the strengths and weaknesses of both platforms, focusing on ease of use, data integration, pricing, and available features. Power BI’s integration with Microsoft products makes it ideal for businesses already using the Microsoft ecosystem, while Tableau is known for its advanced analytics and interactive visualizations. By the end of this post, readers will have a clear understanding of which tool is best suited for their data visualization needs.', 'Talha Shahzad', '', '2024-10-09');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `status` enum('Active','Block') NOT NULL DEFAULT 'Active',
  `created_at` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `blog_id`, `name`, `comment`, `status`, `created_at`) VALUES
(1, 1, 'Talha Shahzad ', 'very interesting', 'Active', '2024-10-27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
