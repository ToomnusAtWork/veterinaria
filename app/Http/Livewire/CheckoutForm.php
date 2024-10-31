<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class CheckoutForm extends Component
{

    public $addNewAddress = false;
    
    public $province;

    public $phonenum;

    public $district;
    public $districts = [];

    public $subdistrict;
    
    
    public $subdistricts = [];

    public $zipcode;
    public $zipcodes = [];

    public function next()
    {

    }

    public function previous()
    {

    }


    public function render()
    {
        if(!empty($this->province)) {
            $this->districts = DB::table('districts')->where('province_id', $this->province)->get();
        }

        if(!empty($this->district)) {
            $this->subdistricts = DB::table('subdistricts')->where('district_id', $this->district)->get();
        }

        if(!empty($this->subdistrict)) {
            $this->zipcodes = DB::table('subdistricts')->where('id', $this->subdistrict)->get();
            // dd($this->zipcodes);
            // $this->zipcode = DB::table('subdistricts')->where('district_id', $this->district)->get('zip_code');
            // dd($this->subdistricts);
            // $this->zipcodes = DB::table('subdistricts')
            //     ->where('id', $this->subdistrict)
            //     ->get('zip_code');

            
            // dd($this->zipcode);
        }

        $changwats = DB::table('provinces')
            ->select('id as changwat_id', 'name_in_thai as changwat_th', 'name_in_english as changwat_en')
            ->orderBy('changwat_id')
            ->get();


            
        return view('livewire.checkout-form', [
            'changwats' => $changwats,
            // 'districts' => $districts,
            // 'subdistricts' => $subdistricts,
        ]);
    }

    public function save()
    {
        return;
    }

    public function addNewAddress()
    {
        $this->addNewAddress = true;
    }

    public function saveAddress()
    {
        return;
    }
}
