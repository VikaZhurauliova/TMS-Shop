<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FormContact;
use App\Services\FeedbackService;

class FeedbackController extends Controller
{
    private FeedbackService $feedbackService;
    public function __construct(FeedbackService $feedbackService)
    {
        $this->feedbackService = $feedbackService;
        parent::__construct();
    }

    public function index()
    {
        $feedbacks = FormContact::all();
        return view('admin.feedback.index', [
            'feedbacks' => $feedbacks
        ]);
    }

    public function destroy(FormContact $feedback)
    {
        $feedback->delete();
        session()->flash('success', 'Feedback has been successfully deleted.');
        return back();
    }

    public function exportExcel()
    {
        $this->feedbackService->exportExcel(FormContact::all());
    }

    public function exportCsv()
    {
        $this->feedbackService->exportCsv(FormContact::all());
    }

}
