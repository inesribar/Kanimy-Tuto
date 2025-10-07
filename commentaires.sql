CREATE TABLE commentaire (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100),
    comment TEXT,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    conseil_id INT
);

