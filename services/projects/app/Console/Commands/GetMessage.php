<?php

namespace App\Console\Commands;

use App\Services\SupportedQueues;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Kuptsov\RabbitmqService\Services\RabbitMqService;

class GetMessage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:message';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    private RabbitMqService $rabbitMqService;

    /**
     * @param RabbitMqService $rabbitMqService
     */
    public function __construct(RabbitMqService $rabbitMqService)
    {
        parent::__construct();
        $this->rabbitMqService = $rabbitMqService;
    }


    public function handle()
    {
        while ($package = $this->rabbitMqService->pop(SupportedQueues::MESSAGES)) {
            Log::info('Message from queue: ' . $package->getRawBody());
            $package->delete();
        }
    }
}
