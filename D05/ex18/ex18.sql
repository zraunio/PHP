SELECT `name` FROM distrib
WHERE `id_distrib` IN (42, 71) OR
`id_distrib` BETWEEN 62 AND 69 OR
`id_distrib` BETWEEN 88 AND 90 OR
(UPPER(`name`) LIKE UPPER('%y%y%'))
LIMIT 5 OFFSET 2;
