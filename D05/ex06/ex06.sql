SELECT `title`, `summary` 
FROM film
WHERE UPPER(`summary`) LIKE UPPER('%vincent%')
ORDER BY `id_film` ASC;