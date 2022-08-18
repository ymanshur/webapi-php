<?php
require 'bootstrap.php';

$statement = <<<EOS
    CREATE TABLE IF NOT EXISTS person (
        id INT NOT NULL AUTO_INCREMENT,
        firstname VARCHAR(100) NOT NULL,
        lastname VARCHAR(100) NOT NULL,
        PRIMARY KEY (id)
    );

    INSERT INTO person
        (id, firstname, lastname)
    VALUES
        (1, 'Krasimir', 'Hristozov'),
        (2, 'Maria', 'Hristozova'),
        (3, 'Masha', 'Hristozova'),
        (4, 'Jane', 'Smith'),
        (5, 'John', 'Smith'),
        (6, 'Richard', 'Smith'),
        (7, 'Donna', 'Smith'),
        (8, 'Josh', 'Harrelson'),
        (9, 'Anna', 'Harrelson');
EOS;

try {
    $createTable = $dbConnection->exec($statement);
    echo "Success!\n";
} catch (\PDOException $e) {
    exit($e->getMessage());
}