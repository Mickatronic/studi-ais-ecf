
USE hospital_db;

CREATE TABLE statistiques (
    id INT AUTO_INCREMENT PRIMARY KEY,
    type VARCHAR(255) NOT NULL,
    valeur INT NOT NULL
);

INSERT INTO statistiques (type, valeur) VALUES
('Passages aux urgences', 55000),
('Hospitalisations', 28000),
('Interventions chirurgicales', 9500),
('Consultations externes', 190000),
('Naissances', 2000);
