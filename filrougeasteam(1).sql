-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 06, 2018 at 10:21 AM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.25-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filrougeasteam`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_article` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `content` longtext NOT NULL,
  `date_published` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id_article`, `title`, `content`, `date_published`, `author`) VALUES
(1, 'Lorem ipsum', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet arcu facilisis, imperdiet nunc sit amet, convallis magna. Nulla facilisi. Phasellus rutrum placerat consequat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris ut maximus justo, nec convallis eros. Maecenas at diam finibus, aliquet nisi sed, molestie purus. Praesent mollis sem neque, nec mattis risus dapibus ac.\r\n\r\nNunc ultricies aliquam enim, eu suscipit dui. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer id tortor sed nisi fringilla tempus. Nam consequat elementum aliquam. Sed vel elementum nulla, eget vestibulum metus. Nam eget pharetra magna. Aenean laoreet dolor vel orci feugiat, scelerisque lacinia nisi aliquet. In lobortis finibus libero, quis lobortis quam fringilla a. Praesent risus metus, vestibulum ut mauris et, auctor pellentesque ligula. Aenean quis pulvinar nunc.\r\n\r\nSed semper ante risus, eu faucibus lorem fermentum nec. Sed ultricies quam non nisl aliquet, et cursus erat consequat. Aliquam condimentum magna sem, quis dictum ex commodo nec. Donec luctus ipsum eget tortor scelerisque, at scelerisque justo vulputate. In eleifend tincidunt erat, in euismod mi dignissim at. Cras pulvinar pretium erat sed molestie. Cras mauris diam, porttitor sit amet ultricies in, congue eu neque. Donec vulputate faucibus rutrum. Donec congue felis ac est faucibus, eget efficitur metus ultricies. Praesent luctus pretium tortor dignissim tincidunt. Maecenas dapibus nisi et consequat laoreet.\r\n\r\nAliquam vitae aliquet nisl, mattis accumsan libero. Nullam pretium tristique odio. Aliquam nec hendrerit justo, at blandit mauris. Nulla eu tristique erat. Suspendisse turpis augue, tincidunt et molestie quis, ultricies vel purus. Aliquam rhoncus sapien non feugiat facilisis. Mauris ultrices, magna nec venenatis rhoncus, massa nisl eleifend ligula, vel accumsan nibh lorem vitae ex. Vivamus convallis efficitur eleifend.\r\n\r\nVestibulum non sem tortor. Donec velit purus, cursus non egestas euismod, cursus in dui. Ut nec purus vitae metus efficitur facilisis at sed nisl. Nam dignissim nunc massa, non faucibus erat varius id. Aliquam vehicula est nisi. Fusce porttitor ex et nisi mollis, sed congue ante tristique. Maecenas efficitur, odio sit amet tempus varius, leo sapien varius lacus, quis scelerisque tortor erat laoreet diam. ', '2018-03-05 10:38:30', 'Guillaume'),
(2, 'Lorem ipsum 2', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet arcu facilisis, imperdiet nunc sit amet, convallis magna. Nulla facilisi. Phasellus rutrum placerat consequat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris ut maximus justo, nec convallis eros. Maecenas at diam finibus, aliquet nisi sed, molestie purus. Praesent mollis sem neque, nec mattis risus dapibus ac.\r\n\r\nNunc ultricies aliquam enim, eu suscipit dui. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer id tortor sed nisi fringilla tempus. Nam consequat elementum aliquam. Sed vel elementum nulla, eget vestibulum metus. Nam eget pharetra magna. Aenean laoreet dolor vel orci feugiat, scelerisque lacinia nisi aliquet. In lobortis finibus libero, quis lobortis quam fringilla a. Praesent risus metus, vestibulum ut mauris et, auctor pellentesque ligula. Aenean quis pulvinar nunc.\r\n\r\nSed semper ante risus, eu faucibus lorem fermentum nec. Sed ultricies quam non nisl aliquet, et cursus erat consequat. Aliquam condimentum magna sem, quis dictum ex commodo nec. Donec luctus ipsum eget tortor scelerisque, at scelerisque justo vulputate. In eleifend tincidunt erat, in euismod mi dignissim at. Cras pulvinar pretium erat sed molestie. Cras mauris diam, porttitor sit amet ultricies in, congue eu neque. Donec vulputate faucibus rutrum. Donec congue felis ac est faucibus, eget efficitur metus ultricies. Praesent luctus pretium tortor dignissim tincidunt. Maecenas dapibus nisi et consequat laoreet.\r\n\r\nAliquam vitae aliquet nisl, mattis accumsan libero. Nullam pretium tristique odio. Aliquam nec hendrerit justo, at blandit mauris. Nulla eu tristique erat. Suspendisse turpis augue, tincidunt et molestie quis, ultricies vel purus. Aliquam rhoncus sapien non feugiat facilisis. Mauris ultrices, magna nec venenatis rhoncus, massa nisl eleifend ligula, vel accumsan nibh lorem vitae ex. Vivamus convallis efficitur eleifend.\r\n\r\nVestibulum non sem tortor. Donec velit purus, cursus non egestas euismod, cursus in dui. Ut nec purus vitae metus efficitur facilisis at sed nisl. Nam dignissim nunc massa, non faucibus erat varius id. Aliquam vehicula est nisi. Fusce porttitor ex et nisi mollis, sed congue ante tristique. Maecenas efficitur, odio sit amet tempus varius, leo sapien varius lacus, quis scelerisque tortor erat laoreet diam. ', '2018-03-05 10:36:49', 'Corentin'),
(3, 'Lorem ipsum 3', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nam sit amet arcu facilisis, imperdiet nunc sit amet, convallis magna. Nulla facilisi. Phasellus rutrum placerat consequat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris ut maximus justo, nec convallis eros. Maecenas at diam finibus, aliquet nisi sed, molestie purus. Praesent mollis sem neque, nec mattis risus dapibus ac.\r\n\r\nNunc ultricies aliquam enim, eu suscipit dui. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer id tortor sed nisi fringilla tempus. Nam consequat elementum aliquam. Sed vel elementum nulla, eget vestibulum metus. Nam eget pharetra magna. Aenean laoreet dolor vel orci feugiat, scelerisque lacinia nisi aliquet. In lobortis finibus libero, quis lobortis quam fringilla a. Praesent risus metus, vestibulum ut mauris et, auctor pellentesque ligula. Aenean quis pulvinar nunc.\r\n\r\nSed semper ante risus, eu faucibus lorem fermentum nec. Sed ultricies quam non nisl aliquet, et cursus erat consequat. Aliquam condimentum magna sem, quis dictum ex commodo nec. Donec luctus ipsum eget tortor scelerisque, at scelerisque justo vulputate. In eleifend tincidunt erat, in euismod mi dignissim at. Cras pulvinar pretium erat sed molestie. Cras mauris diam, porttitor sit amet ultricies in, congue eu neque. Donec vulputate faucibus rutrum. Donec congue felis ac est faucibus, eget efficitur metus ultricies. Praesent luctus pretium tortor dignissim tincidunt. Maecenas dapibus nisi et consequat laoreet.\r\n\r\nAliquam vitae aliquet nisl, mattis accumsan libero. Nullam pretium tristique odio. Aliquam nec hendrerit justo, at blandit mauris. Nulla eu tristique erat. Suspendisse turpis augue, tincidunt et molestie quis, ultricies vel purus. Aliquam rhoncus sapien non feugiat facilisis. Mauris ultrices, magna nec venenatis rhoncus, massa nisl eleifend ligula, vel accumsan nibh lorem vitae ex. Vivamus convallis efficitur eleifend.\r\n\r\nVestibulum non sem tortor. Donec velit purus, cursus non egestas euismod, cursus in dui. Ut nec purus vitae metus efficitur facilisis at sed nisl. Nam dignissim nunc massa, non faucibus erat varius id. Aliquam vehicula est nisi. Fusce porttitor ex et nisi mollis, sed congue ante tristique. Maecenas efficitur, odio sit amet tempus varius, leo sapien varius lacus, quis scelerisque tortor erat laoreet diam. ', '2018-03-05 10:37:12', 'Nicolas'),
(4, 'Lorem Ipsum 4', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nam elementum dolor diam, quis tempor sapien tempor ultrices. Fusce luctus cursus tellus id mattis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque quam est, blandit non neque et, blandit accumsan felis. Pellentesque sed porta felis. Curabitur rhoncus enim eu diam gravida, vitae lobortis erat ultrices. Nam quis faucibus mi, et vestibulum leo. Integer sed pellentesque ligula. Duis cursus volutpat tortor quis imperdiet. In hac habitasse platea dictumst. Fusce tempus elit nisl, sed ornare lacus volutpat quis. Integer imperdiet tellus in imperdiet semper.\r\n\r\nMauris eu aliquam nulla. Vivamus convallis scelerisque purus, ac tincidunt mi dictum at. In hac habitasse platea dictumst. Aliquam in arcu eget eros tempor malesuada laoreet in metus. Aliquam erat volutpat. Pellentesque in justo id dui porta efficitur pretium a est. Vivamus quis ante ligula. Sed at felis in urna bibendum laoreet vitae eu nibh. Etiam ultrices tempor nibh, sed pellentesque ipsum imperdiet vel. Aliquam quis enim lectus. Curabitur a mauris quis risus congue eleifend hendrerit et velit. Vestibulum in vulputate risus, in tristique arcu. Integer turpis tellus, efficitur et justo quis, euismod tristique ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In suscipit finibus sapien quis lacinia. Duis placerat imperdiet ullamcorper.\r\n\r\nUt non condimentum tortor, eu sodales ipsum. Donec at eleifend mauris. Ut ut tempor purus, nec consectetur elit. Sed mattis urna at augue scelerisque posuere. Curabitur eget imperdiet ex, sed viverra justo. Quisque quis ipsum condimentum, facilisis ante a, feugiat elit. Phasellus tincidunt sed mauris non vestibulum. Sed sed ex nec enim hendrerit vestibulum id ullamcorper orci. Integer eget massa euismod, viverra urna nec, convallis leo. Nullam a ipsum et ex tristique posuere sed vel odio. Sed non metus consequat, luctus libero id, mollis erat. Curabitur quis dignissim metus, ut faucibus felis. Vivamus finibus ligula turpis, nec fermentum mauris tempor eget. Aenean porttitor odio justo, sit amet mollis tellus vulputate at. Mauris tempus est ut velit vulputate vestibulum.\r\n\r\nVivamus iaculis, nulla eget ullamcorper efficitur, libero leo luctus erat, sed ullamcorper dui odio tempus ex. Proin mattis tincidunt lacus eu mattis. Nam elementum turpis fringilla, vestibulum enim ac, laoreet lorem. Sed semper, diam ac interdum facilisis, tellus urna vehicula odio, non consectetur tortor sapien sagittis nisi. Pellentesque fringilla dolor id elit faucibus, ut suscipit erat lacinia. Morbi ac enim egestas, hendrerit justo sit amet, tempus purus. Ut faucibus cursus libero. Fusce ut feugiat lectus. Sed lectus ligula, pharetra sed ultrices sit amet, consequat ac magna. Nulla feugiat odio a ipsum malesuada, nec mollis odio tincidunt. Aenean rhoncus ligula ac dignissim aliquet. Proin dapibus convallis erat sed vehicula. Cras ac vulputate turpis, non ultricies quam.\r\n\r\nCras pharetra erat id purus hendrerit finibus. Mauris dui elit, posuere eu nisl in, fermentum mollis odio. Vestibulum pretium nulla a sollicitudin sodales. Fusce molestie metus urna, eu placerat metus malesuada at. Nunc finibus purus in felis cursus porta. Vestibulum sollicitudin, urna vitae tincidunt blandit, sapien quam dapibus lectus, sed commodo elit lorem a metus. Pellentesque sed diam quis sem dapibus accumsan. Praesent lorem ipsum, aliquet in feugiat quis, dignissim non leo. Etiam non interdum nisi. Cras pretium vel lectus eget volutpat. ', '2018-03-06 09:13:20', 'Guillaume'),
(5, 'Lorem ipsum 5', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nam elementum dolor diam, quis tempor sapien tempor ultrices. Fusce luctus cursus tellus id mattis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque quam est, blandit non neque et, blandit accumsan felis. Pellentesque sed porta felis. Curabitur rhoncus enim eu diam gravida, vitae lobortis erat ultrices. Nam quis faucibus mi, et vestibulum leo. Integer sed pellentesque ligula. Duis cursus volutpat tortor quis imperdiet. In hac habitasse platea dictumst. Fusce tempus elit nisl, sed ornare lacus volutpat quis. Integer imperdiet tellus in imperdiet semper.\r\n\r\nMauris eu aliquam nulla. Vivamus convallis scelerisque purus, ac tincidunt mi dictum at. In hac habitasse platea dictumst. Aliquam in arcu eget eros tempor malesuada laoreet in metus. Aliquam erat volutpat. Pellentesque in justo id dui porta efficitur pretium a est. Vivamus quis ante ligula. Sed at felis in urna bibendum laoreet vitae eu nibh. Etiam ultrices tempor nibh, sed pellentesque ipsum imperdiet vel. Aliquam quis enim lectus. Curabitur a mauris quis risus congue eleifend hendrerit et velit. Vestibulum in vulputate risus, in tristique arcu. Integer turpis tellus, efficitur et justo quis, euismod tristique ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In suscipit finibus sapien quis lacinia. Duis placerat imperdiet ullamcorper.\r\n\r\nUt non condimentum tortor, eu sodales ipsum. Donec at eleifend mauris. Ut ut tempor purus, nec consectetur elit. Sed mattis urna at augue scelerisque posuere. Curabitur eget imperdiet ex, sed viverra justo. Quisque quis ipsum condimentum, facilisis ante a, feugiat elit. Phasellus tincidunt sed mauris non vestibulum. Sed sed ex nec enim hendrerit vestibulum id ullamcorper orci. Integer eget massa euismod, viverra urna nec, convallis leo. Nullam a ipsum et ex tristique posuere sed vel odio. Sed non metus consequat, luctus libero id, mollis erat. Curabitur quis dignissim metus, ut faucibus felis. Vivamus finibus ligula turpis, nec fermentum mauris tempor eget. Aenean porttitor odio justo, sit amet mollis tellus vulputate at. Mauris tempus est ut velit vulputate vestibulum.\r\n\r\nVivamus iaculis, nulla eget ullamcorper efficitur, libero leo luctus erat, sed ullamcorper dui odio tempus ex. Proin mattis tincidunt lacus eu mattis. Nam elementum turpis fringilla, vestibulum enim ac, laoreet lorem. Sed semper, diam ac interdum facilisis, tellus urna vehicula odio, non consectetur tortor sapien sagittis nisi. Pellentesque fringilla dolor id elit faucibus, ut suscipit erat lacinia. Morbi ac enim egestas, hendrerit justo sit amet, tempus purus. Ut faucibus cursus libero. Fusce ut feugiat lectus. Sed lectus ligula, pharetra sed ultrices sit amet, consequat ac magna. Nulla feugiat odio a ipsum malesuada, nec mollis odio tincidunt. Aenean rhoncus ligula ac dignissim aliquet. Proin dapibus convallis erat sed vehicula. Cras ac vulputate turpis, non ultricies quam.\r\n\r\nCras pharetra erat id purus hendrerit finibus. Mauris dui elit, posuere eu nisl in, fermentum mollis odio. Vestibulum pretium nulla a sollicitudin sodales. Fusce molestie metus urna, eu placerat metus malesuada at. Nunc finibus purus in felis cursus porta. Vestibulum sollicitudin, urna vitae tincidunt blandit, sapien quam dapibus lectus, sed commodo elit lorem a metus. Pellentesque sed diam quis sem dapibus accumsan. Praesent lorem ipsum, aliquet in feugiat quis, dignissim non leo. Etiam non interdum nisi. Cras pretium vel lectus eget volutpat. ', '2018-03-06 09:13:39', 'Corentin'),
(6, 'Lorem ipsum 6', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nam elementum dolor diam, quis tempor sapien tempor ultrices. Fusce luctus cursus tellus id mattis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque quam est, blandit non neque et, blandit accumsan felis. Pellentesque sed porta felis. Curabitur rhoncus enim eu diam gravida, vitae lobortis erat ultrices. Nam quis faucibus mi, et vestibulum leo. Integer sed pellentesque ligula. Duis cursus volutpat tortor quis imperdiet. In hac habitasse platea dictumst. Fusce tempus elit nisl, sed ornare lacus volutpat quis. Integer imperdiet tellus in imperdiet semper.\r\n\r\nMauris eu aliquam nulla. Vivamus convallis scelerisque purus, ac tincidunt mi dictum at. In hac habitasse platea dictumst. Aliquam in arcu eget eros tempor malesuada laoreet in metus. Aliquam erat volutpat. Pellentesque in justo id dui porta efficitur pretium a est. Vivamus quis ante ligula. Sed at felis in urna bibendum laoreet vitae eu nibh. Etiam ultrices tempor nibh, sed pellentesque ipsum imperdiet vel. Aliquam quis enim lectus. Curabitur a mauris quis risus congue eleifend hendrerit et velit. Vestibulum in vulputate risus, in tristique arcu. Integer turpis tellus, efficitur et justo quis, euismod tristique ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In suscipit finibus sapien quis lacinia. Duis placerat imperdiet ullamcorper.\r\n\r\nUt non condimentum tortor, eu sodales ipsum. Donec at eleifend mauris. Ut ut tempor purus, nec consectetur elit. Sed mattis urna at augue scelerisque posuere. Curabitur eget imperdiet ex, sed viverra justo. Quisque quis ipsum condimentum, facilisis ante a, feugiat elit. Phasellus tincidunt sed mauris non vestibulum. Sed sed ex nec enim hendrerit vestibulum id ullamcorper orci. Integer eget massa euismod, viverra urna nec, convallis leo. Nullam a ipsum et ex tristique posuere sed vel odio. Sed non metus consequat, luctus libero id, mollis erat. Curabitur quis dignissim metus, ut faucibus felis. Vivamus finibus ligula turpis, nec fermentum mauris tempor eget. Aenean porttitor odio justo, sit amet mollis tellus vulputate at. Mauris tempus est ut velit vulputate vestibulum.\r\n\r\nVivamus iaculis, nulla eget ullamcorper efficitur, libero leo luctus erat, sed ullamcorper dui odio tempus ex. Proin mattis tincidunt lacus eu mattis. Nam elementum turpis fringilla, vestibulum enim ac, laoreet lorem. Sed semper, diam ac interdum facilisis, tellus urna vehicula odio, non consectetur tortor sapien sagittis nisi. Pellentesque fringilla dolor id elit faucibus, ut suscipit erat lacinia. Morbi ac enim egestas, hendrerit justo sit amet, tempus purus. Ut faucibus cursus libero. Fusce ut feugiat lectus. Sed lectus ligula, pharetra sed ultrices sit amet, consequat ac magna. Nulla feugiat odio a ipsum malesuada, nec mollis odio tincidunt. Aenean rhoncus ligula ac dignissim aliquet. Proin dapibus convallis erat sed vehicula. Cras ac vulputate turpis, non ultricies quam.\r\n\r\nCras pharetra erat id purus hendrerit finibus. Mauris dui elit, posuere eu nisl in, fermentum mollis odio. Vestibulum pretium nulla a sollicitudin sodales. Fusce molestie metus urna, eu placerat metus malesuada at. Nunc finibus purus in felis cursus porta. Vestibulum sollicitudin, urna vitae tincidunt blandit, sapien quam dapibus lectus, sed commodo elit lorem a metus. Pellentesque sed diam quis sem dapibus accumsan. Praesent lorem ipsum, aliquet in feugiat quis, dignissim non leo. Etiam non interdum nisi. Cras pretium vel lectus eget volutpat. ', '2018-03-06 09:13:59', 'Nicolas'),
(7, 'Lorem ipsum 7', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Nam elementum dolor diam, quis tempor sapien tempor ultrices. Fusce luctus cursus tellus id mattis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque quam est, blandit non neque et, blandit accumsan felis. Pellentesque sed porta felis. Curabitur rhoncus enim eu diam gravida, vitae lobortis erat ultrices. Nam quis faucibus mi, et vestibulum leo. Integer sed pellentesque ligula. Duis cursus volutpat tortor quis imperdiet. In hac habitasse platea dictumst. Fusce tempus elit nisl, sed ornare lacus volutpat quis. Integer imperdiet tellus in imperdiet semper.\r\n\r\nMauris eu aliquam nulla. Vivamus convallis scelerisque purus, ac tincidunt mi dictum at. In hac habitasse platea dictumst. Aliquam in arcu eget eros tempor malesuada laoreet in metus. Aliquam erat volutpat. Pellentesque in justo id dui porta efficitur pretium a est. Vivamus quis ante ligula. Sed at felis in urna bibendum laoreet vitae eu nibh. Etiam ultrices tempor nibh, sed pellentesque ipsum imperdiet vel. Aliquam quis enim lectus. Curabitur a mauris quis risus congue eleifend hendrerit et velit. Vestibulum in vulputate risus, in tristique arcu. Integer turpis tellus, efficitur et justo quis, euismod tristique ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In suscipit finibus sapien quis lacinia. Duis placerat imperdiet ullamcorper.\r\n\r\nUt non condimentum tortor, eu sodales ipsum. Donec at eleifend mauris. Ut ut tempor purus, nec consectetur elit. Sed mattis urna at augue scelerisque posuere. Curabitur eget imperdiet ex, sed viverra justo. Quisque quis ipsum condimentum, facilisis ante a, feugiat elit. Phasellus tincidunt sed mauris non vestibulum. Sed sed ex nec enim hendrerit vestibulum id ullamcorper orci. Integer eget massa euismod, viverra urna nec, convallis leo. Nullam a ipsum et ex tristique posuere sed vel odio. Sed non metus consequat, luctus libero id, mollis erat. Curabitur quis dignissim metus, ut faucibus felis. Vivamus finibus ligula turpis, nec fermentum mauris tempor eget. Aenean porttitor odio justo, sit amet mollis tellus vulputate at. Mauris tempus est ut velit vulputate vestibulum.\r\n\r\nVivamus iaculis, nulla eget ullamcorper efficitur, libero leo luctus erat, sed ullamcorper dui odio tempus ex. Proin mattis tincidunt lacus eu mattis. Nam elementum turpis fringilla, vestibulum enim ac, laoreet lorem. Sed semper, diam ac interdum facilisis, tellus urna vehicula odio, non consectetur tortor sapien sagittis nisi. Pellentesque fringilla dolor id elit faucibus, ut suscipit erat lacinia. Morbi ac enim egestas, hendrerit justo sit amet, tempus purus. Ut faucibus cursus libero. Fusce ut feugiat lectus. Sed lectus ligula, pharetra sed ultrices sit amet, consequat ac magna. Nulla feugiat odio a ipsum malesuada, nec mollis odio tincidunt. Aenean rhoncus ligula ac dignissim aliquet. Proin dapibus convallis erat sed vehicula. Cras ac vulputate turpis, non ultricies quam.\r\n\r\nCras pharetra erat id purus hendrerit finibus. Mauris dui elit, posuere eu nisl in, fermentum mollis odio. Vestibulum pretium nulla a sollicitudin sodales. Fusce molestie metus urna, eu placerat metus malesuada at. Nunc finibus purus in felis cursus porta. Vestibulum sollicitudin, urna vitae tincidunt blandit, sapien quam dapibus lectus, sed commodo elit lorem a metus. Pellentesque sed diam quis sem dapibus accumsan. Praesent lorem ipsum, aliquet in feugiat quis, dignissim non leo. Etiam non interdum nisi. Cras pretium vel lectus eget volutpat. ', '2018-03-06 09:14:25', 'Guillaume');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id_article` int(11) NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id_article`, `id_category`) VALUES
(1, 3),
(2, 4),
(2, 2),
(3, 1),
(3, 2),
(3, 3),
(4, 4),
(4, 3),
(4, 1),
(5, 3),
(6, 2),
(7, 4);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_category`, `name_category`) VALUES
(1, 'conflit'),
(2, 'bail'),
(3, 'réunion'),
(4, 'loyer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_article`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
