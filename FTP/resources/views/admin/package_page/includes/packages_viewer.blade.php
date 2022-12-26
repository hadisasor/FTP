@php 
$url = URL::current();
$hajjPath = strstr($url,'hajj');
$hajjPath =preg_replace('/[^a-zA-Z\']/', "", $hajjPath );
//  return dd($route);


$url = URL::current();
$umrahPath = strstr($url,'umrah');
$umrahPath =preg_replace('/[^a-zA-Z\']/', "", $umrahPath );
//  return dd($route);
@endphp 


 @if($umrahPath == 'umrahpackages')
    <h3 class="mb-4">Umrah packages Table</h3>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Group leader</th>
                <th scope="col">Package type</th>
                <th scope="col">Package price</th>
                <th scope="col">Staying days</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                <th scope="col">check</th>
            </tr>
        </thead>
        <tbody>
            @foreach($umrahpackages as $i=>$umrahpackage)
            @if (auth()->user()->id == $umrahpackage['user_id'] &&  auth()->user()->userType == 'Tokseh')

            <tr>
                <th scope="row">{{$i+1}}</th>
                <td>{{$umrahpackage['groupLeader']}}</td>
                <td>{{$umrahpackage['packageName']}}</td>
                <td>{{$umrahpackage['packagePrice']}}฿</td>
                <td>{{$umrahpackage['stayingDays']}}</td>
                <td><a href="umrahpackages/{{$umrahpackage['id']}}"class="editbtn btn">Edit</a></td>
                <td><a  href="/delete_umrah/{{$umrahpackage['id']}}" class="pt-1 deletebtn btn">Delete</a></td>
                <td style="padding: 10px;"><input class="form-check-input" type="checkbox"></td>
            </tr>

            @elseif (auth()->user()->userType == 'Admin')
            <tr>
                <th scope="row">{{$i+1}}</th>
                <td>{{$umrahpackage['groupLeader']}}</td>
                <td>{{$umrahpackage['packageName']}}</td>
                <td>{{$umrahpackage['packagePrice']}}฿</td>
                <td>{{$umrahpackage['stayingDays']}}</td>
                <td><a href="umrahpackages/{{$umrahpackage['id']}}"class="editbtn btn">Edit</a></td>
                <td><a href="/delete_umrah/{{$umrahpackage['id']}}" class="deletebtn btn">Delete</a></td>
                <td style="padding: 10px;"><input class="form-check-input" type="checkbox"></td>
            </tr>
            @endif  
            @endforeach
        </tbody>
    </table>


@else


<h3 class="mb-4">Hajj packages Table</h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Group leader</th>
                            <th scope="col">Package type</th>
                            <th scope="col">Package price</th>
                            <th scope="col">Staying days</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                            <th scope="col">check</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($hajjpackages as $i=>$hajjpackage)
                        @if (auth()->user()->id == $hajjpackage['user_id'] &&  auth()->user()->userType == 'Tokseh')
                        <tr> 
                            <th scope="row">{{$i+1}}</th>
                            <td>{{$hajjpackage['groupLeader']}}</td>
                            <td>{{$hajjpackage['packageName']}}</td>
                            <td>{{$hajjpackage['packagePrice']}}฿</td>
                            <td>{{$hajjpackage['stayingDays']}}</td>
                            <td><a href="hajjpackages/{{$hajjpackage['id']}}"><button class="editbtn btn" type="submit">Edit</button></a></td>
                            <td><a href="/delete_hajj/{{$hajjpackage['id']}}" class="deletebtn btn">Delete</a></td>
                            <td style="padding: 10px;"><input class="form-check-input" type="checkbox"></td>
                        </tr>
                        @elseif (auth()->user()->userType == 'Admin')
                        <tr> 
                            <th scope="row">{{$i+1}}</th>
                            <td>{{$hajjpackage['groupLeader']}}</td>
                            <td>{{$hajjpackage['packageName']}}</td>
                            <td>{{$hajjpackage['packagePrice']}}฿</td>
                            <td>{{$hajjpackage['stayingDays']}}</td>
                            <td><a href="hajjpackages/{{$hajjpackage['id']}}"><button class="editbtn btn" type="submit">Edit</button></a></td>
                            <td><a href="/delete_hajj/{{$hajjpackage['id']}}" class="pt-1 deletebtn btn">Delete</a></td>
                            <td style="padding: 10px;"><input class="form-check-input" type="checkbox"></td>
                        </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>

@endif