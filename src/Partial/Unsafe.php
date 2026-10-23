<?php

$_unsafePartial = function ($f) {
    return $f(null);
};

$exports['_unsafePartial'] = $_unsafePartial;
return $exports;
