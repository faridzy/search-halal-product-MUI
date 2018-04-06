<?php
/**
 * Created by PhpStorm.
 * User: mfarid
 * Date: 06/04/18
 * Time: 21.33
 */

namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BackendController extends Controller {

    public function actionIndex(Request $request)
    {
        return view('backend.dashboard.index');
    }
}