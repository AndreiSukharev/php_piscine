USE db_bbashiri
SELECT `date`
FROM member_history
WHERE date(`date`) BETWEEN date('2006-10-30') AND date('2007-07-27')
;