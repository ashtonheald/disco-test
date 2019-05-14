CREATE TABLE albums (
	album_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
    album_cover varchar(256) not null,
    album_title varchar(256) not null,
    album_year varchar(256) not null
);

INSERT INTO albums (album_cover, album_title, album_year)
VALUES ('hotfuss.jpg', 'Hot Fuss', '2004');
INSERT INTO albums (album_cover, album_title, album_year)
VALUES ('samstown.jpg', 'Sam''s Town', '2006');
INSERT INTO albums (album_cover, album_title, album_year)
VALUES ('sawdust.jpg', 'Saw Dust', '2007');
INSERT INTO albums (album_cover, album_title, album_year)
VALUES ('dayandage.jpg', 'Day & Age', '2008');
INSERT INTO albums (album_cover, album_title, album_year)
VALUES ('royalabert.jpg', 'Live from the Royal Albert', '2009');
INSERT INTO albums (album_cover, album_title, album_year)
VALUES ('battleborn.jpg', 'Battle Born', '2012');
INSERT INTO albums (album_cover, album_title, album_year)
VALUES ('directhit.jpg', 'Direct Hits', '2013');
INSERT INTO albums (album_cover, album_title, album_year)
VALUES ('wishes.jpg', 'Don''t Waste Your Wishes', '2016');
INSERT INTO albums (album_cover, album_title, album_year)
VALUES ('wonderful.jpg', 'Wonderful Wonderful', '2017');

CREATE TABLE tracks (
	track_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
	album_id int(11) not null,
	track_name varchar(256) not null
);

INSERT INTO tracks (album_id, track_name)
VALUES ('', '');
# 138 or so tracks were inserted.





$sql = "SELECT * FROM users;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	if ($resultCheck > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			echo $row['user_uid'] . "<br>";
		}
	}




	
