<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard () {
        $users = Auth::user()->id;
        return view("layouts.master", compact("users"));
    }
    public function showUsersPage () {
        $users = User::with("Role")->simplePaginate("14");
        return view("users.users", compact("users"));
    }

    public function showChartsPage () {
        return view("dashboard.charts");
    }

    public function showProfilePage () {
        return view("dashboard.profile");
    }

    public function showEmailPage () {
        return view("dashboard.email");
    }

    public function showFileManagerPage () {
        return view("dashboard.file-manager");
    }

    public function showBankPage () {
        return view("dashboard.bank");
    }

    public function showPayPage () {
        return view("dashboard.pay");
    }

    public function showChatPage () {
        return view("dashboard.chat");
    }

    public function showBlogPage () {
        return view("dashboard.blog");
    }

    public function showNotesPage () {
        return view("dashboard.notes");
    }

}
