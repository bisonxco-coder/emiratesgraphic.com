<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// LOGIN ROUTES
Route::get('login', ['as' => 'login', 'uses' => 'AuthController@showLoginForm']);
Route::post('login', ['as' => 'login.post', 'uses' => 'AuthController@authenticate']);
Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);
Route::post('send/mail', 'MailController@sendMail');
// Page Type
// Page Fields
// ADMIN ROUTES
Route::group(['middleware' => ['auth']], function () {
    Route::post('api/reorder/images/{typeId}/{entityId}', 'PageEntityController@reorderImages');
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });
    //Language CRUD
    Route::get('api/languages', 'LanguageController@index');
    Route::get('api/languages/{id}', 'LanguageController@show');
    Route::post('api/languages', 'LanguageController@store');
    Route::post('api/languages/{id}', 'LanguageController@update');
    Route::delete('api/languages/{id}', 'LanguageController@destroy');
    Route::post('api/reorder/languages', 'LanguageController@reorder');
    // Pages
    //Users
    Route::get('admin/api/users', 'UserController@index');
    Route::get('admin/api/users/{id}', 'UserController@show');
    Route::post('admin/api/users/post', 'UserController@store');
    Route::post('admin/api/users/update/{id}', 'UserController@update');
    Route::delete('admin/api/users/delete/{id}', 'UserController@destroy');
    Route::get('api/entities/{typeId}', 'PageEntityController@getAllEntities');
    Route::get('api/entities/show/{entityId}/{typeId}', 'PageEntityController@getEntityById');
    Route::post('api/entities/update/{entityId}', 'PageEntityController@updateManyEntities');
    Route::delete('api/entities/delete/{entityId}', 'PageEntityController@destroyEntity');
    Route::post('api/reorder/entities/{typeId}', 'PageEntityController@reorder');
    Route::get('api/pages/types', 'PageTypeController@index');
    Route::get('api/pages/types/{id}', 'PageTypeController@show');
    Route::post('api/pages/types', 'PageTypeController@store');
    Route::post('api/pages/types/{id}', 'PageTypeController@update');
    Route::delete('api/pages/types/{id}', 'PageTypeController@destroy');
    Route::get('api/pages/fields', 'PageFieldController@index');
    Route::get('api/pages/fields/{id}', 'PageFieldController@show');
    Route::post('api/pages/fields', 'PageFieldController@store');
    Route::post('api/pages/fields/{id}', 'PageFieldController@update');
    Route::delete('api/pages/fields/{id}', 'PageFieldController@destroy');
    Route::get('api/get/fields/{id}', 'PageEntityController@getEntity');
    // Pages
    Route::get('api/pages/entities', 'PageEntityController@index');
    Route::get('api/pages', 'PageController@index');
    Route::get('api/pages/all', 'PageController@getAllPages');
    Route::get('api/pages/{id}', 'PageController@show');
    Route::post('api/pages', 'PageController@store');
    Route::post('api/pages/{id}', 'PageController@update');
    Route::delete('api/pages/{id}', 'PageController@destroy');
    Route::get('api/get/types/{slug}', 'PageController@getPageType');
    //Delete Image
    Route::delete('api/images/{id}', 'PageEntityController@destroyImage');
    Route::post('api/pages/entities/{slug}', 'PageEntityController@store');
});
// Website Controller
Route::post('/websites/api/global', 'WebsiteController@globalRequest');
Route::get('/websites/api/pages', 'WebsiteController@pages');
Route::get('/websites/api/languages', 'LanguageController@index');
Route::get('/websites/api/modules/{pageSlug}', 'WebsiteController@modules');
Route::get('/test', 'WebsiteController@coll');
Route::get('api/module/latest/modules/{prefix}', 'WebsiteController@latestModules');
// Vue js route logic
Route::get('admin/{vue_capture?}', function () {
    $user = \Auth::user();
    if($user!= null){
        return redirect('admin/dashboard');
    }
    else{
        return redirect('login');
    }
})->where('vue_capture','[\/\w\.-]*');
// WEBSITE ROUTES
//Route::get('/{vue_capture?}', function () {
//    return view('index');
//})->where('vue_capture', '[\/\w\.-]*');
// Blade Views
Route::get('/', function () {
    return app('App\Http\Controllers\WebsiteController')->bladePageRedirect('home');
});


