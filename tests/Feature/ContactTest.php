<?php
test('la page Contact se charge correctement', function () {
    $response = $this->get('/contact');
    $response->assertStatus(200);
    $response->assertSee('Contactez-nous');
});
