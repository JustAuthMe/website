<?php
header('HTTP/1.1 301 Moved Permanently');
header('location: ' . WEBROOT . 'p/' . L::links_pages_legal_privacy);
die;