<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Exception;
use Validator;
use Session;

use App\Models\Alumni;

class AlumniController extends Controller
{
    public function alumni_list(Request $request) 
    {
        try {
            $list = DB::table('alumni')->get();

            foreach($list as $key => $val) {
                if ($val->cv != null) {
                    $val->cv = 'http://localhost:8000/files/'.$val->cv;
                }
            }
            if (count($list) === 0) {
                $response = [
                    'meta' => [
                        'code' => '404',
                        'message' => 'Resource not found'
                    ]
                ];

                return response()->json($response, 404);
            } else {
                $response = [
                    'meta' => [
                        'code' => '200',
                        'message' => 'Get all resource'
                    ],
                    'data' => $list
                ];
                return response()->json($response, 200);
            }
            
        } catch (Exception $e) {
            $response = [
                'meta' => [
                    'code' => '400',
                    'message' => $e->getMessage()
                ]
            ];

            return response()->json($response, 400);
        }
    }

    public function alumni_add(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|string|email|max:255|unique:users',
                'phone' => 'required|numeric',
                'address' => 'required',
                'period' => 'required|numeric'
            ]);
            
            if ($validator->fails()) { // validation is fail
                return response()->json($validator->errors());
            }

            $alumni = new Alumni();

            $check = $alumni::where('email', $request->email)->first();

            if ($check != null) {
                $response = [
                    'meta' => [
                        'code' => '409',
                        'message' => 'Data already exists'
                    ]
                ];
    
                return response()->json($response, 409);
            }

            $alumni->name = $request->name;
            $alumni->email = $request->email;
            $alumni->phone = $request->phone;
            $alumni->address = $request->address;
            $alumni->period = $request->period;
            $alumni->created_at = Carbon::now('Asia/Jakarta')->format('Y-m-d H:i:s');
            $alumni->save();

            $response = [
                'meta' => [
                    'code' => '201',
                    'message' => 'Resource is added successfully'
                ]
            ];
    
            return response()->json($response, 201);

        } catch (Exception $e) {
            $response = [
                'meta' => [
                    'code' => '400',
                    'message' => $e->getMessage()
                ]
            ];

            return response()->json($response, 400);
        }
    }

    public function alumni_detail(Request $request)
    {
        try {
            $alumni = new Alumni();

            $detail = $alumni::where('id', $request->id)->first();

            if ($detail == null) {
                $response = [
                    'meta' => [
                        'code' => '404',
                        'message' => 'Resource not found'
                    ]
                ];
    
                return response()->json($response, 404);
            }
            // success response
            $response = [
                'meta' => [
                    'code' => '200',
                    'message' => 'Get Detail Resource'
                ],
                'data' => $detail
            ];
    
            return response()->json($response, 200);
        } catch (Exception $e) {
            $response = [
                'meta' => [
                    'code' => '400',
                    'message' => $e->getMessage()
                ]
            ];

            return response()->json($response, 400);
        }
    }

    public function alumni_update(Request $request)
    {
        try {
            
            $validator = Validator::make($request->all(), [
                'id' => 'required|numeric',
                'name' => 'required',
                'email' => 'required|string|email|max:255|unique:users',
                'phone' => 'required|numeric',
                'address' => 'required',
                'period' => 'required|numeric'
            ]);
            
            if ($validator->fails()) { // validation is fail
                return response()->json($validator->errors());
            }

            $alumni = new Alumni();

            $doChange = $alumni::where('id', $request->id)->first();
            if ($doChange == null) {
                $response = [
                    'meta' => [
                        'code' => '404',
                        'message' =>'Resource not found'
                    ]
                ];
    
                return response()->json($response, 404);
            }

            $doChange->name = $request->name;
            $doChange->email = $request->email;
            $doChange->phone = $request->phone;
            $doChange->address = $request->address;
            $doChange->period = $request->period;
            $doChange->update();

            $response = [
                'meta' => [
                    'code' => '200',
                    'message' => 'Resource is update successfully'
                ]
            ];
            return response()->json($response, 200);

        } catch (Exception $e) {
            $response = [
                'meta' => [
                    'code' => '400',
                    'message' => $e->getMessage()
                ]
            ];

            return response()->json($response, 400);
        }
    }

    public function alumni_destroy(Request $request)
    {
        try {
            $alumni = new Alumni();

            $destroy = $alumni::where('id', $request->id)->first();

            if ($destroy == null) {
                $response = [
                    'meta' => [
                        'code' => '404',
                        'message' => 'Resource not found'
                    ]
                ];
    
                return response()->json($response, 404);
            }

            $destroy->delete();

            $response = [
                'meta' => [
                    'code' => '200',
                    'message' => 'Resource is delete successfully'
                ]
            ];
    
            return response()->json($response, 200);

        } catch (Exception $e) {
            $response = [
                'meta' => [
                    'code' => '400',
                    'message' => $e->getMessage()
                ]
            ];

            return response()->json($response, 400);
        }
    }

}
