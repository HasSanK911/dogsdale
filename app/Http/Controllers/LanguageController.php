<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function switchLanguage($locale)
    {
        // Define supported languages
        $supportedLocales = ['en', 'es', 'fr', 'hi'];
        
        // Check if the requested locale is supported
        if (in_array($locale, $supportedLocales)) {
            App::setLocale($locale);
            Session::put('locale', $locale);
        }
        
        return redirect()->back();
    }
    
    public function getCurrentLanguage()
    {
        return App::getLocale();
    }
    
    public function getSupportedLanguages()
    {
        return [
            'en' => ['name' => 'English', 'native' => 'English'],
            'es' => ['name' => 'Spanish', 'native' => 'Español'],
            'fr' => ['name' => 'French', 'native' => 'Français'],
            'hi' => ['name' => 'Hindi', 'native' => 'हिन्दी'],
        ];
    }
}
