<link rel="stylesheet" href="/frontend/css/bootstrap.css">
<div class="container mt-4">


    <h1>Kurslar</h1>
    <div align="right">
        <a href='{{route('courseInsert')}}'>
            <button class = 'btn btn-success'>Add</button>
        </a>

    </div>
    <br>

    <table class="table">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">Must</th>
                <th></th>
                <th></th>
            </tr>
        </thead>


        <tbody>
            @foreach($course as $row)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$row->course_title}}</td>
                <td>{{$row->course_content}}</td>
                <td>{{$row->course_must}}</td>
                <td width="10"><a href=''><button class = 'btn btn-primary' > Edit </button></td>
                <td width="10"><a href=''><button class = 'btn btn-danger' > Delete </button></td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>







