{{-- @extends('layout')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Laravel Test 01</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/student/create') }}" class="btn btn-success btn-sm" title="+Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> +Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Mobile</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $item)
                                
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->mobile }}</td>
 
                                        <td>
                                            <a href="{{ url('/student/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/student/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/delete' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('POST') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}



<!DOCTYPE html>
<html>
<head>
  <title>Hi lassana lamayo</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      background-color: #f8f8f8;
      margin: 50px;
    }

    h1 {
      color: #e91e63;
    }

    p {
      color: #555;
      font-size: 18px;
    }

    #loveNote {
      color: #ff5722;
      font-size: 24px;
      font-weight: bold;
      margin-top: 30px;
    }

    #heart {
      color: #e91e63;
      font-size: 30px;
      animation: heartbeat 1s infinite;
    }

    @keyframes heartbeat {
      0% {
        transform: scale(1);
      }
      50% {
        transform: scale(1.2);
      }
      100% {
        transform: scale(1);
      }
    }
  </style>
</head>
<body>
  <h1>For My Lassana lamaya!</h1>
  <p>Hi My Dear lassana lamayoo ,</p>
  <p>I just wanted to take a moment to let you know how special you are to me.</p>
  <p>Your smile brightens up my darkest days, and your laughter is like music to my ears.</p>
  <p>Being with you is like living in a dream, and I'm grateful for every moment we spend together.</p>
  <p>So here's a little <span id="loveNote">"I love you"</span> and a big <span id="heart">❤</span> just for you!</p>
  <p>Love always,<br>[Sas]</p>
</body>
</html>
