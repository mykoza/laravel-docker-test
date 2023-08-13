<?php

it('returns a successful response', function () {
    /** @var Tests\TestCase $this */
    $response = $this->get('/info');

    $response->assertStatus(200);
});
