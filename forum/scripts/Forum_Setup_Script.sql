use site_db;

/* Create intern tables
*/

insert into category (categoryname) VALUES ('General Discussion');
insert into category (categoryname) VALUES ('Games');
insert into category (categoryname) VALUES ('Off Topic');

insert into thread (user_id, title, date, txt_body, Icon, CategoryID) VALUES
	(1, 'Gamers and games!', CURDATE(), 'I created this community forum and this is the first post.', 1, 1);
	
	insert into thread (user_id, title, date, txt_body, Icon, CategoryID) VALUES
	(1, 'Games Forum', CURDATE(), 'This forum is for discussion of the current games on the website', 1, 2);
	
	insert into thread (user_id, title, date, txt_body, Icon, CategoryID) VALUES
	(1, 'Off Topic', CURDATE(), 'This forum is for discussion unlrelated to the other forums.', 1, 3);
	
	insert into thread (user_id, title, date, txt_body, Icon, CategoryID) VALUES
	(1, 'Another Thread', CURDATE(), 'This is a 2nd thread in the general discussion forum.. Hello.', 1, 1);
	
	
	
	
	
	insert into games (game_id, gamename, game_adver_img, game_rating)
	VALUES
	(1, 'jscript_game', 'jscript.png', 0);
	
	insert into games (game_id, gamename, game_adver_img, game_rating)
	VALUES
	(2, 'The Rescue', 'rescue.png', 0);
	
	insert into games (game_id, gamename, game_adver_img, game_rating)
	VALUES
	(3, 'Pirate Mines', 'mines.png', 0);
	
	insert into games (game_id, gamename, game_adver_img, game_rating)
	VALUES
	(4, 'Robo Marines', 'marines.png', 0);
	