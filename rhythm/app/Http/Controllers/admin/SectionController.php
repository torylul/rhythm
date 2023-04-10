<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\FileService;
use App\Http\Requests\admin\SectionRequest;
use App\Models\ItemSection;
use App\Models\Page;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index()
    {
        return view('admin.section.index', [
            'pages' => Page::all(),
        ]);
    }

    public function indexSection(Page $page)
    {
        $sections = Section::all();
        $sections = $sections->where('page_id', $page->id);
        return view('admin.section.section_in_page', [
            'sections' => $sections,
            'page' => $page,
        ]);
    }

    public function create(Page $page)
    {
        return view('admin.section.create', [
            'sections' => Section::where('page_id', $page->id)->get(),
            'itemSection' => ItemSection::all(),
            'page' => $page,
        ]);
    }

    public function store(Page $page, SectionRequest $request)
    {
        if ($request->file('item') != null) {
            $path = FileService::upload($request->file('item'), '/image_more');
            ItemSection::create(
                array_merge(
                    ['item' => $path],
                    $request->except(['_token', 'item']
                    )
                ));
        } else {
            ItemSection::create(
                $request->except('_token')
            );
        }
        return to_route('admin.section.section_in_page', $page)->with(['message' => 'Элемент успешно добавлен.', 'category' => 'success']);
    }

    public function more(Page $page, Section $section)
    {
        $items = ItemSection::all();
        $items = $items->where('section', $section);
        $section_name = $section;

        $page = $page->id;
        return view('admin.section.item_in_section', [
            'items' => $items,
            'section_name' => $section_name,
            'section' => $section,
            'page' => $page,
        ]);
    }

    public function destroy(Page $page, ItemSection $item)
    {
        FileService::delete($item->item, "image_more/");
        if ($item->delete()) {
            return back()->with(['message' => 'Элемент успешно удален.', 'category' => 'success']);
        }
        return back()->withErrors(['error' => 'Возникли ошибки удаления.']);
    }
}
