<?php

namespace App\Http\Controllers;

use App\Models\ExplorModel;
use BaconQrCode\Encoder\QrCode;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class PageController extends Controller
{

    public function viewWelcomePage()
    {
        try {
            // $qr = QrCode::size(200)->generate("loop");
            return view('welcome');
        } catch (Exception $e) {
            return view('errors.404', ['message' => "We are facing some internet issue please contact at contact@orio.io"]);
        }
    }

    public function viewHomePage()
    {
        try {
            return view('pages.home');
        } catch (Exception $e) {
            return view('errors.404', ['message' => "We are facing some internet issue please contact at contact@orio.io"]);
        }
    }

    public function viewCbdsPage()
    {
        try {
            return view('pages.cbdc');
        } catch (Exception $e) {
            return view('errors.404', ['message' => "We are facing some internet issue please contact at contact@orio.io"]);
        }
    }

    public function viewDefiuniversePage()
    {
        try {
            return view('pages.defiuniverse');
        } catch (Exception $e) {
            return view('errors.404', ['message' => "We are facing some internet issue please contact at contact@orio.io"]);
        }
    }

    public function viewAboutusPage()
    {
        try {
            return view('pages.about_us');
        } catch (Exception $e) {
            return view('errors.404', ['message' => "We are facing some internet issue please contact at contact@orio.io"]);
        }
    }

    public function viewTeamPage()
    {
        try {
            return view('pages.team_new');
        } catch (Exception $e) {
            return view('errors.404', ['message' => "We are facing some internet issue please contact at contact@orio.io"]);
        }
    }

    public function viewCareersPage()
    {
        try {
            return view('pages.careers');
        } catch (Exception $e) {
            return view('errors.404', ['message' => "We are facing some internet issue please contact at contact@orio.io"]);
        }
    }

    public function viewAuthenticationPage()
    {
        try {
            return view('pages.authentication');
        } catch (Exception $e) {
            return view('errors.404', ['message' => "We are facing some internet issue please contact at contact@orio.io"]);
        }
    }

    public function viewPolicyPage()
    {
        try {
            return view('pages.policy');
        } catch (Exception $e) {
            return view('errors.404', ['message' => "We are facing some internet issue please contact at contact@orio.io"]);
        }
    }

    public function viewFaqsPage()
    {
        try {
            return view('pages.faqnew');
        } catch (Exception $e) {
            return view('errors.404', ['message' => "We are facing some internet issue please contact at contact@orio.io"]);
        }
    }

    public function viewExplorerPage()
    {
        try {
            $explorer = new ExplorModel();
            $data = array(
                'latest_price' => $explorer->getLatestOrioPrice(),
                'transactions' => $explorer->getTotalTransactions(),
                'all_obyte_users' => $explorer->userCount(),
                'totalBalances' => $explorer->getOrioBalance()->totalBalances,
                'responseDay' => $explorer->getOrioBalance()->responseDay,
                'responseWeek' => $explorer->getOrioBalance()->responseWeek,
                'sellValue' => $explorer->getSellValue(),
                'buyValue' => $explorer->getBuyValue(),
                'data' => $explorer->getTenTransactions(),
            );
            return view('pages.mainexplorer', $data);
        } catch (Exception $e) {
            return view('errors.404', ['message' => "We are facing some internet issue please contact at contact@orio.io"]);
        }
    }

    public function viewExplorerAllPage()
    {
        try {
            $explorer = new ExplorModel();
            $data = array(
                'totalBalance' => round($explorer->getTotalBalance(), 4),
                'totalTransactions' => $explorer->getTotalTransactions(),
            );
            return view('pages.explorerall', $data);
        } catch (Exception $e) {
            return view('errors.404', ['message' => "We are facing some internet issue please contact at contact@orio.io"]);
        }
    }
    public function viewExplorerDetailsPage()
    {
        try {
            $explorer = new ExplorModel();
            $data = array(
                'totalBalance' => round($explorer->getTotalBalance(), 4),
            );
            return view('pages.explorer_details', $data);
        } catch (Exception $e) {
            return view('errors.404', ['message' => "We are facing some internet issue please contact at contact@orio.io"]);
        }
    }

}
