<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageWeeklyFocusController extends Controller
{
    public function FocusBlockView() {
        return view('ManageWeeklyFocusView.FocusBlockView');
    }
    public function AdminBlockView() {
        return view('ManageWeeklyFocusView.AdminBlockView');
    }
    public function RecoverylockView() {
        return view('ManageWeeklyFocusView.RecoveryBlockView');
    }
    public function SocialBlockView() {
        return view('ManageWeeklyFocusView.SocialBlockView');
    }
    public function GenerateWeeklyFocusReport() {
        return view('ManageWeeklyFocusView.GenerateWeeklyFocusReport');
    }
    public function FocusDateView() {
        return view('ManageWeeklyFocusView.Platinum.FocusDateView');
    }
    public function WeeklyBlockView() {
        return view('ManageWeeklyFocusView.Platinum.WeeklyBlockView');
    }
    public function WeeklyFocusInfoView() {
        return view('ManageWeeklyFocusView.Platinum.WeeklyFocusInfoView');
    }
    public function AllPlatinumFocusDateView() {
        return view('ManageWeeklyFocusView.Mentor.AllPlatinumFocusDateView');
    }
    public function AllPlatinumWeeklyBlockView() {
        return view('ManageWeeklyFocusView.Mentor.AllPlatinumWeeklyBlockView');
    }
    public function AllPlatinumWeeklyFocusInfoView() {
        return view('ManageWeeklyFocusView.Platinum.AllPlatinumWeeklyFocusInfoView');
    }
    public function PlatinumFocusDateView() {
        return view('ManageWeeklyFocusView.CRMP.PlatinumFocusDateView');
    }
    public function PlatinumWeeklyBlockView() {
        return view('ManageWeeklyFocusView.CRMP.PlatinumWeeklyBlockView');
    }
    public function PlatinumWeeklyFocusInfoView() {
        return view('ManageWeeklyFocusView.CRMP.PlatinumWeeklyFocusInfoView');
    }

    



}
