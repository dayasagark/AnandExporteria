CREATE TABLE products (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    color varchar(255),
    quantity varchar(255),
    created_date date,
    image_url varchar(255),
    PRIMARY KEY (id)
);

ALTER TABLE products
ADD description varchar(255);

ALTER TABLE products
ADD tile_description varchar(255);

INSERT INTO products (name, color, quantity, created_date, image_url)
VALUES ('Rice', 'White', '2', now(), 'test1');
INSERT INTO products (name, color, quantity, created_date, image_url)
VALUES ('Rice', 'Brown', '2', now(), 'test2');
INSERT INTO products (name, color, quantity, created_date, image_url)
VALUES ('Rice', 'Red', '2', now(), 'test3');
INSERT INTO products (name, color, quantity, created_date, image_url)
VALUES ('Rice', 'Red', '2', now(), 'test3');
INSERT INTO products (name, color, quantity, created_date, image_url)
VALUES ('Rice', 'Red', '2', now(), 'test3');
INSERT INTO products (name, color, quantity, created_date, image_url)
VALUES ('Rice', 'Red', '2', now(), 'test3');
INSERT INTO products (name, color, quantity, created_date, image_url)
VALUES ('Rice', 'Red', '2', now(), 'test3');
INSERT INTO products (name, color, quantity, created_date, image_url)
VALUES ('Rice', 'Red', '2', now(), 'test3');