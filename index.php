<?php

namespace Adminka;

include_once __DIR__ . '/vendor/autoload.php';
include_once __DIR__ . '/app/AdminApplication.php';

(new AdminApplication())->configure()->injection()->initialize()->run();