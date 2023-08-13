<?php

namespace App\Http\Controllers;

use App\Models\Channel;

class ChannelController extends Controller
{
    //
    public function edit($slug)
    {
        // dd($channel->name);
        $channel = Channel::where('slug', '=', $slug)->firstOrFail();
        return view('channel.edit')->with([
            'channel' => $channel,
        ]);
    }
}
