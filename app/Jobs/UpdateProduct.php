<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\Product;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Arr;

class UpdateProduct implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private array $attributes;
    /**
     * Create a new job instance.
     */
    public function __construct(private Product $product, array $attributes = [])
    {
        $this->attributes = Arr::only($attributes, ['name', 'description', 'quantity', 'price', 'product_category_id']);
    }

    public static function fromRequest(Product $product, ProductRequest $request): self
    {
        return new self($product, [
            'name'=> $request->name(),
            'description' => $request->description(),
            'quantity' => $request->quantity(),
            'price'=> $request->price(),
            'product_category_id' => $request->category(),
        ]);
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $this->product->update($this->attributes);

        $this->product->save();
    }
}
