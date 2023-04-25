<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href={{asset("Private/assets/img/apple-icon.png")}}>
    <link rel="icon" type="image/png" href={{asset("Private/assets/img/favicon.png")}}>
    <title>
        Register
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Font Awesome Icons -->
    <script src={{asset("script1.js")}}></script>
    <script src={{asset("script2.js")}}></script>

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    {{--    <!-- CSS Files -->--}}
    <link id="pagestyle" href={{asset("Private/assets/css/material-dashboard.css?v=3.0.4")}} rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
    <script src="{{asset("choices.min.js")}}"></script>
</head>
<style>
    .mess{
        color: red;
    }
    .dropdown {
        position: relative;
        display: inline-block;
    }
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #ffffff;
        min-width: 100%;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }
    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }
    .close {
        color: #aaaaaa;
        background-color: unset;
        border: none;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }
    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
</style>
<body class="bg-gray-200">
<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-4 col-md-8 col-12 mx-auto">
                    <div class="card z-index-0 fadeIn3 fadeInBottom w-100">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Kasb</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form role="form" action="{{ route('RegisterStage.store') }}" method="POST" class="text-start">
                                @csrf
                                <div class="row d-flex justify-content-center mt-100 mb-3">
                                    <div class="col-md-6 w-100">
                                        <select id="choices-multiple-remove-button" placeholder="Kasbingizni tanlang!" multiple required name="direction[]">
                                            @if($direction!=null)
                                            @foreach($direction as $val)
                                                <option value="{{$val->id}}">{{$val->name}}({{$jobs[$val->job_id]->name}})</option>
                                            @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <label id="mess" class="mess"></label>
                                <div class="d-flex">
                                    <div align="end" class="w-100">
                                        <button type="submit" class="btn bg-gradient-primary w-40 my-4 mb-2">Save</button>
                                    </div>
                                </div>
                                <p class="mt-4 text-sm text-center">
                                    O`tkazib yuborish!
                                    <a href="?skip=true" class="text-primary text-gradient font-weight-bold">Skip</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">--}}
        <button id="myBtn" style="display: none" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        </button>
        <!-- Modal -->
        <form action="{{ route('RegisterStage.store') }}" method="POST" class="text-start">
            @csrf
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">New Direction</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">New Direction</label>
                            <input id="inputmodal" align="center" type="text" class="form-control" required name="newdirection">
                        </div>
                        <div class="input-group input-group-outline my-3 dropdown">
                            <label class="form-label">Job</label>
                            <input id="newdirectionjob" onkeyup="jobin()" type="text" class="form-control w-100" required name="job">
                            <div id="newdircont" class="dropdown-content form-control w-100">
                                <?php $i=0; ?>
                                @if($jobs!=null)
                                @foreach($jobs as $val)
                                    <a onclick='clcjob("{{$val['name']}}")'>{{$val['name']}}</a>
                                        <?php $i++; if($i>5){ break; }  ?>
                                @endforeach
                                @endif
                            </div>
                            <input id="jobbool" style="display: none" value="false">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="new" value="new">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
        <footer class="footer position-absolute bottom-2 py-2 w-100">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-12 col-md-6 my-auto">
                        <div class="copyright text-center text-sm text-white text-lg-start">
                            © <script>
                                document.write(new Date().getFullYear())
                            </script>,
                            made with <i class="fa fa-heart" aria-hidden="true"></i> by
                            <a href="https://www.creative-tim.com" class="font-weight-bold text-white" target="_blank">Creative Tim</a>
                            for a better web.
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com" class="nav-link text-white" target="_blank">Creative Tim</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/presentation" class="nav-link text-white" target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/blog" class="nav-link text-white" target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-white" target="_blank">License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>


</main>
<!--   Core JS Files   -->
<script src={{asset("Private/assets/js/core/popper.min.js")}}></script>
<script src={{asset("Private/assets/js/core/bootstrap.min.js")}}></script>
<script src={{asset("Private/assets/js/plugins/perfect-scrollbar.min.js")}}></script>
<script src={{asset("Private/assets/js/plugins/smooth-scrollbar.min.js")}}></script>

<script src={{asset("Private/assets/js/1material-dashboard.min.js?v=3.0.4")}}></script>
<script src={{asset("underscore-min.js")}}></script>
<script>
    let jobs = @json($j);
    let sz = @json($sz);
    function find(s,f)
    {
        let i;
        s=s.toLowerCase();
        f=f.toLowerCase();
        for(i=0;i<s.length;i++)
        {
            if(s.substring(i,f.length+i)==f)
            {
                return true;
            }
        }
        return false;
    }
    function jobin()
    {
        document.getElementById('newdircont').style="display: block";
        document.getElementById('jobbool').value='true';
        let cursor=document.getElementById('newdirectionjob').value;
        let i;
        let opt="";
        for(i=0;i<sz;i++)
        {
            if(i>=5)
            {
                break;
            }
            if(find(jobs[i]['name'],cursor))
            {
                opt+="<a onclick='clcjob("+'"'+jobs[i]['name']+'"'+")'>"+jobs[i]['name']+"</a>";
            }
            if(opt.length==0)
            {
                opt+="<h7 style='color: #0d6efd'>New Jobs</h7>";
            }
        }
        document.getElementById('newdircont').innerHTML=opt;
    }
    function clcjob(sf)
    {
        document.getElementById('newdirectionjob').value=sf;
        document.getElementById('newdircont').style="display: none";
    }
</script>
<script>
    $(document).ready(function(){
        var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
            removeItemButton: true
        });
    });
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
