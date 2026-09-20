<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::view('/services', 'services')->name('services');
Route::view('/about', 'about')->name('about');
Route::view('/privacy', 'privacy')->name('privacy');
Route::view('/contact', 'contact')->name('contact');
Route::view('/rajasthan', 'destinations.rajasthan')->name('destinations.rajasthan');
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
    'delhi' => ['name' => 'Delhi', 'eyebrow' => 'The capital of contrasts', 'title' => 'Old stories, new energy.', 'description' => 'Move through Delhi one layer at a time: spice-filled lanes, quiet tombs, generous tables, and the people who give the city its pulse.', 'image' => 'https://images.unsplash.com/photo-1587474260584-136574528ed5?auto=format&fit=crop&w=1400&q=85', 'duration' => '2 Days / 1 Night'],
    'agra' => ['name' => 'Agra', 'eyebrow' => 'A monument to wonder', 'title' => 'Let the marble glow.', 'description' => 'Go beyond a single photograph. Agra rewards early starts, slower walks, and the stories held in every carved and inlaid detail.', 'image' => 'https://images.unsplash.com/photo-1564507592333-c60657eea523?auto=format&fit=crop&w=1400&q=85', 'duration' => '2 Days / 1 Night'],
    'jammu-kashmir' => ['name' => 'Jammu & Kashmir', 'eyebrow' => 'Where the earth exhales', 'title' => 'Find your quiet altitude.', 'description' => 'Wake on still water, follow cedar-scented roads, and let the mountains set the pace for a journey that feels like a deep breath.', 'image' => 'https://images.unsplash.com/photo-1595815771614-ade9d652a65d?auto=format&fit=crop&w=1400&q=85', 'duration' => '4 Days / 3 Nights'],
    'himachal-pradesh' => ['name' => 'Himachal Pradesh', 'eyebrow' => 'Take the scenic route', 'title' => 'Make room for mountain time.', 'description' => 'Trade busy days for pine trails, small cafés, warm homestays, and the kind of mornings that do not need an agenda.', 'image' => 'https://images.unsplash.com/photo-1626621341517-bbf3d9990a23?auto=format&fit=crop&w=1400&q=85', 'duration' => '5 Days / 4 Nights'],
];

