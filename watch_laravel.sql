-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2020 at 04:55 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `watch_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `images` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `price` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`id`, `name`, `images`, `title`, `content`, `price`, `status`) VALUES
(2, 'ĐỒNG HỒ OGIVAL OG358.61AGR-GL', 'img2-top-mirora1.jpg', 'ĐỈNH CAO', 'Đồng hồ nam', 1000000, 1),
(3, 'ĐỒNG HỒ OGIVAL OG829-24AJGSK-T CHÍNH HÃNG', 'img3-top-mirora1.jpg', 'cảm giác thoải mái', 'Đồng Hồ Nam', 1200000, 1),
(4, 'ĐỒNG HỒ OLYM PIANUS OP990-09AMSK-T', 'img1-top-mirora1.jpg', 'GIẤY CHỨNG NHẬN', 'Đồng hồ nam', 800000, 1),
(5, 'sản phẩm mới nhất 2020', 'img1-bottom-mirora1.jpg', 'Đến với chúng tôi bạn sẽ được tận hưởng ưu đãi hấp dẫn', 'Combo khuyễn mãi cực hót', 1000, 0),
(6, 'sản phẩm mới nhất 2020 combo', 'img2-bottom-mirora1.jpg', 'cung cấp những sản phẩm chất lượng', 'Hàng việt nam chất lượng cao', 2000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `name_blog` varchar(200) NOT NULL,
  `meta` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `images` varchar(200) NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `cate_id`, `name_blog`, `meta`, `content`, `images`, `user`) VALUES
(3, 3, 'CÁCH PHÂN BIỆT ĐỒNG HỒ NAM HÀNG HIỆU CHÍNH HÃNG VÀ ĐỒNG HỒ FAKE CỰC CHUẨN', 'Để không trở thành \"miếng mồi\" béo bở của cánh gian thương, người tiêu dùng hãy tự trang bị cho mình những kiến thức cơ bản', '<h2 id=\"1-kiem-tra-dong-ho-chinh-hang-qua-mat-so-va-mat-kinh\" style=\"text-align: left; margin: 10px 0px 12px; padding: 0px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; line-height: 1.1;\"><span style=\"font-weight: 700;\"><font color=\"#ff0000\">1. Kiểm tra đồng hồ chính hãng qua mặt số và mặt kính</font></span></h2><div><font color=\"#ff0000\"><span style=\"font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; font-size: 14px;\">&nbsp;</span><i class=\"icon_v1 star_on\" style=\"font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; font-size: 14px; background: url(&quot;data:image/svg+xml;utf8,<svg aria-hidden=\\&quot;true\\&quot; data-prefix=\\&quot;fas\\&quot; data-icon=\\&quot;star\\&quot; role=\\&quot;img\\&quot; xmlns=\\&quot;http://www.w3.org/2000/svg\\&quot; viewBox=\\&quot;0 0 576 512\\&quot; class=\\&quot;svg-inline--fa fa-star fa-w-18\\&quot;><path fill=\\&quot;orange\\&quot; d=\\&quot;M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z\\&quot; class=\\&quot;\\&quot;></path></svg>&quot;) no-repeat; width: 17px; height: 17px; display: inline-flex; transition: all 0.3s ease 0s;\"><svg aria-hidden=\"true\" data-prefix=\"fas\" data-icon=\"star\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 576 512\" class=\"svg-inline--fa fa-star fa-w-18\"><path fill=\"#FF9727\" d=\"M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z\" class=\"\"></path></svg></i><span style=\"font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; font-size: 14px;\">&nbsp;</span><i class=\"icon_v1 star_on\" style=\"font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; font-size: 14px; background: url(&quot;data:image/svg+xml;utf8,<svg aria-hidden=\\&quot;true\\&quot; data-prefix=\\&quot;fas\\&quot; data-icon=\\&quot;star\\&quot; role=\\&quot;img\\&quot; xmlns=\\&quot;http://www.w3.org/2000/svg\\&quot; viewBox=\\&quot;0 0 576 512\\&quot; class=\\&quot;svg-inline--fa fa-star fa-w-18\\&quot;><path fill=\\&quot;orange\\&quot; d=\\&quot;M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z\\&quot; class=\\&quot;\\&quot;></path></svg>&quot;) no-repeat; width: 17px; height: 17px; display: inline-flex; transition: all 0.3s ease 0s;\"><svg aria-hidden=\"true\" data-prefix=\"fas\" data-icon=\"star\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 576 512\" class=\"svg-inline--fa fa-star fa-w-18\"><path fill=\"#FF9727\" d=\"M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z\" class=\"\"></path></svg></i><span style=\"font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; font-size: 14px;\">&nbsp;</span><i class=\"icon_v1 star_on\" style=\"font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; font-size: 14px; background: url(&quot;data:image/svg+xml;utf8,<svg aria-hidden=\\&quot;true\\&quot; data-prefix=\\&quot;fas\\&quot; data-icon=\\&quot;star\\&quot; role=\\&quot;img\\&quot; xmlns=\\&quot;http://www.w3.org/2000/svg\\&quot; viewBox=\\&quot;0 0 576 512\\&quot; class=\\&quot;svg-inline--fa fa-star fa-w-18\\&quot;><path fill=\\&quot;orange\\&quot; d=\\&quot;M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z\\&quot; class=\\&quot;\\&quot;></path></svg>&quot;) no-repeat; width: 17px; height: 17px; display: inline-flex; transition: all 0.3s ease 0s;\"><svg aria-hidden=\"true\" data-prefix=\"fas\" data-icon=\"star\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 576 512\" class=\"svg-inline--fa fa-star fa-w-18\"><path fill=\"#FF9727\" d=\"M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z\" class=\"\"></path></svg></i><span style=\"font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; font-size: 14px;\">&nbsp;</span><i class=\"icon_v1 star_on\" style=\"font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; font-size: 14px; background: url(&quot;data:image/svg+xml;utf8,<svg aria-hidden=\\&quot;true\\&quot; data-prefix=\\&quot;fas\\&quot; data-icon=\\&quot;star\\&quot; role=\\&quot;img\\&quot; xmlns=\\&quot;http://www.w3.org/2000/svg\\&quot; viewBox=\\&quot;0 0 576 512\\&quot; class=\\&quot;svg-inline--fa fa-star fa-w-18\\&quot;><path fill=\\&quot;orange\\&quot; d=\\&quot;M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z\\&quot; class=\\&quot;\\&quot;></path></svg>&quot;) no-repeat; width: 17px; height: 17px; display: inline-flex; transition: all 0.3s ease 0s;\"><svg aria-hidden=\"true\" data-prefix=\"fas\" data-icon=\"star\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 576 512\" class=\"svg-inline--fa fa-star fa-w-18\"><path fill=\"#FF9727\" d=\"M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z\" class=\"\"></path></svg></i><span style=\"font-weight: 700;\"><br></span></font></div><div><span style=\"font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; font-size: 14px;\"><font color=\"#ff0000\"><br></font></span></div><p style=\"margin: 10px 0px 12px; padding: 0px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif;\"></p><div style=\"margin: 10px 0px 12px; padding: 0px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; text-align: justify;\"><div style=\"text-align: left;\"><font color=\"#ff0000\" style=\"\" size=\"3\">Để nhận biết đồng hồ thật - giả, dấu hiệu đầu tiên bạn cần quan tâm đó là mặt số và kính đồng hồ. Mặt đồng hồ hàng hiệu chính hãng được thiết kế hoàn hảo, các&nbsp;chi tiết in khắc sắc nét, rõ ràng. Ngoài ra, bạn cần chú ý đến các tiểu tiết như kim và cọc số, chúng tuy nhỏ nhưng để đạt được sự cân đối, nhẵn mịn không phải đơn giản. Điều này chỉ các thương hiệu đồng hồ chính hãng mới làm được.</font></div><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px; text-align: center;\"><img alt=\"\" data-height=\"507\" data-width=\"900\" height=\"451\" src=\"https://www.xwatch.vn/wp-content/uploads/2019/01/phan-biet-dong-ho-that-gia-1.jpg\" width=\"800\" style=\"text-align: left; border: 1px solid rgba(243, 243, 243, 0.8); max-width: 100%; transition: all 0.5s ease 0s; margin: 10px auto; display: block; height: auto !important;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"text-align: center; margin: 10px 0px 12px; padding: 0px;\"><span style=\"font-weight: 700;\"><em style=\"font-weight: inherit;\"><font color=\"#ff0000\" size=\"3\">Sự khác biệt về mặt đồng hồ của đồng hồ fake (trái) và đồng hồ thật (phải)</font></em></span></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"text-align: left; margin: 10px 0px 12px; padding: 0px;\"><font color=\"#ff0000\" size=\"3\">Với đồng hồ hàng hiệu chính hãng, kim là một chỉnh thể cân đối, không có gờ hay gợn. Trường hợp kim vát hai bên, mặt vát phải đều nhau, tạo thành một tam giác cân. Đường rãnh dọc kim sắc nét, đi từ đỉnh xuống dưới. Ở đồng hồ hàng hiệu chính hãng, đặc biệt với đồng hồ cơ, kim giây thường chạy rất mượt. Trong khi đó, kim giây hàng fake không tránh khỏi hiện tượng giật giật, đứt quãng.</font></p></div><p style=\"margin: 10px 0px 12px; padding: 0px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif;\"></p><p style=\"text-align: left; margin: 10px 0px 12px; padding: 0px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif;\"><font color=\"#ff0000\" size=\"3\">Mọi chi tiết trên mặt số đồng hồ nam hàng hiệu chính hãng đều được trau chuốt một cách tỉ mỉ. Bất kể sự cẩu thả nào trong gia công thiết kế đều là bằng chứng tố cáo sự giả dối của hàng fake.</font></p><p style=\"margin: 10px 0px 12px; padding: 0px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; text-align: center;\"><img alt=\"\" data-height=\"301\" data-width=\"900\" height=\"268\" src=\"https://www.xwatch.vn/wp-content/uploads/2019/01/dong-ho-nam-hang-hieu-chinh-hang.jpg\" title=\"Đồng hồ hàng hiệu chính hãngTissot và fake\" width=\"800\" style=\"text-align: left; border: 1px solid rgba(243, 243, 243, 0.8); max-width: 100%; transition: all 0.5s ease 0s; margin: 10px auto; display: block; height: auto !important;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif;\"></p><p style=\"text-align: center; margin: 10px 0px 12px; padding: 0px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif;\"><span style=\"font-weight: 700;\"><em style=\"font-weight: inherit;\"><font color=\"#ff0000\" size=\"3\">Kính đồng hồ giả (phải) bị mờ và nhìn dại hơn ở đồng hồ chính hãng (trái)</font></em></span></p><p style=\"margin: 10px 0px 12px; padding: 0px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif;\"></p><div style=\"margin: 10px 0px 12px; padding: 0px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; text-align: justify;\"><div style=\"text-align: left;\"><font color=\"#ff0000\" size=\"3\">Đối với đồng hồ hàng hiệu chính hãng có mặt kính Sapphire, ta có thể nhận biết loại kính này bằng một phương pháp đơn giản: nhỏ một giọt nước lên bề mặt kính và nghiêng đồng hồ.</font></div><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><div style=\"margin: 10px 0px 12px; padding: 0px;\"><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"text-align: left; margin: 10px 0px 12px; padding: 0px;\"><font color=\"#ff0000\" size=\"3\">Do Sapphire và kính thường có độ căng khác nhau nên sẽ có sự khác biệt. Nếu giọt nước bị chảy đi thì kính đồng hồ là kính thường, nếu giọt nước tụ lại một chỗ và không bị chảy thì đó là kính Sapphire. Tuy nhiên, phương pháp này được xác định là chưa chuẩn xác 100%. Cách chính xác nhất, bạn có thể dùng máy đo độ cứng để xác định chính xác nhất.</font></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"text-align: left; margin: 10px 0px 12px; padding: 0px;\"><em style=\"font-weight: inherit;\"><font color=\"#ff0000\" size=\"3\">❌❌❌&nbsp;Bài viết chi tiết:&nbsp;<a href=\"https://www.xwatch.vn/blog/bi-quyet-phan-biet-dong-ho-tissot-that-gia-p3357.html\" rel=\"noopener noreferrer\" target=\"_blank\" style=\"display: contents;\"><span style=\"font-weight: 700;\">Bí quyết phân biệt đồng hồ Tissot thật - giả</span></a></font></em></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px; text-align: center;\"><img alt=\"\" data-height=\"467\" data-width=\"900\" height=\"415\" src=\"https://www.xwatch.vn/wp-content/uploads/2019/01/phan-biet-dong-ho-that-gia-2.jpg\" width=\"800\" style=\"text-align: left; border: 1px solid rgba(243, 243, 243, 0.8); max-width: 100%; transition: all 0.5s ease 0s; margin: 10px auto; display: block; height: auto !important;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"text-align: center; margin: 10px 0px 12px; padding: 0px;\"><span style=\"font-weight: 700;\"><em style=\"font-weight: inherit;\"><font color=\"#ff0000\" size=\"3\">Các chi tiết nhỏ trên đồng hồ thường bị làm giả nhưng ít ai để ý đến =&gt; Hãy quan sát kĩ</font></em></span></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"text-align: left; margin: 10px 0px 12px; padding: 0px;\"><span style=\"font-weight: 700;\"><font color=\"#ff0000\" size=\"3\">Để phân biệt rõ hơn, mời bạn theo dõi video sau:</font></span></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><div class=\"youtube-embed-wrapper\" style=\"text-align: left; margin: 10px 0px 12px; padding: 30px 0px 449.438px; height: 0px; overflow: hidden; position: relative;\"><font color=\"#ff0000\" size=\"3\"><iframe allow=\";\" allowfullscreen=\"\" frameborder=\"0\" height=\"360\" src=\"https://www.youtube.com/embed/CxGYjQI9VjI\" width=\"640\" style=\"max-width: 100%; width: 799px; border-width: initial; border-style: none; height: 450px; max-height: 450px;\"></iframe></font></div><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p></div><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><h2 id=\"2&nbsp;cach-phan-biet-qua-day-dong-ho-chinh-hang\" style=\"text-align: left; margin: 10px 0px 12px; padding: 0px; line-height: 1.1;\"><span style=\"font-weight: 700;\"><font color=\"#ff0000\" size=\"3\">2.&nbsp;Cách phân biệt qua dây đồng hồ chính hãng</font></span></h2><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p></div><p style=\"margin: 10px 0px 12px; padding: 0px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif;\"></p><p style=\"text-align: left; margin: 10px 0px 12px; padding: 0px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif;\"><font color=\"#ff0000\" size=\"3\"><span style=\"font-weight: 700;\">Với đồng hồ dây kim loại:</span>&nbsp;Bạn kiểm tra bằng cách giữ chặt dây đồng hồ lắc qua lắc lại, nếu là đồng hồ hàng hiệu chính hãng, dây rất chắc chắn; nếu là hàng giả, dây thường lỏng lẻo, nhanh giãn.</font></p><p style=\"margin: 10px 0px 12px; padding: 0px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; text-align: center;\"><img alt=\"\" height=\"280\" src=\"https://xwatch.vn/upload_images/images/2019/07/04/phan-biet-qua-day-dong-ho.jpg\" width=\"640\" style=\"text-align: left; border: 1px solid rgba(243, 243, 243, 0.8); max-width: 100%; transition: all 0.5s ease 0s; margin: 10px auto; display: block; height: auto !important;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif;\"></p><p style=\"text-align: center; margin: 10px 0px 12px; padding: 0px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif;\"><span style=\"font-weight: 700;\"><em style=\"font-weight: inherit;\"><font color=\"#ff0000\" size=\"3\">Dây kim loại đồng hồ fake lỏng lẻo, không mịn, màu mạ không đều và nhẹ</font></em></span></p><p style=\"margin: 10px 0px 12px; padding: 0px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif;\"></p><p style=\"text-align: left; margin: 10px 0px 12px; padding: 0px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif;\"><font color=\"#ff0000\" size=\"3\">Với những thiết kế dây kim loại, khi gập hai mắt liền nhau, đồng hồ chính hãng có độ mở tất cả mắt xích tương đồng, hàng nhái thường không. Mặt trong và khe giữa các mắt dây đồng hồ thật vẫn đảm bảo độ láng mịn, còn ở hàng giả thường bị nhám và được làm cẩu thả.</font></p><p style=\"margin: 10px 0px 12px; padding: 0px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif;\"></p><div style=\"margin: 10px 0px 12px; padding: 0px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; text-align: justify;\"><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"text-align: left; margin: 10px 0px 12px; padding: 0px;\"><font color=\"#ff0000\" size=\"3\">Khi cắt dây đồng hồ, chốt dây phải dễ dàng tháo được nhưng chắc chắn (không cần đập nhiều nhát mới ra), sau đó lắp lại vẫn như mới. Tuy nhiên, điều này khá khó vì phụ thuộc vào cảm giác của mỗi người.</font></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"text-align: left; margin: 10px 0px 12px; padding: 0px;\"><font color=\"#ff0000\" size=\"3\"><span style=\"font-weight: 700;\">Với đồng hồ dây da nam chính hãng:</span>&nbsp;mặt sau dây thường được in mã đồng hồ, mã số đường dây, các đường nét thanh mảnh, gọn gàng. Trong khi đó đồng hồ fake có dây với đường chỉ khâu lộn xộn, thường không có mã sản phẩm, mã dây.</font></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px; text-align: center;\"><img alt=\"phân biệt đồng hồ chính hãng\" data-height=\"415\" data-width=\"892\" height=\"372\" src=\"https://www.xwatch.vn/wp-content/uploads/2017/09/phan-biet-dong-ho-that-gia-2.jpg\" width=\"800\" style=\"text-align: left; border: 1px solid rgba(243, 243, 243, 0.8); max-width: 100%; transition: all 0.5s ease 0s; margin: 10px auto; display: block; height: auto !important;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px; text-align: center;\"><img alt=\"\" data-height=\"282\" data-width=\"900\" height=\"251\" src=\"https://www.xwatch.vn/wp-content/uploads/2019/01/dong-ho-nam-hang-hieu-chinh-hang-3.jpg\" width=\"800\" style=\"text-align: left; border: 1px solid rgba(243, 243, 243, 0.8); max-width: 100%; transition: all 0.5s ease 0s; margin: 10px auto; display: block; height: auto !important;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"text-align: center; margin: 10px 0px 12px; padding: 0px;\"><em style=\"font-weight: inherit;\"><span style=\"font-weight: 700;\"><font color=\"#ff0000\" size=\"3\">Phân biệt dây da đồng hồ qua dấu hiệu khắc dập và mã đồng hồ</font></span></em></p></div>', 'phan-biet-dong-ho-that-gia-1_1589424517.jpg', 1),
(4, 3, 'CHRONOGRAPH VÀ CHRONOMETER – SỰ KHÁC BIỆT LÀ GÌ?', 'Khi bước vào thế giới đồng hồ, chắc hẳn bạn sẽ nghe đến 2 từ: Chronograph và Chronometer', '<h1 class=\"title\" style=\"margin-right: 0px; margin-bottom: 28px; margin-left: 0px; padding: 0px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; font-weight: bold; line-height: 44px; font-size: 28px; text-align: center; text-transform: uppercase;\"><span style=\"background-color: rgb(255, 255, 255);\"><font color=\"#ff0000\">CHRONOGRAPH VÀ CHRONOMETER – SỰ KHÁC BIỆT LÀ GÌ?</font></span></h1><div class=\"time_rate cls\" style=\"margin: 0px 0px 20px; padding: 0px 0px 8px 112px; border-bottom: 1px solid rgb(235, 235, 235); position: relative; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; font-size: 14px;\"><span class=\"rate\" style=\"position: absolute; left: 0px; top: -1px;\"><font color=\"#ff0000\"><i class=\"icon_v1 star_on\" style=\"background: url(&quot;data:image/svg+xml;utf8,<svg aria-hidden=\\&quot;true\\&quot; data-prefix=\\&quot;fas\\&quot; data-icon=\\&quot;star\\&quot; role=\\&quot;img\\&quot; xmlns=\\&quot;http://www.w3.org/2000/svg\\&quot; viewBox=\\&quot;0 0 576 512\\&quot; class=\\&quot;svg-inline--fa fa-star fa-w-18\\&quot;><path fill=\\&quot;orange\\&quot; d=\\&quot;M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z\\&quot; class=\\&quot;\\&quot;></path></svg>&quot;) no-repeat; width: 17px; height: 17px; display: inline-flex; transition: all 0.3s ease 0s;\"><svg aria-hidden=\"true\" data-prefix=\"fas\" data-icon=\"star\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 576 512\" class=\"svg-inline--fa fa-star fa-w-18\"><path fill=\"#FF9727\" d=\"M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z\" class=\"\"></path></svg></i>&nbsp;<i class=\"icon_v1 star_on\" style=\"background: url(&quot;data:image/svg+xml;utf8,<svg aria-hidden=\\&quot;true\\&quot; data-prefix=\\&quot;fas\\&quot; data-icon=\\&quot;star\\&quot; role=\\&quot;img\\&quot; xmlns=\\&quot;http://www.w3.org/2000/svg\\&quot; viewBox=\\&quot;0 0 576 512\\&quot; class=\\&quot;svg-inline--fa fa-star fa-w-18\\&quot;><path fill=\\&quot;orange\\&quot; d=\\&quot;M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z\\&quot; class=\\&quot;\\&quot;></path></svg>&quot;) no-repeat; width: 17px; height: 17px; display: inline-flex; transition: all 0.3s ease 0s;\"><svg aria-hidden=\"true\" data-prefix=\"fas\" data-icon=\"star\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 576 512\" class=\"svg-inline--fa fa-star fa-w-18\"><path fill=\"#FF9727\" d=\"M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z\" class=\"\"></path></svg></i>&nbsp;<i class=\"icon_v1 star_on\" style=\"background: url(&quot;data:image/svg+xml;utf8,<svg aria-hidden=\\&quot;true\\&quot; data-prefix=\\&quot;fas\\&quot; data-icon=\\&quot;star\\&quot; role=\\&quot;img\\&quot; xmlns=\\&quot;http://www.w3.org/2000/svg\\&quot; viewBox=\\&quot;0 0 576 512\\&quot; class=\\&quot;svg-inline--fa fa-star fa-w-18\\&quot;><path fill=\\&quot;orange\\&quot; d=\\&quot;M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z\\&quot; class=\\&quot;\\&quot;></path></svg>&quot;) no-repeat; width: 17px; height: 17px; display: inline-flex; transition: all 0.3s ease 0s;\"><svg aria-hidden=\"true\" data-prefix=\"fas\" data-icon=\"star\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 576 512\" class=\"svg-inline--fa fa-star fa-w-18\"><path fill=\"#FF9727\" d=\"M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z\" class=\"\"></path></svg></i>&nbsp;<i class=\"icon_v1 star_on\" style=\"background: url(&quot;data:image/svg+xml;utf8,<svg aria-hidden=\\&quot;true\\&quot; data-prefix=\\&quot;fas\\&quot; data-icon=\\&quot;star\\&quot; role=\\&quot;img\\&quot; xmlns=\\&quot;http://www.w3.org/2000/svg\\&quot; viewBox=\\&quot;0 0 576 512\\&quot; class=\\&quot;svg-inline--fa fa-star fa-w-18\\&quot;><path fill=\\&quot;orange\\&quot; d=\\&quot;M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z\\&quot; class=\\&quot;\\&quot;></path></svg>&quot;) no-repeat; width: 17px; height: 17px; display: inline-flex; transition: all 0.3s ease 0s;\"><svg aria-hidden=\"true\" data-prefix=\"fas\" data-icon=\"star\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 576 512\" class=\"svg-inline--fa fa-star fa-w-18\"><path fill=\"#FF9727\" d=\"M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z\" class=\"\"></path></svg></i>&nbsp;<i class=\"icon_v1 star_on\" style=\"background: url(&quot;data:image/svg+xml;utf8,<svg aria-hidden=\\&quot;true\\&quot; data-prefix=\\&quot;fas\\&quot; data-icon=\\&quot;star\\&quot; role=\\&quot;img\\&quot; xmlns=\\&quot;http://www.w3.org/2000/svg\\&quot; viewBox=\\&quot;0 0 576 512\\&quot; class=\\&quot;svg-inline--fa fa-star fa-w-18\\&quot;><path fill=\\&quot;orange\\&quot; d=\\&quot;M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z\\&quot; class=\\&quot;\\&quot;></path></svg>&quot;) no-repeat; width: 17px; height: 17px; display: inline-flex; transition: all 0.3s ease 0s;\"><svg aria-hidden=\"true\" data-prefix=\"fas\" data-icon=\"star\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 576 512\" class=\"svg-inline--fa fa-star fa-w-18\"><path fill=\"#FF9727\" d=\"M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z\" class=\"\"></path></svg></i></font></span><font color=\"#ff0000\"><br></font><div class=\"share-news\" style=\"margin: 0px; padding: 0px; width: 343.5px; float: right; text-align: right;\"></div></div><div class=\"avatar-detail\" style=\"margin: 0px 0px 40px; padding: 0px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; font-size: 14px;\"><font color=\"#ff0000\"><img src=\"https://xwatch.vn/images/news/2019/01/01/original/image-3-compressed.jpg\" alt=\"Chronograph và Chronometer – sự khác biệt là gì?\" style=\"border: 0px; max-width: 100%; transition: all 0.5s ease 0s; width: 799px;\"></font></div><div class=\"summary\" style=\"margin: 0px 0px 40px; padding: 0px; font-weight: 600; line-height: 24px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif;\"><font color=\"#ff0000\">Khi bước vào thế giới đồng hồ, chắc hẳn bạn sẽ nghe đến 2 từ: Chronograph và Chronometer. Chúng có gì khác biệt</font></div><div class=\"summary\" style=\"text-align: left; margin: 0px 0px 40px; padding: 0px; line-height: 24px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif;\"><span style=\"font-size: 1rem; color: rgb(255, 0, 0); text-align: justify;\">Kh</span><span style=\"font-weight: 400; font-size: 1rem; color: rgb(255, 0, 0); text-align: justify;\">i bước vào thế giới&nbsp;</span><a href=\"https://www.xwatch.vn/\" style=\"font-size: 1rem; font-weight: 400; text-align: justify; background-color: rgb(255, 255, 255); display: contents;\">đồng hồ</a><span style=\"font-weight: 400; font-size: 1rem; color: rgb(255, 0, 0); text-align: justify;\">, chắc hẳn bạn sẽ nghe đến 2 từ: Chronograph và Chronometer. Chúng có vẻ giống nhau ở tiền tố “Chrono” nên có rất nhiều người hiểu nhầm hoặc sử dụng lẫn lộn. Nếu bạn cũng chưa chắc chắn về điều này thì bài viết sau đây dành cho bạn.</span></div><div class=\"description\" style=\"margin: 0px; padding: 0px; line-height: 28px; font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif;\"><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px; text-align: justify;\"><em style=\"font-weight: inherit;\"><span style=\"font-weight: 700;\"><font color=\"#ff0000\">&gt;&gt;&gt; Bài viết giải thích rõ về&nbsp;<a href=\"https://www.xwatch.vn/blog/chronograph-la-gi-ban-da-thuc-su-hieu.html\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" style=\"display: contents;\">chức năng chronograph là gì</a>, tham khảo tại đây!</font></span></em></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><h2 id=\"1-ban-chat-cua-chronograph-va-chronometer\" style=\"margin: 10px 0px 12px; padding: 0px; line-height: 1.1; text-align: justify;\"><span style=\"font-weight: 700;\"><font color=\"#ff0000\">1. Bản chất của Chronograph và Chronometer</font></span></h2><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px; text-align: justify;\"><font color=\"#ff0000\"><span style=\"font-weight: 700;\"><i>Chronograph</i></span>&nbsp;là chức năng bấm giờ của đồng hồ. Đồng hồ Chronograph là đồng hồ có chức năng bấm giờ, dùng đo lường chính xác một khoảng thời gian.</font></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px; text-align: justify;\"><font color=\"#ff0000\"><span style=\"font-weight: 700;\"><i>Chronometer</i></span>&nbsp;là một chứng nhận cao quý về độ chính xác của đồng hồ được kiểm duyệt và cấp bởi COSC (Contrôle Officiel Suisse des Chronomètres) - một tổ chức uy tín hoạt động độc lập, chịu trách nhiệm chứng nhận độ chính xác của đồng hồ ở Thụy Sĩ.</font></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px; text-align: justify;\"><font color=\"#ff0000\">Vậy về bản chất, Chronograph và Chronometer hoàn toàn khác biệt. Giờ thì chúng ta hãy tìm hiểu kỹ hơn về từng loại.</font></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><h2 id=\"2-chronograph-va-dong-ho-chronoraph\" style=\"margin: 10px 0px 12px; padding: 0px; line-height: 1.1; text-align: justify;\"><span style=\"font-weight: 700;\"><font color=\"#ff0000\">2. Chronograph và đồng hồ Chronoraph</font></span></h2><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px; text-align: justify;\"><font color=\"#ff0000\">Đồng hồ Chronogaph ra đời từ năm 1816. Đặc điểm nhận diện một chiếc Chronograph là chúng có thêm mặt số phụ hoặc mặt số điện tử (LCD) hiển thị thời gian bấm giờ. Mẫu Chronograph phổ biến nhất hiện nay có 3 mặt số phụ và 3 nút điều chỉnh.</font></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"><font color=\"#ff0000\">&nbsp;</font></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"><img class=\"aligncenter wp-image-947750 size-full\" src=\"https://www.xwatch.vn/wp-content/uploads/2017/07/image-0-compressed.jpg\" alt=\"\" width=\"605\" height=\"349\" data-width=\"605\" data-height=\"349\" style=\"border: 1px solid rgba(243, 243, 243, 0.8); max-width: 100%; transition: all 0.5s ease 0s; height: auto !important; margin: 10px auto; display: block;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"><span style=\"font-weight: 700;\"><em style=\"font-weight: inherit;\"><font color=\"#ff0000\">&gt;&gt;&gt;&nbsp;<a href=\"https://www.xwatch.vn/blog/cach-su-dung-dong-ho-6-kim-chronograph-p2957.html\" target=\"_blank\" rel=\"nofollow noopener noreferrer\" style=\"display: contents;\">Hướng dẫn sử dụng đồng hồ nam 6 kim Chromometer</a></font></em></span></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px; text-align: justify;\"><font color=\"#ff0000\">Tùy từng thiết kế và độ chính xác của phép đo mà các phiên bản Chronograph có cấu tạo và thông số khác nhau.</font></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><h2 id=\"3-chronometer-va-dong-ho-chronometer\" style=\"margin: 10px 0px 12px; padding: 0px; line-height: 1.1; text-align: justify;\"><span style=\"font-weight: 700;\"><font color=\"#ff0000\">3. Chronometer và đồng hồ Chronometer</font></span></h2><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px; text-align: justify;\"><font color=\"#ff0000\">Để đạt được chứng nhận COSC, một chiếc đồng hồ phải trải qua hàng loạt cuộc thử nghiệm khắc nghiệt được tiến hành trong 15 ngày đêm liên tục ở 5 vị trí và 3 mức nhiệt độ khác nhau. Đồng hồ đạt tiêu chuẩn ISO 1359, chỉ được phép sai số trong khoảng -4 đến +6 giây/ngày sẽ được cấp giấy chứng nhận (Chronometer Certificate) và một mã số xác minh duy nhất.</font></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px; text-align: justify;\"><font color=\"#ff0000\">Khi xuất xưởng, chúng được in dòng chữ “Chronometer” trên mặt số, nắp lưng hoặc trong máy đồng hồ.</font></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"><font color=\"#ff0000\">&nbsp;</font></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"><img class=\"aligncenter wp-image-947751 size-full\" src=\"https://www.xwatch.vn/wp-content/uploads/2017/07/image-1-compressed.jpg\" alt=\"\" width=\"605\" height=\"402\" data-width=\"605\" data-height=\"402\" style=\"border: 1px solid rgba(243, 243, 243, 0.8); max-width: 100%; transition: all 0.5s ease 0s; height: auto !important; margin: 10px auto; display: block;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px; text-align: center;\"><span style=\"font-weight: 700;\"><i><font color=\"#ff0000\">Dòng chữ Chronometer nằm kiêu hãnh trên mặt số của Rolex</font></i></span></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px; text-align: justify;\"><font color=\"#ff0000\">Tuy không có tiêu chuẩn cụ thể nào cho đồng hồ Quartz, nhưng COSC cũng tiến hành một quy trình thử nghiệm tương tự như đồng hồ cơ.</font></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px; text-align: justify;\"><font color=\"#ff0000\">Mỗi chiếc Quartz sẽ được thử nghiệm trong 11 ngày liên tục ở 1 vị trí và 3 mức nhiệt khác nhau. Ngoài ra, trong suốt 1 ngày, nó phải quay cả 3 chiều trong không gian để giả định như sử dụng ở thực tế bên ngoài. Cuối cùng, nó phải chịu 200 cú sốc tương đương với 100G (mạnh hơn 100 lần so với lực hấp dẫn).</font></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px; text-align: justify;\"><font color=\"#ff0000\">Một chiếc đồng hồ điện tử Chronometer có độ chính xác gấp 10 lần so với đồng hồ quartz thông thường. Hiện nay, chỉ có 3% đồng hồ Thụy Sĩ sản xuất ra có chứng nhận Chronometer, đủ để biết điều kiện đạt chuẩn Chronometer khó đến mức nào.</font></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"><img class=\"aligncenter wp-image-947752 size-full\" src=\"https://www.xwatch.vn/wp-content/uploads/2017/07/image-2-compressed.jpg\" alt=\"\" width=\"600\" height=\"293\" data-width=\"600\" data-height=\"293\" style=\"border: 1px solid rgba(243, 243, 243, 0.8); max-width: 100%; transition: all 0.5s ease 0s; height: auto !important; margin: 10px auto; display: block;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"><font color=\"#ff0000\">&nbsp;</font></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px; text-align: justify;\"><font color=\"#ff0000\">Một chiếc đồng hồ Chronometer hoàn toàn có thể có chức năng Chronograph và ngược lại. Nhưng một chiếc Chronometer không đồng nghĩa với việc nó được tích hợp chức năng Chronograph. Hay chẳng đồng hồ Chronograph nào nhất thiết phải có chứng nhận Chronometer.</font></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px;\"></p><p style=\"margin: 10px 0px 12px; padding: 0px; text-align: justify;\"><font color=\"#ff0000\">Như vậy, chúng ta đã phân biệt và hiểu rõ hơn về Chronograph và Chronometer. Bạn đã tự tin hơn khi nhắc đến chúng trong các cuộc thảo luận liên quan đến đồng hồ rồi chứ?</font></p></div>', 'image-3-compressed.jpg', 1),
(5, 3, 'jlsdg', 'alksdglhaslda', 'kjadgaskdja,sbd', '5e80bbdf757b3-637199006475603970_H1.jpg', 1);
INSERT INTO `blog` (`id`, `cate_id`, `name_blog`, `meta`, `content`, `images`, `user`) VALUES
(6, 2, 'ỵtfdhdfngđeádfghbjnk', 'Những món ăn đường phố đặc trưng này được xem là đặc sản đối với người dân nước họ. Tuy nhiên, không phải du khách quốc tế nào cũng thấy hợp khẩu vị đâu nha!...', '<p style=\"margin-right: 0px; margin-bottom: 9.1875px; margin-left: 0px; padding: 0px; outline: 0px; max-width: 100%; font-family: &quot;Times New Roman&quot;; color: rgb(0, 0, 0); line-height: 20px !important;\"><strong style=\"margin: 0px; padding: 0px; outline: 0px; max-width: 100%;\">8 mùa hè không có&nbsp;</strong><strong style=\"margin: 0px; padding: 0px; outline: 0px; max-width: 100%; font-size: 14px;\">một ngày nghỉ</strong></p><p style=\"margin-right: 0px; margin-bottom: 9.1875px; margin-left: 0px; padding: 0px; outline: 0px; max-width: 100%; font-family: &quot;Times New Roman&quot;; color: rgb(0, 0, 0); line-height: 20px !important;\">Thầy giáo Nguyễn Viết Tước là giáo viên dạy môn Thể dục tại Trường Tiểu học và THCS Hải Vịnh (huyện Hải Lăng, tỉnh Quảng Trị). Từ những ngày đầu về dạy học ở địa phương, thầy Tước phát hiện nhiều học sinh không biết bơi, trong khi đây là vùng trũng, có kênh mương dày đặc và thường xảy ra lũ.</p><p style=\"margin-right: 0px; margin-bottom: 9.1875px; margin-left: 0px; padding: 0px; outline: 0px; max-width: 100%; font-family: &quot;Times New Roman&quot;; color: rgb(0, 0, 0); line-height: 20px !important;\">Trước thực tế này, năm 2012, thầy Tước viết đơn lên chính quyền xã Hải Hưng xin được mở lớp dạy bơi miễn phí cho học sinh các cấp. Các em muốn tham gia lớp học bơi của thầy Tước đều phải làm đơn đăng ký và gia đình cam đoan phối hợp cùng thầy đảm bảo an toàn nhất cho các con.</p><p style=\"margin-right: 0px; margin-bottom: 9.1875px; margin-left: 0px; padding: 0px; outline: 0px; max-width: 100%; font-family: &quot;Times New Roman&quot;; color: rgb(0, 0, 0); line-height: 20px !important;\">Ý tưởng của thầy Tước nhận được sự ủng hộ nhiệt tình của chính quyền xã cũng như nhiều phụ huynh, học sinh. Thầy Tước tự bỏ tiền túi mua một số dụng cụ học bơi cơ bản, rồi dọn dẹp bến bãi, ngăn dòng thành điểm dạy bơi an toàn. Thầy Tước cùng đoàn viên thanh niên đi chặt từng cây tre luồng về ngăn dòng thành từng ô để dạy bơi. Mỗi ô có chiều dài 10m, dành cho từng nhóm học.</p><p style=\"margin-right: 0px; margin-bottom: 9.1875px; margin-left: 0px; padding: 0px; outline: 0px; max-width: 100%; font-family: &quot;Times New Roman&quot;; color: rgb(0, 0, 0); line-height: 20px !important;\">Ngay từ năm đầu tiên đã có tới 96 em theo lớp học bơi miễn phí của thầy Tước. “Tiếng lành đồn xa”, số em tham gia lớp học tăng lên theo từng năm, trung bình mỗi năm có từ 140 - 160 học sinh. Lớp học đông, thầy Tước phải chia lớp ra thành 2 ca, dạy mỗi ngày và xuyên suốt tất cả các ngày trong tuần.</p><figure class=\"image align-center img-wrapper\" contenteditable=\"false\" style=\"margin-right: auto; margin-bottom: 9.1875px; margin-left: auto; padding: 0px; outline: 0px; max-width: 100%; position: relative; text-align: center; background-color: rgb(227, 227, 227); color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;;\"><img title=\"Thầy giáo ngăn dòng dạy bơi miễn phí cho học sinh - 1\" src=\"https://icdn.dantri.com.vn/thumb_w/640/2020/06/13/day-boi-1592010886307.jpg\" alt=\"Thầy giáo ngăn dòng dạy bơi miễn phí cho học sinh - 1\" data-width=\"665\" data-height=\"449\" data-original=\"https://icdn.dantri.com.vn/2020/06/13/day-boi-1592010886307.jpg\" data-photo-id=\"968406\" class=\"pswp-img\" style=\"margin: 0px auto; padding: 0px; outline: 0px; display: inline; max-width: 100%; border-width: initial; border-color: initial; border-image: initial; vertical-align: bottom; height: auto;\"><div class=\"image-instruction-background\" style=\"margin: 0px; padding: 0px; outline: 0px; max-width: 100%; width: 460px; height: 21px; background-color: rgb(0, 0, 0); left: 0px; opacity: 0; position: absolute; color: rgb(255, 255, 255); top: 0px; transition: opacity 0.13s ease-in-out 0s;\"></div><p class=\"img-instruction\" style=\"margin-right: 0px; margin-bottom: 9.1875px; margin-left: 0px; padding: 0px; outline: 0px; max-width: 100%; opacity: 0; position: absolute; color: rgb(255, 255, 255); top: 0px; transition: opacity 0.13s ease-in-out 0s; left: 7px; font-family: Arial; font-size: 13px; line-height: 20px !important;\">Nhấn để phóng to ảnh</p><figcaption style=\"margin: 0px; padding: 5px; outline: 0px; max-width: 100%; font-size: 13px; font-family: tahoma; background-color: rgb(238, 238, 238);\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; outline: 0px; max-width: 100%; line-height: 20px !important;\">Thầy giáo Nguyễn Viết Tước dạy bơi miễn phí cho học sinh.</p></figcaption></figure><p style=\"margin-right: 0px; margin-bottom: 9.1875px; margin-left: 0px; padding: 0px; outline: 0px; max-width: 100%; font-family: &quot;Times New Roman&quot;; color: rgb(0, 0, 0); line-height: 20px !important;\">Suốt mùa hè thầy Tước không có một ngày nghỉ. Một ngày phải ngâm mình dưới nước nhiều tiếng đồng hồ dạy bơi cho các em, với thầy Tước đó là niềm vui, niềm hạnh phúc. “Tôi chưa khi nào thấy mệt khi dạy bơi cho các em, mà chỉ luôn thường trực nỗi lo. Dạy bơi thì sự an toàn luôn phải đặt lên hàng đầu. Vì thế, mỗi buổi dạy bơi, tôi luôn tính toán đảm bảo an toàn tuyệt đối cho các em”, thầy Tước chia sẻ.</p><p style=\"margin-right: 0px; margin-bottom: 9.1875px; margin-left: 0px; padding: 0px; outline: 0px; max-width: 100%; font-family: &quot;Times New Roman&quot;; color: rgb(0, 0, 0); line-height: 20px !important;\">Đền đáp tấm lòng của thầy, tất cả học sinh tham gia lớp học bơi không chỉ biết bơi mà còn học thành thạo các kỹ năng cứu hộ, cứu nạn. Đặc biệt, nhiều học sinh học bơi từ lớp của thầy Tước đã đoạt Huy chương Vàng, Bạc, Đồng các cấp khi tham gia thi bơi tại Hội khỏe Phù Đổng; Thể thao học đường...</p><p style=\"margin-right: 0px; margin-bottom: 9.1875px; margin-left: 0px; padding: 0px; outline: 0px; max-width: 100%; font-family: &quot;Times New Roman&quot;; color: rgb(0, 0, 0); line-height: 20px !important;\"><strong style=\"margin: 0px; padding: 0px; outline: 0px; max-width: 100%;\">Nhiều năm không có&nbsp;</strong><strong style=\"margin: 0px; padding: 0px; outline: 0px; max-width: 100%; font-size: 14px;\">học sinh đuối nước</strong></p><p style=\"margin-right: 0px; margin-bottom: 9.1875px; margin-left: 0px; padding: 0px; outline: 0px; max-width: 100%; font-family: &quot;Times New Roman&quot;; color: rgb(0, 0, 0); line-height: 20px !important;\">Mô hình dạy bơi của thầy Tước nhanh chóng tạo sự lan tỏa. Từ 2015 đến nay, Đoàn xã Hải Hưng phối hợp, hỗ trợ cùng thầy Tước dạy bơi cho các em học sinh. Để giảm bớt vất vả cho thầy Tước, đoàn viên thanh niên xã Hải Hưng còn dựng mái che cho các em có chỗ khởi động, đỡ nắng nóng và giám sát, đảm bảo an toàn.</p><p style=\"margin-right: 0px; margin-bottom: 9.1875px; margin-left: 0px; padding: 0px; outline: 0px; max-width: 100%; font-family: &quot;Times New Roman&quot;; color: rgb(0, 0, 0); line-height: 20px !important;\">Anh Nguyễn Minh Dũng, Bí thư Đoàn xã Hải Hưng cho biết, Đoàn xã kêu gọi các mạnh thường quân hỗ trợ lớp học bơi kinh phí để mua các thiết bị học bơi cần thiết từng năm. Hiện tại, Đoàn xã đang kêu gọi các mạnh thường quân hỗ trợ nước uống và sữa phục vụ các em học bơi. Anh Dũng cho biết thêm, vào mỗi dịp đầu hè, Đoàn xã Hải Hưng đến từng trường tuyên truyền về phòng chống đuối nước và kêu gọi, khuyến khích tất cả các em học sinh tham gia học bơi miễn phí. Nhờ đó, suốt 10 năm nay, xã Hải Hưng chưa từng xảy ra vụ đuối nước nào.</p><p style=\"margin-right: 0px; margin-bottom: 9.1875px; margin-left: 0px; padding: 0px; outline: 0px; max-width: 100%; font-family: &quot;Times New Roman&quot;; color: rgb(0, 0, 0); line-height: 20px !important;\">Anh Trần Hữu Bắc, Bí thư Huyện Đoàn Hải Lăng (Quảng Trị) cho biết, Hải Lăng là huyện vùng trũng, có hệ thống sông ngòi, đê đập, khe suối dày đặc. Vào mùa lũ lụt, nhiều vùng tại huyện Hải Lăng ngập sâu trong nước, phương tiện đi lại chủ yếu bằng ghe, thuyền. Đó là những yếu tố tiềm ẩn những tai nạn đuối nước đối với trẻ em.</p><p style=\"margin-right: 0px; margin-bottom: 9.1875px; margin-left: 0px; padding: 0px; outline: 0px; max-width: 100%; font-family: &quot;Times New Roman&quot;; color: rgb(0, 0, 0); line-height: 20px !important;\">Từ mô hình rất ý nghĩa của thầy Tước và Đoàn xã Hải Hưng, Huyện Đoàn Hải Lăng quyết định nhân rộng mô hình này trong toàn huyện. Hiện tại, 100% xã đoàn, thị trấn trong toàn huyện Hải Lăng đều có mô hình dạy bơi miễn phí cho học sinh, trong đó, nhiều địa phương đã ngăn sông làm điểm dạy bơi.</p><p style=\"margin-right: 0px; margin-bottom: 9.1875px; margin-left: 0px; padding: 0px; outline: 0px; max-width: 100%; font-family: &quot;Times New Roman&quot;; color: rgb(0, 0, 0); line-height: 20px !important;\">“Với mô hình này, vừa có chi phí thấp, vừa tranh thủ được lực lượng tình nguyện là sinh viên đang học tập chuyên ngành dạy bơi, các giáo viên thể dục tại các trường trên địa bàn”, anh Bắc nói.</p><p style=\"margin-right: 0px; margin-bottom: 9.1875px; margin-left: 0px; padding: 0px; outline: 0px; max-width: 100%; font-family: &quot;Times New Roman&quot;; color: rgb(0, 0, 0); text-align: right; line-height: 20px !important;\">Theo&nbsp;<strong style=\"margin: 0px; padding: 0px; outline: 0px; max-width: 100%;\">Lưu Trinh</strong></p><p style=\"margin-right: 0px; margin-bottom: 9.1875px; margin-left: 0px; padding: 0px; outline: 0px; max-width: 100%; font-family: &quot;Times New Roman&quot;; color: rgb(0, 0, 0); text-align: right; line-height: 20px !important;\"><em style=\"margin: 0px; padding: 0px; outline: 0px; max-width: 100%;\">Tiền Phong</em></p><div auto-banner=\"true\" dt-slot=\"banner-2-25\" class=\"ng-scope\" style=\"margin: 0px; padding: 0px; outline: 0px; max-width: 100%; color: rgb(0, 0, 0); font-family: &quot;Times New Roman&quot;;\"><div id=\"div-gpt-ad-1586172279530-0\" data-google-query-id=\"CNb26-ib_-kCFROewgodW88Dpw\" style=\"margin: 0px; padding: 0px; outline: 0px; max-width: 100%;\"><div id=\"google_ads_iframe_/21900817747/Dantri-Article-Bottom_0__container__\" style=\"margin: 0px; padding: 0px; outline: 0px; max-width: 100%; border: 0pt none;\"><iframe id=\"google_ads_iframe_/21900817747/Dantri-Article-Bottom_0\" title=\"3rd party ad content\" name=\"google_ads_iframe_/21900817747/Dantri-Article-Bottom_0\" width=\"460\" height=\"72\" scrolling=\"no\" marginwidth=\"0\" marginheight=\"0\" frameborder=\"0\" data-google-container-id=\"1\" data-load-complete=\"true\" style=\"margin: 0px auto; padding: 0px; outline: 0px; max-width: 100%; border-width: 0px; border-style: initial; vertical-align: bottom;\"></iframe></div></div></div>', 'hd.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category_blog`
--

