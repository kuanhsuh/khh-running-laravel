<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\PricePackage;
use App\Models\Transaction;


class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    public function create()
    {
        $user = Auth()->user();
        if($user->hasRole('Admin')) {
            return view('events.create');
        } else {
            return redirect('/dashboard')->with('error', '你沒有權限建立活動');
        }
    }

    public function store()
    {
        $validatedData = request()->validate(Event::$createRules);
        $event = Event::create($validatedData);
        return redirect()->route('events.index')->with('success', '賽事已建立');;
    }

    public function show(Event $event)
    {
        if ($event) {
            return view('events.show', compact('event'));
        } else {
            return redirect('/dashboard')->with('error', '沒有賽事');
        }
    }

    public function edit(Event $event)
    {
        return view('events.edit', compact(['event']));
    }

    public function update(Event $event)
    {
        request()->validate(Event::$createRules);
        $event->update([
            'event_name' => request('event_name'),
            'enrollment_limit' => request('enrollment_limit'),
            'event_description' => request('event_description'),
            'race_date' => request('race_date'),
            'register_date' => request('register_date'),
        ]);
        session()->flash('success', '賽事已更新');
        return redirect()->route('events.index');
    }

    public function destroy(Event $event)
    {
        $event->delete();
        $event->users()->detach();
        return redirect()->route('events.index')->with('success', '賽事已刪除');
    }

    public function register(Event $event, $price_package_id)
    {
        $price_package = PricePackage::findOrFail($price_package_id);
        if($user->credit > $price_package->price) {
            $event->register(auth()->user(), $price_package);
            return redirect()->route('events.show', compact('event'))->with('success', '報名成功');
        }
        else {
            return redirect()->route('events.show', compact('event'))->with('error', '報名失敗');
        }
    }

    public function unregister(Event $event, $price_package_id)
    {
        $price_package = PricePackage::findOrFail($price_package_id);
        $event->unregister(auth()->user(), $price_package);
        return redirect()->route('events.show', compact('event'))->with('success', '取消方案報名成功');
    }
}
