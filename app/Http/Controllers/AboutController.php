<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display the about page
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $teamMembers = [
            [
                'name' => 'Dwi Anggara Najwan Sugama',
                'role' => 'Project Manager',
                'image' => 'https://placehold.co/300x300/264653/FFFFFF?text=Dwi'
            ],
            [
                'name' => 'Nino Auliya Nahara',
                'role' => 'Lead Developer',
                'image' => 'https://placehold.co/300x300/2A9D8F/FFFFFF?text=Nino'
            ],
            [
                'name' => 'Reza Luthfi Akbar',
                'role' => 'UI/UX Designer',
                'image' => 'https://placehold.co/300x300/E9C46A/264653?text=Reza'
            ],
            [
                'name' => 'Tegar Adi Nugroho',
                'role' => 'Digital Marketing Strategist',
                'image' => 'https://placehold.co/300x300/F4A261/264653?text=Tegar'
            ]
        ];

        return view('about', compact('teamMembers'));
    }
}