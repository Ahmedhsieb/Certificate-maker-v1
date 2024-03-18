CREATE TABLE `certificates`
(
    `id`   int primary key not null auto_increment,
    `path` varchar(200)    not null,
    `name` varchar(100)    not null,
    `img`  varchar(200)    not null

)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

