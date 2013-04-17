-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.24-log
-- Versão do PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `corposarado`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `title` varchar(45) NOT NULL,
  `description` text,
  `language` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`category_id`, `parent_id`, `title`, `description`, `language`) VALUES
(1, 0, 'Primary Articles', NULL, NULL),
(2, 0, 'Secondary Articles', NULL, NULL),
(3, 1, 'Red Primary Articles', NULL, NULL),
(4, 1, 'Green Primary Articles', NULL, NULL),
(5, 2, 'Red Secondary Articles', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `cod_cli` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `data_nasci` date DEFAULT NULL,
  `UF` varchar(2) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  PRIMARY KEY (`cod_cli`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `data_pagamento`
--

CREATE TABLE IF NOT EXISTS `data_pagamento` (
  `cod_pag` int(11) NOT NULL,
  `data_pag` date NOT NULL,
  `valor_parcela` int(11) NOT NULL,
  KEY `cod_pag` (`cod_pag`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `despesa`
--

CREATE TABLE IF NOT EXISTS `despesa` (
  `id_despesa` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) NOT NULL,
  `valor` int(11) NOT NULL,
  `data_vencimento` date NOT NULL,
  `id_funcionario` int(11) NOT NULL,
  PRIMARY KEY (`id_despesa`),
  KEY `id_funcionario` (`id_funcionario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fabricante`
--

CREATE TABLE IF NOT EXISTS `fabricante` (
  `codfabrincante` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`codfabrincante`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `fabricante`
--

INSERT INTO `fabricante` (`codfabrincante`, `nome`) VALUES
(1, 'Biquinis bonzao');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE IF NOT EXISTS `funcionario` (
  `cod_func` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `data_nasci` date DEFAULT NULL,
  `telefone` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `uf` varchar(2) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  PRIMARY KEY (`cod_func`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`cod_func`, `nome`, `endereco`, `data_nasci`, `telefone`, `email`, `senha`, `admin`, `uf`, `cidade`) VALUES
(5, 'eu', 'da silva', '0000-00-00', '3423849', 'hugocardososilva@gmail.com', '12345', 1, 'pb', 'joao pessoa'),
(6, 'eu1', 'osaidj', '0000-00-00', '9990', 'hugocardososilva@gmail.com', '1f32aa4c9a1d2ea010adcf2348166a04', 1, 'pb', 'joao pessoa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `cod_produto` int(11) NOT NULL,
  `cod_pedido` int(11) NOT NULL,
  `data_retirada` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `valorunitario` float NOT NULL,
  `desconto` float DEFAULT NULL,
  `quantidade` int(11) NOT NULL,
  PRIMARY KEY (`cod_produto`,`cod_pedido`),
  KEY `cod_pedido` (`cod_pedido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamento`
--

CREATE TABLE IF NOT EXISTS `pagamento` (
  `cod_pagamento` int(11) NOT NULL AUTO_INCREMENT,
  `valor_total` int(11) NOT NULL,
  `cod_pedido` int(11) NOT NULL,
  PRIMARY KEY (`cod_pagamento`),
  KEY `cod_pedido` (`cod_pedido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamento_aprazo`
--

CREATE TABLE IF NOT EXISTS `pagamento_aprazo` (
  `cod_pag` int(11) NOT NULL,
  `parcelas` int(11) NOT NULL,
  KEY `cod_pag` (`cod_pag`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamento_avista`
--

CREATE TABLE IF NOT EXISTS `pagamento_avista` (
  `cod_pag` int(11) NOT NULL,
  `debito` int(11) NOT NULL,
  `dinheiro` int(11) NOT NULL,
  KEY `cod_pag` (`cod_pag`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE IF NOT EXISTS `pedido` (
  `cod_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `data_pedido` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cod_funcionario` int(11) NOT NULL,
  `cod_cli` int(11) DEFAULT NULL,
  `valortotal` float NOT NULL,
  PRIMARY KEY (`cod_pedido`),
  KEY `cod_funcionario` (`cod_funcionario`,`cod_cli`),
  KEY `cod_cli` (`cod_cli`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `cod_prod` int(11) NOT NULL,
  `valor_comercial` float NOT NULL,
  `valor_venda` float NOT NULL,
  `descricao_prod` varchar(255) NOT NULL,
  `codfabricante` int(11) NOT NULL,
  PRIMARY KEY (`cod_prod`),
  KEY `codfabricante` (`codfabricante`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`cod_prod`, `valor_comercial`, `valor_venda`, `descricao_prod`, `codfabricante`) VALUES
(789123, 200, 300, 'Biquini cavadao', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `shop_address`
--

CREATE TABLE IF NOT EXISTS `shop_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `shop_customer`
--

CREATE TABLE IF NOT EXISTS `shop_customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `address_id` int(11) NOT NULL,
  `delivery_address_id` int(11) NOT NULL,
  `billing_address_id` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `shop_image`
--

CREATE TABLE IF NOT EXISTS `shop_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `filename` varchar(45) NOT NULL,
  `product_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Image_Products` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `shop_order`
--

CREATE TABLE IF NOT EXISTS `shop_order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `delivery_address_id` int(11) NOT NULL,
  `billing_address_id` int(11) NOT NULL,
  `ordering_date` int(11) NOT NULL,
  `ordering_done` tinyint(1) DEFAULT NULL,
  `ordering_confirmed` tinyint(1) DEFAULT NULL,
  `payment_method` int(11) NOT NULL,
  `shipping_method` int(11) NOT NULL,
  `comment` text,
  PRIMARY KEY (`order_id`),
  KEY `fk_order_customer` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `shop_order_position`
--

CREATE TABLE IF NOT EXISTS `shop_order_position` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `specifications` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `shop_payment_method`
--

CREATE TABLE IF NOT EXISTS `shop_payment_method` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text,
  `tax_id` int(11) NOT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `shop_payment_method`
--

INSERT INTO `shop_payment_method` (`id`, `title`, `description`, `tax_id`, `price`) VALUES
(1, 'cash', 'You pay cash', 1, 0),
(2, 'advance Payment', 'You pay in advance, we deliver', 1, 0),
(3, 'cash on delivery', 'You pay when we deliver', 1, 0),
(4, 'invoice', 'We deliver and send a invoice', 1, 0),
(5, 'paypal', 'You pay by paypal', 1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `shop_products`
--

CREATE TABLE IF NOT EXISTS `shop_products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `tax_id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `description` text,
  `price` varchar(45) DEFAULT NULL,
  `language` varchar(45) DEFAULT NULL,
  `specifications` text,
  PRIMARY KEY (`product_id`),
  KEY `fk_products_category` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `shop_products`
--

INSERT INTO `shop_products` (`product_id`, `category_id`, `tax_id`, `title`, `description`, `price`, `language`, `specifications`) VALUES
(1, 1, 1, 'Demonstration of Article with variations', 'Hello, World!', '19.99', NULL, NULL),
(2, 1, 2, 'Another Demo Article with less Tax', '!!', '29.99', NULL, NULL),
(3, 2, 1, 'Demo3', '', '', NULL, NULL),
(4, 4, 1, 'Demo4', '', '7, 55', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `shop_product_specification`
--

CREATE TABLE IF NOT EXISTS `shop_product_specification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `is_user_input` tinyint(1) DEFAULT NULL,
  `required` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `shop_product_specification`
--

INSERT INTO `shop_product_specification` (`id`, `title`, `is_user_input`, `required`) VALUES
(1, 'Size', 0, 1),
(2, 'Color', 0, 0),
(3, 'Some random attribute', 0, 0),
(4, 'Material', 0, 1),
(5, 'Specific number', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `shop_product_variation`
--

CREATE TABLE IF NOT EXISTS `shop_product_variation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `specification_id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price_adjustion` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `shop_product_variation`
--

INSERT INTO `shop_product_variation` (`id`, `product_id`, `specification_id`, `position`, `title`, `price_adjustion`) VALUES
(1, 1, 1, 2, 'variation1', 3),
(2, 1, 1, 3, 'variation2', 6),
(3, 1, 2, 4, 'variation3', 9),
(4, 1, 5, 1, 'please enter a number here', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `shop_shipping_method`
--

CREATE TABLE IF NOT EXISTS `shop_shipping_method` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text,
  `tax_id` int(11) NOT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `shop_shipping_method`
--

INSERT INTO `shop_shipping_method` (`id`, `title`, `description`, `tax_id`, `price`) VALUES
(1, 'Delivery by postal Service', 'We deliver by Postal Service. 2.99 units of money are charged for that', 1, 2.99);

-- --------------------------------------------------------

--
-- Estrutura da tabela `shop_tax`
--

CREATE TABLE IF NOT EXISTS `shop_tax` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `percent` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `shop_tax`
--

INSERT INTO `shop_tax` (`id`, `title`, `percent`) VALUES
(1, '19%', 19),
(2, '7%', 7);

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `data_pagamento`
--
ALTER TABLE `data_pagamento`
  ADD CONSTRAINT `data_pagamento_ibfk_1` FOREIGN KEY (`cod_pag`) REFERENCES `pagamento` (`cod_pagamento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `despesa`
--
ALTER TABLE `despesa`
  ADD CONSTRAINT `despesa_ibfk_1` FOREIGN KEY (`id_funcionario`) REFERENCES `funcionario` (`cod_func`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`cod_pedido`) REFERENCES `pedido` (`cod_pedido`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `item_ibfk_2` FOREIGN KEY (`cod_produto`) REFERENCES `produto` (`cod_prod`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `pagamento`
--
ALTER TABLE `pagamento`
  ADD CONSTRAINT `pagamento_ibfk_1` FOREIGN KEY (`cod_pedido`) REFERENCES `pedido` (`cod_pedido`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `pagamento_aprazo`
--
ALTER TABLE `pagamento_aprazo`
  ADD CONSTRAINT `pagamento_aprazo_ibfk_1` FOREIGN KEY (`cod_pag`) REFERENCES `pagamento` (`cod_pagamento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `pagamento_avista`
--
ALTER TABLE `pagamento_avista`
  ADD CONSTRAINT `pagamento_avista_ibfk_1` FOREIGN KEY (`cod_pag`) REFERENCES `pagamento` (`cod_pagamento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`cod_funcionario`) REFERENCES `funcionario` (`cod_func`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`cod_cli`) REFERENCES `cliente` (`cod_cli`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`codfabricante`) REFERENCES `fabricante` (`codfabrincante`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `shop_image`
--
ALTER TABLE `shop_image`
  ADD CONSTRAINT `fk_Image_Products` FOREIGN KEY (`product_id`) REFERENCES `shop_products` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `shop_order`
--
ALTER TABLE `shop_order`
  ADD CONSTRAINT `fk_order_customer1` FOREIGN KEY (`customer_id`) REFERENCES `shop_customer` (`customer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `shop_products`
--
ALTER TABLE `shop_products`
  ADD CONSTRAINT `fk_products_category` FOREIGN KEY (`category_id`) REFERENCES `categoria` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
