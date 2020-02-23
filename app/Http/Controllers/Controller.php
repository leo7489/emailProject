<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function process_emails(){
        $email_list = $_POST["email"];
        $email_arr = explode(" ", $email_list);
        $num_emails = count($email_arr);

        $domains = array();

        if($num_emails == 1){
            if ( $this->check_email($email_arr['0'])) {
                $domain = substr($email_list, (stripos($email_list, "@") + 1));
                array_push($domains, $domain);
            } 

        }else{
            foreach($email_arr as $email){
                if ( $this->check_email($email)) {
                    $domain = substr($email, (stripos($email, "@") + 1));
                    array_push($domains, $domain);
                } 
            }
        }

        $domains = array_unique($domains);

        //save domain names in session
        if(session("domains")){
            $domains_in_session = session("domains");
            $all_domains = array_unique(array_merge($domains_in_session, $domains));
            session_unset();
            session(["domains"=>$all_domains]);
        }else{ 
            $all_domains = $domains;
            session_unset();
            session(["domains"=>$all_domains]);
        }
        
        return view('welcome', ["domains"=> $all_domains]);
    }

    public function check_email($email){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        } else {
            return false;
        }
    }


}
