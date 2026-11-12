<?php
echo password_hash("admin", PASSWORD_DEFAULT);
/* 
    INSERT INTO users (name,email, password)
    VALUES ('admin', 'admin@gmail.com', '$2y$12$wtHVclU5SrtWZFMmIjCjdueV4E/h9aLKiycqQhnTJdzfFUeRUZoe.')
    */ 

?>