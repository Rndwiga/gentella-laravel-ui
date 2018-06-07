<?php

namespace Rndwiga\UiGentella\Http\Controllers;

use ConsoleTVs\Charts\Facades\Charts;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Musoni\Cashflow\Models\Cashflow;

class HomeController extends Controller
{
  private $offices;
  private $branch;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->offices  = [1 => 'Head Office', 2 => 'Zimmerman', 3 => 'Gikomba',
            4 => 'Thika', 5 => 'Naivasha',6 => 'Kitengela', 7 => 'Kisii',8 => 'Donholm', 9 => 'Kariobangi',
            10 => 'Kawangware', 11 => 'Kiambu',12 => 'Machakos', 13 => 'Muranga',14 => 'Nakuru', 15 => 'Narok',
            16 => 'Rongai', 17 => 'Pilot',18 => 'Matuu', 19 => 'Molo',20 => 'Eldoret', 21 => 'HQ-Branch',
          ];
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dashboard = env('BASE_DASHBOARD_ROUTE') ? env('BASE_DASHBOARD_ROUTE') : 'admin.mifos.mmt.index';

      return redirect()->route($dashboard);

      $groupByDay = '';
      $groupByOffice = '';
      $groupByDayTrend = '';
      $widgets = (object)[
        'totalModels' => '',
        'todayModels' => '',
        'lastWeekModels' => '',
        'thisWeekModels' => '',
        'topBranchInTheWeek' => '',
        'previousWeekTopBranch' => ''
      ];
        return view(config('gentella.views.pages.home.home'), compact('groupByDay','groupByOffice', 'groupByDayTrend','widgets'));
    }
    /*
      This function returns branch name based on its officeId.
      @input array of branch name indexed by their ID
      @ Cashflow::groupBy('officeId')->pluck('officeId')->max() //gets the most common branch
    */
    private function getBranchByName($branch)
    {
      foreach ($this->offices as $key => $value) {
        if ($key == $branch ) {
          return $value;
        }
      }
    }

}
