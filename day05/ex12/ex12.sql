SELECT last_name, first_name from user_card
WHERE last_name LIKE '%-%' or first_name LIKE '%-%'
ORDER BY first_name, last_name;