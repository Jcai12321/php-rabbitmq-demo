<?php

define('HOST', getenv('TEST_RABBITMQ_HOST') ? getenv('TEST_RABBITMQ_HOST') : '192.168.216.130');
define('PORT', getenv('TEST_RABBITMQ_PORT') ? getenv('TEST_RABBITMQ_PORT') : 6666);
define('USER', getenv('TEST_RABBITMQ_USER') ? getenv('TEST_RABBITMQ_USER') : 'root');
define('PASS', getenv('TEST_RABBITMQ_PASS') ? getenv('TEST_RABBITMQ_PASS') : 'root');

//YiBai,test
//define('HOST', getenv('TEST_RABBITMQ_HOST') ? getenv('TEST_RABBITMQ_HOST') : 'dp.yibai-it.com');
//define('PORT', getenv('TEST_RABBITMQ_PORT') ? getenv('TEST_RABBITMQ_PORT') : 22207);
//define('USER', getenv('TEST_RABBITMQ_USER') ? getenv('TEST_RABBITMQ_USER') : 'mquser');
//define('PASS', getenv('TEST_RABBITMQ_PASS') ? getenv('TEST_RABBITMQ_PASS') : 'mq2019***');


define('VHOST', '/');
define('AMQP_DEBUG', getenv('TEST_AMQP_DEBUG') !== false ? (bool)getenv('TEST_AMQP_DEBUG') : false);