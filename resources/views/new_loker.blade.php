@extends('layouts.main')
@section('body_content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-9">
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
        </div>
    </div>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script>


        var token = '<?php echo $token ?>'
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
                                     <h6 class="mb-3 mt-5">${row.title}</h6>
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
                            </div>
                `;
                // console.log("data => ",data[i]['title']);
                // console.log("data => ",data[i]['title']);
                $('#card-rows').append(tmplateLiterals);
            }

        }

        /* load data */
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
        loadData();
    </script>
    <!-- content-wrapper ends -->
@endsection
