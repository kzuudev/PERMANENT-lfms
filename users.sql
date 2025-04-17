
BEGIN TRANSACTION;
CREATE TABLE IF NOT EXISTS "users" ("id" integer primary key autoincrement not null, "name" varchar not null, "email" varchar not null, "email_verified_at" datetime, "google_id" varchar, "password" varchar not null, "remember_token" varchar, "created_at" datetime, "updated_at" datetime);
INSERT INTO users VALUES(1,'John Kevin Delacruz','johnkevin.delacruz@my.jru.edu','2025-04-08 13:36:59','117809775537098893309','$2y$12$2Fa/7wqTK1lxejHTpPnzxuvr7KDM3dypu5MTU5ObzGoY26aKOpdiC',NULL,'2025-04-08 13:36:59','2025-04-08 13:36:59');
INSERT INTO users VALUES(2,'IKevin Delacruz','delafiora552@gmail.com','2025-04-08 13:37:07','113678918021033939680','$2y$12$9MLjZXh8GYdzGO2n1ePJSun.NxH6hpDrB0vNG0HEP94tAxBmhdW.O',NULL,'2025-04-08 13:37:08','2025-04-08 13:37:08');
INSERT INTO users VALUES(3,'John Andrei','kzuudev@gmail.com','2025-04-08 14:01:16',NULL,'$2y$12$0jWSylLTIHWD61HXidornOVDTiLFZUgnKJfQ9M9qV7KXsuVBQwSo6',NULL,'2025-04-08 14:00:52','2025-04-08 14:01:16');
COMMIT;