CREATE TABLE `category_blog` (
  `id` int(11) NOT NULL,
  `cate_name` varchar(200) NOT NULL,
  `logo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category_blog`
--

INSERT INTO `category_blog` (`id`, `cate_name`, `logo`) VALUES
(1, 'Danh Mục Khuyến Mãi', 'giao-dien/images/5e8353f0b9add-km.jpg'),
(2, 'Danh Mục Tin Mới', 'giao-dien/images/5e8494fde875e-new.png'),
(3, 'Danh Mục Kĩ Thuật', 'giao-dien/images/5e835ba1ef787-hd.jpg'),
(4, 'Danh Mục Hướng Dẫn', 'giao-dien/images/5e835c2d6dc18-chon.jpg'),
(5, 'Danh Mục Tuyển Dụng', 'giao-dien/images/5e835c97e2c47-unnamed.png');

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`id`, `name`) VALUES
(1, 'Đồng Hồ Năng Lượng'),
(2, 'Đồng Hồ Cơ');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `content_comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `user`, `product_id`, `content_comment`) VALUES
(7, 3, 13, 'rất đẹp');

-- --------------------------------------------------------

--
-- Table structure for table `comment_blog`
--

CREATE TABLE `comment_blog` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `idbl` int(11) NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment_blog`
--

