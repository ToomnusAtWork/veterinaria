<?php

namespace App\Jobs;

use App\Http\Requests\ServiceRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Service;
use Illuminate\Support\Arr;

class UpdateService implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private array $attributes;
    /**
     * Create a new job instance.
     */
    public function __construct(private Service $service, array $attributes = [])
    {
        $this->attributes = Arr::only($attributes, ['name', 'description', 'slug', 'price', 'notes']);
    }

    public static function fromRequest(ServiceRequest $request, Service $service):self
    {
        return new self($service, [
            'name' => $request->name(),
            'description' => $request->description(),
            'slug'=> $request->slug(),
            'price' => $request->price(),
            'notes' => $request->notes(),
        ]);
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $this->service->update($this->attributes);
    }
}
