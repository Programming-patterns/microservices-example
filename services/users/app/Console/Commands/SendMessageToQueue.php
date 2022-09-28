<?php

namespace App\Console\Commands;

use App\Services\SupportedQueues;
use Illuminate\Console\Command;
use Kuptsov\RabbitmqService\Services\RabbitMqService;

class SendMessageToQueue extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    private RabbitMqService $rabbitMqService;

    public function __construct(RabbitMqService $rabbitMqService)
    {
        parent::__construct();
        $this->rabbitMqService = $rabbitMqService;
    }

    public function handle()
    {
        $this->rabbitMqService->push(['message' => 'Hello world!'], SupportedQueues::MESSAGES);
    }
}
