-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2024 at 04:34 AM
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
-- Database: `agriconnect`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(6) NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `username`, `user_firstname`, `user_lastname`, `admin_password`, `contact`, `email`, `role`) VALUES
(9, 'Mr.Tetteh', 'Daniel', 'Tetteh', '$2y$12$nKJCwi.5BRUlaXZSI1ZlxeliZjgIJ8XyOj92RCUgzl1aGo2WhpsjS', 244544661, 'danielstay73@gmail.com', 'Admin'),
(26, 'Lorry Todd', 'Lorry ', 'Todd', '$2y$12$UXGMeEcx3d7frdZlrJDmiOexijrA/wdjLArxq.kqmjce7QubG48YO', 547834521, 'lorry@gmail.com', 'Admin'),
(27, 'Stanly Ted', 'Stanly', 'Ted', '$2y$12$1ZFtgbd8J5U9BDqu0hoLeO.TKjaG7qgon4yx1ZG49G6gXfMRhENmW', 547834545, 'stanly@gmail.com', 'Admin'),
(28, 'Stanly Ted', 'Stanly', 'Ted', '$2y$12$0tCbqtEE/q/kSp4GPbEv9eR.vU0A.50Vf0QURXTbpBZtmp7zoNsRi', 547834545, 'stanly@gmail.com', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

CREATE TABLE `blog_post` (
  `id` int(11) NOT NULL,
  `blog_image` varchar(255) NOT NULL,
  `blog_title` varchar(225) NOT NULL,
  `blog_content` varchar(4000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_post`
--

INSERT INTO `blog_post` (`id`, `blog_image`, `blog_title`, `blog_content`) VALUES
(19, 'blog-img-01.jpg', '            Eat Fresh, Feel Great: Simple Tips for Healthy Eating with AgriConnect', '                            Eating healthy doesn\'t have to be complicated or expensive. At AgriConnect, we believe\r\n                                that fresh, local produce is the foundation of a healthy diet. Here are a few simple\r\n                                tips to help you get started:\r\n\r\n                                 1. Embrace the Rainbow: Fill your plate with a variety of colorful fruits and\r\n                                vegetables. Each color offers a unique range of vitamins, minerals, and antioxidants\r\n                                that are essential for good health. With AgriConnect, you have access to seasonal\r\n                                produce at its peak flavor and freshness, making it easy to add a vibrant rainbow to\r\n                                your meals.\r\n\r\n                                 2. Think Simple: Don\'t be intimidated by complex recipes. Sometimes, the simplest\r\n                                dishes are the healthiest. A fresh salad with AgriConnect\'s farm-to-table greens,\r\n                                drizzled with olive oil and vinegar, is a quick and nutritious lunch. Grilled chicken or\r\n                                fish with roasted seasonal vegetables from local farms is a satisfying and healthy\r\n                                dinner option.\r\n\r\n                                3. Snack Smart: Ditch the processed snacks and opt for fresh fruits, vegetables,\r\n                                and nuts. Nature provides the perfect healthy snacks on-the-go! AgriConnect offers a\r\n                                variety of pre-washed and chopped vegetables, making healthy snacking even easier.\r\n\r\n                                 4. Cook More Often: Taking control of what goes on your plate is a powerful way to\r\n                                eat healthy. Experiment with new recipes using fresh, seasonal ingredients from\r\n                                AgriConnect. You\'ll be surprised at how delicious and satisfying healthy meals can be!\r\n\r\n                                 5. Make it a Lifestyle: Healthy eating isn\'t about deprivation, it\'s about making\r\n                                sustainable choices that nourish your body. With AgriConnect delivering the freshest\r\n                                produce straight from the farm, you\'ll be well on your way to a healthier, happier you!                                    '),
(20, 'gallery-img-02.jpg', '                                   From Farm to Fridge: Tips for Storing Your Fresh Produce', '                            Fresh produce is the heart and soul of healthy eating, but keeping it fresh and flavorful\r\n                                can be a challenge. Here at AgriConnect, we want your farm-fresh finds to last! Follow\r\n                                these simple storage tips to maximize the life of your fruits and veggies:\r\n\r\n                                 Know Your Zones: Not all produce is created equal. Some items, like tomatoes and\r\n                                bananas, prefer cooler temperatures, while others, like potatoes and garlic, thrive in a\r\n                                dark, well-ventilated space. Familiarize yourself with the ideal storage conditions for\r\n                                each item to avoid premature spoilage.\r\n\r\n                                The Fridge Isn\'t Always Friendly: Certain fruits and vegetables, like avocados and\r\n                                mangoes, continue to ripen after they\'re picked. Storing them in the fridge can slow\r\n                                this process. Keep these items at room temperature until they reach your desired\r\n                                ripeness.\r\n\r\n                                 Ethylene Emission: Some fruits and vegetables, like apples and melons, emit\r\n                                ethylene gas, which can accelerate the ripening of nearby produce. Store these items\r\n                                separately or use ethylene-absorbing products to extend the shelf life of your other\r\n                                goodies.\r\n\r\n                                Embrace the Power of Packaging: The packaging your produce arrives in isn\'t just\r\n                                there for show. Breathable bags and containers are designed to maintain optimal moisture\r\n                                levels and airflow, preventing spoilage. Utilize these containers whenever possible.\r\n\r\n                                 Wash Wisely: While it might seem intuitive to wash everything before storing, some\r\n                                fruits and vegetables with delicate skins or edible rinds are best left unwashed until\r\n                                you\'re ready to eat them. Moisture can encourage spoilage.\r\n\r\n                                Leftovers Get a Refresh: Don\'t toss out slightly wilted greens or limp carrots!\r\n                                Revive them with a quick soak in ice water. This will rehydrate your produce, making it\r\n                                crisp and refreshing again.\r\n\r\n                                 By following these simple storage tips, you can enjoy the peak flavor and freshness\r\n                                of your AgriConnect produce for longer! Remember, a little planning goes a long way in\r\n                                reducing food waste and maximizing your health benefits. Happy eating');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(225) NOT NULL,
  `grand_total` varchar(255) NOT NULL,
  `product_discription` varchar(225) NOT NULL,
  `qty` int(11) NOT NULL,
  `image` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_name`, `product_price`, `grand_total`, `product_discription`, `qty`, `image`, `user_id`, `product_id`) VALUES
(43, 'Tomatoes', '10', '10', 'fresh', 1, 'img-pro-02.jpg', 1, 1),
(44, 'Pineapple', '10', '10', 'Pineapple: Tropical Delight in a Spiky Package! 🍍 Bursting with sweet flavor and juicy goodness, pineapple is a tropical fruit renowned for its golden flesh and tangy taste. Packed with vitamins, minerals, and enzymes, this s', 1, '../admin/uploads/0bcd1deb66ce2c8144121c611b0a28a5pineapples.jpeg', 16, 5),
(51, 'Kiwi', '20', '20', 'Kiwi: The Zesty Green Powerhouse! 🥝 Hailing from the lush hills of New Zealand, the kiwi is a vibrant green fruit with a tangy-sweet flavor and a unique fuzzy brown skin. Bursting with vitamin C, fiber, and antioxidants, this', 1, '../admin/uploads/daf972b1f14936f2faae56878325ad0fkiwi.jpeg', 9, 6);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `content` varchar(4000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `username`, `content`) VALUES
(1, 'Ella', '\\r\\n                                Wow, this farm produce is an absolute delight! From its vibrant colors to its fresh aroma, it\\\'s clear that it was grown with care and dedication. Each bite bursts with flavor, reminding me of the simple joys of nature\\\'s bounty. Thank you to the farmers whose hard work and commitment shine through in every delicious mouthful. Truly a testament to the beauty and goodness that comes from the earth!\\\" 🌱🍅🌽 #FarmFresh #Nature\\\'sBounty'),
(2, 'Derrick ', 'Indulging in this farm-fresh produce is like taking a bite out of sunshine itself! The crispness of the vegetables and the sweetness of the fruits are a testament to the wholesome care they received from seed to harvest. It\\\'s a reminder of the incredible gifts that Mother Nature provides when treated with respect and gratitude. Here\\\'s to the farmers who nurture the land and bring such joy to our tables with their dedication and passion!\\\" 🌿🌞🥕 #FarmToTable #NourishedByNature');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'buyer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `first_name`, `last_name`, `password`, `country`, `city`, `contact`, `email`, `role`) VALUES
(8, 'Ella', 'Manu', '$2y$12$IXZPFkQOwDb63yfDJqsCgujeYLiVDC.BbXQxelQ9ROaYVcJQ/Cm0a', 'Ghana', 'Accra', '559724772', 'ella@gmail.com', 'buyer'),
(9, 'Winny', 'Adj', '$2y$12$POlk.lSIv6E.6.f4orJyMuZifrP66ubAT9pxH534X3zYnFKdl7XzK', 'Ghana', 'Accra', '024589 0713‬', 'winny@gmail.com', 'buyer'),
(14, 'Gillian', 'Osmanu', '$2y$12$qoM5AOvuYCC2czsRaUT20udaUavjshOt.tE1UPW3HEAMEw7iMukYy', 'Ghana', 'Dome-Pillar 2', '0207367373', 'go@gmail.com', 'buyer'),
(15, 'Gibson', 'Adjei', '$2y$12$UfcJO37SFD8bhVw.sfhxS.dIQyE.wHoBC2UsfamLirnOB2Nw9H.Pe', 'Ghana', 'Obo Kwahu', '0245890714', 'gib@gmail.com', 'buyer'),
(16, 'Vaughn', 'Cooke', '$2y$12$Vcokl9cTvJ8QJ0glbaB9FOZPg6uPnv./rEJje59ci/I8GHo.6r2bW', 'Ghana', 'Obo Kwahu', '0245890714', 'vc@gmail.com', 'buyer');

-- --------------------------------------------------------

--
-- Table structure for table `farmer_user`
--

CREATE TABLE `farmer_user` (
  `id` int(11) NOT NULL,
  `farmer_email` varchar(255) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `farmer_firstname` varchar(255) NOT NULL,
  `farmer_lastname` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `farmer_user`
--

INSERT INTO `farmer_user` (`id`, `farmer_email`, `username`, `password`, `farmer_firstname`, `farmer_lastname`, `contact`) VALUES
(1, 'ella@gmail.com', 'ella', '$2y$12$IxtklBr0F4tFzosgNXdaY.jltdIxqbHXW69vzxHTLCpXG1pyVU4Mi', 'ella', 'manu', '0244544661'),
(2, 'lady@gmail.com', 'ladyboss', '$2y$12$/quDBe8.MyufnoyIn7i9Lu97wM71qKeYwu/7M5ZFzJHRRowUY5i22', 'Niccy', 'Cooke', '0503261999'),
(3, 'toode@gmail.com', 'Mandy Toode', '$2y$12$FyZiyF..d9ge93OROdgY3.8oswYedbTsm6XaJzMJhGVYq5I6untr6', 'Mandy', 'Toode', '0957689039');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(225) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `shipping_address` varchar(255) NOT NULL,
  `shipping_method` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proudct`
--

CREATE TABLE `proudct` (
  `id` int(255) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(225) NOT NULL,
  `product_description` varchar(225) NOT NULL,
  `image` text NOT NULL,
  `product_keywords` varchar(225) NOT NULL,
  `usr_id` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `proudct`
--

INSERT INTO `proudct` (`id`, `categories`, `product_name`, `product_price`, `product_description`, `image`, `product_keywords`, `usr_id`, `contact`) VALUES
(6, 'Fruits ', 'Kiwi', '20', 'Kiwi: The Zesty Green Powerhouse! 🥝 Hailing from the lush hills of New Zealand, the kiwi is a vibrant green fruit with a tangy-sweet flavor and a unique fuzzy brown skin. Bursting with vitamin C, fiber, and antioxidants, this', '../admin/uploads/daf972b1f14936f2faae56878325ad0fkiwi.jpeg', 'Fruits', '16', '0534381295'),
(7, 'Vegetables', 'Avocado', '20', '\r\n\"Avocado: Creamy Green Goodness! 🥑 Hailing from sun-kissed orchards, avocados are creamy, nutrient-dense fruits beloved for their rich flavor and velvety texture. Packed with heart-healthy fats, fiber, and an array of vitam', '../admin/uploads/5ad3057ff473da0bfaacebd1eb4444a7Avocado.jpeg', 'Vegetables', '3', '0245890713'),
(8, 'Vegetables', 'Carrots', '10', '          \"Carrots: Crunchy, Colorful, and Packed with Goodness! 🥕 With their vibrant orange hue and crisp texture, carrots are not only a feast for the eyes but also a powerhouse of nutrients. Rich in beta-carotene, vitamins', '../admin/uploads/2d78683095dba76713e95123d99af6eaimg-pro-01.jpg', 'Vegetables', '27', '0245890713'),
(18, 'Root Tubers ', 'Beetroot ', '10', '             beetroot is sweet                                   ', '../admin/uploads/23538222dcf0877e4e629c9ff989c8e0Beetroot.jpg', 'Root Tubers ', '27', '0245890713'),
(20, 'Root Tubers ', 'Yam', '20', '           Yams                                     ', '../admin/uploads/7b1e4190751e093ab67ba0cb7674fdbeYam.jpeg', 'Root Tubers ', '27', '0534381295'),
(22, 'Root Tubers ', 'Cassava', '10', '                cassava                                ', '../admin/uploads/5b7fab4f8958b4b78238d29feef3602bcassava.jpeg', 'Root Tubers ', '1', '0503261999'),
(23, 'Spices ', 'Pepper', '10', '           Pepper is hot and sweet                                     ', '../admin/uploads/617208827dcea37c9d7d56b53653362dgallery-img-03.jpg', 'Spices', '9', '0534381295');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(225) NOT NULL,
  `grand_total` int(255) NOT NULL,
  `product_discription` varchar(225) NOT NULL,
  `qty` int(11) NOT NULL,
  `image` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `transaction_id` bigint(255) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `zip` varchar(255) DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `shipping_address` varchar(255) DEFAULT NULL,
  `shipping_method` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmer_user`
--
ALTER TABLE `farmer_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proudct`
--
ALTER TABLE `proudct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `farmer_user`
--
ALTER TABLE `farmer_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proudct`
--
ALTER TABLE `proudct`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user_orders`
--
ALTER TABLE `user_orders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
