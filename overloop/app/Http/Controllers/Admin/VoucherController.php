<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Voucher;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $voucher = Voucher::where('voucher', 'LIKE', "%$keyword%")
                ->orWhere('discount', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $voucher = Voucher::latest()->paginate($perPage);
        }

        return view('admin.voucher.index',['title' => 'voucher'], compact('voucher'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.voucher.create', ['title' => 'voucher']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        $validated = $request->validate([
            'voucher' => 'required|max:30',
        ]);
        
        Voucher::create($requestData);

        return redirect('admin/voucher')->with('flash_message', 'Voucher added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $voucher = Voucher::findOrFail($id);

        return view('admin.voucher.show', ['title' => 'voucher'], compact('voucher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $voucher = Voucher::findOrFail($id);

        return view('admin.voucher.edit', ['title' => 'voucher'], compact('voucher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        $validated = $request->validate([
            'voucher' => 'required|max:30',
        ]);
        
        $voucher = Voucher::findOrFail($id);
        $voucher->update($requestData);

        return redirect('admin/voucher')->with('flash_message', 'Voucher updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Voucher::destroy($id);

        return redirect('admin/voucher')->with('flash_message', 'Voucher deleted!');
    }
}
