<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function getCountries()
    {
        $countries = [
            'US' => 'United States',
            'UK' => 'United Kingdom',
            'DE' => 'Germany',
            'FR' => 'France',
            'AU' => 'Australia',
            'CA' => 'Canada',
            'JP' => 'Japan',
            'IT' => 'Italy',
            'ES' => 'Spain',
            'NL' => 'Netherlands'
        ];
        
        return response()->json($countries);
    }
    
    public function getBreeds(Request $request)
    {
        $country = $request->get('country');
        
        $breeds = [
            'US' => [
                'labrador' => 'Labrador Retriever',
                'golden_retriever' => 'Golden Retriever',
                'german_shepherd' => 'German Shepherd',
                'bulldog' => 'Bulldog',
                'poodle' => 'Poodle',
                'beagle' => 'Beagle',
                'rottweiler' => 'Rottweiler',
                'yorkshire_terrier' => 'Yorkshire Terrier',
                'siberian_husky' => 'Siberian Husky',
                'dachshund' => 'Dachshund'
            ],
            'UK' => [
                'labrador' => 'Labrador Retriever',
                'golden_retriever' => 'Golden Retriever',
                'bulldog' => 'Bulldog',
                'beagle' => 'Beagle',
                'cocker_spaniel' => 'Cocker Spaniel',
                'border_collie' => 'Border Collie',
                'jack_russell' => 'Jack Russell Terrier',
                'staffordshire_bull_terrier' => 'Staffordshire Bull Terrier',
                'west_highland_white_terrier' => 'West Highland White Terrier',
                'english_springer_spaniel' => 'English Springer Spaniel'
            ],
            'DE' => [
                'german_shepherd' => 'German Shepherd',
                'rottweiler' => 'Rottweiler',
                'dachshund' => 'Dachshund',
                'boxer' => 'Boxer',
                'great_dane' => 'Great Dane',
                'doberman' => 'Doberman Pinscher',
                'schnauzer' => 'Schnauzer',
                'weimaraner' => 'Weimaraner',
                'german_pointer' => 'German Pointer',
                'german_spitz' => 'German Spitz'
            ]
        ];
        
        $countryBreeds = $breeds[$country] ?? $breeds['US'];
        
        return response()->json($countryBreeds);
    }
    
    public function getBloodlines(Request $request)
    {
        $breed = $request->get('breed');
        
        $bloodlines = [
            'labrador' => [
                'all' => 'All Bloodlines',
                'american' => 'American Bloodline',
                'english' => 'English Bloodline',
                'canadian' => 'Canadian Bloodline',
                'australian' => 'Australian Bloodline',
                'show' => 'Show Bloodline',
                'working' => 'Working Bloodline',
                'field' => 'Field Bloodline'
            ],
            'golden_retriever' => [
                'all' => 'All Bloodlines',
                'american' => 'American Bloodline',
                'english' => 'English Bloodline',
                'canadian' => 'Canadian Bloodline',
                'show' => 'Show Bloodline',
                'working' => 'Working Bloodline',
                'field' => 'Field Bloodline'
            ],
            'german_shepherd' => [
                'all' => 'All Bloodlines',
                'german' => 'German Bloodline',
                'american' => 'American Bloodline',
                'east_german' => 'East German Bloodline',
                'west_german' => 'West German Bloodline',
                'working' => 'Working Bloodline',
                'show' => 'Show Bloodline'
            ],
            'bulldog' => [
                'all' => 'All Bloodlines',
                'english' => 'English Bloodline',
                'american' => 'American Bloodline',
                'french' => 'French Bloodline',
                'show' => 'Show Bloodline'
            ],
            'poodle' => [
                'all' => 'All Bloodlines',
                'standard' => 'Standard Bloodline',
                'miniature' => 'Miniature Bloodline',
                'toy' => 'Toy Bloodline',
                'show' => 'Show Bloodline',
                'working' => 'Working Bloodline'
            ]
        ];
        
        $breedBloodlines = $bloodlines[$breed] ?? $bloodlines['labrador'];
        
        return response()->json($breedBloodlines);
    }
}
