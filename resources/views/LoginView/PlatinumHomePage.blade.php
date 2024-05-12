@extends('layout.PlatinumLayout')

@section('PlatinumBar')
    <!-- Your navigation content goes here -->
   <!-- <div style="margin-left:20%;padding:1px 20px;height:1000px; margin-top: 40px;"> -->
   <div class="main p-3">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img src="/image/logo.png" alt="Logo" width="80" height="80" class="d-inline-block align-text-top">
                        </a>
                    </div>
                </nav>
                <a class="navbar-brand" href="#">Welcome To Thesis Master Gate !</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        
                    </ul>
                </div>
            </nav>
            <div class="row border ">
                <div class="col-md-9">
                    <div class="container border">
                        <div class="card">
                            <img src="{{ URL('images/Software testing.jpg') }}" alt="Software testing" width="100" height="100">
                            <div class="card-body">
                                <div class="container">
                                    <h5 class="card-title">Card title</h5>
                                </div>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

        
    </script>
@endsection
