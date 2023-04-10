<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\FileService;
use App\Http\Requests\admin\HallRequest;
use App\Models\Hall;
use Illuminate\Http\Request;

class HallController extends Controller
{
    public function index()
    {
        return view('admin.hall.index', [
            'halls' => Hall::all(),
        ]);
    }

    public function create()
    {
        return view('admin.hall.create');
    }

    public function store(HallRequest $request)
    {
        $path = FileService::upload($request->file('image'), '/hall');
        Hall::create(array_merge(
            ['image' => $path],
            $request->except(['_token', 'image']
            )
        ));
        return to_route('admin.hall')->with(['message' => 'Зал успешно создан.', 'category' => 'success']);
    }

    public function destroy(Hall $hall)
    {
        FileService::delete($hall->image, "hall/");
        if ($hall->delete()) {
            return back()->with(['message' => 'Зал успешно удален.', 'category' => 'success']);
        }
        return back()->withErrors(['error' => 'Возникли ошибки удаления.']);
    }

    public function edit(Hall $hall)
    {
        return view('admin.hall.update', [
            'hall' => $hall
        ]);
    }

    public function update(HallRequest $request, Hall $hall)
    {
        $values = $request->except('_token', 'image');
        if (isset($request->image)) {
            $path = FileService::update($hall->image, $request->file('image'), '/hall');
            if ($path) {
                $values += ['image' => $path];
            }
        }
        if ($hall->update($values)) {
            return to_route('admin.hall')->with(['message' => 'Зал успешно изменен.', 'category' => 'success']);
        }
        return back()->withErrors(['error' => 'Произошла ошибка обновления зала.']);
    }
}
