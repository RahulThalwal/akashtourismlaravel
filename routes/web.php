<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::view('/services', 'services')->name('services');
Route::view('/about', 'about')->name('about');
Route::view('/privacy', 'privacy')->name('privacy');
Route::view('/contact', 'contact')->name('contact');
Route::view('/rajasthan-tour', 'destinations.rajasthan.rajasthan')->name('destinations.rajasthan');
Route::view('/delhi', 'destinations.delhi.show')->name('destinations.delhi');
Route::view('/jammu-kashmir', 'destinations.jammu.jammu')->name('destinations.jammu-kashmir');
Route::view('/himachal-pradesh', 'destinations.himachal.himachal')->name('destinations.himachal-pradesh');
Route::post('/contact', function (Request $request) {
    $data = $request->validate([
        'name' => ['required', 'string', 'max:100'],
        'email' => ['required', 'email', 'max:255'],
        'message' => ['nullable', 'string', 'max:3000'],
    ]);

    Mail::raw("Name: {$data['name']}\nEmail: {$data['email']}\n\nMessage:\n" . ($data['message'] ?? ''), function ($mail) use ($data) {
        $mail->to('info@akashjourney.com')
            ->replyTo($data['email'], $data['name'])
            ->subject('New Akash Tourism enquiry from ' . $data['name']);
    });

    if ($request->expectsJson()) {
        return response()->json(['message' => 'Thanks, ' . $data['name'] . '. Your enquiry has been sent.']);
    }

    return back()->with('contact_status', 'Thanks, ' . $data['name'] . '. Your enquiry has been sent.');
})->name('contact.submit');

$destinations = [
    'agra' => ['name' => 'Agra', 'eyebrow' => 'A monument to wonder', 'title' => 'Let the marble glow.', 'description' => 'Go beyond a single photograph. Agra rewards early starts, slower walks, and the stories held in every carved and inlaid detail.', 'image' => 'https://images.unsplash.com/photo-1564507592333-c60657eea523?auto=format&fit=crop&w=1400&q=85', 'duration' => '2 Days / 1 Night'],
    'himachal-pradesh' => ['name' => 'Himachal Pradesh', 'eyebrow' => 'Take the scenic route', 'title' => 'Make room for mountain time.', 'description' => 'Trade busy days for pine trails, small cafés, warm homestays, and the kind of mornings that do not need an agenda.', 'image' => 'https://images.unsplash.com/photo-1626621341517-bbf3d9990a23?auto=format&fit=crop&w=1400&q=85', 'duration' => '5 Days / 4 Nights'],
];

$blogs = require resource_path('views/blog/data.php');

Route::get('/', function () use ($blogs) {
    $latestBlogs = collect($blogs)->sortByDesc(fn (array $blog) => strtotime($blog['date']))->take(3)->all();

    return view('welcome', ['latestBlogs' => $latestBlogs]);
});

Route::get('/blog', function () use ($blogs) {
    $latestBlogs = collect($blogs)->sortByDesc(fn (array $blog) => strtotime($blog['date']))->all();

    return view('blog.index', ['blogs' => $latestBlogs]);
})->name('blog.index');

Route::get('/blog/{slug}', function (string $slug) use ($blogs) {
    abort_unless(isset($blogs[$slug]), 404);

    return view('blog.show', ['blog' => $blogs[$slug], 'slug' => $slug]);
})->name('blog.show');

Route::get('/{slug}', function (string $slug) use ($destinations) {
    abort_unless(isset($destinations[$slug]), 404);

    return view('destinations.show', ['destination' => $destinations[$slug]]);
})->name('destinations.show');
