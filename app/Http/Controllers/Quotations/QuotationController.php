<?php

namespace App\Http\Controllers\Quotations;

use App\Http\Controllers\Controller;
use App\Models\Quotation;
use App\Notifications\QuotationSubmitted;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class QuotationController extends Controller
{
    public function postQuotation(Request $request)
    {
        $quotation = new Quotation();
        $quotation->full_name = $request->fullName;
        $quotation->phone_number = $request->phoneNumber;
        $quotation->location = $request->location;
        $quotation->subject = $request->subject;
        $quotation->message_body = $request->message;
        $quotation->advertisement = $request->advertisement;
        $quotation->save();
        $user=User::find(1);
        $user->notify(new QuotationSubmitted($quotation));
        return response()->json([
            'success',
            'quotation'=>$quotation,
            'user'=>$user
        ]);
    }

    public function viewQuotations()
    {
        $quotations = Quotation::all();
        return view('admin.quotations',compact('quotations'));

    }

    public function deleteQuotation(Quotation $quotation)
    {
        $quotation->delete();
        return response()->json('success',200);
    }
}