INSERT INTO `comment_blog` (`id`, `content`, `idbl`, `user`) VALUES
(8, 'sfhdgbmn,', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` int(50) NOT NULL,
  `logo` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `stk` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `address`, `phone_number`, `logo`, `email`, `stk`) VALUES
(6, 'Lê Đình Thi', '89 Lê Đức Thọ Mỹ Đình Nam Từ Liêm Hà Nội', 986966813, 'iconlogo.png', 'ledinhthi2909@gmail.com', 1231231213);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `content`) VALUES
(1, 'Lê Thi', 'ledinhthi2909@gmail.com', 'sản phẩm rất tốt');

-- --------------------------------------------------------

--
-- Table structure for table `img_product`
--

CREATE TABLE `img_product` (
  `id` int(11) NOT NULL,
  `images` varchar(255) NOT NULL,
  `idsp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `img_product`
--

INSERT INTO `img_product` (`id`, `images`, `idsp`) VALUES
(20, '1-1-450x450.jpg', 13),
(22, '3-900x900.jpg', 13),
(23, '1-450x450.jpg', 1),
(24, '1-1-600x600.jpg', 1),
(25, 'product1-450x450.jpg', 1),
(26, '7-450x450.jpg', 1),
(27, '18-18-450x450.jpg', 13),
(28, '7-450x450.jpg', 13),
(29, '2-450x450.jpg', 14),
(30, '4-4-450x450.jpg', 14),
(31, '6-6-450x450.jpg', 14),
(32, '18-18-450x450.jpg', 14),
(33, '7-7-450x450.jpg', 15),
(34, '8-8-450x450.jpg', 15),
(35, '8-450x450.jpg', 15),
(36, '14-14-450x450.jpg', 15),
(37, '15-15-450x450.jpg', 16),
(38, '12-12-450x450.jpg', 16),
(39, '12-600x600.jpg', 16),
(40, '16-16-450x450.jpg', 16),
(41, '13-450x450.jpg', 17),
(42, '13-13-450x450.jpg', 17),
(43, '13-13-450x450.jpg', 17),
(44, '18-18-450x450.jpg', 17),
(45, '3-450x450.jpg', 18),
(46, '3-3-450x450.jpg', 18),
(47, '4-4-450x450.jpg', 18),
(48, '4-4-450x450.jpg', 18),
(49, '15-450x450.jpg', 19),
(50, '18-18-450x450.jpg', 19),
(51, '7-7-450x450.jpg', 19),
(52, '10-10-450x450.jpg', 19),
(53, '1-1-600x600.jpg', 20),
(54, '1-450x450.jpg', 20),
(55, '10-450x450.jpg', 20),
(56, '18-18-450x450.jpg', 20),
(57, '2-600x600.jpg', 21),
(58, '6-6-450x450.jpg', 21),
(59, '18-18-450x450.jpg', 21),
(60, '6-6-450x450.jpg', 21);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `product_id`, `price`, `quantity`, `status`, `id_order`, `created_at`, `updated_at`) VALUES
(17, 1, 1753, 1, 3, 1, NULL, '2020-06-08 20:37:26'),
(18, 1, 900000, 2, 1, 2, '2020-06-10 21:02:03', '2020-06-10 21:02:03');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `type_payment` int(11) NOT NULL,
  `note` text,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `name`, `email`, `address`, `phone_number`, `type_payment`, `note`, `user`) VALUES
