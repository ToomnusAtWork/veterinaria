<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
use App\Models\Product;
use App\Http\Requests\ProductRequest;

class CreateProduct implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    

    /**
     * Create a new job instance.
     */
    public function __construct(
        private string $name,
        private string $description,
        private User $author,
        private int $quantity,
        private int $price,
        private $category,
        // array $options = []
    )
    {
        // $this->category = $options['category'];
    }

    public static function fromRequest(ProductRequest $request): self
    {
        return new self (
            $request->name(),
            $request->description(),
            $request->author(),
            $request->quantity(),
            $request->price(),
            $request->category(),
            // [
            //     'category' => 
            // ],
        );
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $product = new Product([
            'name' => $this->name,
            'description'=> $this->description,
            'quantity' => $this->quantity,
            'price'=> $this->price,
            'product_category_id'=> $this->category,
        ]);
        $product->save();
    }
}
