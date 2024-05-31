<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Redirect;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

trait Whm
{
    public function Cpanel()
    {
        $curl = curl_init();
        $url = env('WHM_URL') . '/listaccts';
        $postData = array(
            'api.version' => 1
        );
        $headers = array(
            'Authorization: whm ' . env("WHM_USER") . ':' . env('WHM')
        );

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($postData));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        $response = curl_exec($curl);
        if (curl_error($curl)) {
            echo 'cURL error: ' . curl_error($curl);
        }

        curl_close($curl);

        $data = json_decode($response);
        return json_decode(json_encode($data), true);
    }

    public function createCpanelUser($newuser, $password, $domain, $plan)
    {
        $url = env('WHM_URL') . '/createacct?api.version=1&username=' . $newuser . '&domain=' . $domain . '&password=' . $password . '&plan=' . $plan;

        // Set the cURL options
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERPWD, env("WHM_USER") . ':' . env("WHM"));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

        // Make the cURL request
        $result = curl_exec($ch);
        curl_close($ch);

        // Display the result
        return $result;
    }

    public function cpanelLogin($username, $password, $domain)
    {
        return redirect()->to('https://' . $domain . ':2083/login/?username=' . $username . '&password=' . $password . '&goto_uri=%2F')->send();
    }

    public function suspendCpanelAccount($username)
    {
        // Set the URL to the API endpoint for suspending an account
        $url = env('WHM_URL') . '/suspendacct?api.version=1&user=' . $username;

        // Set the cURL options
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERPWD, env("WHM_USER") . ':' . env("WHM"));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

        // Make the cURL request
        $result = curl_exec($ch);
        curl_close($ch);

        // Display the result
        echo $result;
    }

    public function checkDomainAvailability($domain, $extension)
    {

        $tld = str_replace('.', '', $extension);
        $whoisServer = 'whois.iana.org';
        $whoisUrl = "http://{$whoisServer}/whois/?domain={$tld}";

        $response = Http::get($whoisUrl);
        $whoisData = $response->body();
        preg_match('/whois:\s(.*)/i', $whoisData, $matches);

        if (!empty($matches)) {
            $whoisServer = trim($matches[1]);
            $whoisUrl = "http://{$whoisServer}/whois/{$domain}.{$tld}";

            try {
                $response = Http::get($whoisUrl);
                $data = $response->body();
                $isAvailable = !preg_match('/domain.*not.*found/i', $data);
                return $isAvailable;
            } catch (\Exception $e) {
                return null;
            }
        } else {
            return null;
        }
    }
    public function checkDomain()
    {
        $api_user = env('USER_NAME');
        $api_key = env('API_KEY');
        $username = env('API_USER');
        $domain = "ouches";
        $extensions = array("com", "net", "org", "io", "xyz", "ai", "ng", "com.ng", "biz");
        $ip = env("CLIENT_IP");
        $url = "https://api.namecheap.com/xml.response?ApiUser=$api_user&ApiKey=$api_key&UserName=$username&ClientIp=$ip&Command=namecheap.domains.check&DomainList=" . implode(",", array_map(function ($ext) use ($domain) {
            return "$domain.$ext";
        }, $extensions));

        $response = file_get_contents($url);
        echo $response;
    }

    public function allPackages()
    {

        $headers = array(
            'Authorization: whm ' . env("WHM_USER") . ':' . env('WHM')
        );
        // WHM API URL
        $api_url = env("WHM_URL") . "/listpkgs";

        // Create a new cURL resource
        $ch = curl_init();

        // Set cURL options
        curl_setopt($ch, CURLOPT_URL, $api_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: whm ' . env("WHM_USER") . ':' . env('WHM')));

        // Execute the cURL request
        $result = curl_exec($ch);

        // Close the cURL resource
        curl_close($ch);

        // Decode the JSON response
        $response = json_decode($result);

        // Extract the package list from the response
        //$package_list = $response->data->pkg;

        // Print the package list
        dd($response);
    }
}
