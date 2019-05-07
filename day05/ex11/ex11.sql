SELECT user_card.last_name as NAME, user_card.first_name, subscription.price from user_card
JOIN `member` ON user_card.id_user = member.id_member
JOIN `subscription` ON member.id_member = subscription.id_sub
WHERE subscription.price >= 45
ORDER BY user_card.last_name ASC, user_card.first_name ASC
;

