-- Aiqon Quick Cool — leads table
-- The site creates this automatically on the first form submission,
-- but you can also import it manually in cPanel -> phpMyAdmin.

CREATE TABLE IF NOT EXISTS leads (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name       VARCHAR(120) NOT NULL,
  phone      VARCHAR(40)  NOT NULL,
  email      VARCHAR(160) NULL,
  area       VARCHAR(120) NULL,
  service    VARCHAR(120) NULL,
  message    TEXT         NULL,
  source     VARCHAR(160) NULL,
  ip         VARCHAR(45)  NULL,
  created_at DATETIME     NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
