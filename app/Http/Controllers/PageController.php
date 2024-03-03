<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Advantage;
use App\Models\Category;
use App\Models\Certificate;
use App\Models\Event;
use App\Models\Map;
use App\Models\Request;
use App\Models\Resume;
use App\Models\Setting;

class PageController extends Controller
{
    public function index()
    {

        $category = Category::with('products')
            ->orderBY('order')
            ->where('status', '=', 1)
            ->where('visible', '=', 1)
            ->get();

        $events = Event::where('status', '=', 1)->where('visible', '=', 1)->get();

        $advantages = Advantage::where('status', '=', 1)->get();

        $settings = Setting::where('page', '=', 'home')->first();

        $maps = Map::orderBy('order')->get();

        return view('home', [
            'category' => $category,
            'events' => $events,
            'advantages' => $advantages,
            'settings' => $settings,
            'maps' => $maps
        ]);
    }

    public function about()
    {

        $settings = Setting::where('page', '=', 'about')->first();
        $certs = Certificate::take(5)->get();
        $about = About::first();

        if (str_ends_with($settings->file, 'png') || str_ends_with($settings->file, 'jpg')) {
            $img = true;
        } else {
            $img = false;
        }

        return view('about', [
            'settings' => $settings,
            'img' => $img,
            'about' => $about,
            'certs' => $certs
        ]);
    }

    public function partners()
    {

        $settings = Setting::where('page', '=', 'partners')->first();

        if (str_ends_with($settings->file, 'png') || str_ends_with($settings->file, 'jpg')) {

            $img = true;

        } else {

            $img = false;

        }

        $maps = Map::orderBy('order')->get();

        return view('partners', [
            'settings' => $settings,
            'img' => $img,
            'maps' => $maps
        ]);
    }

    public function contact()
    {
        $settings = Setting::where('page', '=', 'contact')->first();

        return view('contact', [
            'settings' => $settings
        ]);
    }

    public function form(\Illuminate\Http\Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'department' => 'required',
            'phone' =>'required',
            'comment' =>'required',
        ]);

        $form = new Request;
        $form->name = $validated['name'];
        $form->department = $validated['department'];
        $form->phone = $validated['phone'];
        $form->comment = $validated['comment'];
        $form->address = $request->address;
        $form->save();


        $botApiToken = env('BOT_ID', '6959250928:AAF01y6JK9Ce1nJXlwbQlOiBfTApOTV2_JQ');
        $channelId = env('CHAT_ID', '-4171976888');
        $text = 'Имя: '. $validated['name'] . '
Телефон:'.$validated['phone'].'
Отдел:'.$validated['department'].'
Адрес:'.$request->address.'
сообщение:'.$validated['comment'];

        $query = http_build_query([
            'chat_id' => $channelId,
            'text' => $text,
        ]);
        $url = "https://api.telegram.org/bot{$botApiToken}/sendMessage?{$query}";

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        curl_exec($curl);
        curl_close($curl);

        return redirect()->back();
    }

    public function vacancy(\Illuminate\Http\Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'phone' =>'required',
            'comment' =>'required',
        ]);

        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('public/resume');
        }

        $form = new Resume();
        $form->name = $validated['name'];
        $form->phone = $validated['phone'];
        $form->comment = $validated['comment'];
        $form->file = str_replace('public/', '', $path);
        $form->save();

        $botApiToken = env('BOT_ID', '6959250928:AAF01y6JK9Ce1nJXlwbQlOiBfTApOTV2_JQ');
        $channelId = env('CHAT_ID', '-4171976888');
        $text = '
Резюме
Имя: '. $validated['name'] . '
Телефон:'.$validated['phone'].'
сообщение:'.$validated['comment'];

        $query = http_build_query([
            'chat_id' => $channelId,
            'text' => $text,
        ]);

        $url = "https://api.telegram.org/bot{$botApiToken}/sendMessage?{$query}";

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        curl_exec($curl);
        curl_close($curl);

        return redirect()->back();
    }

    public function lang($lang)
    {
        $langs = ['en', 'ru', 'uz', 'ar'];

        if (in_array($lang, $langs) && in_array(request()->segment(1), $langs)) {

            return redirect()->to(

                str_replace(
                    config('app.url') . '/' . request()->segment(1),
                    config('app.url') . "/$lang",
                    url()->previous()
                )

            );

        } else {

            return redirect()->to(
                str_replace(
                    config('app.url'),
                    config('app.url') . "/$lang",
                    url()->previous()
                )
            );

        }
    }
}