// 2026-10-19: /home duplicate of / -> 301
Route::get('/home', function () {
    return redirect('/', 301);
});

// 2026-10-19: /about (500 before) and /studio (old about page) -> /about-us
Route::get('/about', function () {
    return redirect('/about-us', 301);
});
Route::get('/studio', function () {
    return redirect('/about-us', 301);
});

// 2026-10-19: old 2-segment marketing service links (404) -> canonical inner pages
Route::get('/marketing-services/{name}', function ($name) {
    $map = array(
        'email-marketing' => '51/email-marketing',
        'google-ads' => '50/google-ads-agency',
        'google-ads-agency' => '50/google-ads-agency',
        'lead-generation' => '47/lead-generation',
        'seo' => '48/seo-agency',
        'seo-agency' => '48/seo-agency',
        'digital-marketing' => '45/digital-marketing',
        'social-media-marketing' => '46/social-media-marketing',
        'analytics' => '49/analytics',
    );
    if (!isset($map[$name])) {
        abort(404);
    }
    return redirect('/marketing-services/'.$map[$name], 301);
});

// 2026-10-19: dynamic sitemap (static public/sitemap.xml moved to backup)
Route::get('/sitemap.xml', function () {
    $base = 'https://emiratesgraphic.com';
    $exclude = array('home', 'thankyou', 'thank-you', '404', 'portfolio', 'prototype', 'sitemap');
    $urls = array();
    $homeView = resource_path('views/pages/home.blade.php');
    $urls[] = array($base.'/', is_file($homeView) ? date('c', filemtime($homeView)) : null, '1.00');
    foreach (\App\Entities\Page::orderBy('id')->get(['id', 'slug', 'updated_at']) as $page) {
        if (in_array($page->slug, $exclude) || !view()->exists('pages.'.$page->slug)) {
            continue;
        }
        $file = resource_path('views/pages/'.$page->slug.'.blade.php');
        $urls[] = array($base.'/'.$page->slug, is_file($file) ? date('c', filemtime($file)) : null, '0.80');
    }
    $sections = array('more_what_app' => 'app-services', 'more_what_web' => 'website-services', 'more_what_marketing' => 'marketing-services', 'blog_api' => 'blog');
    foreach ($sections as $typeSlug => $prefix) {
        $type = \App\Entities\PageType::where('slug', $typeSlug)->first();
        if ($type === null) {
            continue;
        }
        foreach (\App\Entities\PageEntity::where('type_id', $type->id)->orderBy('id', 'desc')->get(['id', 'slugable', 'updated_at']) as $entity) {
            if (!is_array($entity->slugable) || empty($entity->slugable['en'])) {
                continue;
            }
            $urls[] = array($base.'/'.$prefix.'/'.$entity->id.'/'.$entity->slugable['en'], $entity->updated_at ? $entity->updated_at->toAtomString() : null, $prefix === 'blog' ? '0.64' : '0.70');
        }
    }
    $xml = '<?xml version="1.0" encoding="UTF-8"?>'."\n".'<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'."\n";
    foreach ($urls as $u) {
        $xml .= '  <url><loc>'.htmlspecialchars($u[0], ENT_XML1, 'UTF-8').'</loc>'.($u[1] ? '<lastmod>'.$u[1].'</lastmod>' : '').'<priority>'.$u[2].'</priority></url>'."\n";
    }
    $xml .= '</urlset>'."\n";
    return response($xml, 200)->header('Content-Type', 'application/xml; charset=UTF-8');
});

Route::get('/faq', function () {
    return view('pages.faq');
});


Route::get('/{slug}', 'WebsiteController@bladePageRedirect');
Route::get('/{slug}/{id}/{slugable}', 'WebsiteController@bladePageDetails');