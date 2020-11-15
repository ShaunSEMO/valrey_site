<div class="following">

    <br>
    <h1>Influencer Stats</h1>
    <hr class="white-hr">
    <br>

    <div class="row container following-row">
        @foreach ($stats as $stat)
            <div class="col-sm-4 container ">
                <div class="white-float">
                    <br>
                    <h2>{{$stat->stat_num}}</h2>
                    <br>
                    <p>{{$stat->title}}</p>
                    <br>
                </div>
                <br>
                <br>
            </div>
        @endforeach 
    </div>
    <br>
    <br>
</div>