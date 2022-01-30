<?php

namespace App\Http\Controllers\Santri;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class UstadzSantriController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ustadzs = User::where('role', 'ustadz')
                        ->orderBy('id')
                        ->paginate(50);

        return view('santri.ustadz', compact('ustadzs'));
    }

    public function filter(Request $request)
    {
        $ustadzs = User::where('role', 'ustadz')
                        ->where('status', $request->status)
                        ->orderBy('id')
                        ->paginate(50);

        return view('santri.ustadz', compact('ustadzs'));
    }
}
