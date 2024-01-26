<?php
namespace App\Http\Controllers;


use App\Models\Qlbongda;
use Illuminate\Http\Request;

class QlbongdaController extends Controller
{
    public function index()
    {
        $qlbongdas = Qlbongda::all();
        return view('qlbongda.index', compact('qlbongdas'));
    }

    public function search(Request $request)
    {
        $searchKeyword = $request->input('search');
        
        $qlbongdas = Qlbongda::where('tendoibong', 'LIKE', '%' . $searchKeyword . '%')
            ->orWhere('bietdanh', 'LIKE', '%' . $searchKeyword . '%')
            ->orWhere('quocgia', 'LIKE', '%' . $searchKeyword . '%')
            ->get();
        
        return view('qlbongda.index', compact('qlbongdas'));
    }
    
    public function create()
    {
        return view('qlbongda.create');
    }

    public function store(Request $request)
    {
    
        $qlbongda = new Qlbongda();
        $qlbongda->tendoibong = $request['tendoibong'];
        $qlbongda->hinhanh = $request['hinhanh'];
        $qlbongda->quocgia = $request['quocgia'];
        $qlbongda->sannha = $request['sannha'];
        $qlbongda->bietdanh = $request['bietdanh'];
        $qlbongda->thanhtich = $request['thanhtich'];
        $qlbongda->save();
    
        return redirect()->route('qlbongda.index')->with('success', 'Đội bóng đã được tạo thành công!');
    }
    public function show($id)
    {
        $qlbongda = Qlbongda::findOrFail($id);
        return view('qlbongda.show', compact('qlbongda'));
    }

    public function edit($id)
    {
        $qlbongda = Qlbongda::findOrFail($id);
        return view('qlbongda.edit', compact('qlbongda'));
    }

    public function update(Request $request, $id)
{
   
    $qlbongda = Qlbongda::findOrFail($id);
    $qlbongda->tendoibong = $request['tendoibong'];
    $qlbongda->hinhanh = $request['hinhanh'];
    $qlbongda->quocgia = $request['quocgia'];
    $qlbongda->sannha = $request['sannha'];
    $qlbongda->bietdanh = $request['bietdanh'];
    $qlbongda->thanhtich = $request['thanhtich'];
    $qlbongda->save();

    return redirect()->route('qlbongda.index')->with('success', 'Đội bóng đã được cập nhật thành công!');
}
    public function destroy($id)
    {
        $qlbongda = Qlbongda::findOrFail($id);
        $qlbongda->delete();

        return redirect()->route('qlbongda.index')->with('success', 'Đội bóng đã được xóa thành công!');
    }

}