CREATE TABLE IF NOT EXISTS users (
    id int not null auto_increment,
    email text not null,
    psw text not null,
    primary key (id)
);