<?php

namespace App\Repositories\Sections;
use App\Models\Classroom;
use App\Models\Stage;
use Flasher\Toastr\Prime\ToastrFactory;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSectionRequest;
use App\Interfaces\Sections\SectionRepositoryInterface;
use App\Models\Section;

class SectionRepository implements SectionRepositoryInterface
{
    public function index()
    {
        // $stages= Stage::with(['sections'])->get()->dd();

        $stages= Stage::with(['sections'])->get();
        $list_stages= Stage::all();

        return view('Pages.Sections.index', [
            'stages'=> $stages,
            'list_stages'=> $list_stages,
        ]);
    }

    public function getClasses($id)
    {
        $list_classes= Classroom::where('stage_id', $id)->pluck('name', 'id');

        return $list_classes;
    }

    public function store(StoreSectionRequest $request, ToastrFactory $flasher)
    {
        $sections= new Section();

        $sections->name= ['en' => $request->name_section_en, 'ar'=> $request->name_section_ar];
        $sections->stage_id= $request->stage_id;
        $sections->classroom_id= $request->classroom_id;
        $sections->status= 'active';
        $sections->save();

        $flasher->addSuccess(trans('messages.success'));
        return redirect()->route('Sections.index');
    }

    public function update(StoreSectionRequest $request, ToastrFactory $flasher)
    {
        $sections = Section::findOrFail($request->id);

        $sections->name = ['ar' => $request->name_section_ar, 'en' => $request->name_section_en];
        $sections->stage_id = $request->stage_id;
        $sections->classroom_id = $request->classroom_id;

        if(isset($request->status)) {
            $sections->status = 'active';
        } else {
            $sections->status = 'inactive';
        }
        $sections->save();

        $flasher->addInfo(trans('messages.update'));
        return redirect()->route('Sections.index');
    }

    public function destroy(Request $request, ToastrFactory $flasher)
    {
        Section::findOrFail($request->id)->delete();
        $flasher->addError(trans('messages.delete'));
        return redirect()->route('Sections.index');
    }
}
