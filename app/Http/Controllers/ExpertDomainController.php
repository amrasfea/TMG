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

    public function DeleteExpertDomainView() {
        return view('DeleteExpertDomainInformation.DeleteExpertDomainView');
    }

    public function DeleteResearchPublicationView() {
        return view('DeleteResearch&Publication.DeleteResearchPublicationView');
    }

    public function DisplayExpertDomainDetailsView() {
        return view('DisplayExpertDetails.DisplayExpertDomainDetailsView');
    }

    public function DisplayResearchPublicationView() {
        return view('DisplayResearch&Publication.DisplayResearchPublicationView');
    }

    public function GenerateReport() {
        return view('GeneratePlatinumReport.GenerateReport');
    }

    public function SearchPlatinumExpertDomainView() {
        return view('SearchPlatinumExpertDomain.SearchPlatinumExpertDomainView');
    }

    public function SearchResearchPublicationView() {
        return view('SearchResearch&Publication.SearchResearchPublicationView');
    }

    public function UpdateExpertDomainView() {
        return view('UpdateExpertDomainView.UpdateExpertDomainView');
    }

    public function UpdateResearchPublicationView() {
        return view('UpdateResearch&Publication.UpdateResearchPublicationView');
    }

    public function SearchPlatinumExpertDomainView() {
        return view('MentorSearchPlatinumExpDom.SearchPlatinumExpertDomainView');
    }

    public function ViewPlatinumExpertDomain() {
        return view('MentorViewPlatinumExpDom.ViewPlatinumExpertDomain');
    }

}
