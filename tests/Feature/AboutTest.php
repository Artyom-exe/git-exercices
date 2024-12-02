<?php

test('la page About se charge correctement', function () {
    $response = $this->get('/about');
    $response->assertStatus(200);
    $response->assertSee('À propos');
});
