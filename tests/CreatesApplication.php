<?php

namespace Tests;

use Illuminate\Contracts\Console\Kernel;
use Rspa\Models\User;

trait CreatesApplication
{
    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }

    public function deleteUser($email = 'test@qq.com')
    {
        User::where('email',$email)->delete();
    }

    /**
     * Login the given user or create the first if none supplied.
     *
     * @param $user
     *
     * @return User
     */
    public function loginAsUser($user = null)
    {
        $user = User::first();
        $this->actingAs($user);
        return $user;
    }

    /**
     * Return request headers needed to interact with the API.
     *
     * @return Array array of headers.
     */
    protected function headers($user = null)
    {
        $headers = ['Accept' => 'application/json'];
        if (!is_null($user)) {
            $token = \JWTAuth::fromUser($user);
            \JWTAuth::setToken($token);
            $headers['token'] = $token;
        }
        return $headers;
    }
}
