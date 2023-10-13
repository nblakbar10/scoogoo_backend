<?php

use Illuminate\Support\Facades\Route;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Arr;
// use Xendit\Xendit;
use Illuminate\Support\Facades\Http;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/qrcode', function () {
    // Generate the QR code
    // $dataArray = [
    //     'id' => 21,
    //     'uuid' => 'cf387f50-2cb7-11ed-8bfb-eb67583283ba',
    //     'station_id' => 19,
    //     'lat' => "-0.5194917296134587",
    //     'long' => "117.11667308015137",
    //     'departure_time' => 30,
    //     'arrival_time' => "13-10-2023 12:04:43",
    //     'dynamic_estimated_arrival_time' => "13-10-2023 12:04:43",
    //     'mileage_count_meter' => 271,
    //     'fare' => 15000,
    //     'penalty' => 3000,
    //     'total_fare' => 18000,
    //     'status' => 'PENDING',
    //     "created_at" => "13-10-2023 11:04:43",
    //     "created_at" => "13-10-2023 11:04:43",
    // ];

    // $qrCode = QrCode::generate(json_encode($dataArray));
    $array = [url('/data/scooter/121/36'), url('/data/scooter/122/37'), url('/data/scooter/123/38'),url('/data/scooter/124/39'),url('/data/scooter/125/40'), url('/data/scooter/126/41','url(data/scooter/127/42'),];
    $random= Arr::random($array);
    $qrCode = QrCode::generate($random);

    return view('qrcode', compact('qrCode'));
});



Route::get('/data/scooter/121/36', function () {
    $dataArray = [
        'id' => 21,
        'uuid' => 'cf387f50-2cb7-11ed-8bfb-eb67583280kl',
        'station_id' => 19,
        'lat' => "-0.5194917296112387",
        'long' => "117.11667308019087",
        'departure_time' => "13-10-2023 10:02:34",
        'arrival_time' => "13-10-2023 12:02:30",
        'dynamic_estimated_arrival_time' => "13-10-2023 12:05:00",
        'mileage_count_meter' => 80,
        'fare' => 15000,
        'penalty' => 3000,
        'total_fare' => 18000,
        'status' => 'PENDING',
        "created_at" => "13-10-2023 11:04:43",
        "updated_at" => "13-10-2023 11:04:43",
    ];

    return response()->json([
        'status' => 200,
        'data' => $dataArray 
    ]);
});

Route::get('/data/scooter/122/37', function () {
    $dataArray = [
        'id' => 22,
        'uuid' => 'cf387f50-2cb7-11ed-8bfb-eb67583283ba',
        'station_id' => 20,
        'lat' => "-0.5134917296134587",
        'long' => "117.19667308015137",
        'departure_time' => "13-10-2023 11:00:01",
        'arrival_time' => "13-10-2023 12:02:01",
        'dynamic_estimated_arrival_time' => "13-10-2023 12:03:00",
        'mileage_count_meter' => 271,
        'fare' => 21000,
        'penalty' => 9000,
        'total_fare' => 30000,
        'status' => 'PENDING',
        "created_at" => "13-10-2023 11:04:43",
        "created_at" => "13-10-2023 11:04:43",
    ];

    return response()->json([
        'status' => 200,
        'data' => $dataArray 
    ]);
});

Route::get('/data/scooter/123/38', function () {
    $dataArray = [
        'id' => 23,
        'uuid' => 'cf387f50-2cb7-11ed-8bfb-eb67583998ba',
        'station_id' => 20,
        'lat' => "-0.5194917296132237",
        'long' => "117.11667309985137",
        'departure_time' => "13-10-2023 11:04:11",
        'arrival_time' => "13-10-2023 12:04:10",
        'dynamic_estimated_arrival_time' => "13-10-2023 12:02:00",
        'mileage_count_meter' => 142,
        'fare' => 16000,
        'penalty' => 4000,
        'total_fare' => 20000,
        'status' => 'PENDING',
        "created_at" => "13-10-2023 11:04:43",
        "created_at" => "13-10-2023 11:04:43",
    ];

    return response()->json([
        'status' => 200,
        'data' => $dataArray 
    ]);
});

