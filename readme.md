# В качестве бд используется mysql
## Для работы создайте бд под названием project и таблицу users, саму папку с кодом нужно переименовать в project
```sql
CREATE TABLE project.users (
id INT AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(50) NOT NULL,
email VARCHAR(100) NOT NULL UNIQUE,
password TEXT NOT NULL,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```