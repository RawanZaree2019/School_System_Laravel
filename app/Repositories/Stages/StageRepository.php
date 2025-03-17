<?php

namespace App\Repositories\Stages;
use App\Interfaces\Stages\StageRepositoryInterface;
use App\Models\Stage;
use Illuminate\Http\Request;
use Flasher\Toastr\Prime\ToastrFactory;
use App\Http\Requests\StoreStageRequest;


class StageRepository implements StageRepositoryInterface
{
    public function index()
    {
        $stages= Stage::all();
        return view('Pages.Stages.index', [
            'stages'=> $stages,
        ]);
    }

    public function store(StoreStageRequest $request, ToastrFactory $flasher)
    {
        // if (Stage::where('name->ar', $request->name)
        // ->orWhere('name->en', $request->name_en)->exists()) {

        //     return redirect()->back()->withErrors(trans('stages_trans.exists'));
        // }

        // request()->validate(Stage::rules(), Stage::messages());

        $stage = new Stage();
        $stage->name = ['en' => $request->name_en, 'ar'=> $request->name]; //الطريقة 1

        // $translations = [ // الطريقة 2
        //     'en' => $request->name_en,
        //     'ar'=> $request->name,
        // ];

        // $stage->setTranslations('name', $translations);

        $stage->notes = $request->notes;

        $stage->save();

        $flasher->addSuccess(trans('messages.success'));
        // session()->flash('success', 'تم الحفظ بنجاح!');
        return redirect()->route('Stages.index');
    }

    public function update(StoreStageRequest $request, ToastrFactory $flasher)
    {
        // request()->validate(Stage::rules(), Stage::messages());
        $stage = Stage::findOrFail($request->id);
        
        $stage->update([
            'name' => ['en' => $request->name_en, 'ar' => $request->name],
            'notes' => $request->notes,
        ]);

        $flasher->addInfo(trans('messages.update'));
        return redirect()->route('Stages.index');
    }

    public function destroy(Request $request, ToastrFactory $flasher)
    {
        $stage = Stage::findOrFail($request->id)->delete();
        // $flasher->addDeleted(trans('messages.delete'));
        $flasher->addError(trans('messages.delete'));
        return redirect()->route('Stages.index');
    }
}