Route::get('/data/scooter/124/39', function () {
    $dataArray = [
        'id' => 24,
        'uuid' => 'cf387f50-2cb7-i9od-8bfb-eb67583998ba',
        'station_id' => 21,
        'lat' => "-0.5194917296800937",
        'long' => "117.11876509985137",
        'departure_time' => "13-10-2023 11:04:19",
        'arrival_time' => "13-10-2023 12:04:19",
        'dynamic_estimated_arrival_time' => "13-10-2023 12:02:19",
        'mileage_count_meter' => 143,
        'fare' => 16500,
        'penalty' => 4500,
        'total_fare' => 21000,
        'status' => 'PENDING',
        "created_at" => "13-10-2023 11:04:43",
        "created_at" => "13-10-2023 11:04:43",
    ];

    return response()->json([
        'status' => 200,
        'data' => $dataArray 
    ]);
});

Route::get('/data/scooter/125/40', function () {
    $dataArray = [
        'id' => 25,
        'uuid' => 'cf387f50-2cb7-i9od-8bfb-eb9io83998ba',
        'station_id' => 21,
        'lat' => "-0.5194917209234937",
        'long' => "117.18891709985137",
        'departure_time' => "13-10-2023 11:04:21",
        'arrival_time' => "13-10-2023 12:04:21",
        'dynamic_estimated_arrival_time' => "13-10-2023 12:02:19",
        'mileage_count_meter' => 144,
        'fare' => 17500,
        'penalty' => 5500,
        'total_fare' => 23000,
        'status' => 'PENDING',
        "created_at" => "13-10-2023 11:04:43",
        "created_at" => "13-10-2023 11:04:43",
    ];

    return response()->json([
        'status' => 200,
        'data' => $dataArray 
    ]);
});

Route::get('/data/scooter/126/41', function () {
    $dataArray = [
        'id' => 26,
        'uuid' => 'cf387f50-2cb7-i9od-8bfb-eb9io83998ba',
        'station_id' => 22,
        'lat' => "-0.5194917209234937",
        'long' => "117.18891709985137",
        'departure_time' => "13-10-2023 11:04:21",
        'arrival_time' => "13-10-2023 12:04:21",
        'dynamic_estimated_arrival_time' => "13-10-2023 12:02:19",
        'mileage_count_meter' => 145,
        'fare' => 19500,
        'penalty' => 6500,
        'total_fare' => 26000,
        'status' => 'PENDING',
        "created_at" => "13-10-2023 11:04:43",
        "created_at" => "13-10-2023 11:04:43",
    ];

    return response()->json([
        'status' => 200,
        'data' => $dataArray 
    ]);
});

Route::get('/data/scooter/127/42', function () {
    $dataArray = [
        'id' => 27,
        'uuid' => 'cf387f50-2cb7-i9od-8bfb-eb9io83998ba',
        'station_id' => 23,
        'lat' => "-0.51949172011233937",
        'long' => "117.18232309985137",
        'departure_time' => "13-10-2023 11:04:28",
        'arrival_time' => "13-10-2023 12:04:28",
        'dynamic_estimated_arrival_time' => "13-10-2023 12:02:18",
        'mileage_count_meter' => 146,
        'fare' => 21500,
        'penalty' => 3500,
        'total_fare' => 25000,
        'status' => 'PENDING',
        "created_at" => "13-10-2023 11:04:43",
        "created_at" => "13-10-2023 11:04:43",
    ];

    return response()->json([
        'status' => 200,
        'data' => $dataArray 
    ]);
});


