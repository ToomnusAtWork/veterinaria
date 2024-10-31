<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Http\Requests\PetRequest;
use App\Models\User;
use App\Models\Pet;


class CreatePet implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(
        private string $name,
        private $petImage,
        private $breed,
        private $petType,
        private string $DOB,
        private int $weight,
        private string $allergen,
        private string $note,
        private $customer,
        )
    {

    }

    public static function fromRequest(PetRequest $request):self
    {
        return new self (
            $request->name(),
            $request->petImage(),
            $request->pettype(),
            $request->breed(),
            $request->DOB(),
            $request->weight(),
            $request->allergen(),
            $request->note(),
            $request->customer(),
        );
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $pet = new Pet([
            'name' => $this->name,
            'image' => $this->petImage,
            'pet_type_id' => $this->petType,
            'breed_id' => $this->breed,
            'date_of_birth' => $this->DOB,
            'weight' => $this->weight,
            'allergen' => $this->allergen,
            'note' => $this->note,
            'owner_id' => $this->customer,
        ]);

        // dd($pet);

        $pet->save();
    }

    
}
