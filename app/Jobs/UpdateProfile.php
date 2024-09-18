<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Arr;
use App\Models\User;
use App\Http\Request\UpdateProfileRequest;


class UpdateProfile implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private array $attributes;

    /**
     * Create a new job instance.
     */
    public function __construct(private User $user, array $attributes = [])
    {
        $this->attributes = Arr::only($attributes, [
            'name', ]);
    }

    public static function fromRequest(User $user, UpdateProfileRequest $request): self
    {
        return new self($user, [
            'name' => $request->name(),

        ]);
    }


    /**
     * Execute the job.
     */
    public function handle(): void
    {
        //
    }
}
