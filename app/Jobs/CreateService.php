<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;

class CreateService implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(
        private string $name,
        private string $description,
        private string $slug,
        private int $price,
        private string $note,
    ){}

    public static function fromRequest(ServiceRequest $request):self
    {
        return new self(
            $request->name(),
            $request->description(),
            $request->slug(),
            $request->price(),
            $request->note(),
        );
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $service = new Service([
            'name' => $this->name,
            'description'=> $this->description,
            'slug'=> $this->slug,
            'price'=> $this->price,
            'notes'=> $this->note,
        ]);
        $service->save();
    }
}
