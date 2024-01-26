<?php
namespace App\Http\Controllers;


use App\Models\Cauthu;
use Illuminate\Http\Request;

class CauthuController extends Controller
{
    public function index()
    {
        $cauthu = Cauthu::all();
        return view('cauthu.index', compact('cauthu'));
    }
    public function create()
    {
        return view('cauthu.create');
    }
    public function store(Request $request)
    {
    
        $cauthu = new Cauthu();
        $cauthu->tencauthu = $request['tencauthu'];
        $cauthu->hinhanh = $request['hinhanh'];
        $cauthu->tuoi = $request['tuoi'];
        $cauthu->vitri = $request['vitri'];
        $cauthu->thanhtich = $request['thanhtich'];
        $cauthu->clb = $request['clb'];
        $cauthu->save();
    
        return redirect()->route('cauthu.index')->with('success', 'Đội bóng đã được tạo thành công!');
    }
    
    public function edit($id)
    {
        $cauthu = Cauthu::findOrFail($id);
        return view('cauthu.edit', compact('cauthu'));
    }

    public function update(Request $request, $id)
    {
       
        $cauthu = Cauthu::findOrFail($id);
        $cauthu->tencauthu = $request['tencauthu'];
        $cauthu->hinhanh = $request['hinhanh'];
        $cauthu->tuoi = $request['tuoi'];
        $cauthu->vitri = $request['vitri'];
        $cauthu->thanhtich = $request['thanhtich'];
        $cauthu->clb = $request['clb'];
        $cauthu->save();
        
        
    
        return redirect()->route('cauthu.index')->with('success', 'Đội bóng đã được cập nhật thành công!');
    }

    public function destroy($id)
    {
        $cauthu = Cauthu::findOrFail($id);
        $cauthu->delete();

        return redirect()->route('cauthu.index')->with('success', 'Đội bóng đã được xóa thành công!');
    }
    public function search(Request $request)
    {
        $searchKeyword = $request->input('search');
        
        $cauthu = Cauthu::where('tencauthu', 'LIKE', '%' . $searchKeyword . '%')
            ->get();
        
        return view('cauthu.index', compact('cauthu'));
    }

}