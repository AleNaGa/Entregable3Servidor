CREATE TABLE `portfolio_projects`.`projects` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `technologies` JSON NOT NULL,
  `img` VARCHAR(255) NOT NULL,
  `description` LONGTEXT NULL,
  `link` LONGTEXT NOT NULL,
  PRIMARY KEY (`id`));

INSERT INTO PROJECTS VALUES (0, "Proyecto de prueba", '["HTML","CSS"]', "./media/img/sample.jpg", "Este es un proyecto de prueba", "https://google.es");
INSERT INTO PROJECTS VALUES (0, "Proyecto de prueba 2", '["HTML","CSS", "JS"]', "./media/img/sample2.jpg", "Este es el segundo proyecto de prueba", "https://as.com");
  