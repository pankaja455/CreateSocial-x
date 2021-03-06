<script>

</script>

<!-- Payment Modal </-->

<div class="modal fade ParymentsModal" id="PaymentsModal" role="dialog" aria-labelledby="PaymentsModal" style="color: black;">
      <div class="modal-dialog modal-lg" style="width: 70vw;">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title primary-color align-center"><b><center>Payment</center></b></h4>
          </div>
          <div class="modal-body" id="attmodal">
              <center>
            <iframe src="https://api.paymentwall.com/api/subscription/?key=7579904ac82b6bb4b26bd3093c2096bb&uid=[{{$user->id}}]&widget=p10_1" width="750" height="800" frameborder="0"></iframe>
              </center>
              
          </div>
          <div class="modal-footer">
            <button type="button" id="attending" class="btn btn-primary" data-dismiss="modal">Close</button>
           <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

<!-- Payment Modal end </-->
<div class="row box" data-toggle="modal" data-target="#PaymentsModal">
    <div class="box-title">{{trans('user.getfeatured')}}</div>
    
   <div style="overflow-x:scroll;overflow-y:hidden;white-space: nowrap;">
     <span style="display:inline;">
                <img src="{{(isset($avatar)) ? $avatar : $loggedInUser->present()->getAvatar(50)}}" width="80" height="80" style="border: solid 5px #000;"/>
            </span>
            @foreach($users as $user)
            {{Theme::section('user.spotlight', ['user' => $user])}}
            @endforeach
</div>
</div>
<div class="box">
    <div class="box-title">{{trans('user.credits')}}</div>
    <div class="box-content">
       {{trans('user.hello')}} <span style="color: #FCA62C; font-weight: bold;"> {{$user->fullname}}</span>,
       <br><br>
        <div id="credits-bar" style="min-height: 2em;background: -webkit-radial-gradient(#FCA62C , #EA7620);text-align:center; color:white; padding-top: 0.5em;">
            <p style="font-size: 2em;">{{$user->credits}}</p>
            <p style="margin-top: -0.5em; padding-bottom: 0.5em;">{{trans('user.credbalance')}}</p>
        </div> 
        <br>
        <center>
            <button type="button" class="btn btn-success" type="submit" style="color: white; background-color: #00B124;" data-toggle="modal" data-target="#PaymentsModal">{{trans('user.refill')}}</button>
        </center>
        <br>
        <hr>
        <br>
        <div class="risingup_circle" style="margin-left: auto;margin-right: auto;border-radius: 50%;width: 38%;height: 18em;position: relative;border: 1px solid black;background-color: whitesmoke;">
        <img class="img-circle" style="width: 100%; height: 100%;" src="{{$user->present()->getAvatar(30)}}"/>
        </div>
        <br><br>
        <center>
        {{trans('user.yourrank')}} {{$user->rank}}<br>
            <br>
        <button type="button" class="btn btn-default" style="background-color: #8CC925;border-radius: 5px;color: white;" data-toggle="modal" data-target="#PaymentsModal">{{trans('user.doriseup')}}</button>
            </center>
    </div>
</div>