<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;

class BotManController extends Controller
{
    public function handle()
    {
        $config = [
            // Your driver-specific configuration
            // "facebook" => [
            //    "token" => "TOKEN",
            //    "app_secret" => "APP_SECRET",
            //    "verification" => "VERIFICATION TOKEN",
            // ],
        ];

        DriverManager::loadDriver(\BotMan\Drivers\Web\WebDriver::class);
        $botman = BotManFactory::create($config);

        $botman->hears('Hi', function (BotMan $bot) {
            $bot->reply('How can I assist you?');
        });

        $botman->hears('what is 2Handz', function (BotMan $bot) {
            $bot->reply('2Handz is ultimate destination for buying and selling laptops, computers, smartphones, and accessories. We provide a platform where you can post free advertisements for all your tech needs.');
        });

        $botman->hears('how to register', function (BotMan $bot) {
            $bot->reply('You can register for free on our website. Just click on the Sign UP button at the top right corner.');
        });

        $botman->hears('how to login login', function (BotMan $bot) {
            $bot->reply('You can log in to your account by clicking on the Sign In button at the top right corner.');
        });

        $botman->hears('How to post the ads', function (BotMan $bot) {
            $bot->reply('To post an ad, you need to be logged in. Once logged in, click on "Ad Post" and fill in the required details.');
        });

        $botman->hears('what are the categories', function (BotMan $bot) {
            $bot->reply('We have the following categories: Computer & Laptop, Smartphones, Tablets, and Computer & Mobile Accessories.');
        });

        $botman->hears('Are we can free ads posting', function (BotMan $bot) {
            $bot->reply('Yes, you can post ads for free on our website.');
        });

        $botman->hears('how to contact', function (BotMan $bot) {
            $bot->reply('You can used our hotline +094771296467 & via social media.If you want to ask any questions, please used our contact Us page. ');
        });
        // Add more interactions based on your website's features...

        $botman->listen();
    }
}
