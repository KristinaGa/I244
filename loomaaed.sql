CREATE TABLE loomaaed_kgarmatj (
	id integer PRIMARY KEY auto_increment,
    nimi varchar(100),
    vanus integer,
    liik varchar (100),
    puur integer
);

INSERT INTO loomaaed_kgarmatj VALUES 
	(NULL, 'Kati', 2, 'Hobune', 1),
	(NULL, 'Mati', 7, 'Känguru', 2),
	(NULL, 'Tom', 4, 'Sisalik', 3),
	(NULL, 'Kitty', 15, 'Lõvi', 4),
	(NULL, 'Leonardo', 12, 'Lõvi', 4);

SELECT nimi, puur FROM loomaaed_kgarmatj WHERE puur=4;

SELECT MAX(vanus), MIN(vanus) FROM loomaaed_kgarmatj;

SELECT puur, COUNT(*) FROM loomaaed_kgarmatj GROUP BY puur;

UPDATE loomaaed_kgarmatj SET vanus=vanus+1;
