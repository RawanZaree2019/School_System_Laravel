<?php

namespace App\Repositories\Classrooms;
use App\Interfaces\Classrooms\ClassroomRepositoryInterface;
use App\Models\Classroom;
use App\Models\Stage;
use Flasher\Toastr\Prime\ToastrFactory;
use Illuminate\Http\Request;
use App\Http\Requests\StoreClassroomRequest;


class ClassroomRepository implements ClassroomRepositoryInterface
{
    public function index(){
        $classrooms = Classroom::all();
        $stages= Stage::all();

        return view('Pages.Classrooms.index', compact('stages', 'classrooms'));
    }

    public function store(StoreClassroomRequest $request, ToastrFactory $flasher)
    {
        $list_classes= $request->list_classes;

        foreach($list_classes as $list_class)
        {
            $classroom= new Classroom();
            $classroom->name= [
                'ar' => $list_class['name'],
                'en'=> $list_class['name_en'],
            ];
            $classroom->stage_id= $list_class['stage_id'];

            $classroom->save();
        }

        $flasher->addSuccess(trans('messages.success'));
        return redirect()->route('Classrooms.index');
    }

    public function update(StoreClassroomRequest $request, ToastrFactory $flasher)
    {
        $classrooms= Classroom::findorfail($request->id);

        $classrooms->update([
            $classrooms->name= [
                'ar'=> $request->name,
                'en'=> $request->name_en,
            ],
            $classrooms->stage_id= $request->stage_id,
        ]);

        $flasher->addInfo(trans('messages.update'));
        return redirect()->route('Classrooms.index');
    }

    public function destroy(Request $request, ToastrFactory $flasher)
    {
        Classroom::findOrFail($request->id)->delete();
        // $flasher->addDeleted(trans('messages.delete'));
        $flasher->addError(trans('messages.delete'));
        return redirect()->route('Classrooms.index');
    }

    public function delete_all_records(Request $request, ToastrFactory $flasher)
    {
        $delete_all_id= explode(',', $request->delete_all_id);

        Classroom::whereIn('id', $delete_all_id)->delete();
        /*
            استخدمنا
            whereIn
             بدلا من
             where
             لأن $delete_all_id
             عبارة عن مصفوفة و بها
            عدة
            ids
            و هي
            ids
            الصفوف التي حددناها لنحذفها
            أما الدالة
            where
            فتستخدم مع العنصر الذي به قيمة واحدة و لا نستخدمها مع العنصر الذي يكون عبارة عن مجموعة قيم
        */

        $flasher->addError(trans('messages.delete'));
        return redirect()->route('Classrooms.index');
    }

    public function filter_classrooms(Request $request)
    {
        $stages = Stage::all();
        $classrooms = Classroom::all();
        $filter_classrooms_by_stages = Classroom::where('stage_id', $request->stage_id)->get();

        return view('Pages.Classrooms.index', compact('stages', 'classrooms', 'filter_classrooms_by_stages'));
    }

}
