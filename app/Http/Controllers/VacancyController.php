<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Specialization;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    public function vacancy() {

        $vacancies = Vacancy::where('status', '=', 1)->get();
        $specializations = Specialization::all();
        $settings = Setting::where('page', '=', 'vacancy')->first();

        if (str_ends_with($settings->file, 'png') || str_ends_with($settings->file, 'jpg')) {
            $img = true;
        } else {
            $img = false;
        }

        return view('vacancy', [
            'vacancies' => $vacancies,
            'specializations' => $specializations,
            'settings' => $settings,
            'img' => $img
        ]);
    }

    public function vacancies(Request $request) {

        $selected = (array)$request->get('vacancy');

        if (count($selected) === 0 || in_array('all', $selected)) {
            $vacancies = Vacancy::where('status', '=', 1)->get();
        } else {
            $vacancies = Vacancy::where('status', '=', 1)->whereIn('specialization_id', $selected)->get();
        }

        return view('components.vacancy-item',[
            'vacancies' => $vacancies
        ]);

    }
}