Route::get('/api/all-cctv', function () {
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "http://api.samarindakota.go.id/api/v2/generate/dinas-komunikasi-dan-informatika/cctv",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "Accept: application/json",
            "Content-Type: application/json",
            "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImNkYjZlMWRiZmYxMTRlNjcxMzFmYzMyOGEyOGIxMjRlZmIxNzkxYmRjOWI5NjJmMDZlZTQ4MWIzMTdiOWY5MzRkMjJhNzIyOWQzMzBjMDQ2In0.eyJhdWQiOiIzIiwianRpIjoiY2RiNmUxZGJmZjExNGU2NzEzMWZjMzI4YTI4YjEyNGVmYjE3OTFiZGM5Yjk2MmYwNmVlNDgxYjMxN2I5ZjkzNGQyMmE3MjI5ZDMzMGMwNDYiLCJpYXQiOjE2OTcxNDc2NzIsIm5iZiI6MTY5NzE0NzY3MiwiZXhwIjoxNzI4NzcwMDcyLCJzdWIiOiI1MjIiLCJzY29wZXMiOlsibW9ub2dyYWZpLWtlY2FtYXRhbiIsIm1vbm9ncmFmaS1rZWx1cmFoYW4iLCJwdXNrZXNtYXMiLCJ0ZW1wYXQtaWJhZGFoIiwiZGF0YS1ydCIsInBlcnVzYWhhYW4tamFzYSIsImthd2FzYW4tcmF3YW4iLCJrb3BlcmFzaSIsInNhcmFuYS1vbGFocmFnYSIsIm9yZ2FuaXNhc2kiLCJwYXJpd2lzYXRhIiwicGVyZGFnYW5nYW4iLCJwb3N5YW5kdSIsInRva29oLW1hc3lhcmFrYXQiLCJ0b2tvaC1hZ2FtYSIsInNvc2lhbCIsInBlbnlha2l0LWlzcGEiLCJwZW55YWtpdC1kaWFyZSIsInBlbnlha2l0LWtpYSIsInBlbnlha2l0LXBoYnMiLCJwZW55YWtpdC1wbmV1bW9uaWEiLCJwZW55YWtpdC10YiIsInJlZmVyZW5zaS1wcm92aW5zaSIsInJlZmVyZW5zaS1rZWx1cmFoYW4iLCJwZWdhd2FpLXBlci1nb2xvbmdhbiIsInBlZ2F3YWktcGVyLWVzZWxvbiIsInBlZ2F3YWktcGVyLWdlbmRlciIsInBlZ2F3YWktcGVyLW9wZCIsInBlZ2F3YWktcGVyLWFnYW1hLWdlbmRlciIsInBlZ2F3YWktcGVyLWVzZWxvbi1nZW5kZXIiLCJwZWdhd2FpLXBlci1nb2xvbmdhbi1nZW5kZXIiLCJwZWdhd2FpLXBlci1wZW5kaWRpa2FuLWdlbmRlciIsInBlZ2F3YWktcGVyLXBlbnNpdW4tZ29sb25nYW4tZ2VuZGVyIiwicGVnYXdhaS1wZXItdW11ci1nZW5kZXIiLCJwZWdhd2FpLXBlci1qYWJhdGFuLWZ1bmdzaW9uYWwiLCJiZXJpdGEiLCJsaXN0LW9wZCIsInJlbnN0cmEiLCJldmVudHMiLCJiZXJpdGFwYXJpd3N0YSIsImFnZW5kYSIsInBlbmd1bXVtYW4iLCJwZW5naGFyZ2FhbiIsImdhbGVyaSIsImJpZGFuZyIsInN0cnVrdHVyYWwiLCJrb21vZGl0YXMiLCJwYXNhci10cmFkaXNpb25hbCIsInB1c2F0LW9sZWgtb2xlaCIsInBhc2FyLW1vZGVybiIsImhhcmdhLWhhcmlhbiIsImhhcmdhLWtvbW9kaXRpIiwic29wIiwicGFzYXItd2l0aC1rb21vZGl0aSIsImF0bGl0Iiwic2FyYW5hLXByYXNhcmFuYSIsImNhYm9yIiwic2Vrb2xhaCIsImhvdGxpbmUiLCJwZXJhdHVyYW4iLCJrYXN1cy1wZXItamVuaXMiLCJrYXN1cy1wZXIta2VjYW1hdGFuIiwicGVydXNhaGFhbi10ZXJkYWZ0YXIiLCJsb3dvbmdhbi13ZWJzaXRlIiwiYmVyaXRha29taW5mbyIsImNjdHYiLCJvcGQiLCJTS1QiLCJ0ZXNicHMiLCJtYXN0ZXJrZWNhbWF0YW4iLCJ0ZW5hbnQiLCJiZXJpdGFfcHBpZCIsInJlZmVyZW5zaS1vcmdhbmlzYXNpIiwiZG9rdW1lbiIsImFsYnVtIiwidmlkZW8iLCJnbG9iYWwiLCJjb3ZpZC1oYXJpYW4iLCJwcm92aW5zaSIsImtvdGEiLCJrZWNhbWF0YW4iLCJrZWx1cmFoYW4iLCJrYXRlZ29yaSIsInBlcmF0dXJhbi1rZW1lbnRlcmlhbiIsInBlcmF0dXJhbi1ieS11dWlkIiwiaGFyaWFuIiwicHJvZHVrIiwidXJ1c2FuIiwiamVuaXNkYXRhIiwidW5pdCIsInBlbmNhcmlhbiJdfQ.Q6kV0OibBcJMQ91KlvUTPV8rufZVVVUu9_0rtwzw5wdQnSS2I07ajjDPa2vet6DXg0y5OopBS213EFqR1POW6wsxa2Y0s0NpYVg0wekd8NaCns2UUi2P8_0kavCr5Qq9YObe7oFm7A6eALOq5mWJ3l9x3oRRJuF5NRtF2m80jVs1nxQ1puSQ1wjM4CxQ-_jia0ChFCZFlWUlTiXak2mOKOgVneP8wypjofCjaw3yThERFzXwz6mEQACvGMJG0wpo_YiE0dJ57m9_MvlyqrPOOpzP5oFQ0AyTNHUdDU4CSOW-68ONaPpkwsVxuUFBVNiGL-X8qLJVn9Mua88MwVjlrttYNOScDzWnxyQ5jr1YbjG5YnNfCSwqB6egpQx3qj_KhZsxtfHxS8DcOgktBCP3khEmxDYHydNnS39pqcKYFRkLFKHeOczLf9t6xZ18ZNVDJ-_pYnZuXrsVOnsT_JTS7wos88WvWkHcT25-Ee6laq_poEx26dgeULX6Bglu9NOOpU5VVVzaZLuhgbnbvhi8rf-jTEILviABjFy43nw35hI5P6K26ArMf_dpgHCLxflfk7acvbfH9iNwXGUmTIjB6ViF5HmDZhDhUpMa7D9XRmvc9BzREbBYOq7CEmAwloJdHekG2HdDEmMpgiHv2PNtCvYKe7xH2NOoO5a18xksrCw"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if($err) {
        echo "cURL Error #:" . $err;
    } else {
        // echo $response;
        return response()->json([
            'status' => 200,
            'data' => json_decode($response)
        ]);
    }
});


