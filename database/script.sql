CREATE TABLE url_list (
    url_id INT UNSIGNED PRIMARY KEY auto_increment COMMENT '連結編號',
    url_dest VARCHAR(100) COMMENT '連結目標',
    url_name VARCHAR(100) UNIQUE COMMENT '連結名稱'
) COMMENT '連結清單';
