CREATE TABLE `album`.`fotos` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `nombreFotos` VARCHAR(500) NOT NULL,
    `ruta` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

INSERT INTO
    `fotos` (`id`, `nombreFotos`, `ruta`)
VALUES
    (NULL, 'Jugando con la programacion', 'foto.jpg')