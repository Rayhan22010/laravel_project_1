<?php

namespace App\Http\Controllers;

use App\Models\AboutUniversity;
use App\Models\AcademicWork;
use App\Models\admissionRequi;
use App\Models\Course;
use App\Models\Coursereg;
use App\Models\FrontendContact;
use App\Models\HeroCarousel;
use App\Models\Information;
use App\Models\KeyFeature;
use App\Models\popularCourse;
use App\Models\testimonial;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index()
    {
        try {
            $value = popularCourse::all();
            $tValue = testimonial::all();
            $hValue = HeroCarousel::all();
            $aValue = AcademicWork::all();
            $uValue = AboutUniversity::all();
            $kValue = KeyFeature::all();
            return view('frontend.pages.index', compact('value', 'tValue', 'hValue', 'aValue', 'uValue', 'kValue'));
        } catch (\throwable $th) {
            return $th;
        }
    }

    public function admission()
    {
        try {
            $value = admissionRequi::all();
            $kValue = KeyFeature::all();
            return view('frontend.pages.admission', compact('value', 'kValue'));
        } catch (\throwable $th) {
            return $th;
        }
    }
    public function signin()
    {
        try {
            return view('frontend.pages.admin_login');
        } catch (\throwable $th) {
            return $th;
        }
    }
    public function course()
    {
        try {
            $value = Course::all();
            return view('frontend.pages.course', compact('value'));
        } catch (\throwable $th) {
            return $th;
        }
    }
    public function contact()
    {
        try {
            $kValue = KeyFeature::all();
            return view('frontend.pages.contact', compact('kValue'));
        } catch (\throwable $th) {
            return $th;
        }
    }

    // public function form()
    // {
    //     try {
    //         $value = Information::all();
    //         return view('frontend.pages.form', compact('value'));
    //     } catch (\throwable $th) {
    //         return $th;
    //     }
    // }
    // public function infoStore(request $request)
    // {
    //     try {
    //         $data = new Information();
    //         $data->email = $request->email;
    //         $data->address = $request->address;
    //         $data->city = $request->city;
    //         $data->state = $request->state;
    //         $data->save();
    //         return back()->with('message', 'Data Inserted successfully');
    //     } catch (\throwable $th) {
    //         return $th;
    //     }
    // }

    // public function deleteInfo($id)
    // {
    //     try {
    //         $data = Information::find($id);
    //         $data->delete();
    //         return back()->with('delete-message', 'Data deleted successfully');
    //     } catch (\throwable $th) {
    //         return $th;
    //     }
    // }
    // public function editinfo($id)
    // {
    //     try {
    //         $data = Information::find($id);
    //         return response()->json([
    //             'status' => 200,
    //             'data' => $data,
    //         ]);
    //     } catch (\throwable $th) {
    //         return $th;
    //     }
    // }

    // public function update(request $request)
    // {
    //     try {
    //         $s_id = $request->input('s_id');
    //         $information = Information::find($s_id);
    //         $information->address = $request->input('address');
    //         $information->city = $request->input('city');
    //         $information->state = $request->input('state');
    //         $information->update();
    //         return back()->with('message', 'Data Updated successfully');
    //     } catch (\throwable $th) {
    //         return $th;
    //     }
    // }

    public function enroll()
    {
        try {
            return view('frontend.pages.enroll');
        } catch (\throwable $th) {
            return $th;
        }
    }

    public function enrollinfo(request $request)
    {
        try {
            $data = new Coursereg();
            $data->username = $request->username;
            $data->email = $request->email;
            $data->address = $request->address;
            $data->coursename = $request->coursename;
            $data->save();
            return back()->with('message', 'You enrolled the course successfully');
        } catch (\throwable $th) {
            return $th;
        }
    }
    public function contact_store(request $request)
    {
        try {
            $data = new FrontendContact();
            $data->name = $request->name;
            $data->email = $request->email;
            $data->phone = $request->phone;
            $data->subject = $request->subject;
            $data->description = $request->description;
            $data->save();
            return back()->with('message', 'You enrolled the course successfully');
        } catch (\throwable $th) {
            return $th;
        }
    }


    //backend start
    public function admin()
    {
        try {
            return view('backend.pages.backend_index');
        } catch (\throwable $th) {
            return $th;
        }
    }
    public function popular_course()
    {
        try {
            $value = popularCourse::all();
            return view('backend.pages.popular_course', compact('value'));
        } catch (\throwable $th) {
            return $th;
        }
    }
    public function testimonial()
    {
        try {
            $value = testimonial::all();
            return view('backend.pages.testimonial', compact('value'));
        } catch (\throwable $th) {
            return $th;
        }
    }
    public function backend_admission()
    {
        try {
            $value = admissionRequi::all();
            return view('backend.pages.backend_admission', compact('value'));
        } catch (\throwable $th) {
            return $th;
        }
    }

    public function backend_admission_delete($id)
    {
        try {
            $data = admissionRequi::find($id);
            //            image delete from folder and database start
            $public_path = public_path('upload/admissionImage/' . $data->requiPicture);
            if (file_exists($public_path)) {
                unlink($public_path);
            }
            $public_path = public_path('upload/studentImage/' . $data->transPicture);
            if (file_exists($public_path)) {
                unlink($public_path);
            }
            //            image delete from folder and database end
            $data->delete();
            return back()->with('message', 'Data deleted successfully');
        } catch (\throwable $th) {
            return $th;
        }
    }

    public function backend_course()
    {
        try {
            $value = Course::all();
            return view('backend.pages.backend_course', compact('value'));
        } catch (\throwable $th) {
            return $th;
        }
    }

    public function course_store(request $request)
    {
        try {
            $data = new popularCourse();
            //        $data->C_catagories = $request->C_catagories;
            $data->C_title = $request->C_title;
            $data->C_subtitle = $request->C_subtitle;
            $data->C_price = $request->C_price;
            $data->C_star = $request->C_star;
            //            image add start
            $request->validate([
                'image' => 'nullable|image|mimes:jpg,png,svg,gif,jpeg'
            ]);
            if ($request->hasFile('C_image')) {
                $imageName = time() . '.' . $request->C_image->getClientOriginalExtension();
                $request->C_image->move(public_path('upload/studentImage'), $imageName);
                $data->C_image = $imageName;
            }
            //            image add end
            $data->save();
            return back()->with('message', 'Data Inserted successfully');
        } catch (\throwable $th) {
            return $th;
        }
    }

    public function course_delete($id)
    {
        try {
            $data = popularCourse::find($id);
            //            image delete from folder and database start
            $public_path = public_path('upload/studentImage/' . $data->C_image);
            if (file_exists($public_path)) {
                unlink($public_path);
            }
            //            image delete from folder and database end
            $data->delete();
            return back()->with('message', 'Data deleted successfully');
        } catch (\throwable $th) {
            return $th;
        }
    }
    public function courseEdit($id)
    {
        try {
            $data = popularCourse::find($id);
            return response()->json([
                'status' => 200,
                'data' => $data,
            ]);
        } catch (\throwable $th) {
            return $th;
        }
    }

    public function course_update(request $request)
    {
        try {
            $info_id = $request->input('info_id');
            $popularCourse = popularCourse::find($info_id);
            $popularCourse->C_title = $request->input('C_title');
            $popularCourse->C_subtitle = $request->input('C_subtitle');
            $popularCourse->C_price = $request->input('C_price');
            $popularCourse->update();
            return back()->with('message', 'Data Updated successfully');
        } catch (\throwable $th) {
            return $th;
        }
    }

    public function testimonial_store(request $request)
    {
        try {
            $data = new testimonial();
            $data->clintName = $request->clintName;
            $data->workField = $request->workField;
            //            image add start
            $request->validate([
                'image' => 'nullable|image|mimes:jpg,png,svg,gif,jpeg'
            ]);
            if ($request->hasFile('clintPicture')) {
                $imageName = time() . '.' . $request->clintPicture->getClientOriginalExtension();
                $request->clintPicture->move(public_path('upload/studentImage'), $imageName);
                $data->clintPicture = $imageName;
            }
            //            image add end
            $data->clintReview = $request->clintReview;
            $data->save();
            return back()->with('message', 'Data Inserted successfully');
        } catch (\throwable $th) {
            return $th;
        }
    }
    public function testimonial_delete($id)
    {
        try {
            $data = testimonial::find($id);
            //            image delete from folder and database start
            $public_path = public_path('upload/studentImage/' . $data->clintPicture);
            if (file_exists($public_path)) {
                unlink($public_path);
            }
            //            image delete from folder and database end
            $data->delete();
            return back()->with('message', 'Data deleted successfully');
        } catch (\throwable $th) {
            return $th;
        }
    }

    public function testimonial_edit($id)
    {
        try {
            $data = testimonial::find($id);
            return response()->json([
                'status' => 200,
                'data' => $data,
            ]);
        } catch (\throwable $th) {
            return $th;
        }
    }
    public function testimonial_update(request $request)
    {
        try {
            $info_id = $request->input('info_id');
            $testimonial = testimonial::find($info_id);
            $testimonial->clintName = $request->input('clintName');
            $testimonial->workField = $request->input('workField');
            $testimonial->clintReview = $request->input('clintReview');
            $testimonial->update();
            return back()->with('message', 'Data Updated successfully');
        } catch (\throwable $th) {
            return $th;
        }
    }

    public function admission_store(request $request)
    {
        try {
            $data = new admissionRequi();
            $data->requiHeading = $request->requiHeading;
            //            image add start
            $request->validate([
                'requiPicture' => 'nullable|image|mimes:jpg,png,svg,gif,jpeg',
                'transPicture' => 'nullable|image|mimes:jpg,png,svg,gif,jpeg'
            ]);
            if ($request->hasFile('requiPicture')) {
                $imageName = time() . '.' . $request->requiPicture->getClientOriginalExtension();
                $request->requiPicture->move(public_path('upload/admissionImage'), $imageName);
                $data->requiPicture = $imageName;
            }
            //            image add end

            $data->requiText = $request->requiText;
            $data->transHeading = $request->transHeading;
            $data->transText = $request->transText;

            //            image add start

            if ($request->hasFile('transPicture')) {
                $PictureName = time() . '.' . $request->transPicture->getClientOriginalExtension();
                $request->transPicture->move(public_path('upload/studentImage'), $PictureName);
                $data->transPicture = $PictureName;
            }
            //           image add end
            $data->save();
            return back()->with('message', 'Data Inserted successfully');
        } catch (\throwable $th) {
            return $th;
        }
    }

    public function admission_edit($id)
    {
        try {
            $data = admissionRequi::find($id);
            return response()->json([
                'status' => 200,
                'data' => $data,
            ]);
        } catch (\throwable $th) {
            return $th;
        }
    }
    public function admission_update(request $request)
    {
        try {
            $info_id = $request->input('info_id');
            $testimonial = admissionRequi::find($info_id);
            $testimonial->requiHeading = $request->input('requiHeading');
            $testimonial->requiText = $request->input('requiText');
            $testimonial->transHeading = $request->input('transHeading');
            $testimonial->transText = $request->input('transText');
            $testimonial->update();
            return back()->with('message', 'Data Updated successfully');
        } catch (\throwable $th) {
            return $th;
        }
    }
    public function all_course_store(request $request)
    {
        try {
            $data = new Course();
            //        $data->C_catagories = $request->C_catagories;
            $data->C_title = $request->C_title;
            $data->C_subtitle = $request->C_subtitle;
            $data->C_price = $request->C_price;
            $data->C_star = $request->C_star;
            //            image add start
            $request->validate([
                'image' => 'nullable|image|mimes:jpg,png,svg,gif,jpeg'
            ]);
            if ($request->hasFile('C_image')) {
                $imageName = time() . '.' . $request->C_image->getClientOriginalExtension();
                $request->C_image->move(public_path('upload/studentImage'), $imageName);
                $data->C_image = $imageName;
            }
            //            image add end
            $data->save();
            return back()->with('message', 'Data Inserted successfully');
        } catch (\throwable $th) {
            return $th;
        }
    }
    public function all_course_delete($id)
    {
        try {
            $data = Course::find($id);
            //            image delete from folder and database start
            $public_path = public_path('upload/studentImage/' . $data->C_image);
            if (file_exists($public_path)) {
                unlink($public_path);
            }
            //            image delete from folder and database end
            $data->delete();
            return back()->with('message', 'Data deleted successfully');
        } catch (\throwable $th) {
            return $th;
        }
    }
    public function all_course_edit($id)
    {
        try {
            $data = Course::find($id);
            return response()->json([
                'status' => 200,
                'data' => $data,
            ]);
        } catch (\throwable $th) {
            return $th;
        }
    }
    public function all_course_update(request $request)
    {
        try {
            $info_id = $request->input('info_id');
            $testimonial = Course::find($info_id);
            $testimonial->C_title = $request->input('C_title');
            $testimonial->C_subtitle = $request->input('C_subtitle');
            $testimonial->C_price = $request->input('C_price');
            $testimonial->update();
            return back()->with('message', 'Data Updated successfully');
        } catch (\throwable $th) {
            return $th;
        }
    }

    public function hero_carousel()
    {
        try {
            $value = HeroCarousel::all();
            return view('backend.pages.hero_carousel', compact('value'));
        } catch (\throwable $th) {
            return $th;
        }
    }

    public function hero_carousel_store(request $request)
    {
        try {
            $data = new HeroCarousel();
            //            image add start
            $request->validate([
                'image' => 'nullable|image|mimes:jpg,png,svg,gif,jpeg'
            ]);
            if ($request->hasFile('H_image')) {
                $imageName = time() . '.' . $request->H_image->getClientOriginalExtension();
                $request->H_image->move(public_path('upload/studentImage'), $imageName);
                $data->H_image = $imageName;
            }
            //            image add end
            $data->Carousel_heading = $request->Carousel_heading;
            $data->btn_name = $request->btn_name;
            $data->save();
            return back()->with('message', 'Data Inserted successfully');
        } catch (\throwable $th) {
            return $th;
        }
    }

    public function hero_carousel_delete($id)
    {
        try {
            $data = HeroCarousel::find($id);
            //            image delete from folder and database start
            $public_path = public_path('upload/studentImage/' . $data->H_image);
            if (file_exists($public_path)) {
                unlink($public_path);
            }
            //            image delete from folder and database end
            $data->delete();
            return back()->with('message', 'Data deleted successfully');
        } catch (\throwable $th) {
            return $th;
        }
    }
    public function hero_carousel_edit($id)
    {
        try {
            $data = HeroCarousel::find($id);
            return response()->json([
                'status' => 200,
                'data' => $data,
            ]);
        } catch (\throwable $th) {
            return $th;
        }
    }
    public function hero_carousel_update(request $request)
    {
        try {
            $info_id = $request->input('info_id');
            $testimonial = HeroCarousel::find($info_id);
            $testimonial->Carousel_heading = $request->input('Carousel_heading');
            $testimonial->btn_name = $request->input('btn_name');
            $testimonial->update();
            return back()->with('message', 'Data Updated successfully');
        } catch (\throwable $th) {
            return $th;
        }
    }

    public function academic_work()
    {
        try {
            $value = AcademicWork::all();
            return view('backend.pages.academic_work', compact('value'));
        } catch (\throwable $th) {
            return $th;
        }
    }

    public function academic_work_store(request $request)
    {
        try {
            $data = new AcademicWork();
            //            image add start
            $request->validate([
                'image' => 'nullable|image|mimes:jpg,png,svg,gif,jpeg'
            ]);
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('upload/studentImage'), $imageName);
                $data->image = $imageName;
            }
            //            image add end
            $data->heading = $request->heading;
            $data->description = $request->description;
            $data->btn_learn = $request->btn_learn;
            $data->save();
            return back()->with('message', 'Data Inserted successfully');
        } catch (\throwable $th) {
            return $th;
        }
    }

    public function academic_work_delete($id)
    {
        try {
            $data = AcademicWork::find($id);
            //            image delete from folder and database start
            $public_path = public_path('upload/studentImage/' . $data->image);
            if (file_exists($public_path)) {
                unlink($public_path);
            }
            //            image delete from folder and database end
            $data->delete();
            return back()->with('message', 'Data deleted successfully');
        } catch (\throwable $th) {
            return $th;
        }
    }
    public function academic_work_edit($id)
    {
        try {
            $data = AcademicWork::find($id);
            return response()->json([
                'status' => 200,
                'data' => $data,
            ]);
        } catch (\throwable $th) {
            return $th;
        }
    }

    public function academic_work_update(request $request)
    {
        try {
            $info_id = $request->input('info_id');
            $testimonial = AcademicWork::find($info_id);
            $testimonial->heading = $request->input('heading');
            $testimonial->description = $request->input('description');
            $testimonial->btn_learn = $request->input('btn_learn');
            $testimonial->update();
            return back()->with('message', 'Data Updated successfully');
        } catch (\throwable $th) {
            return $th;
        }
    }


    public function about_university()
    {
        try {
            $value = AboutUniversity::all();
            return view('backend.pages.about_university', compact('value'));
        } catch (\throwable $th) {
            return $th;
        }
    }


    public function about_university_store(request $request)
    {
        try {
            $data = new AboutUniversity();
            $data->heading = $request->heading;
            $data->description = $request->description;
            $data->btn_learn = $request->btn_learn;
            $data->save();
            return back()->with('message', 'Data Inserted successfully');
        } catch (\throwable $th) {
            return $th;
        }
    }

    public function about_university_delete($id)
    {
        try {
            $data = AboutUniversity::find($id);
            $data->delete();
            return back()->with('delete-message', 'Data deleted successfully');
        } catch (\throwable $th) {
            return $th;
        }
    }
    public function about_university_edit($id)
    {
        try {
            $data = AboutUniversity::find($id);
            return response()->json([
                'status' => 200,
                'data' => $data,
            ]);
        } catch (\throwable $th) {
            return $th;
        }
    }

    public function about_university_update(request $request)
    {
        try {
            $info_id = $request->input('info_id');
            $testimonial = AboutUniversity::find($info_id);
            $testimonial->heading = $request->input('heading');
            $testimonial->description = $request->input('description');
            $testimonial->btn_learn = $request->input('btn_learn');
            $testimonial->update();
            return back()->with('message', 'Data Updated successfully');
        } catch (\throwable $th) {
            return $th;
        }
    }


    public function key_feature()
    {
        try {
            $value = KeyFeature::all();
            return view('backend.pages.key_feature', compact('value'));
        } catch (\throwable $th) {
            return $th;
        }
    }

    public function key_feature_store(request $request)
    {
        try {
            $data = new KeyFeature();
            //            image add start
            $request->validate([
                'image' => 'nullable|image|mimes:jpg,png,svg,gif,jpeg'
            ]);
            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move(public_path('upload/studentImage'), $imageName);
                $data->image = $imageName;
            }
            //            image add end
            $data->heading = $request->heading;
            $data->description = $request->description;
            $data->save();
            return back()->with('message', 'Data Inserted successfully');
        } catch (\throwable $th) {
            return $th;
        }
    }


    public function key_feature_delete($id)
    {
        try {
            $data = KeyFeature::find($id);
            //            image delete from folder and database start
            $public_path = public_path('upload/studentImage/' . $data->image);
            if (file_exists($public_path)) {
                unlink($public_path);
            }
            //            image delete from folder and database end
            $data->delete();
            return back()->with('message', 'Data deleted successfully');
        } catch (\throwable $th) {
            return $th;
        }
    }

    public function key_feature_edit($id)
    {
        try {
            $data = KeyFeature::find($id);
            return response()->json([
                'status' => 200,
                'data' => $data,
            ]);
        } catch (\throwable $th) {
            return $th;
        }
    }
    public function key_feature_update(request $request)
    {
        try {
            $info_id = $request->input('info_id');
            $testimonial = KeyFeature::find($info_id);
            $testimonial->heading = $request->input('heading');
            $testimonial->description = $request->input('description');
            $testimonial->update();
            return back()->with('message', 'Data Updated successfully');
        } catch (\throwable $th) {
            return $th;
        }
    }

    public function backend_contact()
    {
        try {
            $value = FrontendContact::all();
            return view('backend.pages.backend_contact', compact('value'));
        } catch (\throwable $th) {
            return $th;
        }
    }
    public function backend_contact_delete($id)
    {
        try {
            $data = FrontendContact::find($id);
            $data->delete();
            return back()->with('delete-message', 'Data deleted successfully');
        } catch (\throwable $th) {
            return $th;
        }
    }
}
