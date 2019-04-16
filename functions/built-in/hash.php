<?php
// encrypt password to hash

$password = "123456";
echo password_hash($password, PASSWORD_BCRYPT);
echo "<br>";
// $2y$10$C83fRW3sKbEJt9l8iAi//eoR4icGaR2x5cNiZNmEBD2uRaUlMKAPm

$salt = "fish";
echo password_hash($password . $salt, PASSWORD_BCRYPT);
// $2y$10$GKyo0ZB3u7HCjmDQ5Th.2uYkOuICPlVkKPjP4y4j3xMmWGWbPzHW6