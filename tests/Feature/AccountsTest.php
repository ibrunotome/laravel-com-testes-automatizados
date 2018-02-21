<?php

namespace Tests\Feature;

use App\Account;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class AccountsTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        $this->seed(\BanksTableSeeder::class);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testApiList()
    {
        $data = factory(Account::class, 20)->create();

        $response = $this->get('/api/accounts');

        $response->assertStatus(200)
            ->assertJson(['data' => $data->toArray()]);
    }

    public function testApiView()
    {
        $data = factory(Account::class)->create();

        $response = $this->json('GET', '/api/accounts/' . $data->id);

        $response->assertStatus(200)
            ->assertJson($data->toArray());
    }

    public function testApiInsert()
    {
        $data = factory(Account::class)->make();

        $response = $this->json('POST', '/api/accounts', $data->toArray());

        $response->assertStatus(200)
            ->assertJson($data->toArray());
    }

    public function testApiUpdate()
    {
        $data = factory(Account::class)->create();

        $toUpdate = ['title' => 'Conta teste'];

        $response = $this->json('PUT', '/api/accounts/' . $data->id, $toUpdate);

        $response->assertStatus(200)
            ->assertJson($toUpdate);
    }

    public function testApiDelete()
    {
        $data = factory(Account::class)->create();

        $response = $this->json('DELETE', '/api/accounts/' . $data->id);

        $response->assertStatus(200)
            ->assertJson($data->toArray());
    }

    public function testApiUploadOnInsert()
    {
        $data = factory(Account::class)->make();
        $data = $data->toArray();

        Storage::fake('public');

        $data['bank_image'] = UploadedFile::fake()->image('itau.jpg');

        $response = $this->json('POST', '/api/accounts', $data);

        Storage::disk('public')->assertExists('images/itau.jpg');
    }

}
