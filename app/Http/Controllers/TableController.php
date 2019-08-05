<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Csvdata;


class TableController extends Controller
{
    //

    public function csvToArray(){

        if(($handle =fopen(public_path()."\metocean.csv",'r'))!==FALSE){
            $flag=0;
            while(($data = fgetcsv($handle,1000,",",'>','>'))!==FALSE){
                if($flag<2) { $flag ++; continue; }
                //skip first and second lines which first is empty and second is header;
                $csv_data = new Csvdata();
                $csv_data->time = $data[0];
                $csv_data->lev = $data[1];
                $csv_data->hs = $data[2];
                $csv_data->hx = $data[3];
                $csv_data->tp = $data[4];
                $csv_data->tm01 = $data[5];
                $csv_data->tm02 = $data[6];
                $csv_data->dp = $data[7];
                $csv_data->dpm = $data[8];
                $csv_data->hs_sw1 = $data[9];
                $csv_data->hs_sw8 = $data[10];
                $csv_data->tp_sw1 = $data[11];
                $csv_data->tp_sw8 = $data[12];
                $csv_data->dpm_sw8 = $data[13];
                $csv_data->dpm_sw1 = $data[14];
                $csv_data->hs_sea8 = $data[15];
                $csv_data->hs_sea = $data[16];
                $csv_data->tp_sea8 = $data[17];
                $csv_data->tp_sea = $data[18];
                $csv_data->tm_sea = $data[19];
                $csv_data->dpm_sea8 = $data[20];
                $csv_data->dpm_sea = $data[21];
                $csv_data->hs_ig = $data[22];
                $csv_data->hs_fig = $data[23];
                $csv_data->wsp = $data[24];
                $csv_data->gst = $data[25];
                $csv_data->wd = $data[26];
                $csv_data->wsp100 = $data[27];
                $csv_data->wsp50 = $data[28];
                $csv_data->wsp80 = $data[29];
                $csv_data->precip = $data[30];
                $csv_data->tmp = $data[31];
                $csv_data->rh = $data[32];
                $csv_data->vis = $data[33];
                $csv_data->cld = $data[34];
                $csv_data->cb = $data[35];
                $csv_data->csp0 = $data[36];
                $csv_data->cd0 = $data[37];
                $csv_data->ss = $data[38];
                $csv_data->sst = $data[39];
                $csv_data->save();
            }//end while
            fclose($handle);
        }//end if
        //$finalData = $csv_data::all();
        $finalData = $csv_data::Paginate(10);

        return view("welcome")->withData($finalData);
        //$datas = $csv_data::Paginate(15);
        //return view('welcome',compact($finalData));
    }


}