(1, 'Lê thi', 'ledinhthi2909@gmail.com', 'Hà Nội', 986966813, 1, 'không', 1),
(2, 'Lê Thi', 'thildph07746@fpt.edu.v', 'Hà Nội', 986966813, 1, NULL, 5),
(3, 'Lê Thi', 'thildph07746@fpt.edu.vn', 'Hà Nội', 986966813, 1, 'ádasdasda', 5),
(4, 'Lê Thi', 'thildph07746@fpt.edu.vn', 'Hà Nội', 986966813, 1, 'abc', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_trade` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `images` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `sale_price` int(11) NOT NULL,
  `view_count` int(11) NOT NULL DEFAULT '0',
  `detail` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `metal` text NOT NULL,
  `star` int(11) NOT NULL,
  `color` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_trade`, `cate_id`, `product_name`, `images`, `price`, `sale_price`, `view_count`, `detail`, `quantity`, `metal`, `star`, `color`, `created_at`, `updated_at`) VALUES
(1, 9, 2, 'Đồng Hồ Patek Philippe 541', '1-1-600x600.jpg', 900000, 1000000, 11, 'sản phẩm chính hãng', 123, '<table class=\"table  \" border=\"0\" cellpadding=\"0\" width=\"100%\" dejavu=\"\" sans\",=\"\" \"liberation=\"\" freesans,=\"\" sans-serif;=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);\"=\"\" style=\"width: 785px; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); font-size: 14px;\"><tbody><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"padding: 10px 0px; margin: 0px;\">Nhãn hiệu:</td><td class=\"content_charactestic\" style=\"padding: 10px 0px; margin: 0px;\">Olym Pianus</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"padding: 10px 0px; margin: 0px;\">Nguồn gốc:</td><td class=\"content_charactestic\" style=\"padding: 10px 0px; margin: 0px;\">Nhật Bản</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"padding: 10px 0px; margin: 0px;\">Kiểu máy:</td><td class=\"content_charactestic\" style=\"padding: 10px 0px; margin: 0px;\">Automatic</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"padding: 10px 0px; margin: 0px;\">Kích cỡ:</td><td class=\"content_charactestic\" style=\"padding: 10px 0px; margin: 0px;\">38 mm</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"padding: 10px 0px; margin: 0px;\">Chất liệu vỏ:</td><td class=\"content_charactestic\" style=\"padding: 10px 0px; margin: 0px;\">Thép không gỉ 316L/Mạ PVD</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"padding: 10px 0px; margin: 0px;\">Chất liệu dây:</td><td class=\"content_charactestic\" style=\"padding: 10px 0px; margin: 0px;\">Thép không gỉ 316L / Mạ PVD</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"padding: 10px 0px; margin: 0px;\">Chất liệu kính:</td><td class=\"content_charactestic\" style=\"padding: 10px 0px; margin: 0px;\">Kính Sapphire</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"padding: 10px 0px; margin: 0px;\">Độ chịu nước:</td><td class=\"content_charactestic\" style=\"padding: 10px 0px; margin: 0px;\">30 m</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"padding: 10px 0px; margin: 0px;\">Chức năng khác:</td><td class=\"content_charactestic\" style=\"padding: 10px 0px; margin: 0px;\">Lịch ngày</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"padding: 10px 0px; margin: 0px;\">Bảo hiểm:</td><td class=\"content_charactestic\" style=\"padding: 10px 0px; margin: 0px;\">5 năm cả lỗi người dùng tại Xwatch</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"padding: 10px 0px; margin: 0px;\">Bảo hành quốc tế:</td><td class=\"content_charactestic\" style=\"padding: 10px 0px; margin: 0px;\">1 năm</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"padding: 10px 0px; margin: 0px;\">Giới tính:</td><td class=\"content_charactestic\" style=\"padding: 10px 0px; margin: 0px;\">Nam</td></tr></tbody></table>', 2, '12', '2020-06-18 17:50:18', '2020-06-18 10:50:18'),
(13, 1, 2, 'Đồng hồ Bentley BL1806-20MKKI-MK-V ks', '1-450x450.jpg', 950000, 1200000, 7, 'sản phẩm chính hãng', 1, '<table class=\"table  \" border=\"0\" cellpadding=\"0\" width=\"100%\" dejavu=\"\" sans\",=\"\" \"liberation=\"\" freesans,=\"\" sans-serif;=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);\"=\"\" style=\"width: 785px; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); font-size: 14px;\"><tbody><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"padding: 10px 0px; margin: 0px;\">Nhãn hiệu:</td><td class=\"content_charactestic\" style=\"padding: 10px 0px; margin: 0px;\">Olym Pianus</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"padding: 10px 0px; margin: 0px;\">Nguồn gốc:</td><td class=\"content_charactestic\" style=\"padding: 10px 0px; margin: 0px;\">Nhật Bản</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"padding: 10px 0px; margin: 0px;\">Kiểu máy:</td><td class=\"content_charactestic\" style=\"padding: 10px 0px; margin: 0px;\">Automatic</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"padding: 10px 0px; margin: 0px;\">Kích cỡ:</td><td class=\"content_charactestic\" style=\"padding: 10px 0px; margin: 0px;\">38 mm</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"padding: 10px 0px; margin: 0px;\">Chất liệu vỏ:</td><td class=\"content_charactestic\" style=\"padding: 10px 0px; margin: 0px;\">Thép không gỉ 316L/Mạ PVD</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"padding: 10px 0px; margin: 0px;\">Chất liệu dây:</td><td class=\"content_charactestic\" style=\"padding: 10px 0px; margin: 0px;\">Thép không gỉ 316L / Mạ PVD</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"padding: 10px 0px; margin: 0px;\">Chất liệu kính:</td><td class=\"content_charactestic\" style=\"padding: 10px 0px; margin: 0px;\">Kính Sapphire</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"padding: 10px 0px; margin: 0px;\">Độ chịu nước:</td><td class=\"content_charactestic\" style=\"padding: 10px 0px; margin: 0px;\">30 m</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"padding: 10px 0px; margin: 0px;\">Chức năng khác:</td><td class=\"content_charactestic\" style=\"padding: 10px 0px; margin: 0px;\">Lịch ngày</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"padding: 10px 0px; margin: 0px;\">Bảo hiểm:</td><td class=\"content_charactestic\" style=\"padding: 10px 0px; margin: 0px;\">5 năm cả lỗi người dùng tại Xwatch</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"padding: 10px 0px; margin: 0px;\">Bảo hành quốc tế:</td><td class=\"content_charactestic\" style=\"padding: 10px 0px; margin: 0px;\">1 năm</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"padding: 10px 0px; margin: 0px;\">Giới tính:</td><td class=\"content_charactestic\" style=\"padding: 10px 0px; margin: 0px;\">Nam</td></tr></tbody></table>', 1, 'ádasd', '2020-06-18 17:50:29', '2020-06-18 10:50:29'),
(14, 2, 1, 'OG358.652AGR-GL', '2-600x600.jpg', 32000000, 40000000, 1, '<span style=\"color: rgb(119, 119, 119); font-family: Helvetica, Arial, \" dejavu=\"\" sans\",=\"\" \"liberation=\"\" freesans,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" text-align:=\"\" center;\"=\"\">Ogival Nam - 40mm - Kính Sapphire</span><br>', 100, '<div class=\"title-detail-char\" style=\"margin: 0px; padding: 16px 16px 16px 58px; background: var(--main-color); color: rgb(255, 255, 255); text-transform: uppercase; font-size: 15px; position: relative; font-weight: bold; font-family: Helvetica, Arial, \" dejavu=\"\" sans\",=\"\" \"liberation=\"\" freesans,=\"\" sans-serif;\"=\"\">THÔNG TIN SẢN PHẨM</div><div class=\"table-condensed compare_table\" style=\"margin: 0px; padding: 10px 15px 0px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, \" dejavu=\"\" sans\",=\"\" \"liberation=\"\" freesans,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\"><table class=\"table  \" border=\"0\" cellpadding=\"0\" width=\"100%\" style=\"font-size: inherit;\"><tbody><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Nhãn hiệu:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Ogival</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Nguồn gốc:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Thụy Sỹ</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Kiểu máy:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Automatic</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Kích cỡ:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">40mm</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Độ dày:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">11mm</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Chất liệu vỏ:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Thép không gỉ/Mạ vàng PVD</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Chất liệu dây:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Dây da</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Chất liệu kính:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Kính Sapphire</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Độ chịu nước:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">50m</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Chức năng khác:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Hacking Stop (dừng kim giây khi chỉnh giờ)</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Bảo hiểm:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">5 năm cả lỗi người dùng tại Xwatch</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Bảo hành quốc tế:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">2 năm.</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Giới tính:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Nam</td></tr></tbody></table></div>', 1, 'Xám', '2020-06-18 17:50:40', '2020-06-18 10:50:40'),
(15, 6, 1, 'ĐỒNG HỒ OLYM PIANUS OP56571DMSK-T', '7-450x450.jpg', 4150000, 4500000, 0, '<a title=\"Đồng hồ OP Olym Pianus - Olympia Star\" href=\"https://xwatch.vn/dong-ho-pc754/dong-ho-op-olym-pianus-olympia-star.html\" itemprop=\"item\" style=\"color: rgb(0, 0, 0); display: inline-block; line-height: 23px; font-weight: 700; font-family: Helvetica, Arial, \" dejavu=\"\" sans\",=\"\" \"liberation=\"\" freesans,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);\"=\"\"><span itemprop=\"name\" style=\"position: relative;\">Đồng hồ OP Olym Pianus - Olympia Star</span></a><br>', 100, '<table class=\"table  \" border=\"0\" cellpadding=\"0\" width=\"100%\" style=\"font-size: 14px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, \" dejavu=\"\" sans\",=\"\" \"liberation=\"\" freesans,=\"\" sans-serif;=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);\"=\"\"><tbody><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Nhãn hiệu:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Olym Pianus</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Nguồn gốc:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Nhật Bản</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Kiểu máy:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Automatic</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Kích cỡ:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">38 mm</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Chất liệu vỏ:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Thép không gỉ 316L/Mạ PVD</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Chất liệu dây:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Thép không gỉ 316L / Mạ PVD</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Chất liệu kính:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Kính Sapphire</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Độ chịu nước:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">30 m</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Chức năng khác:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Lịch ngày</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Bảo hiểm:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">5 năm cả lỗi người dùng tại Xwatch</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Bảo hành quốc tế:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">1 năm</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Giới tính:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Nam</td></tr></tbody></table>', 1, 'Đen', '2020-06-18 17:50:54', '2020-06-18 10:50:54'),
(16, 7, 1, 'ĐỒNG HỒ OLYMPIA STAR OPA58012-07DMS-GL-T CHÍNH HÃNG', '12-450x450.jpg', 4120000, 4600000, 0, '<span style=\"color: rgb(51, 51, 51); font-family: Helvetica, Arial, \" dejavu=\"\" sans\",=\"\" \"liberation=\"\" freesans,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">&nbsp;</span><li class=\"breadcrumb__item\" itemprop=\"itemListElement\" itemscope=\"itemscope\" itemtype=\"http://schema.org/ListItem\" style=\"margin: 0px; padding: 0px; list-style: none; display: inline-block; color: rgb(19, 21, 24); position: relative; line-height: 23px; font-weight: bold; font-family: Helvetica, Arial, \" dejavu=\"\" sans\",=\"\" \"liberation=\"\" freesans,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\"><a title=\"Đồng hồ OP Olym Pianus - Olympia Star\" href=\"https://xwatch.vn/dong-ho-pc754/dong-ho-op-olym-pianus-olympia-star.html\" itemprop=\"item\" style=\"color: rgb(0, 0, 0); display: inline-block; line-height: 23px;\"><span itemprop=\"name\" style=\"position: relative;\">Đồng hồ OP Olym Pianus - Olympia Star</span></a></li><br>', 100, '<table class=\"table  \" border=\"0\" cellpadding=\"0\" width=\"100%\" style=\"font-size: 14px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, \" dejavu=\"\" sans\",=\"\" \"liberation=\"\" freesans,=\"\" sans-serif;=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);\"=\"\"><tbody><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Nhãn hiệu:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Olympia Star</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Nguồn gốc:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Thụy Sỹ</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Kiểu máy:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Swiss quartz (chạy pin)</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Kích cỡ:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">36mm</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Chất liệu vỏ:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Thép không gỉ 316L</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Chất liệu dây:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Dây Da</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Chất liệu kính:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Kính Sapphire</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Độ chịu nước:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">30M</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Bảo hiểm:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">5 năm tiêu chuẩn Thụy Sỹ</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Bảo hành quốc tế:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">1 năm</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Giới tính:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Nam</td></tr></tbody></table>', 1, 'Nâu', '2020-06-18 17:51:08', '2020-06-18 10:51:08'),
(17, 8, 1, 'ĐỒNG HỒ OLYM PIANUS OP8973AMK-V CHÍNH HÃNG', '13-600x600.jpg', 5200000, 6100000, 0, '<span style=\"color: rgb(51, 51, 51); font-family: Helvetica, Arial, \" dejavu=\"\" sans\",=\"\" \"liberation=\"\" freesans,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">&nbsp;</span><li class=\"breadcrumb__item\" itemprop=\"itemListElement\" itemscope=\"itemscope\" itemtype=\"http://schema.org/ListItem\" style=\"margin: 0px; padding: 0px; list-style: none; display: inline-block; color: rgb(19, 21, 24); position: relative; line-height: 23px; font-weight: bold; font-family: Helvetica, Arial, \" dejavu=\"\" sans\",=\"\" \"liberation=\"\" freesans,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\"><a title=\"Đồng hồ OP Olym Pianus - Olympia Star\" href=\"https://xwatch.vn/dong-ho-pc754/dong-ho-op-olym-pianus-olympia-star.html\" itemprop=\"item\" style=\"color: rgb(0, 0, 0); display: inline-block; line-height: 23px;\"><span itemprop=\"name\" style=\"position: relative;\">Đồng hồ OP Olym Pianus - Olympia Star</span></a></li><br>', 100, '<table class=\"table  \" border=\"0\" cellpadding=\"0\" width=\"100%\" style=\"font-size: 14px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, \" dejavu=\"\" sans\",=\"\" \"liberation=\"\" freesans,=\"\" sans-serif;=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);\"=\"\"><tbody><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Nhãn hiệu:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Olym Pianus</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Nguồn gốc:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Nhật Bản</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Kiểu máy:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Automatic</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Kích cỡ:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">39 mm</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Chất liệu vỏ:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Thép không gỉ 316L</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Chất liệu dây:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Thép không gỉ 316L</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Chất liệu kính:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Kính Sapphire</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Độ chịu nước:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">50 m</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Bảo hiểm:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">5 năm tiêu chuẩn Thụy Sỹ</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Bảo hành quốc tế:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">2 năm</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Giới tính:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Nam</td></tr></tbody></table>', 1, 'Xanh', '2020-06-18 17:51:22', '2020-06-18 10:51:22'),
(18, 9, 1, 'ĐỒNG HỒ OLYMPIA STAR OPA58012-07DMS-GL-D CHÍNH HÃNG', '3-900x900.jpg', 6000000, 7200000, 0, 'đồng hồ nam chính hãng', 100, '<table class=\"table  \" border=\"0\" cellpadding=\"0\" width=\"100%\" style=\"font-size: 14px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, \" dejavu=\"\" sans\",=\"\" \"liberation=\"\" freesans,=\"\" sans-serif;=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);\"=\"\"><tbody><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Nhãn hiệu:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Olympia Star</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Nguồn gốc:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Thụy Sỹ</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Kiểu máy:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Quartz</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Kích cỡ:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">36mm</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Chất liệu vỏ:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Thép không gỉ 316L</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Chất liệu dây:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Dây Da.</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Chất liệu kính:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Kính Sapphire</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Độ chịu nước:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">30 m</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Chức năng khác:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Lịch Ngày.</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Bảo hiểm:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">5 năm tiêu chuẩn Thụy Sỹ</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Bảo hành quốc tế:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">2 năm</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Giới tính:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Nam</td></tr></tbody></table>', 1, 'Nâu', '2020-06-18 17:51:34', '2020-06-18 10:51:34'),
(19, 10, 1, 'ĐỒNG HỒ OLYM PIANUS OP5657DMK-T', '15-450x450.jpg', 8200000, 8700000, 0, '<span style=\"color: rgb(51, 51, 51); font-family: Helvetica, Arial, \" dejavu=\"\" sans\",=\"\" \"liberation=\"\" freesans,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">&nbsp;</span><li class=\"breadcrumb__item\" itemprop=\"itemListElement\" itemscope=\"itemscope\" itemtype=\"http://schema.org/ListItem\" style=\"margin: 0px; padding: 0px; list-style: none; display: inline-block; color: rgb(19, 21, 24); position: relative; line-height: 23px; font-weight: bold; font-family: Helvetica, Arial, \" dejavu=\"\" sans\",=\"\" \"liberation=\"\" freesans,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\"><a title=\"Đồng hồ OP Olym Pianus - Olympia Star\" href=\"https://xwatch.vn/dong-ho-pc754/dong-ho-op-olym-pianus-olympia-star.html\" itemprop=\"item\" style=\"color: rgb(0, 0, 0); display: inline-block; line-height: 23px;\"><span itemprop=\"name\" style=\"position: relative;\">Đồng hồ OP Olym Pianus - Olympia Star</span></a></li><br>', 100, '<table class=\"table  \" border=\"0\" cellpadding=\"0\" width=\"100%\" style=\"font-size: 14px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, \" dejavu=\"\" sans\",=\"\" \"liberation=\"\" freesans,=\"\" sans-serif;=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);\"=\"\"><tbody><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Nhãn hiệu:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Bentley</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Sản xuất:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Đức</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Kiểu máy:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Quartz</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Kích cỡ:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">40 mm</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Chất liệu vỏ:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Thép không gỉ 316L</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Chất liệu dây:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Thép không gỉ</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Chất liệu kính:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Kính Sapphire</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Độ chịu nước:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">100 m</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Chức năng khác:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Lịch ngày</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Bảo hiểm:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">5 năm cả lỗi người dùng tại Xwatch</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Bảo hành quốc tế:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">2 năm</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Giới tính:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Nam</td></tr></tbody></table>', 1, 'Đen', '2020-06-18 17:51:45', '2020-06-18 10:51:45'),
(20, 15, 1, 'ĐỒNG HỒ BENTLEY BL1806-20MKKI-MK-V', '1-450x450.jpg', 8300000, 8600000, 1, '<span style=\"color: rgb(51, 51, 51); font-family: Helvetica, Arial, \" dejavu=\"\" sans\",=\"\" \"liberation=\"\" freesans,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\">&nbsp;</span><li class=\"breadcrumb__item\" itemprop=\"itemListElement\" itemscope=\"itemscope\" itemtype=\"http://schema.org/ListItem\" style=\"margin: 0px; padding: 0px; list-style: none; display: inline-block; color: rgb(19, 21, 24); position: relative; line-height: 23px; font-weight: bold; font-family: Helvetica, Arial, \" dejavu=\"\" sans\",=\"\" \"liberation=\"\" freesans,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\"><a title=\"Đồng hồ Bentley\" href=\"https://xwatch.vn/dong-ho-pc754/dong-ho-bentley.html\" itemprop=\"item\" style=\"color: rgb(0, 0, 0); display: inline-block; line-height: 23px;\"><span itemprop=\"name\" style=\"position: relative;\">Đồng hồ Bentley</span></a></li><br>', 100, '<div class=\"title-detail-char\" dejavu=\"\" sans\",=\"\" \"liberation=\"\" freesans,=\"\" sans-serif;\"=\"\" style=\"text-align: justify; background: var(--main-color); margin: 0px; padding: 16px 16px 16px 58px; color: rgb(255, 255, 255); text-transform: uppercase; font-size: 15px; position: relative; font-weight: bold;\">THÔNG TIN SẢN PHẨM</div><div class=\"table-condensed compare_table\" dejavu=\"\" sans\",=\"\" \"liberation=\"\" freesans,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;\"=\"\" style=\"margin: 0px; padding: 10px 15px 0px; color: rgb(51, 51, 51);\"><table class=\"table  \" border=\"0\" cellpadding=\"0\" width=\"100%\" style=\"text-align: justify; width: 755px; font-size: inherit;\"><tbody><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"padding: 10px 0px; margin: 0px;\">Nhãn hiệu:</td><td class=\"content_charactestic\" style=\"padding: 10px 0px; margin: 0px;\">Ogival</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"padding: 10px 0px; margin: 0px;\">Nguồn gốc:</td><td class=\"content_charactestic\" style=\"padding: 10px 0px; margin: 0px;\">Thụy Sỹ</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"padding: 10px 0px; margin: 0px;\">Kiểu máy:</td><td class=\"content_charactestic\" style=\"padding: 10px 0px; margin: 0px;\">Automatic</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"padding: 10px 0px; margin: 0px;\">Kích cỡ:</td><td class=\"content_charactestic\" style=\"padding: 10px 0px; margin: 0px;\">40mm</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"padding: 10px 0px; margin: 0px;\">Độ dày:</td><td class=\"content_charactestic\" style=\"padding: 10px 0px; margin: 0px;\">11mm</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"padding: 10px 0px; margin: 0px;\">Chất liệu vỏ:</td><td class=\"content_charactestic\" style=\"padding: 10px 0px; margin: 0px;\">Thép không gỉ/Mạ vàng PVD</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"padding: 10px 0px; margin: 0px;\">Chất liệu dây:</td><td class=\"content_charactestic\" style=\"padding: 10px 0px; margin: 0px;\">Dây da</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"padding: 10px 0px; margin: 0px;\">Chất liệu kính:</td><td class=\"content_charactestic\" style=\"padding: 10px 0px; margin: 0px;\">Kính Sapphire</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"padding: 10px 0px; margin: 0px;\">Độ chịu nước:</td><td class=\"content_charactestic\" style=\"padding: 10px 0px; margin: 0px;\">50m</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"padding: 10px 0px; margin: 0px;\">Chức năng khác:</td><td class=\"content_charactestic\" style=\"padding: 10px 0px; margin: 0px;\">Hacking Stop (dừng kim giây khi chỉnh giờ)</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"padding: 10px 0px; margin: 0px;\">Bảo hiểm:</td><td class=\"content_charactestic\" style=\"padding: 10px 0px; margin: 0px;\">5 năm cả lỗi người dùng tại Xwatch</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"padding: 10px 0px; margin: 0px;\">Bảo hành quốc tế:</td><td class=\"content_charactestic\" style=\"padding: 10px 0px; margin: 0px;\">2 năm.</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"padding: 10px 0px; margin: 0px;\">Giới tính:</td><td class=\"content_charactestic\" style=\"padding: 10px 0px; margin: 0px;\">Nam</td></tr></tbody></table></div>', 1, 'Đen', '2020-06-18 17:51:58', '2020-06-18 10:51:58'),
(21, 18, 1, 'Đồng Hồ Patek Philippe', '6-450x450.jpg', 12000000, 14000000, 1, 'Đồng Hồ cao Cấp Nam', 1, '<table class=\"table  \" border=\"0\" cellpadding=\"0\" width=\"100%\" style=\"font-size: 14px; color: rgb(51, 51, 51); font-family: Helvetica, Arial, \" dejavu=\"\" sans\",=\"\" \"liberation=\"\" freesans,=\"\" sans-serif;=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);\"=\"\"><tbody><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Nhãn hiệu:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Bentley</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Sản xuất:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Đức</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Kiểu máy:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Quartz</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Kích cỡ:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">40 mm</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Độ dày:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">9mm</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Chất liệu vỏ:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Thép không gỉ 316L</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Chất liệu dây:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Thép không gỉ</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Chất liệu kính:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Kính Sapphire</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Độ chịu nước:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">50 m</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Chức năng khác:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Lịch ngày, thứ, tháng, lịch tuần trăng</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Bảo hiểm:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">5 năm cả lỗi người dùng tại Xwatch</td></tr><tr class=\"tr-1\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Bảo hành quốc tế:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">2 năm</td></tr><tr class=\"tr-0\" valign=\"top\"><td class=\"title_charactestic\" width=\"40%\" style=\"margin: 0px; padding: 10px 0px;\">Giới tính:</td><td class=\"content_charactestic\" style=\"margin: 0px; padding: 10px 0px;\">Nam</td></tr></tbody></table>', 1, 'Xanh Da Trời', '2020-06-18 17:52:08', '2020-06-18 10:52:08'),
(22, 18, 2, 'ádkjgasdjkas', '637231954875856924_SST4-H1.jpg', 8230, 231, 0, 'sdsadasdas', 1, 'ádasdas', 1, 'ádasda', '2020-06-22 19:31:27', '2020-06-22 19:31:27');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `images` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `name`, `images`, `title`, `content`, `status`) VALUES
(7, 'ĐỒNG HỒ ORIENT RA-AR0001S10B', 'slider2-mirora1-1920x634.jpg', 'H-Vault Classico', '<span style=\"color: rgb(70, 70, 70); font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; font-size: 14px;\">Đồng hồ OP được biết đến là một thương hiệu được ưa chuộng tại Châu Á.</span>', 1),
(8, 'ĐỒNG HỒ OGIVAL OG358.652AGR-GL', 'slider1-mirora1-1920x634.jpg', 'Đồng hồ chính hãng', '<span style=\"color: rgb(70, 70, 70); font-family: Helvetica, Arial, &quot;DejaVu Sans&quot;, &quot;Liberation Sans&quot;, Freesans, sans-serif; font-size: 14px;\">Seiko là một thương hiệu đồng hồ rất phổ biến ở Việt Nam.</span>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `trademark`
--

CREATE TABLE `trademark` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `country` varchar(255) NOT NULL,
  `logo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trademark`
--

INSERT INTO `trademark` (`id`, `name`, `country`, `logo`) VALUES
(1, 'Đồng Hồ Patek Philippe', 'Thụy Sỹ', 'giao-dien/images/5e81d66a5cb15-patek.svg'),
(2, 'Đồng hồ Tag Heuer', 'Thụy Sỹ', 'giao-dien/images/5e81d68f1c21e-heuer.png'),
(6, 'Đồng hồ Rolex Swiss Made', 'Anh', 'giao-dien/images/5e81d6a82f2b5-rolex.png'),
(7, 'Đồng hồ Omega', 'Thụy Sỹ', 'giao-dien/images/5e81d6c7a321d-omega.png'),
(8, 'Đồng hồ Tissot', 'Thụy Sỹ', 'giao-dien/images/5e81d6f410c9c-tissot.png'),
(9, 'Đồng hồ Longines', 'Thụy Sỹ', 'giao-dien/images/5e81d6dadb5e2-longines.png'),
(10, 'Đồng hồ Timex', 'Thụy Sỹ', 'giao-dien/images/5e81d708ccf97-timex.png'),
(15, 'Đồng hồ Calvin Klein', 'Hoa Kì', 'giao-dien/images/5e81d725729e2-calvinkleln.png'),
(16, 'Đồng hồ Movado', 'Thụy Sỹ', 'giao-dien/images/5e81d735f22b7-movado.png'),
(17, 'Đồng hồ SEIKO', 'Nhật Bản', 'giao-dien/images/5e81d748a8157-seiko.png'),
(18, 'Đồng hồ Orient', 'Đức', 'giao-dien/images/5e81d78b14436-orient.png'),
(19, 'Đồng hồ Casio', 'Việt Nam', 'giao-dien/images/5e81d79b885d8-casio.png'),
(20, 'Đồng hồ Fossil', 'Phần Lan', 'giao-dien/images/5e81d7ad0403b-fossil.png'),
(21, 'Đồng hồ Citizen', 'Thụy Điển', 'giao-dien/images/5e81fa35de660-citizen.svg'),
(22, 'Đồng hồ Ogival', 'Nhật Bản', 'giao-dien/images/5e81f8e084365-ogival.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` int(4) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) DEFAULT NULL,
  `verify_code` varchar(255) DEFAULT NULL,
  `verify_code_time` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `logo`, `email`, `address`, `password`, `level`, `remember_token`, `verify_code`, `verify_code_time`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Lê Đình Thi', '97329885_995512530972390_8932362468970201088_n.jpg', 'ledinhthi2909@gmail.com', '89 Lê Đức Thọ Mỹ Đình Nam Từ Liêm Hà Nội', '$2y$10$UQx7FiT3vsUlw/1DeAeKce/neML5H770CoMRgHXIMAKwW.VEIbY7.', 1, NULL, '', NULL, NULL, '2020-06-12 11:49:36'),
(2, 'ledinhthi', 'Lê Đình Thi', 'about-us-icon1.png', 'ledinhthi2909@gmail.com', '89 Lê Đức Thọ Mỹ Đình Nam Từ Liêm Hà Nội', '$2y$10$rtFLbT2oEVcD.aFx.wskqORKhP930fnev6GWFb2K4sBmgyn4TURE6', 1, 'wLGZs3FhDexZGia3JR8K7QHaMicqzh4QIuUAFWyoZDzoZGY0yZejOCcTWbe9', '', NULL, '2020-06-01 22:31:07', '2020-06-03 03:32:35'),
(3, 'nhanquafree', 'nhanquafree', 'a2.jpg', 'ledinhthi2909@gmail.com', '89 Lê Đức Thọ Mỹ Đình Nam Từ Liêm Hà Nội', '$2y$10$yVqgpR/.aJAFXXv/iQwvFONmWQfQjU3lBwKKLBT09y6FRonqrATj.', 0, 'f0OiCOPaBcj9fiyadcXZ74uKVBqP4EsYXqXlrw0rymOttaB9H2dlMyVIfbYL', '', NULL, '2020-06-03 03:09:26', '2020-06-06 19:34:41'),
(5, 'lethi', 'Lê', '1.jpg', 'thildph07746@fpt.edu.vn', 'Hà Nội', '$2y$10$STfn2XN8QVq2wqo1x2Y/xOJmCHOdJimw8rfboU.qmGMRqeOAu4AZu', 1, NULL, '$2y$10$Pwyq61eddL4pRxmS2Takq.i2wsOyFdjK/sKRGWZj9njH0A7Dm51W6', '2020-06-17 04:17:30', '2020-06-10 20:48:00', '2020-06-17 04:24:55'),
(6, 'ádas', 'Thi Lê', 'a2.jpg', 'thildph0774612@fpt.edu.vn', 'Hà Nội', '$2y$10$1oWKzioLiwuXRqkqnK9kJuMNlK8roYnUkOIFAz9AZ8UfiJ7.P6wUO', 0, NULL, NULL, NULL, '2020-06-18 03:42:34', '2020-06-18 03:42:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cate_id` (`cate_id`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `category_blog`
--
ALTER TABLE `category_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `comment_blog`
--
ALTER TABLE `comment_blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idbl` (`idbl`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `img_product`
--
ALTER TABLE `img_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idsp` (`idsp`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_trade` (`category_trade`),
  ADD KEY `cate_id` (`cate_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trademark`
--
ALTER TABLE `trademark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category_blog`
--
ALTER TABLE `category_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comment_blog`
--
ALTER TABLE `comment_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `img_product`
--
ALTER TABLE `img_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `trademark`
--
ALTER TABLE `trademark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`cate_id`) REFERENCES `category_blog` (`id`),
  ADD CONSTRAINT `blog_ibfk_2` FOREIGN KEY (`user`) REFERENCES `users` (`id`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`user`) REFERENCES `users` (`id`);

--
-- Constraints for table `comment_blog`
--
ALTER TABLE `comment_blog`
  ADD CONSTRAINT `comment_blog_ibfk_2` FOREIGN KEY (`idbl`) REFERENCES `blog` (`id`),
  ADD CONSTRAINT `comment_blog_ibfk_3` FOREIGN KEY (`user`) REFERENCES `users` (`id`);

--
-- Constraints for table `img_product`
--
ALTER TABLE `img_product`
  ADD CONSTRAINT `img_product_ibfk_1` FOREIGN KEY (`idsp`) REFERENCES `product` (`id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `order_ibfk_3` FOREIGN KEY (`id_order`) REFERENCES `order_detail` (`id`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`user`) REFERENCES `users` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_trade`) REFERENCES `trademark` (`id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`cate_id`) REFERENCES `category_product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
