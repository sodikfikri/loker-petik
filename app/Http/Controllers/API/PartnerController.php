<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File; 
use Carbon\Carbon;
use Exception;
use Validator;

use App\Models\Partner;

class PartnerController extends Controller
{
    public function list()
    {
        try {
            $list = DB::table('partner')->get();

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

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'company_name' => 'required',
                'file' => 'required|mimes:png,jpg,jpeg,pdf'
            ]);

            if ($validator->fails()) { // validation is fail
                return response()->json($validator->errors());
            }
            if ($file = $request->file('file')) {
                $name = time() . '.' . $file->getClientOriginalName(); // file name

                $moveTo = 'files';
                $file->move($moveTo, $name);

                $model = new Partner();

                $model->company_name = $request->company_name;
                $model->picture = $name;
                $model->created_at = Carbon::now('Asia/Jakarta')->format('Y-m-d H:i:s');
                $model->save();

                $response = [
                    'meta' => [
                        'code' => '201',
                        'message' => 'Resource is added successfully'
                    ]
                ];
        
                return response()->json($response, 201);
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

    public function show(Request $request)
    {
        try {
            $model = new Partner();

            $get_data = $model::where('id', $request->id)->first();

            if ($get_data == null) {
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
                'data' => $get_data
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

    public function update(Request $request) 
    {
        try {
            $validator = Validator::make($request->all(), [
                'company_name' => 'required',
                'file' => 'required|mimes:png,jpg,jpeg,pdf|max:2048'
            ]);

            if ($validator->fails()) { // validation is fail
                return response()->json($validator->errors());
            }

            $model = new Partner();

            $get_data = $model::where('id', $request->id)->first();
            $file_name = $get_data->picture;

            $path = 'files';

            File::delete(public_path('files/'.$file_name));

            if ($file = $request->file('file')) {
                $name = time() . '.' . $file->getClientOriginalName(); // file name

                $moveTo = 'files';
                $file->move($moveTo, $name);

                $get_data->company_name = $request->company_name;
                $get_data->picture = $name;
                $get_data->update();
            }

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

    public function destroy(Request $request)
    {
        try {
            $model = new Partner();

            $get_data = $model::where('id', $request->id)->first();
            $file_name = $get_data->picture;
            $path = 'files';

            File::delete(public_path('files/'.$file_name));

            if ($get_data == null) {
                $response = [
                    'meta' => [
                        'code' => '404',
                        'message' => 'Resource not found'
                    ]
                ];
    
                return response()->json($response, 404);
            }

            $get_data->delete();

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
