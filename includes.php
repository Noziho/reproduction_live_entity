<?php
require __DIR__ . '/Config.php';
require __DIR__ . '/Model/DB_Connect.php';

require __DIR__ . '/Model/Entity/AbstractEntity.php';

require __DIR__ . '/Model/Entity/User.php';
require __DIR__ . '/Model/Entity/Role.php';
require __DIR__ . '/Model/Entity/Comment.php';
require __DIR__ . '/Model/Entity/Article.php';

require __DIR__ . '/Model/Manager/ManagerArticle.php';
require __DIR__ . '/Model/Manager/ManagerUserRole.php';
require __DIR__ . '/Model/Manager/ManagerRole.php';