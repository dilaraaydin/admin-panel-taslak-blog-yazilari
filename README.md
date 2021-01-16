*Bilgisayarınızda PHP ve MySQL kullanıp çalıştırabilmek için AppServ kurulu olması gerekmektedir. 
En son sürümüne buradan ulaşabilirsiniz:
--> https://www.appserv.org/en/
*Videolu anlatım için:
--> https://www.youtube.com/watch?v=nT8NvBPsh_Q


*Editör olarak SublimeText kullanıldı.
En son sürüm için:
--> https://www.sublimetext.com/


*Klasör içerisindeki css ve js klasörleri tasarım iyileştirme amacıyla eklendi.


>Kurulumlar doğru bir şekilde yapıldıktan sonra buradan indirdiğiniz dosyayı editörünüzde açıp inceleyebilir ve dilediğiniz şekilde düzenleyebilirsiniz.



>Projedeki veritabanı yapısı için:

1** phpMyAdmin'e girişinizi yaptıktan sonra blog_uye adında bir veritabanı oluşturun,

2** oluşturduğunuz veritabanında yazilar adında ve 3 sütundan oluşacak bir tablo oluşturun,

3** yukarıdaki panelde "sorgu" ya tıklayın,

4** metin alanına aşağıdaki kodu yazın:

CREATE TABLE `yazilar` (
  `yazi_id` int(11) NOT NULL,
  `yazi_baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `yazi` mediumtext COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

5** tablonuz oluşmuş olmalı.
