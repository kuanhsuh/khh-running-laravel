<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\PricePackage;

class PricePackageController extends Controller
{
    public function create(Event $event)
    {
        return view('pricepackages.create', compact('event'));
    }

    public function store(Event $event)
    {
        request()->validate(PricePackage::$createRules);
        $event->price_packages()->create([
            'price' => request('price'),
            'description' => request('description'),
        ]);
        return view('events.show', compact('event'))->with('success', '方案已建立');
    }


    public function destroy(Event $event, PricePackage $price_package)
    {
        $price_package->delete();
        $event->users()->detach(auth()->user());
        $description = '方案被取消-'. $event->event_name .'賽事/方案-'. $price_package->description;
        activity()->log($description)->causedBy(auth()->user());
        return redirect()->route('events.show', compact('event'))->with('success', '方案已刪除');
    }


}
