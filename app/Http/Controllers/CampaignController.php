<?php

namespace App\Http\Controllers;

use App\Campaign;
use App\Campaigns\Contracts\EmailDriver;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    public function index(EmailDriver $emailDriver)
    {
        $campaings = Campaign::all();
        return view('campaigns.index', compact('campaings'));
    }

    public function send()
    {

    }
}