$blogs = [
    'delhi-food-trail' => [
        'title' => 'A plate-by-plate guide to Delhi',
        'category' => 'Food & culture',
        'location' => 'Delhi, India',
        'read_time' => '6 min read',
        'date' => '12 September 2024',
        'image' => 'https://images.unsplash.com/photo-1585937421612-70a008356fbe?auto=format&fit=crop&w=1400&q=85',
        'intro' => 'Delhi is best understood one bite at a time. Follow the smoke, the spice, and the stories around every shared table.',
        'body' => [
            'Start early in Old Delhi, when the lanes are still cool and the first kettles of chai are beginning to sing. The city wakes in layers: bread in the tandoor, cardamom in the air, and a thousand small conversations spilling into the street.',
            'By afternoon, make room for a slower meal. Delhi rewards curiosity, so leave the itinerary loose enough for a shopkeeper’s recommendation or a turn down a lane you did not plan to take.',
        ],
    ],
    'agra-beyond-taj' => [
        'title' => 'Agra beyond the Taj Mahal',
        'category' => 'Heritage',
        'location' => 'Agra, Uttar Pradesh',
        'read_time' => '5 min read',
        'date' => '04 September 2024',
        'image' => 'https://images.unsplash.com/photo-1564507592333-c60657eea523?auto=format&fit=crop&w=1400&q=85',
        'intro' => 'The Taj is only the beginning. Spend a little longer in Agra and the city reveals a quieter, more textured kind of wonder.',
        'body' => [
            'Arrive before sunrise and let the marble change colour in front of you. Then take the long way back through the old city, where inlay artists and generations of storytellers keep the Mughal chapter alive.',
            'At dusk, cross the river to Mehtab Bagh. The view is familiar, but the silence on the opposite bank makes it feel entirely new.',
        ],
    ],
    'kashmir-slow-travel' => [
        'title' => 'The gentle art of slowing down in Kashmir',
        'category' => 'Mountains & wild',
        'location' => 'Jammu & Kashmir, India',
        'read_time' => '7 min read',
        'date' => '28 August 2024',
        'image' => 'https://images.unsplash.com/photo-1595815771614-ade9d652a65d?auto=format&fit=crop&w=1400&q=85',
        'intro' => 'In Kashmir, the best days are measured in cups of kahwa, lake light, and the distance between one beautiful view and the next.',
        'body' => [
            'Choose a houseboat with a view of the waking lake. There is no need to rush the morning; the mountains will still be there after breakfast, and the shikara ride is better when the water is quiet.',
            'Leave space for the weather to change your plans. A soft rain on cedar roofs, a shared lunch, or a sudden patch of clear sky can become the most memorable part of the route.',
        ],
    ],
    'himachal-cafe-trail' => [
        'title' => 'A café trail through the Himachal hills',
        'category' => 'Slow travel',
        'location' => 'Himachal Pradesh, India',
        'read_time' => '4 min read',
        'date' => '16 August 2024',
        'image' => 'https://images.unsplash.com/photo-1626621341517-bbf3d9990a23?auto=format&fit=crop&w=1400&q=85',
        'intro' => 'Trade traffic for pine trails and find the small cafés that make Himachal feel like a place you could stay forever.',
        'body' => [
            'The best Himachal cafés are often found at the end of a walk. Follow the scent of fresh bread, sit near a window, and let a local playlist become the soundtrack to an unplanned afternoon.',
            'Between stops, take the forest roads slowly. This is a landscape that gives more back when you stop trying to see it all at once.',
        ],
    ],
    'nirmal-purja-nimsdai' => [
        'title' => 'Nirmal Purja: the impossible made possible',
        'category' => 'People & adventure',
        'location' => 'The Himalayas, Nepal',
        'read_time' => '7 min read',
        'date' => '15 September 2024',
        'image' => asset('images/nirmal.jpg'),
        'intro' => 'Known as Nims or Nimsdai, Nirmal Purja has changed the way the world talks about high-altitude adventure, courage, and possibility.',
        'keywords' => 'Nirmal Purja, Nims, Nimsdai, Project Possible, 14 Peaks, Himalayan mountaineering',
        'sections' => [
            ['heading' => 'Who is Nirmal Purja?', 'paragraphs' => ['Nirmal Purja, widely known as Nims or Nimsdai, is a Nepali-British mountaineer whose record-setting climbs have brought a new level of attention to Himalayan expedition culture. His work combines elite physical ability with a disciplined approach to logistics, teamwork, and risk.']],
            ['heading' => 'Project Possible and the 14 Peaks', 'paragraphs' => ['Nimsdai became internationally known through Project Possible, his extraordinary attempt to climb all fourteen of the world’s 8,000-metre peaks. He completed the challenge in six months and six days in 2019, a feat that reshaped expectations in Himalayan mountaineering.', 'His story is not only about speed or summit photographs. It is about preparation, teamwork, resilience, and a refusal to accept that a path is impossible simply because it has not been taken before.']],
            ['heading' => 'From the Gurkhas to the high Himalaya', 'paragraphs' => ['Before becoming a full-time climber, Purja served with the Brigade of Gurkhas and the British military’s Special Boat Service. That experience shaped the expedition habits people often associate with him: clear roles, calm decisions under pressure, and trust built long before the summit push.', 'His journey reached a wider audience through the documentary 14 Peaks: Nothing Is Impossible. But beyond the records and the film, the lasting story is collective. High-altitude achievements depend on Sherpa partners, logistics teams, families, and weather windows.']],
            ['heading' => 'What travellers can learn from Nimsdai', 'paragraphs' => ['The mountains demand respect at every altitude. Whether you are planning a serious expedition or simply taking your first high-country walk, the Nimsdai mindset begins with discipline, good local guidance, and knowing when the mountain is asking you to wait.']],
        ],
        'body' => [
            'Nimsdai became internationally known through Project Possible, his extraordinary attempt to climb all fourteen of the world’s 8,000-metre peaks. He completed the challenge in six months and six days in 2019, a feat that reshaped expectations in Himalayan mountaineering.',
            'His story is not only about speed or summit photographs. It is about preparation, teamwork, resilience, and a refusal to accept that a path is impossible simply because it has not been taken before. For travellers drawn to the Himalayas, his example is a reminder to approach these mountains with ambition matched by humility.',
            'The mountains demand respect at every altitude. Whether you are planning a serious expedition or simply taking your first high-country walk, the Nimsdai mindset begins with discipline, good local guidance, and knowing when the mountain is asking you to wait.',
            'Before becoming a full-time climber, Purja served with the Brigade of Gurkhas and the British military’s Special Boat Service. That experience shaped the expedition habits people often associate with him: clear roles, calm decisions under pressure, and trust built long before the summit push.',
            'His journey reached a wider audience through the documentary 14 Peaks: Nothing Is Impossible. But beyond the records and the film, the lasting story is collective. High-altitude achievements are never solo acts; they depend on Sherpa partners, logistics teams, families, weather windows, and a deep respect for the communities around the mountains.',
        ],
    ],
];

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
