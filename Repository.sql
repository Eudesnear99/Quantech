CREATE TABLE Repository(id int NOT NULL,
     note decimal,

    UNIQUE(id));

SELECT * FROM  Repository ORDER BY note ASC LIMIT 10