<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        $plans = Plan::get();
        return view('theme::settings.billing', [
            'intent' => $user->createSetupIntent(),
            'plans' => $plans
        ]);
    }

    public function save(Request $request)
    {
        $user = auth()->user();
        try {
            if ($user->subscribed('default')) {
                $user->updateDefaultPaymentMethod($request->payment_method);
            } else {
                $plan = Plan::find($request->plan);
                if ($plan) {
                    $user->update(['plan_id' => $plan->id]);
                    $user->newSubscription(
                        'default', $plan->stripe_price_id
                    )->create($request->payment_method);
                }
            }
        } catch (\Exception $ex) {
            return back()->with(['alert' => $ex->getMessage()]);
        }
        return back()->with(['alert' => 'Successfully updated your billing info ']);
    }

    public function switchPlan(Request $request)
    {
        $plan = Plan::find($request->plan);
        $user = auth()->user();
        try {
            $user->subscription('default')->swap($plan->stripe_price_id);
            $user->update(['plan_id' => $plan->id]);
        } catch (Exception $e) {
            return back()->with(['alert' => 'Sorry, there was an error switching plans.', 'alert_type' => 'error']);
        }

        return back()->with(['alert' => 'Successfully switched your plan', 'alert_type' => 'success']);
    }
}
