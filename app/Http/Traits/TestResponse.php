<?php

namespace App\Http\Traits;

trait TestResponse {

    public function contentResponse($url)
    {
        $response = $this->get($url);
        if($response->getStatusCode() != 200):
            $response->assertContent($response['message']);
        endif;
        $response->assertStatus(200);
    }

    public function createFactory($model)
    {
        $data = $model::factory()->create();
        return $data;
    }
}
