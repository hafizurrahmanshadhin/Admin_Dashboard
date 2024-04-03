# Hafizur Rahman Shadhin

⬛ routes ডিরেক্টরিতে api.php ফাইলটি 11.x এ থাকছে না । চিন্তার কারন নেই API রাউট আগের থেকে ডেভেলপার ফ্রেন্ডলি হয়েছে । ম্যানুয়ালি Sanctum যুক্ত করার ঝামেলা থাকছে না । ডিফল্ট Sanctum Authentication এবার API Route এর সাথে বাইন্ড থাকছে। নিচের কম্পোজার কমান্ড ফলো করুন —

php artisan install:api

⬛ ব্রডকাষ্টিং এর জন্য routes ডিরেক্টরিতে channels.php রাউট ফাইলটিও 11.x এ সরাসরি পাচ্ছেন না। ফাইল নেই মানে ফিচার বাদ পরে গেছে, এমন কিছু নয়। নিচের কমান্ডটি ফলো করুন।

php artisan install:broadcasting

⬛ 11.x প্রজেক্ট তৈরি করেই আপনি কনফিউজড হয়ে যেতে পারেন Middleware ডিরেক্টরি খুজে পাচ্ছেন না । আপনি যে কোনো একটি Middleware তৈরি করলেই ডিরেক্টরি তৈরি হয়ে যাবে। রেগুলার Middleware নিয়ে আগে যেভাবে কাজ করতেন, যেভাবেই চলতে থাকবে ।

php artisan make:Middleware AuthMiddleware

⬛ পুর্বে app\Exceptions এই পাথে Handler.php ফাইলটিও 11.x থেকে পাচ্ছেন না। যদি প্রয়োজন হয় আপনি একটি Exception Handling ক্লাস তৈরি করলেই ফোল্ডার পেয়ে যাবেন। Exception ক্লাস তৈরি করতে নিচের কমান্ড ব্যাবহার করুন-

php artisan make:exception CustomException

⬛ Controllers ডিরেক্টরিতে Controller.php বেইজ ক্লাসে AuthorizesRequests , ValidatesRequests এই ২টি ট্রেইটস ডিফল্ট পাচ্ছেন না। ট্রেইটস দরকার হলে নিচের উদাহরণ ফলো করুন

``` php
namespace App\Http\Controllers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Laravel\Telescope\AuthorizesRequests;
abstract class Controller
{
    use AuthorizesRequests, ValidatesRequests;
}
```

## For MySQL Database: \

DB_CONNECTION=mysql \
DB_HOST=127.0.0.1 \
DB_PORT=3306 \
DB_DATABASE=Laravel \
DB_USERNAME=root \
DB_PASSWORD= \
DB_COLLATION=utf8mb4_unicode_ci

---
