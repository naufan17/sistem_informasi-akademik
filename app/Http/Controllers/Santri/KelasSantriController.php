<?php

namespace App\Http\Controllers\Santri;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CumulativeStudy;
use App\Models\Course;
use PDF;

class KelasSantriController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id)
    {
        $cumulative_studies = CumulativeStudy::leftjoin('users', 'cumulative_studies.id_santri', '=', 'users.id')
                                            ->leftjoin('courses', 'cumulative_studies.id_course', '=', 'courses.id_course')
                                            ->leftjoin('schedules', 'courses.id_schedule', '=', 'schedules.id_schedule')
                                            ->leftjoin('grades', 'courses.id_grade', '=', 'grades.id_grade')
                                            ->where('id_santri', $id)
                                            ->orderBy('sem')
                                            ->get();
        
        $filter_semesters = CumulativeStudy::select('semester')
                                            ->where('id_santri', $id)
                                            ->distinct()
                                            ->get();

        $filter_years = CumulativeStudy::select('year')
                                        ->where('id_santri', $id)
                                        ->distinct()
                                        ->get();

        return view('santri.kelas', compact('cumulative_studies', 'filter_semesters', 'filter_years'));
    }

    public function filterKelas(Request $request)
    {
        $cumulative_studies = CumulativeStudy::leftjoin('users', 'cumulative_studies.id_santri', '=', 'users.id')
                                            ->leftjoin('courses', 'cumulative_studies.id_course', '=', 'courses.id_course')
                                            ->leftjoin('schedules', 'courses.id_schedule', '=', 'schedules.id_schedule')
                                            ->leftjoin('grades', 'courses.id_grade', '=', 'grades.id_grade')
                                            ->where('id_santri', $request->id)
                                            ->where('semester', $request->semester)
                                            ->where('year', $request->tahun_ajaran)
                                            ->orderBy('sem')
                                            ->get();
                
        $filter_semesters = CumulativeStudy::select('semester')
                                            ->where('id_santri', $request->id)
                                            ->where('semester', $request->semester)
                                            ->distinct()
                                            ->get();
        
        $filter_years = CumulativeStudy::select('year')
                                        ->where('id_santri', $request->id)
                                        ->where('year', $request->tahun_ajaran)
                                        ->distinct()
                                        ->get();

        return view('santri.kelas', compact('cumulative_studies', 'filter_semesters', 'filter_years'));
    }

    public function formCreate($id)
    {
        if(date('m') <= 06 ){
            $cumulativestudys = CumulativeStudy::leftjoin('users', 'cumulative_studies.id_santri', '=', 'users.id')
                                                ->leftjoin('courses', 'cumulative_studies.id_course', '=', 'courses.id_course')
                                                ->orderBy('sem')
                                                ->where('id_santri', $id)
                                                ->where('semester', 'Genap')
                                                ->where('year', date('Y')-1 . '/' . date('Y'))
                                                ->get();

        }elseif(date('m') > 06 ){
            $cumulativestudys = CumulativeStudy::leftjoin('users', 'cumulative_studies.id_santri', '=', 'users.id')
                                                ->leftjoin('courses', 'cumulative_studies.id_course', '=', 'courses.id_course')
                                                ->orderBy('sem')
                                                ->where('id_santri', $id)
                                                ->where('semester', 'Ganjil')
                                                ->where('year', date('Y') . '/' . date('Y')+1)
                                                ->get();
        }

        $courses = Course::leftjoin('users', 'courses.id_ustadz', '=', 'users.id')
                        ->leftjoin('grades', 'courses.id_grade', '=', 'grades.id_grade')
                        ->leftjoin('schedules', 'courses.id_schedule', '=', 'schedules.id_schedule')
                        ->orderBy('sem')
                        ->get();

        return view('santri.tambah-santri-kelas', compact('cumulativestudys', 'courses', 'id'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'id_santri' => 'required', 'number',
            'id_course' => 'required', 'number',
        ]);

        if(date('m') == 01 || date('m') == 07){

            if(date('m') <= 06 ){
                CumulativeStudy::firstOrCreate([
                    'year' => date('Y')-1 . '/' . date('Y'),
                    'semester' => 'Genap',
                    'id_santri' => $request->id_santri,
                    'id_course' => $request->id_course,
                ]);
        
            }elseif(date('m') > 06 ){
                CumulativeStudy::firstOrCreate([
                    'year' => date('Y') . '/' . date('Y')+1,
                    'semester' => 'Ganjil',
                    'id_santri' => $request->id_santri,
                    'id_course' => $request->id_course,
                ]);
            }
        }

        return redirect()->route('santri.kelas.form-create', [$request->id_santri]);
    }

    public function delete($id)
    {
        $id_santri = 0;
        foreach(CumulativeStudy::where('id_cumulative_study', $id)->get() as $cumulativestudys){
            $id_santri = $cumulativestudys->id_santri;
        }

        if(date('m') == 01 || date('m') == 07){
            CumulativeStudy::where('id_cumulative_study', $id)->delete();
        }
        
        return redirect()->route('santri.kelas.form-create', [$id_santri]);
    }

    public function detail($id)
    {
        $courses = Course::leftjoin('users', 'courses.id_ustadz', '=', 'users.id')
                        ->leftjoin('schedules', 'courses.id_schedule', '=', 'schedules.id_schedule')
                        ->leftjoin('grades', 'courses.id_grade', '=', 'grades.id_grade')
                        ->where('id_course', $id)
                        ->get();

        return view('santri.detail-kelas', compact('courses'));
    }

    public function cetakKelas($id)
    {
        $cumulative_studies = CumulativeStudy::leftjoin('users', 'cumulative_studies.id_santri', '=', 'users.id')
                                            ->leftjoin('courses', 'cumulative_studies.id_course', '=', 'courses.id_course')
                                            ->leftjoin('schedules', 'courses.id_schedule', '=', 'schedules.id_schedule')
                                            ->leftjoin('grades', 'courses.id_grade', '=', 'grades.id_grade')
                                            ->where('id_santri', $id)
                                            ->orderBy('semester')
                                            ->get();

        $pdf = PDF::loadview('santri.cetak-kelas', compact('cumulative_studies'));

        return $pdf->stream();
    }
}
