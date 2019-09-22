<?php
namespace App\Logging;

class LogFormat{

    /**
     * Customize the given logger instance.
     * @param \Illuminate\Log\Logger  $logger
     * @return void
     */
    public function __invoke($logger)
    {
        foreach ($logger->getHandlers() as $handler) {
            $handler->setFormatter(new JsonFormatter());
        }
    }

}