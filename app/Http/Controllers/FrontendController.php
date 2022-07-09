<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Institute;
use App\Models\Document;
use App\Models\Cart;
use App\Models\File as f;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Auth;

class FrontendController extends Controller
{
    public function index()
    {
        $popular = Document::where('popular',1)->latest()->limit(15)->get();

        $latest = Document::where('popular',1)->latest()->limit(15)->get();
        
        $trending = Document::where('trending',1)->latest()->limit(4)->get();

        return view('frontend.index',compact('popular','trending'));
    }

    public function product($id)
    {
        $data = Document::find($id);

        $file = f::where('document_id',$id)->first();

        return view('frontend.product',compact('data','file'));
    }

    public function subjects()
    {
        $data = Subject::limit(6)->get();

        $datas = Document::limit(10)->get();

        return view('frontend.subjects',compact('data','datas'));
    }

    public function subject()
    {
        return view('frontend.single_subject');
    }

    public function selling()
    {
        return view('frontend.selling');
    }

    public function sell_1()
    {
        $subjects = Subject::latest()->get();
        $institutes = Institute::latest()->get();

        return view('frontend.sell_1',compact('subjects','institutes'));
    }

    public function sell_1_store(Request $request)
    {
        // dd($request->all());
       if (!is_numeric($request->subject)) {
        $subject = new Subject;
        $subject->name = $request->subject;
        $subject->save();

        $subject_id = $subject->id; 
       }else {
        $subject = $request->subject;

        $subject_id = $subject;
       }

       if (!is_numeric($request->institute)) {
        $institute = new Institute;
        $institute->name = $request->institute;
        $institute->save();

        $institute_id = $institute->id;
       }else {
        $institute = $request->instititute;

        $institute_id = $institute;
       }

       

       $data = new Document;
       $data->institute_id = $institute_id;
       $data->user_id = Auth::user()->id;
       $data->subject_id = $subject_id;
       $data->title = $request->course_name;
       $data->save();
// dd(array_count($request->files));
//        if (count($request->files) > 1) {

        foreach ($request->files as $value) {
            foreach ($value as $key => $file) {
                # code...
                // $extension = $file->extension();
                $path = Storage::putFile('public/documents', new File($file));
    
                $file = new f;
                $file->document_id = $data->id;
                $file->file = $path;
                $file->save();
            }
        }
    //    }else {
    //         $path = $request->files->store('course/uploads', 'public');

    //         $file = new File;
    //         $file->document_id = $data->id;
    //         $file->file = $path;
    //         $file->save();
    //    }

       $categories = Subject::latest()->get();

       return redirect(route('sell_2',[$data->id]));
       
    }

    public function sell_2($id)
    {
        $data = Document::find($id)->first();

        $categories = Subject::latest()->get();

        return view('frontend.sell_2',compact('categories','data'));
    }

    public function sell_2_store(Request $request, $id)
    {
        $data = Document::find($id);
        $data->price = $request->price;
        $data->description = $request->description;
        $data->course_code = $request->course_code;
        $data->year = $request->year;
        $data->language = $request->language;
        $data->update();

        return redirect(route('sell_3',[$data->id]));
    }

    public function sell_3($id)
    {
        $data = Document::find($id);
        return view('frontend.sell_3',compact('data'));
    }

    public function cart()
    {
        $data = Cart::where('user_id', Auth::user()->id)->latest()->get();

        return view('frontend.cart',compact('data'));
    }

    public function addtocart($id)
    {
        $data = new Cart;
        $data->user_id = Auth::user()->id;
        $data->document_id = $id;
        $data->save();

        return redirect(route('cart'));
    }

    public function removefromcart($id)
    {
        $data = Cart::where('id',$id)->delete();

        return redirect(route('cart'));
    }

    public function informations()
    {
        return view('frontend.selling');
    }

    public function copyright()
    {
        return view('frontend.copyright');
    }

    public function terms()
    {
        return view('frontend.terms');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function privacy()
    {
        return view('frontend.privacy');
    }
}
