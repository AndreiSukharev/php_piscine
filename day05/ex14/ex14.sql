SELECT floor_number as `floor`, SUM(`nb_seats`) as seats
From cinema
GROUP BY floor
ORDER BY seats DESC;