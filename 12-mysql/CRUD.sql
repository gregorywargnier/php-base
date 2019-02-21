--un commentaire en SQl
-- Ceci est un support pour le cours
-- Insèrer des catégories de films
-- Action, Horreur, Horreur, film de gangsters, Science fiction, thriller
-- copier/coller la requete sql dans phpmyadmin (onglet sql)
-- On peut mettre les colonnes entre ``(backtick => alt gr + 7)
-- et les valeurs entre''(quote)
-- Insèrer quelques films dans la bdd
-- 1 Film de gangster : Le Parrain 1972, Scarface 1983, Les Affranchis 1990, Heat 1995
-- 2 Action : Die Hard 1988, Demolition Man 1993, Taken 2008, Deadpool 2016, Expandable 2010
-- 3 Horreur : Scream 1996, Vendredi 13 1980, Saw 2005, Scary Movie 2000
-- 4 Science Fiction : Star Wars IV Un nouvel espoir 1977, Alien 1979, ET 1982, Robocop 1987
-- 5 Thriller : The Game 1997, Sixième Sens 1999, Usual Suspects 1995, Fight Club 1999,
-- Inception 2010

INSERT INTO category (name) VALUES 
('Action'), 
('horreur'), 
('gangsters_movies'), 
('sci_fi'),
('thriller');


-- pour récureper toutes catégories
SELECT *FROM category;

--On change le nom de la catégories qui a l'id 5
UPDATE movie.`movie` Set id= '2' WHERE `category`.`id` =1;

--supprimer la catégorie qui à l'ide 5
DELETE FROM category WHERE id = 5;

INSERT INTO movie (name, date, category_id) VALUES
('Le Parrain', '1972-01-01', 3), 
('Scarface', '1983-01-01', 3),
('Les Affranchis', '1990-01-01', 3), 
('Heat', '1995-01-01', 3),
('Die Hard', '1988-01-01', 1), 
('Demolition Man', '1993-01-01', 1),
('Taken', '2008-01-01', 1), 
('Deadpool', '2016-01-01', 1),
('Expandable', '2010-01-01', 1),
('Scream', '1996-01-01', 1), 
('Vendredi 13', '1980-01-01', 2),
('Saw', '2005-01-01', 2),
('Scary Movie', '2000-01-01', 2),
('Star Wars IV Un nouvel espoir', '1977-01-01', 4), 
('Alien', '1979-01-01', 4), 
('ET', '1982-01-01', 4),
('Robocop', '1987-01-01', 4)
('The Game' '1997-01-01', 5), 
('Sixième Sens' '1999-01-01', 5), 
('Usual Suspects', '1995-01-01', 5), 
('Fight Club', '1999-01-01', 5), 
('Inception', '2010-01-01', 5);












