<p>If want to run this project directly, please using the following steps.</p>
<p>clone the project to your local first.</p>
<p>composer install</p>
<p>cp .env.example .env</p>
<p>php artisan key:generate</p>
<p>php artisan migrate</p>
<p>php artisan db:seed --class UserTableSeeder</p>
<p>./vendor/bin/phpunit (It is used to run php unittests)</p>
<p>If unittests run no issues, it is fine.</p>

----------------------------------------------------------------------------------------------------------------------------------------

<p>If want to learn how to do this project step by step, please follow all the under below.</p>

<p>Step1: composer create-project --prefer-dist laravel/laravel project_name "5.8.*"</p>
<p>Step2: composer require laravel/telescope</p>
<p>Step3: php artisan telescope:install</p>
<p>Step4: php artisan migrate</p>
<p>Step5: php artisan make:auth</p>
<p>Step6: composer require barryvdh/laravel-debugbar --dev</p>
<p>Step7: composer require barryvdh/laravel-ide-helper --dev</p>     
<p>Step8: composer require xethron/migrations-generator --dev</p>
<p>Step9: composer require mpociot/laravel-test-factory-helper --dev</p>
<p>Step10: composer require skyronic/laravel-file-generator --dev</p>
<p>Step11: add the following code into phpunit.xml, \<\env name="TELESCOPE_ENABLED" value="false"\/\>, remember to remove '\' between '<' and 'env'</p>
<p>If command "./vendor/bin/phpunit" can be run.</p>
<p>If all unittests passed, it works.</p>

<p>If you wanna to learn how to do this project step by step, you can follow steps under below.</p>

<h3>Step1: composer require tymon/jwt-auth "1.0.*"</h3>
<h3>Step2: php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"</h3>
<p>A new config file will be generated in config/jwt.php</p>
<h3>Step3: php artisan jwt:secret</h3>
<p>This command will add a JWT_SECRET value to our .env file. In the step, please also add JWT_SECRET into your .env.example, and also in the .env.dusk.local if you have.</p>
<h3>Step4: update /models/User.php</h3>
<p>In order to use this jwt-auth package, our User model (or whatever model we’re using to authenticate) must implement the JWTSubject interface. JWTSubject interface is in the ./vendor/tymon/jwt-auth/src/Contracts/JWTSubject.php</p>
<h3>Step5: update /config/auth.php</h3>
<h3>Step6: php artisan make:controller Api/UserController (Create UserController.php under Api folder)</h3>
<h3>Step7: Update routes in routes/api.php</h3>
<h3>Step8: composer require barryvdh/laravel-cors</h3>
<p>When a standalone frontend application sends request to your server the browser might squawk about Cross Origin Resource Sharing (CORS). So we need to install laravel-cors. After it is installed, please modify the app/Http/Kernel.php.</p>
<h3>Step9: Update app/Http/Kernel.php</h3>
<h3>Step10: php artisan make:test Api/UserTest</h3>

<p>./vender/bin/phpunit (If no errors, it works fine.)</p>
