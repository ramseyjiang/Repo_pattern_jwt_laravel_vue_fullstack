<p>If want to run this project directly, please using the following steps.</p>
<p>Step1: git clone this project to your local</p>
<p>Step2: composer install</p>
<p>Step3: cp .env.example .env</p>
<p>Step4: modify the database, root, password in the .env file.</p>
<p>Step5: php artisan key:generate</p>
<p>Step6: php artisan jwt:secret</p>
<p>Step7: php artisan migrate</p>
<p>Step8: php artisan db:seed --class UsersTableSeeder</p>
<p>Step9: ./vendor/bin/phpunit</p>
<p>If all unittests passed, it means spa backend works.</p>
<p>After that, let's make frontend works.</p>
<p>Step10: npm install</p>
<p>Step11: npm run dev (Make sure frontend complie works.)</p>
<p>Step12: npm run format (Make sure auto format frontend files work.)</p>
<p>Step13: npm run test (If it works fine, it means frontend unittests work.)</p>
<p>Step14: npm run watchtest (Make sure frontend watch test works.)</p>
<p>You also can do git commit and git push in your command, to make sure when you do commit or push, it will run frontend unitest first.</p>

----------------------------------------------------------------------------------------------------------------------------------------

<p>If want to learn how to do this project step by step, please follow all the under below.</p>

<p>Step1: composer create-project --prefer-dist laravel/laravel project_name "5.8.*"</p>
<p>Step2: composer require laravel/telescope</p>
<p>Step3: php artisan telescope:install</p>
<p>Step4: php artisan make:auth</p>
<p>Step5: php artisan migrate</p>
<p>Step6: composer require barryvdh/laravel-debugbar --dev</p>
<p>Step7: composer require barryvdh/laravel-ide-helper --dev</p>     
<p>Step8: composer require xethron/migrations-generator --dev</p>
<p>Step9: composer require mpociot/laravel-test-factory-helper --dev</p>
<p>Step10: composer require skyronic/laravel-file-generator --dev</p>
<p>Step11: add the following code into phpunit.xml, \<\env name="TELESCOPE_ENABLED" value="false"\/\>, remember to remove '\' between '<' and 'env'</p>
<p>If command "./vendor/bin/phpunit" can be run.</p>
<p>If all unittests passed, it works.</p>

<h3>Step12: composer require tymon/jwt-auth "1.0.*"</h3>
<h3>Step13: php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"</h3>
<p>A new config file will be generated in config/jwt.php</p>
<h3>Step14: php artisan jwt:secret</h3>
<p>This command will add a JWT_SECRET value to our .env file. In the step, please also add JWT_SECRET into your .env.example, and also in the .env.dusk.local if you have.</p>
<h3>Step15: update /models/User.php</h3>
<p>In order to use this jwt-auth package, our User model (or whatever model we’re using to authenticate) must implement the JWTSubject interface. JWTSubject interface is in the ./vendor/tymon/jwt-auth/src/Contracts/JWTSubject.php</p>
<h3>Step16: update /config/auth.php</h3>
<h3>Step17: php artisan make:controller Api/UserController (Create UserController.php under Api folder)</h3>
<h3>Step18: Update routes in routes/api.php</h3>
<h3>Step19: composer require barryvdh/laravel-cors</h3>
<p>When a standalone frontend application sends request to your server the browser might squawk about Cross Origin Resource Sharing (CORS). So we need to install laravel-cors. After it is installed, please modify the app/Http/Kernel.php.</p>
<h3>Step20: Update app/Http/Kernel.php</h3>
<h3>Step21: php artisan make:test Api/UserTest</h3>

<p>./vender/bin/phpunit (If no errors, it works fine.)</p>

<p>Step0: npm install</p>

<p>Step1: npm install --save-dev @babel/cli @babel/preset-env jest @vue/test-utils vue-template-compiler vue-jest axios-mock-adapter vue-router eslint@^5.0.0 eslint-plugin-vue babel-core@^7.0.0-bridge.0  lint-staged husky eslint-config-prettier eslint-plugin-prettier prettier @vue/cli-plugin-eslint@^3.10.0 bootstrap-vue</p>

<p>Step2: create a file named ".babelrc", and copy content from the same file in this project</p>

<p>Step3: create a file named "prettier.config.js", and copy content from the same file in this project</p>

<p>Step4: eslint --init (Follow the "eslint --init" tips and do them step by step.)</p>

<p>Step5: After Step4, it will create a file named .eslintrc.js automatically. This step will copy content from the same file in this project</p>

<p>Step6: Edit webpack.mix.js, copy content from the same file in this project</p>

<p>Step7: Edit .gitignore, copy content from the same file in this project. It will let git know how many files you wanna to ignore.</p>

<p>Step8: Edit package.json. Open the same file in this project. After that, please copy "watchtest", "lint", "test" and "format". You also need to copy config about "jest", "lint-staged" and "husky".</p>

<p>Step9: After above 8 steps. You can run: "npm run test" to check whether test works. You also can run "npm run watchtest" to check whether watchtest works, by the way, "npm run watchtest" is similar as "npm run watch". "npm run lint" is used to check garamar for ES6. "npm run format" is used to format your frontend codes.</p>

<p>If all the above works, the SPA Laravel Jest Vue Fullstack works. It includes frontend unittest by jest and backend unittests by phpunit.</p>