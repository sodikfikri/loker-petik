@extends('layouts.main')
@section('body_content')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="row" id="card-rows">
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top"
                                src="assets/images/logo_gojek.png" style="height:150px;">
                            <div class="card-body">
                                <h5 class="card-text">PT Karya Anak Bangsa
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top"
                            src="assets/images/logo_tokped.png" style="height:150px;">
                            <div class="card-body">
                                <h5 class="card-text">PT Tokopedia
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top"
                            src="assets/images/logo_pertamina.png" style="height:150px;">
                            <div class="card-body">
                                <h5 class="card-text">PT Pertamina Persero
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top"
                            src="assets/images/logo_aqua.png" style="height:150px;">
                            <div class="card-body">
                                <h5 class="card-text">PT Aqua Indonesia
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="col-12 mb-4">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top"
                                src="assets/images/logo_pln.png" style="height:150px;">
                            <div class="card-body">
                                <h5 class="card-text">PT PLN Persero
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top"
                            src="assets/images/logo_bni.png" style="height:150px;">
                            <div class="card-body">
                                <h5 class="card-text">Bank Negara Indonesia
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top"
                            src="assets/images/logo_telkom.png" style="height:150px;">
                            <div class="card-body">
                                <h5 class="card-text">PT Telkom Persero
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <img class="card-img-top"
                            src="assets/images/logo_bukalapak.png" style="height:150px;">
                            <div class="card-body">
                                <h5 class="card-text">PT Bukalapak.com
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-12 mb-4">
                <div class="row">
                    <div class="card" style="width: 100%;">
                        <div class="card-body">
                            <form id="addData">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Company Name</label>
                                    <input type="text" class="form-control" name="company_name" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">File</label>
                                    <input type="file" class="form-control" name="file">
                                </div>

                                <button type="submit" id="btn-save" class="btn btn-primary">Primary</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>



        <!-- <script src="{{ asset('js/mitra.js') }}"></script> -->
        <script>

            var token = '<?php echo $token ?>'
            /* show error */
            function showError(){
                console.log("Error! blok");
            }

            /* show all data */
            function showAllData(items){
                let data = items['data'];
                console.log("show data => ", data);
                $('#card-rows').html('');

                for(var row of data){
                    let tmplateLiterals = `
                        <div class="col-md-3 mb-4">
                            <div class="card">
                                <img class="card-img-top"
                                    src=${row.picture} style="height:150px;">
                                <div class="card-body">
                                    <h5 class="card-text">${row.company_name}
                                    </h5>
                                </div>
                            </div>
                        </div>
                    `;
                    // console.log("data => ",data[i]['title']);
                    // console.log("data => ",data[i]['title']);
                    $('#card-rows').append(tmplateLiterals);
                }

            }
            // load data
            function loadData(){
                console.log("token data => ", token);
                console.log("load data");

            //make request
                $.ajax({
                    url:"http://localhost:8000/api/partner/list",
                    headers:{
                        Authorization: 'Bearer ' + token
                    },
                    type: "GET",
                    contentType: false,
                    processData: false,
                    dataType: "json",
                    success: showAllData,
                    error: showError
                });
            }
            loadData();

            // $(document).ready(function() {

            //     let store = (data) => {
            //         $.ajax({
            //             url: 'http://localhost:8000/api/partner/store',
            //             method: 'POST',
            //             data: data,
            //             contentType: false,
            //             processData: false,
            //             success: function(resp) {
            //                 console.log(resp);
            //             },
            //             error: function(e){
            //                 console.log(e);
            //             }
            //         })
            //     }

            //     $('#btn-save').on('click', function(e) {
            //         e.preventDefault()

            //         let doc = new FormData($('#addData')[0])

            //         store(doc)
            //     })

            // })
        </script>
    <!-- content-wrapper ends
@endsection
