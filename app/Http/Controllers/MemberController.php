<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Pagination\Paginator;

class MemberController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index(): Renderable
    {
        /** @var Paginator $members */
        $members = Member::orderBy('id')->paginate(5)->withQueryString();
        return view('members.index', compact('members'));
    }
}
