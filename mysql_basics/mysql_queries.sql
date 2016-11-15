Place your queries below
-- //FS-1
-- #1
SELECT * FROM `users` WHERE `username` = 'Tandori'
-- #2
UPDATE `users` SET `email` ='TayTay@lfz.com' WHERE `username` = 'Tyrannosaurus'
-- #3
INSERT INTO `users` SET `username`='Pidgeon', `email`='Sean@lfz.com',`password`=sha1('LearningFuze')
-- #4
DELETE FROM `users`WHERE `username`= 'Pidgeon'
-- //FS-2
-- #1
SELECT * FROM `todo_items` WHERE `user_id`=5
-- #2
INSERT INTO `todo_items`SET `title`='Hair', `details`='Just cut it', `timestamp`= UNIX_TIMESTAMP(), `user_id`=5
-- #3
DELETE FROM `todo_items` WHERE `id`= 12
-- #4
UPDATE `todo_items` SET `details`= 'Just fold it' WHERE `id`= 6
-- #5
SELECT * FROM `users`,`todo_items` WHERE `user_id`= 5 AND `users`.`id`= `todo_items`.`user_id`