<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagePublicationController extends Controller
{
    public function AddPublication()
    {
        return view('ManagePublicationView.Platinum.AddPublication');
    }

    public function EditPublication()
    {
        return view('ManagePublicationView.Platinum.EditPublication');
    }

    public function OwnPublication()
    {
        return view('ManagePublicationView.Platinum.OwnPublication');
    }

    public function SearchPublication()
    {
        return view('ManagePublicationView.Platinum.SearchPublication');
    }

    public function ExpertDomainPublication()
    {
        return view('ManagePublicationView.Mentor.ExpertDomainPublication');
    }

    public function PlatinumPublication()
    {
        return view('ManagePublicationView.Mentor.PlatinumPublication');
    }

    public function PublicationReport()
    {
        return view('ManagePublicationView.Mentor.PublicationReport');
    }

    public function RegisteredPlatinum()
    {
        return view('ManagePublicationView.Mentor.RegisteredPlatinum');
    }

    public function SearchPlatinum()
    {
        return view('ManagePublicationView.Mentor.SearchPlatinum');
    }


}
