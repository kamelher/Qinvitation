<?php

namespace App\Http\Controllers;

use App\Invitation;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AcceptController extends Controller
{

    public function accept(Request $request, $invitation_id, $action)
    {
        $invitation = Invitation::findOrFail($invitation_id);
        if (!in_array($action, ['accept', 'reject'])) {
            abort(404);
        }
        if ($request->token !== $invitation->token) {
            abort(404);
        }
       
        if ($action == 'accept') {
            $invitation->update(['accepted_at' => Carbon::now()->toDateTimeString(),'rejected_at'=>NULL]);
        }
        if ($action == 'reject') {
            $invitation->update(['accepted_at'=>NULL,'rejected_at' => Carbon::now()->toDateTimeString()]);
        }

        return view('welcome',compact('action'));

    }

}
