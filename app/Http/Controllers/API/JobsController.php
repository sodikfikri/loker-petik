<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Exception;
use Validator;

use App\Models\Jobs;
use App\Models\Apply;

class JobsController extends Controller
{
    public function list(Request $request)
    {
        try {
            $model = new Jobs();

            $data = $model::join('partner', 'jobs.partner_id', '=', 'partner.id')
                            ->get(['jobs.*', 'partner.company_name']);

            if ($data == null) {
                $response = [
                    'meta' => [
                        'code' => '200',
                        'message' => 'Dat is empty'
                    ]
                ];
    
                return response()->json($response, 200);
            }

            $arr = [];

            foreach($data as $key => $val) {

                $status = $val->status == 1 ? 'Active' : 'Inactive';

                if ($val->category == 1) {
                    $category = 'Penuh Waktu';
                } elseif ($val->category == 2) {
                    $category = 'Paruh Waktu';
                } elseif ($val->category == 3) {
                    $category = 'Freelance';
                }

                $arr[$key] = [
                    'partner_name' => $val->company_name,
                    'title' => $val->title,
                    'body' => $val->body,
                    'location' => $val->location,
                    'status' => $status,
                    'category' => $category,
                    'created_at' => $val->created_at
                ];
            }
            
            $response = [
                'meta' => [
                    'code' => '200',
                    'message' => 'Get All Resource'
                ],
                'data' => $arr
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

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'partner_id' => 'required|numeric',
                'title' => 'required',
                'body' => 'required',
                'location' => 'required',
                'status' => 'required|numeric',
                'category' => 'required|numeric'
            ]);

            if ($validator->fails()) { // validation is fail
                return response()->json($validator->errors());
            }

            $model = new Jobs();

            $model->partner_id = $request->partner_id;
            $model->title = $request->title;
            $model->body = $request->body;
            $model->location = $request->location;
            $model->status = $request->status;
            $model->category = $request->category;
            $model->created_at = Carbon::now('Asia/Jakarta')->format('Y-m-d H:i:s');
            $model->save();

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

    public function update(Request $request) 
    {
        try {
            $validator = Validator::make($request->all(), [
                'id' => 'required|numeric',
                'partner_id' => 'required|numeric',
                'title' => 'required',
                'body' => 'required',
                'location' => 'required',
                'status' => 'required|numeric',
                'category' => 'required|numeric'
            ]);

            if ($validator->fails()) { // validation is fail
                return response()->json($validator->errors());
            }

            $model = new Jobs();

            $data = $model::where('id', $request->id)->first();

            if ($data == null) {
                $response = [
                    'meta' => [
                        'code' => '404',
                        'message' =>'Resource not found'
                    ]
                ];
    
                return response()->json($response, 404);
            }

            $data->partner_id = $request->partner_id;
            $data->title = $request->title;
            $data->body = $request->body;
            $data->location = $request->location;
            $data->status = $request->status;
            $data->category = $request->category;
            $data->updated_at = Carbon::now('Asia/Jakarta')->format('Y-m-d H:i:s');
            $data->update();

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

    public function detail(Request $request)
    {
        try {
            $data = Jobs::where('id', $request->id)->first();

            if ($data == null) {
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
                'data' => $data
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
            $data = Jobs::where('id', $request->id)->first();
            
            if ($data == null) {
                $response = [
                    'meta' => [
                        'code' => '404',
                        'message' => 'Resource not found'
                    ]
                ];
    
                return response()->json($response, 404);
            }

            $data->delete();

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

    public function apply(Request $request) 
    {
        try {
            $validator = Validator::make($request->all(), [
                'job_id' => 'required|numeric',
                'alumni_id' => 'required|numeric'
            ]);

            if ($validator->fails()) { // validation is fail
                return response()->json($validator->errors());
            }

            $model = new Apply();

            $model->alumni_id = $request->alumni_id;
            $model->job_id = $request->job_id;
            $model->created_at = Carbon::now('Asia/Jakarta')->format('Y-m-d H:i:s');
            $model->save();

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
}
