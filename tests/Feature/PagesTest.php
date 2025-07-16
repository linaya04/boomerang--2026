<?php

// Home page test
it('has home page', function () {
    $response = $this->get('/');
    
    $response->assertStatus(200);
});

// Players page test
it('has players page', function () {
    $response = $this->get('/players');
    
    $response->assertStatus(200);
});

// Rules page test
it('has rules page', function () {
    $response = $this->get('/rules');
    
    $response->assertStatus(200);
});
