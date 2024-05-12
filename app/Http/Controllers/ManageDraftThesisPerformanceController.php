<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageDraftThesisPerformanceController extends Controller
{
    public function GenerateDraftThesisPerformanceReport() {
        return view('ManageDraftThesisPerformanceView.GenerateDraftThesisPerformanceReport');
    }
    public function DraftCompletionDateView() {
        return view('ManageDraftThesisPerformanceView.Platinum.DraftCompletionDateView');
    }
    public function DraftDaystoPrepareView() {
        return view('ManageDraftThesisPerformanceView.Platinum.DraftDaystoPrepareView');
    }
    public function DraftNumView() {
        return view('ManageDraftThesisPerformanceView.Platinum.DraftNumView');
    }
    public function DraftStartDateView() {
        return view('ManageDraftThesisPerformanceView.Platinum.DraftStartDateView');
    }
    public function DraftTotalPageView() {
        return view('ManageDraftThesisPerformanceView.Platinum.DraftTotalPageView');
    }
    public function ThesisTitleView() {
        return view('ManageDraftThesisPerformanceView.Platinum.ThesisTitleView');
    }
    public function AllPlatinumDraftCompletionDateView() {
        return view('ManageDraftThesisPerformanceView.Mentor.AllPLatinumDraftCompletionDateView');
    }
    public function AllPlatinumDraftDaystoPrepareView() {
        return view('ManageDraftThesisPerformanceView.Mentor.AllPlatinumDraftDaystoPrepareView');
    }
    public function AllPlatinumDraftNumView() {
        return view('ManageDraftThesisPerformanceView.Mentor.AllPlatinumDraftNumView');
    }
    public function AllPlatinumDraftStartDateView() {
        return view('ManageDraftThesisPerformanceView.Mentor.AllPlatinumDraftStartDateView');
    }
    public function AllPlatinumDraftTotalPageView() {
        return view('ManageDraftThesisPerformanceView.Mentor.AllPlatinumDraftTotalPageView');
    }
    public function AllPlatinumThesisTitleView() {
        return view('ManageDraftThesisPerformanceView.Mentor.AllPlatinumThesisTitleView');
    }
    public function PlatinumDraftCompletionDateView() {
        return view('ManageDraftThesisPerformanceView.CRMP.PLatinumDraftCompletionDateView');
    }
    public function PlatinumDraftDaystoPrepareView() {
        return view('ManageDraftThesisPerformanceView.CRMP.PlatinumDraftDaystoPrepareView');
    }
    public function PlatinumDraftNumView() {
        return view('ManageDraftThesisPerformanceView.CRMP.PlatinumDraftNumView');
    }
    public function PlatinumDraftStartDateView() {
        return view('ManageDraftThesisPerformanceView.CRMP.PlatinumDraftStartDateView');
    }
    public function PlatinumDraftTotalPageView() {
        return view('ManageDraftThesisPerformanceView.CRMP.PlatinumDraftTotalPageView');
    }
    public function PlatinumThesisTitleView() {
        return view('ManageDraftThesisPerformanceView.CRMP.PlatinumThesisTitleView');
    }
}
