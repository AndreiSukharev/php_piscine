USE db_bbashiri
SELECT REVERSE (substr(`phone_number`, 2)) AS `rebmunenohp`
From distrib
WHERE `phone_number` LIKE '05%';