Route::post('/api/transactions/9', function () {
    // $params = [
    //     'external_id' => 'daSHDHF8c8923',
    //     'payer_email' => 'user@test.com',
    //     'description' => 'Electric Scooter Fare Payments - 9',
    //     'amount' => 23500,
    // ];

    // Xendit::setApiKey(config('xendit.api_key'));
    // $invoice = \Xendit\Invoice::create($params);

    // // Redirect the user to the invoice URL



    // $secret_key = 'Basic ' . 'xnd_production_9TMDIVnNPPlsGEG7iznWcUYB6pAVOlAOA8z7KjAJkqn9MGAafzrur2lcWY1rjw0I';
    $secret_key = 'Basic ' . base64_encode(env('XENDIT_API_KEY'));
    $transaction_id = Str::random(7);

    $external_id = 'saaKJFKd87y7';

    $data_request = Http::withHeaders([
        'Authorization' => $secret_key,
    ])->post('https://api.xendit.co/v2/invoices', [
        'external_id' => $external_id,
        'name' => 'USER_1',
        'amount' => 21000 + 2500, #(int)$platform_fee,
        // 'payment_methods' => ['BNI', 'BRI', 'BSI', 'BJB', 'MANDIRI', 'PERMATA']
    ]);
    $response = $data_request->object();

    // return redirect($response->invoice_url);
    return $response->invoice_url;

    // dd($secret_key);
    // dd($response);


    // // $secret_key = 'Basic ' . config('xnd_development_lsKcftiKfbwF2cr9m081twDBHyXsdD4uulKNiBrCR57jcXXHUNz7kE6fjI8O4OZ');
    // // $external_id = Str::random(9);

    // // $data_request = Http::withHeaders([
    // //     'Authorization' => $secret_key,
    // // ])->post('https://api.xendit.co/customers', [
    // //     'external_id' => $external_id,
    // //     'name' => 'USER_1',
    // //     'amount' => 21000 + 2500, #(int)$platform_fee,
    // //     'payment_methods' => ['BNI', 'BRI', 'BSI', 'BJB', 'MANDIRI', 'PERMATA']
    // // ]);
    // // $response = $data_request->object();

    // // return response()->json([
    // //     'status' => 200,
    // //     'data' => json_decode($response)
    // // ]);
});




// <?php

//    namespace App\Http\Controllers;

//    use Illuminate\Http\Request;
//    use Xendit\Xendit;

//    class PaymentController extends Controller
//    {
//        public function createInvoice(Request $request)
//        {
//            $params = [
//                'external_id' => 'your_unique_invoice_id',
//                'payer_email' => $request->input('email'),
//                'description' => 'Invoice Description',
//                'amount' => $request->input('amount'),
//            ];

//            Xendit::setApiKey(config('xendit.api_key'));
//            $invoice = \Xendit\Invoice::create($params);

//            // Redirect the user to the invoice URL
//            return redirect($invoice['invoice_url']);
//        }
//    }