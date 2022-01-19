<?php

namespace Tests\Feature;

use App\Models\Item;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ToDoListTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /** @test */
    public function can_see_the_api_route()
    {
        $response = $this->get('/api/items');

        $response->assertStatus(200);
    }

    /** @test */
    public function has_50_items_in_the_api_call()
    {
        Item::factory()->count(50)->create();

        $response = $this->get('/api/items');

        $response->assertJsonCount(50);
    }

    /** @test */
    public function can_see_a_single_todo()
    {
        Item::factory()->create();

        $response = $this->get('/api/items/1');

        $response->assertStatus(200);
    }

    /** @test */
    public function can_create_a_todo_item()
    {
        $data = [
            'name' => 'Test item',
        ];

        $response = $this->json('POST', '/api/items', $data);

        $response->assertStatus(201);

        $response->assertJson($data);
    }

    /** @test */
    public function can_update_a_todo_item()
    {
        Item::factory()->create();

        $response = $this->get('/api/items/1');
        $response->assertStatus(200);

        $data = [
            'name' => 'Test item',
        ];

        $response2 = $this->json('PATCH', route('items.update', 1), $data);

        $response2->assertStatus(200);

    }

    /** @test */
    public function can_delete_a_todo_item()
    {
        Item::factory()->create();

        $response = $this->get('/api/items/1');

        $response->assertStatus(200);

        $response = $this->json('DELETE', '/api/items/1');

        $response->assertStatus(200);

        $response = $this->get('/api/items/1');

        $response->assertStatus(404);
    }
}
