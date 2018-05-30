<?php 
    namespace App\Http\Controllers;
    use GuzzleHttp\Exception\GuzzleException;
    use GuzzleHttp\Client;
    use Illuminate\Http\Request;
    use Yajra\Datatables\Datatables;
    class CallController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */

        
        public function index()
        {
            //
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create(Request $request)
        {
            //

            $client = new Client();
            $res = $client->request('POST', 'http://localhost:8081/api/patient', [
                'form_params' => [ 
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'age' => $request->age,
                    'address' => $request->address,
                    'gender' => $request->gender,
                    'phone_number' => $request->phone_number,
                    'place_of_birth' => $request->place_of_birth,
                ]
            ]);
    
        
        
            return redirect()->route('call');
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            //
        }

        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show(Request $request,$id)
        {
            //

            $client = new Client();
            $request = $client->put('http://localhost:8081/api/patient/'.$id,[
                'form_params' => [ 
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'age' => $request->age,
                    'address' => $request->address,
                    'gender' => $request->gender,
                    'phone_number' => $request->phone_number,
                    'place_of_birth' => $request->place_of_birth,
                ]
            ]);

        return redirect()->route('call');
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            //

            
            $client = new Client();
            $res = $client->request('GET', 'http://localhost:8081/api/patient/getPatientInfo/'.$id);
            $patient = json_decode($res->getBody());
            return view('edit',compact('patient'));
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
            //
            $client = new Client();
            $request = $client->put('http://localhost:8081/api/patient/'.$id,[
                'form_params' => [ 
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'age' => $request->age,
                    'address' => $request->address,
                    'gender' => $request->gender,
                    'phone_number' => $request->phone_number,
                    'place_of_birth' => $request->place_of_birth,
                ]
            ]);

        return redirect()->route('call');
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            //
            return "Delete";
        }

        public function getUsers()
        {
            $client = new Client();
        $res = $client->request('GET', 'http://localhost:8081/api/patient');
            
            $body = json_decode($res->getBody());
           
        return view('patientMicroservice.table',compact('body'));
        
        }
        

        public function showForms()
        {
            return view('forms');
        }


        public function deletePatient($id)
        { 
            $client = new Client();
            $request = $client->delete('http://localhost:8081/api/patient/'.$id);

        return redirect()->route('call');

        }

        public function checkout($features)
        {
            $array_features = explode(" ",$features);
        
           
            return view('healthSystem.checkout',compact('array_features'));
        }

    }
