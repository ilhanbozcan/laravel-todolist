<link rel="stylesheet" href="/frontend/css/bootstrap.css">
    <div class="container mt-4">
        <div class="col-md-6">
            <h2>ADD COURSE</h2>
            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li> {{$error}}</li>
                    @endforeach

                </ul>
            @endif

            @if(session()->has('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
            @endif


            <form action="{{route('courseInsertPost')}}" method="POST" >
                @CSRF
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input name="course_title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter title">

                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Content</label>
                    <input name="course_content" type="text" class="form-control" id="exampleInputPassword1" placeholder="Content">
                </div>

                <div class="form-group">
                    <label for="Must">Must</label>
                    <input name="course_must" type="text" class="form-control" id="exampleInputPassword1" placeholder="Must">
                </div>

                <input type="submit" class="btn btn-primary" value="Add"></input>
            </form>



        </div>
    </div>

