<?php

namespace ProgrammerZamanNow\Belajar\PHP\MVC;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Test\TestCase;

class ContextTest extends TestCase
{
    public function testContext()
    {

        $logger = new Logger(ContextTest::class);
        $logger->pushHandler(new StreamHandler("php://stderr"));

        $logger->info("This is log message", ["username" => "khannedy"]);
        $logger->info("Try login user", ["username" => "khannedy"]);
        $logger->info("Success login user", ["username" => "khannedy"]);
        $logger->info("Tidak ada context");

        self::assertNotNull($logger);

    }

}