Place your queries below
-- //FS1
-- #1
SELECT * FROM `users` WHERE `username` = 'Tandori'
-- #2
UPDATE `users` SET `email` ='TayTay@lfz.com' WHERE `username` = 'Tyrannosaurus'
-- #3
INSERT INTO `users` SET `username`='Pidgeon', `email`='Sean@lfz.com',`password`=sha1('LearningFuze')
-- #4
DELETE FROM `users`WHERE `username`= 'Pidgeon'