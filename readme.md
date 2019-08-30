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

<h3>If you wanna to learn how to do this project step by step, you can follow steps under below.</h3>
<p>This readme only describes how to install and config the frontend part, if you wanna to know the backend part, please follow this link "https://github.com/ramseyjiang/Repo_pattern_jwt_spa_backend"</p>

<p>All steps under below are base on the backend you have learnt.</p>

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