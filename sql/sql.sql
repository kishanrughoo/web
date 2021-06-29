CREATE TABLE user(
    user_id int PRIMARY KEY,
    user_name varchar(20),
    password varchar(20),
    email varchar(30)
);

CREATE TABLE category(
    category_id int,
    category_name varchar(20)
);

ALTER TABLE category
ADD PRIMARY KEY(category_id);

CREATE TABLE items(
    items_id int PRIMARY KEY,
    item_name varchar(20),
    size varchar(5),
    price DOUBLE,
    category_id int,
    FOREIGN KEY(category_id) REFERENCES category(category_id)
);
ALTER TABLE items
ADD qty int; 
ALTER TABLE items
ADD img_dir VARCHAR(100);

CREATE TABLE cart(
    cart_id int PRIMARY KEY,
    item_id int,
    price DOUBLE,
    qty int,
    total DOUBLE,
    FOREIGN KEY(items_id) REFERENCES items(items_id)
);