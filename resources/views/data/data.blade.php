<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body class="bg-light">
    <div class="container p-3 border bg-primary">
        <p class="mb-0 text-light"><b>Github</b> Jobs</p>
    </div>
    <div class="container">
        <div class="py-4">
               <form class="row gx-5 align-items-center" action="/" type="GET">
               <div class="col">
                    <div class="mb-3">
                        <label for="filter1" class="form-label">Job Description</label>
                        <input type="text" class="form-control" name="description" id="jobdesc" placeholder="Filter by benefit, corporates">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="filter2" class="form-label">Location</label>
                        <input type="text" class="form-control" name="location" id="location" placeholder="Filter by city, state, zip code">
                    </div>
                </div>
                <div class="col">
                    <div class="mt-4">
                        <input class="form-check-input" type="checkbox" name="full_time" id="fulltime" value='true' onclick="cekRemote()">
                        <label for="fulltime" name="type" class="form-label">Full Remote Only</label>
                    </div>
                </div>
                <div class="col">
                    <div class="mt-4">
                        <button type="submit" class="btn btn-success">Search</button>
                    </div>
                </div>
               </form>
        </div>
        
        <div class="d-flex flex-column p-4 bg-white">
            <h4 class="mb-4">Job Lists</h4>
            <div class="mb-4">
        @foreach($datas as $data)
                <div class="border-bottom mb-4">
                    <h4><a href="data/data-detail/{{$data['id']}}">{{$data['title']}}</a></h4>
                    <p>{{$data['company']}} - <b>{{$data['type']}}</b></p>
                </div>
        @endforeach
            </div>
                <form id="show_more" action="/">
                    <input  type="hidden" name="page" value="all">
                    <button  class="btn btn-primary form-control" onclick="moreJob()"><span id="more_job">More Jobs</span></button>
                </form>
                <form id="show_less" action="/" class="d-none">
                    <input  type="hidden" name="page" value="">
                    <button  class="btn btn-primary form-control " onclick="lessJob()" ><span id="less_job">Show Less</span></button>
                </form>
        </div>
        <!-- <div class="d-flex flex-column p-4 bg-white">
            <h4 class="mb-4">Job Lists</h4>
            <div class="mb-4">
                <div class="border-bottom mb-4">
                    <p>Data Enginer</p>
                    <p>Trade Republic - <b>Full Time</b></p>
                </div>
                <div class="border-bottom mb-4">
                    <p>Data Enginer</p>
                    <p>Trade Republic - <b>Full Time</b></p>
                </div>
                <div class="border-bottom mb-4">
                    <p>Data Enginer</p>
                    <p>Trade Republic - <b>Full Time</b></p>
                </div>
            </div>
            <div>
                <button class="btn btn-primary w-100">
                    More Jobs
                </button>
            </div>
        </div> -->
    </div>
</body>

<!-- JavaScript Bundle with Popper -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('js/data.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>