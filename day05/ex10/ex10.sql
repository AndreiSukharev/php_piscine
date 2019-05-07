SELECT title as `Title`, summary as `Summary`, prod_year FROM film
INNER JOIN genre using(`id_genre`) where genre.name = 'erotic'
ORDER BY prod_year DESC
;