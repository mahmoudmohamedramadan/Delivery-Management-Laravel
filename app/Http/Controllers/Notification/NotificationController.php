<?php

namespace App\Http\Controllers\Notification;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller {
  public function index(User $user) {
    $user->notifications->markAsRead();
    return view('project.notification.notifications', [
      'notifications' => $user->notifications()->get()
    ]);
  }

  public function destroy(User $user) {
    $user->notifications()->delete();
    return view('project.notification.notifications', [
      'notifications' => $user->notifications()->get()
    ]);
  }
}
