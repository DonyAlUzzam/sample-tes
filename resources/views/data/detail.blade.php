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
        <div class="py-3">
            <a href="#" class="text-info" style="font-size: 14px" onclick="history.back()"><< Back</a>
        </div>
        <div class="p-4 bg-white border">
            <div class="d-flex flex-column pb-3 mb-4 border-bottom">
                <small class="text-black-50 mb-1">{{$datas['type']}} / {{$datas["location"]}}</small>
                <h4>{{$datas["title"]}}</h4>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div id="html-content">
                        <div>
                            <h5>Trade Republic in Europe</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis iste neque consequatur illum facilis exercitationem debitis. Eum, ex accusamus magnam magni ab fugit dolor, recusandae veniam iure, non tempore officia!</p>
                        </div>
                        <div>
                            <h5>What you'll be doing</h5>
                            <ul>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                                <li>Sit exercitationem quam nemo id porro dolorem magnam qui saepe ea aliquam cumque illo, quaerat accusamus suscipit. Ipsa autem porro ipsam sed.</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                                <li>Sit exercitationem quam nemo id porro dolorem magnam qui saepe ea aliquam cumque illo, quaerat accusamus suscipit. Ipsa autem porro ipsam sed.</li>
                            </ul>
                        </div>
                        <div>
                            <h5>What we look for</h5>
                            <ul>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                                <li>Sit exercitationem quam nemo id porro dolorem magnam qui saepe ea aliquam cumque illo, quaerat accusamus suscipit. Ipsa autem porro ipsam sed.</li>
                                <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                                <li>Sit exercitationem quam nemo id porro dolorem magnam qui saepe ea aliquam cumque illo, quaerat accusamus suscipit. Ipsa autem porro ipsam sed.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="https://via.placeholder.com/300" alt="">
                    <div class="row mt-4">
                        <div class="col-md-12">
                        <form class="form-inline">
                            <fieldset>
                                <h4><b>How to apply</b>
                            </fieldset>
                            <span>apply directly at</span>
                            {{$datas['how_to_apply']}}
                            <!-- {{htmlspecialchars_decode(htmlspecialchars_decode($datas['how_to_apply']))}} -->
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>