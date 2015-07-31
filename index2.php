<?php

$str = 'Гарри Поттер внешне — вылитый отец';

preg_match_all(
    '~(?P<nameq2>\w+) (?P<nameq>\w+) (?P<digitt>\w+) — (?P<nameq11>\w+) (?P<namep>\w+)~u',
    $str,
    $m
);

var_dump($m);


?>