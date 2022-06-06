CREATE TABLE `customers`
(
    `id`      INT AUTO_INCREMENT NOT NULL,
    `name`    VARCHAR(255)       NOT NULL,
    `address` TEXT               NOT NULL,
    PRIMARY KEY (id)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE `utf8mb4_unicode_ci`;

INSERT INTO `customers` (name, address)
VALUES ('Nico', 'Darmstadt');
