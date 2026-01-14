<?php

test('example', function () {
    expect(true)->toBeTrue();
});

test('sum', function () {
   $result = 1 + 2;
 
   expect($result)->toBe(3);
});
