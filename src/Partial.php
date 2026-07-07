<?php

$exports['_crashWith'] = function ($msg) {
    throw new \Exception($msg);
};

return $exports;
