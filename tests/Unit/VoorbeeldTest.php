<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class VoorbeeldTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
//    public function testExample()
//    {
//        $this->assertTrue(true);
//    }

/*
    public function testIndexViewHasAvailableAssignments(){
        $response = $this->get('/assignments');

        $response->assertStatus(200);
        $response->assertViewIs('assignment.index');
        $response->assertViewHas('assignments');
    }
//*/
    //**
    public function testItWritesGoodFormToDatabaseAndRedirectsToIndex(){
        $token = 'covfefe';
        $name = 'Stomme cursus';
        $description = 'fet stome cursus';

        $response = $this
            ->withSession(['_token' => $token])
            ->post(
                '/assignments',
                [
                    '_token' => $token,
                    'naamInput' => $name,
                    'beschrijvingTextArea' => $description,
                ]
            );

        $this->assertDatabaseHas(
            'assignments',
            [
                'naam' => $name,
                'beschrijving' => $description
            ]
        );

        $response->assertStatus(302);
        $response->assertRedirect('assignments');
    }
}
