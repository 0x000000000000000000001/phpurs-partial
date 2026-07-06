<?php

$_unsafePartial = function($f) use (&$_unsafePartial) { return $f(null); };

$exports['_unsafePartial'] = $_unsafePartial;
return $exports;
