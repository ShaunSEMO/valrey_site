<div class="card">
    <h5 class="card-header">Contacts</h5>
    <div class="card-body">
        <div class="container">

            <h4>Contact details</h4>
            <a class="btn std-btn btn-primary" href="{{ url('/$d_bu$!n3$$_d@$h/contacts/add') }}">Add Contact</a>
            <br><br>

            <div style="overflow-x:auto;">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Phone No.</th>
                        <th scope="col">email</th>
                        <th scope="col">address</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <th scope="row">{{ $contact->id }}</th>
                                <td>{{ $contact->number }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->address }}</td>
                                <td class="row">
                                    <a class="btn btn-outline-warning" href="{{ url('/$d_bu$!n3$$_d@$h/contacts/'.$contact->id.'/edit') }}">Edit</a>
                            
                                    {!! Form::open(['action' => ['App\Http\Controllers\DashboardController@deleteContact', $contact->id], 'method' => 'POST']) !!}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        {{ Form::submit('Delete', ['class' => 'btn btn-outline-danger'])}}
                                    {!!Form::close()!!}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
           

            <br><br><br>

            <h4>Social Media Links</h4>
            <a class="btn std-btn btn-primary" href="{{ url('/$d_bu$!n3$$_d@$h/contacts/add/social_link') }}">Add Link</a>
            <br><br>

            <div style="overflow-x:auto;">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Platform</th>
                        <th scope="col">Link</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($social_links as $social_link)
                            <tr>
                                <th scope="row">{{ $social_link->id }}</th>
                                <td>{{ $social_link->platform }}</td>
                                <td>{{ $social_link->link }}</td>
                                <td class="row">
                                    <a class="btn btn-outline-warning" href="{{ url('/$d_bu$!n3$$_d@$h/contacts/'.$social_link->id.'/edit/social_link') }}">Edit</a>
                            
                                    {!! Form::open(['action' => ['App\Http\Controllers\DashboardController@deleteSocialLink', $social_link->id], 'method' => 'POST']) !!}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        {{ Form::submit('Delete', ['class' => 'btn btn-outline-danger'])}}
                                    {!!Form::close()!!}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
            
        </div>
    </div>
</div>