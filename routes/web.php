<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Livewire\BusinessForm;
use App\Livewire\ExpoForm;
use App\Livewire\AboutComponent;
use App\Livewire\BlogComponent;
use App\Livewire\DashboardComponent;

use App\Livewire\ExhibitorComponent;
use App\Livewire\HighlightComponent;
use App\Livewire\MediaComponent;
use App\Livewire\VisitorComponent;
use App\Livewire\WelcomeComponent;
use App\Livewire\DestinationComponent;
use App\Livewire\CrmImageComponent;
use App\Livewire\CommunityComponent;
use App\Livewire\WeddingindiaawardComponent;
use App\Livewire\CatererComponent;
use App\Livewire\HostedbuyerprogramComponent;
use App\Livewire\WeddingindiatvComponent;
use App\Livewire\BlogdetailComponent;
use App\Livewire\TicketComponent;
Use App\Livewire\ExhibitwithusComponent;
//use App\Livewire\WikiArticleEditorComponent;

use App\Models\User;

// Route::view('/', 'welcome');
Route::get('/', WelcomeComponent::class)->name('welcome.main');

Route::get('/blog', BlogComponent::class)->name('blog.service');

Route::get('/blog/{slug}', BlogdetailComponent::class)->name('blogdetail.service');
//Route::get('/wiki/{slug?}', WikiArticleEditorComponent::class)->name('wiki.show');

Route::get('/exhibitor/{board}', ExhibitorComponent::class)->name('front.exhibitor');

Route::get('/the_event/{board}', AboutComponent::class)->name('event.intro');

//form
Route::get('/visitorticketinquiry', TicketComponent::class)->name('ticket.plan');
Route::get('/exhibit-with-us', ExhibitwithusComponent::class)->name('exhibit.plan');

Route::get('/hosted_buyer_program/{board}', HostedbuyerprogramComponent::class)->name('HostedBuyerProgram.intro');
Route::get('/weddingindiatv/{board}', WeddingindiatvComponent::class)->name('weddingindiatv.intro');

Route::get('/{board}/{location}/{title}', DestinationComponent::class)->name('destination.intro');

Route::get('/visitor/{board}', VisitorComponent::class)->name('visitor.details');

Route::get('/exhibitor/{board}', ExhibitorComponent::class)->name('exhibitor.service');
Route::get('/key_highlights/{board}', HighlightComponent::class)->name('hightlights.promo');

Route::get('/wedding-venues-planners/{board}', CommunityComponent::class)->name('community.promo');
Route::get('/wedding-india-award/{board}', WeddingindiaawardComponent::class)->name('WeddingIndiaAward.promo');
Route::get('/global-wedding-catering-marketplace/{board}', CatererComponent::class)->name('Caterer.promo');


Route::get('/media_centre/{board}', MediaComponent::class)->name('media.advertise');

Route::get('/exhibitor', Businessform::class)->name('form.lead');
Route::get('/detailo', ExpoForm::class)->name('form.exhibitor');

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


require __DIR__ . '/auth.php';


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/create-admin', function () {

//     User::updateOrCreate(
//         ['email' => 'neha@weddingindiaexpo.com'],
//         [
//             'name'              => 'neha',
//             'email_verified_at' => now(),
//             'password'          => Hash::make('neha@weddingindiaexpo.com'),
//             'role'              => 'tcr',
//         ]
//     );

//     return "Admin user created successfully!";
// });

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return redirect()->route('dashboard.service', [
            'board' => 'leads'
        ]);
    })->name('dashboard');

    Route::get('/crm/{board}', DashboardComponent::class)
        ->name('dashboard.service');

    Route::get('/crm/{board}/image', CrmImageComponent::class)
        ->name('dashboard.image');
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

// Route::middleware(['auth'])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });


// Route::get('/crm/{board}', DashboardComponent::class)->name('dashboard.service');