CREATE TABLE vlasnik(
    jmbg BIGINT NOT NULL UNIQUE,
    ime VARCHAR(50) NOT NULL,
    prezime VARCHAR(50) NOT NULL,
    adresa VARCHAR(80) NOT NULL
);

CREATE TABLE racun(
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    vlasnik_jmbg BIGINT NOT NULL REFERENCES vlasnik(jmbg),
    stanje FLOAT(2) NOT NULL
);

