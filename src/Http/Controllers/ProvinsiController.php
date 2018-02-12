<?php namespace Bantenprov\Provinsi\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\Provinsi\Facades\Provinsi;
use Bantenprov\Provinsi\Models\ProvinsiModel;

/**
 * The ProvinsiController class.
 *
 * @package Bantenprov\Provinsi
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class ProvinsiController extends Controller
{
    public function demo()
    {
        return Provinsi::welcome();
    }

    public function test(){
	echo "Testing";
    }
}
