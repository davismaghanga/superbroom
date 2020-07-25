<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationsController extends Controller
{
    public function notificationsView()
    {
        $user = User::find(1);
        $notifications = $user->unreadNotifications;
        return view('admin.Notifications',compact('notifications'));
    }

    public function markNotification(Request $request)
    {
        $user = User::find(1);
        $user->unreadNotifications
            ->when($request->input('id'), function ($query) use ($request) {
                return $query->where('id', $request->input('id'));
            })
            ->markAsRead();
        return response()->noContent();
    }
}
