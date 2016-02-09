<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Url;
use mikehaertl\pdftk\FdfFile;
use mikehaertl\pdftk\Pdf;
use Storage;



class VotingController extends Controller
{

    
    public function submitForm(Request $request)
    {
        //Get input
        $input = Input::all();

        //Date
        $input["Date"] = date("j/ n/ Y");  

        //Bools for Parties
        if($input["party"] == "Republican"){
            $input["Rep"] = "Yes";
        }
        else{
            $input["Dem"] = "Yes";
        }



        //concat name
        $input["Voter_Name"] = $input["first_name"]." ".$input["last_name"];

        $contents = Storage::disk('local');
        
        $storagePath  = Storage::disk('local')->getDriver()->getAdapter()->getPathPrefix();

        // $contents = Storage::get('reg.pdf');

        //Save as FDF
        $fdf = new FdfFile($input);
        $fdf->saveAs('data.fdf');

        $docId = md5(uniqid(rand(), true));

        //Save as Pdf 
        $pdf = new Pdf($storagePath.'reg.pdf');
        $pdf->fillForm($fdf->getFileName())
            ->saveAs($storagePath."generated/".$docId.'.pdf');


        //Setting up Lob
        $apiKey = env('LOB_KEY');
        $lob = new \Lob\Lob($apiKey);

        //Send the letter
        $letter = $lob->letters()->create(array(
          'description'           => 'Voter Registration',
          'to[name]'              => 'Town Clerk',
          'to[address_line1]'     => '230 Main St, Ste 108',
          'to[address_city]'      => 'Brattleboro',
          'to[address_zip]'       => '05301',
          'to[address_state]'     => 'VT',
          'to[address_country]'   => 'US',
          'from[name]'            => 'Benjamin Franklin',
          'from[address_line1]'   => '123 Fake Street',
          'from[address_city]'    => 'Philadelphia',
          'from[address_zip]'     => '94041',
          'from[address_state]'   => 'PA',
          'from[address_country]' => 'US',
          'file'                  => '@'.realpath($storagePath."generated/".$docId.'.pdf'),
          'color'                 => false
        ));

        $letter['file'] = $storagePath."generated/".$docId.'.pdf';

        return View::make('thanks',$letter )->with( 'data', $letter) ;

    }



    public function getFile(Request $request)
    {
        //returns the file
        $input = Input::all();
        return response()->download($input['filepath']);
    }
}
