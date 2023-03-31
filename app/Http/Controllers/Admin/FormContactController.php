<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateDeliveryRequest;
use App\Models\Delivery;
use App\Models\FormContact;
use App\Models\ProductReview;
use Illuminate\Http\Request;

class FormContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $feedbacks = FormContact::query()->orderByDesc('created_at')->paginate(10);
        return view('admin.feedback.index', [
            'feedbacks' => $feedbacks,

        ]);
    }


    public function destroy(FormContact $feedback)
    {
        $feedback->delete();
        session()->flash('success', 'Feedback has been successfully deleted.');
        return back();
    }
}
