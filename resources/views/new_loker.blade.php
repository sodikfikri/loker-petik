@extends('layouts.main')
@section('body_content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-9">
            <div class="alert alert-success display-0" id="alert_notif" role="alert">
                Lamaran Kamu berhasil dikirim
            </div>
            <div class="card">
                <div class="col">
                    <div class="col-12 mb-4">
                        <h5 class="mb-3 mt-3">Rekomendasi Untuk Anda</h5>
                    </div>
                    <div class="col-12 mb-4">
                        <div id="card-rows" class="card-rows">

                            <!-- for(var i in $data){
                                console.log($data[i]['title']);
                            } -->
                            <!-- @if(isset($data))
                            @foreach ($$data as $res) -->
                                <!-- <tr>
                                    <th scope="row">#</td>
                                    <td>{{ $res['location'] }}</td>
                                    <td>{{ $res['status'] }}</td>
                                    <td>{{ $res['title'] }}</td>
                                </tr> -->
                            <!-- @endforeach -->
                            <!-- @endif -->
                            <div class="card mb-4" style="border-radius: 0.5em;">
                                <div class="card-body">
                                    <div style="display:inline-block;vertical-align:top;">
                                        <img class="card-img-top" src="assets/images/ikal_petik.png" style="height:50px;width:50px;float: left;"/>
                                    </div>
                                    <div style="display:inline-block;">
                                        <div class="mt-1 mb-1">
                                            PT. Karya Anak Bangsa
                                        </div>
                                        <div class="small">
                                            Jakarta Timur
                                        </div>
                                     </div>
                                     <h5 class="mb-3 mt-3">Web Developer</h5>
                                     <div class="row">
                                         <i class="fa fa-chevron-right"></i>
                                         <p class="ml-1"> 15 Menit yang lalu</p>
                                         <i class="fa fa-chevron-right ml-2"></i>
                                         <p class="ml-1"> Pekerjaan tetap</p>
                                     </div>
                                     <p class="text">Job Requirement
                                        </p>
                                    <div>
                                        <ul>
                                            <li style="list-style: none;"><i class="fa fa-chevron-right">Bachelor’s degree in Computer Engineering/Computer Science or related field.</i></li>
                                            <li style="list-style: none;"><i class="fa fa-chevron-right">Min. 2-3 years Mobile Developer (IOS or Android).</i></li>
                                            <li style="list-style: none;"><i class="fa fa-chevron-right">Have a good exp. in IOS Developer using Swift, Android Developer using java / kotlin, object-oriented design and service-oriented architecture.</i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-4" style="border-radius: 0.5em;">
                                <div class="card-body">
                                    <div style="display:inline-block;vertical-align:top;">
                                        <img class="card-img-top" src="assets/images/ikal_petik.png" style="height:50px;width:50px;float: left;"/>
                                    </div>
                                    <div style="display:inline-block;">
                                        <div class="mt-1 mb-1">
                                            PT. Karya Anak Bangsa
                                        </div>
                                        <div class="small">
                                            Jakarta Timur
                                        </div>
                                     </div>
                                     <h5 class="mb-3 mt-3">Web Developer</h5>
                                     <div class="row">
                                         <i class="fa fa-chevron-right"></i>
                                         <p class="ml-1"> 15 Menit yang lalu</p>
                                         <i class="fa fa-chevron-right ml-2"></i>
                                         <p class="ml-1"> Pekerjaan tetap</p>
                                     </div>
                                     <p class="text">Job Requirement
                                        </p>
                                    <div>
                                        <ul>
                                            <li style="list-style: none;"><i class="fa fa-chevron-right">Bachelor’s degree in Computer Engineering/Computer Science or related field.</i></li>
                                            <li style="list-style: none;"><i class="fa fa-chevron-right">Min. 2-3 years Mobile Developer (IOS or Android).</i></li>
                                            <li style="list-style: none;"><i class="fa fa-chevron-right">Have a good exp. in IOS Developer using Swift, Android Developer using java / kotlin, object-oriented design and service-oriented architecture.</i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-4" style="border-radius: 0.5em;">
                                <div class="card-body">
                                    <div style="display:inline-block;vertical-align:top;">
                                        <img class="card-img-top" src="assets/images/ikal_petik.png" style="height:50px;width:50px;float: left;"/>
                                    </div>
                                    <div style="display:inline-block;">
                                        <div class="mt-1 mb-1">
                                            PT. Karya Anak Bangsa
                                        </div>
                                        <div class="small">
                                            Jakarta Timur
                                        </div>
                                     </div>
                                     <h5 class="mb-3 mt-3">Web Developer</h5>
                                     <div class="row">
                                         <i class="fa fa-chevron-right"></i>
                                         <p class="ml-1"> 15 Menit yang lalu</p>
                                         <i class="fa fa-chevron-right ml-2"></i>
                                         <p class="ml-1"> Pekerjaan tetap</p>
                                     </div>
                                     <p class="text">Job Requirement
                                        </p>
                                    <div>
                                        <ul>
                                            <li style="list-style: none;"><i class="fa fa-chevron-right">Bachelor’s degree in Computer Engineering/Computer Science or related field.</i></li>
                                            <li style="list-style: none;"><i class="fa fa-chevron-right">Min. 2-3 years Mobile Developer (IOS or Android).</i></li>
                                            <li style="list-style: none;"><i class="fa fa-chevron-right">Have a good exp. in IOS Developer using Swift, Android Developer using java / kotlin, object-oriented design and service-oriented architecture.</i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body submenu">
                        <h5 class="mb-3">Kategori Lowongan</h5>
                        <ul class="submenu-item list-unstyled">
                            <li class="nav-item">
                                <a class="nav-link text-dark pl-0" href="berita-1.html">Full Stack Developer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark pl-0" href="berita-2.html">Back End Developer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark pl-0" href="berita-3.html">Front End Developer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark pl-0" href="berita-4.html">Mobile Developer</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark pl-0" href="berita-4.html">System Analist</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark pl-0" href="berita-4.html">Engineer Database</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container">

    <form method="post" action="" id="form">
         @csrf
  <!-- Modal -->
  <div class="modal" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	<div class="alert alert-danger" style="display:none"></div>
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="exampleModalLongTitle">Apakah anda yakin ingin melamar ?</h5>

                </div>
                <div class="modal-body">
                    <div class="row">
                    <h6 class="modal-title text-center mb-3" id="exampleModalLongTitle">CV anda</h6>
                        <embed src="" id="cv_alumni"  type="application/pdf"   height="500px" width="200">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close_modal">Close</button>
                    <button type="button" class="btn btn-primary" id="apply_now">Apply Now</button>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
  </form>
 </div>

            <!-- <div class="modal fade" id="practice_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div>

                </div>
            </div> -->

            <!-- <div class="modal fade" id="practice_modal">
                        <div>

                        </div>
                    </div> -->
        </div>
    </div>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script>


        var token = '<?php echo $token ?>'
        var alumni_id = '<?php echo $alumni_id ?>'
        var job_id = '';

        /* show error */
        function showError(){
            console.log("Error! blok");
        }

        /* show all data */
        function showAllData(items){
            console.log("show data => ", items);
            let data = items['data'];

            $('#card-rows').html('');

            for(var row of data){
                console.log("row => ", row);
                let tmplateLiterals = `
                <div class="card mb-4" style="border-radius: 0.5em;">
                                <div class="card-body">

                                    <div style="display:inline-block;">
                                        <div class="mt-1 mb-1">
                                            <h3>${row.partner_name}</3>
                                        </div>
                                        <div class="small">
                                            ${row.location}
                                        </div>
                                     </div>
                                     <h4 class="mb-3 mt-5">${row.title}</h4>
                                     <div class="row">
                                         <i class="fa fa-chevron-right"></i>
                                         <p class="ml-1"> ${row.created_at}</p>
                                         <i class="fa fa-chevron-right ml-2"></i>
                                         <p class="ml-1"> ${row.category}</p>
                                     </div>
                                     <p class="text">Job Requirement
                                        </p>
                                    <div>
                                        <p>
                                            ${row.body.replaceAll('\n', '<br>')}
                                        </p>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-lg" id="open_modal" data-id="${row.id}">Apply</button>
                            </div>
                `;
                // console.log("data => ",data[i]['title']);
                // console.log("data => ",data[i]['title']);
                $('#card-rows').append(tmplateLiterals);
            }

        }

        /* load data new loker */
        function loadData(){
            console.log("load data");

            //make request
            $.ajax({
                url:"http://localhost:8000/api/job/list",
                headers:{
                    Authorization: 'Bearer ' + token
                },
                type: "GET",
                contentType: "aplication/json",
                dataType: "json",
                success: showAllData,
                error: showError
            });
        }

        /*==================================================================*/
        /*show error user */
        function showErrorUser(datas){
            console.log("error => ");
        }

        /*show Data user */
        function showAllDataUser(datas){
            console.log("show data User => ", datas);
            let data = datas['data'];
            console.log("show data User 2 => ", data);
            $('#cv_alumni').attr("src",data.cv);

            $('#practice_modal').html('');

            // for(var rowData of data){
                let row = '';
                if (data.cv!=null) {
                    row = `
                    <div class="row">
                        <p> Nama : ${data.name}</p>
                    </div>
                    `;
                }
                else {
                    row = `
                    <div class="row">
                        <p> No name</p>
                    </div>
                    `;
                }

        }

        $(document).ready(function(){
            $("#open_modal").click(function(){
                $("#myModal").modal('show');
            });
        });

        /* Load Data User */
        function loadDataUser(){
            console.log("load data User");

            //make request
            $.ajax({
                url:"http://localhost:8000/api/alumni/detail?id="+alumni_id,
                headers:{
                    Authorization: 'Bearer ' + token
                },
                type: "GET",
                contentType: "aplication/json",
                dataType: "json",
                success: showAllDataUser,
                error: showErrorUser
            });
        }

        $(document).ready(function () {

            $('body').on('click', '#apply_now', function (event) {
                job_id = $('#open_modal').attr('data-id');
                applyJob();
            });

        });

        function showApplyError(data ){
            console.log("Error! blok", data);
        }

        function showApplySuccess(data){
            console.log("success",data);
            if (data.meta.code == '201') {
                console.log("success apply ");
                $('#alert_notif').removeClass('display-0');
                // $('#myModal').modal('toggle');
                // $('#myModal').modal('hide');
                $('#myModal').modal('hide');
            } else {
                alert(resp.meta.message);
            }
        }

        function applyJob(){
            console.log("send Apply");
            console.log("alumni id => ",alumni_id);
            console.log("job id => ",job_id);

            let params = {
                    job_id: parseInt(job_id),
                    alumni_id : parseInt(alumni_id)
                }

            //make request
            $.ajax({
                url:"http://localhost:8000/api/job/apply",
                headers:{
                    Authorization: 'Bearer ' + token
                },
                data: params,
                type: "POST",
                success: showApplySuccess,
                error: showApplyError
            });
        }

        loadData();
        loadDataUser();


    </script>
    <!-- content-wrapper ends -->
@endsection
