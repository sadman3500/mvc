<?php

use ArrayAccess;

interface CollectionInterface extends ArrayAccess {
    public function get($name);
    public function set($name, $value);
    public function has($name);
} 