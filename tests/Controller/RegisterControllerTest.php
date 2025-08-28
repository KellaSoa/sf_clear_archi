<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RegisterControllerTest extends WebTestCase
{
    public function testSuccessfulRegistration(): void
    {
        $client = static::createClient();

        $payload = [
            'name' => 'John Doe',
            'email' => 'john+4@example.com',
            'password' => 'securePassword123',
        ];

        $client->request(
            'POST',
            '/api/register',
            [],
            [],
            [
                'CONTENT_TYPE' => 'application/json',
            ],
            json_encode($payload)
        );

        $this->assertResponseStatusCodeSame(201);
    }

    public function testInvalidEmailRegistration(): void
    {
        $client = static::createClient();

        $payload = [
            'name' => 'John Doe',
            'email' => 'invalid-email',
            'password' => 'securePassword123',
        ];

        $client->request(
            'POST',
            '/api/register',
            [],
            [],
            [
                'CONTENT_TYPE' => 'application/json',
            ],
            json_encode($payload)
        );

        $this->assertResponseStatusCodeSame(422);
    }
}
