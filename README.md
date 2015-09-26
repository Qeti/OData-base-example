Example of OData service on pure PHP
====================================

What is this? <a name="what"></a>
-------------

Example of creating OData service on pure PHP.

### Who is using it?

PHP developers, who learning how to create service based on OData.


Installation <a name="installation"></a>
------------

[PHP 5.4 or higher](http://www.php.net/downloads.php) is required to use it.

In www dir:

`$ git clone https://github.com/qeti/OData-base-example.git`

Run `composer install` afterwards.

Create database with table and test data:

```sql
CREATE TABLE product (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  added_at TIMESTAMP DEFAULT NOW(),
  name VARCHAR(250),
  weight DECIMAL(10, 4),
  code VARCHAR(45)
);

INSERT INTO `product` (`id`,`added_at`,`name`,`weight`,`code`) VALUES (6,'2013-05-07 00:00:00','Kedi',2.9200,'Ked-25');
INSERT INTO `product` (`id`,`added_at`,`name`,`weight`,`code`) VALUES (9,'2009-08-05 00:00:00','Kedi',10.9100,'Ked-51');
INSERT INTO `product` (`id`,`added_at`,`name`,`weight`,`code`) VALUES (13,'2003-02-27 00:00:00','Kedi',11.7300,'Ked-17');
INSERT INTO `product` (`id`,`added_at`,`name`,`weight`,`code`) VALUES (29,'2014-12-19 00:00:00','Kedi',7.6100,'Ked-29');
INSERT INTO `product` (`id`,`added_at`,`name`,`weight`,`code`) VALUES (33,'2003-07-05 00:00:00','Kedi',11.8700,'Ked-99');
INSERT INTO `product` (`id`,`added_at`,`name`,`weight`,`code`) VALUES (36,'2015-09-15 00:00:00','Kedi',11.0000,'Ked-89');
INSERT INTO `product` (`id`,`added_at`,`name`,`weight`,`code`) VALUES (40,'2004-01-25 00:00:00','Kedi',14.8800,'Ked-83');
INSERT INTO `product` (`id`,`added_at`,`name`,`weight`,`code`) VALUES (47,'2006-04-23 00:00:00','Kedi',1.2100,'Ked-62');
INSERT INTO `product` (`id`,`added_at`,`name`,`weight`,`code`) VALUES (51,'2012-12-08 00:00:00','Kedi',12.4000,'Ked-86');
INSERT INTO `product` (`id`,`added_at`,`name`,`weight`,`code`) VALUES (54,'2010-06-09 00:00:00','Kedi',6.3800,'Ked-61');
INSERT INTO `product` (`id`,`added_at`,`name`,`weight`,`code`) VALUES (58,'2010-04-25 00:00:00','Kedi',8.8900,'Ked-74');
INSERT INTO `product` (`id`,`added_at`,`name`,`weight`,`code`) VALUES (106,'2004-04-11 00:00:00','Kedi',6.7100,'Ked-44');
INSERT INTO `product` (`id`,`added_at`,`name`,`weight`,`code`) VALUES (134,'2001-02-07 00:00:00','Kedi',2.3200,'Ked-29');
INSERT INTO `product` (`id`,`added_at`,`name`,`weight`,`code`) VALUES (153,'2002-01-13 00:00:00','Kedi',7.3300,'Ked-80');
INSERT INTO `product` (`id`,`added_at`,`name`,`weight`,`code`) VALUES (156,'2014-03-20 00:00:00','Kedi',10.9600,'Ked-30');
INSERT INTO `product` (`id`,`added_at`,`name`,`weight`,`code`) VALUES (165,'2003-07-11 00:00:00','Kedi',2.5300,'Ked-90');
INSERT INTO `product` (`id`,`added_at`,`name`,`weight`,`code`) VALUES (176,'2010-09-26 00:00:00','Kedi',7.0100,'Ked-38');
INSERT INTO `product` (`id`,`added_at`,`name`,`weight`,`code`) VALUES (182,'2007-05-07 00:00:00','Kedi',3.8900,'Ked-6');
INSERT INTO `product` (`id`,`added_at`,`name`,`weight`,`code`) VALUES (194,'2004-03-21 00:00:00','Kedi',3.1000,'Ked-20');
INSERT INTO `product` (`id`,`added_at`,`name`,`weight`,`code`) VALUES (205,'2000-06-02 00:00:00','Kedi',12.9500,'Ked-20');
INSERT INTO `product` (`id`,`added_at`,`name`,`weight`,`code`) VALUES (212,'2002-02-20 00:00:00','Kedi',2.5300,'Ked-62');
INSERT INTO `product` (`id`,`added_at`,`name`,`weight`,`code`) VALUES (220,'2000-10-19 00:00:00','Kedi',8.4000,'Ked-31');

```

Edit index.php, set up `$user` and `$password`.


Usage <a name="usage"></a>
-----

Try to open links:

 - http://localhost/OData-base-example/odata.svc/$metadata

 - http://localhost/OData-base-example/odata.svc/Products?$format=json&$skip=1&$top=14&$inlinecount=allpages&$filter=code eq 'book'

 - http://localhost/OData-base-example/odata.svc/Products/$count?&$filter=code eq 'book'

 - http://localhost/OData-base-example/odata.svc/Products(2465)

For more details about URL format, see [OData documentation](http://www.odata.org/documentation/odata-version-2-0/uri-conventions/).

### Am I free to use this?

This project is open source and licensed under the [MIT License][]. This means that you can do whatever you want
with it as long as you mention my name and include the [license file][license]. Check the [license][] for details.

[MIT License]: http://opensource.org/licenses/MIT

[license]: https://github.com/qeti/SimplePOData/blob/master/LICENSE

Contact
-------

Feel free to contact me using [email](mailto:mnvx@yandex.ru).
