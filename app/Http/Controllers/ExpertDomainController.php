<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpertDomainController extends Controller
{
    public function AddExpertDomainInformation() {
        return view('AddExpertDomainInformation.AddExpertDomainInformation');
    }

    public function AddResearchPublicationView() {
        return view('AResearch&Publication.AddResearch&PublicationView');
    }
}
