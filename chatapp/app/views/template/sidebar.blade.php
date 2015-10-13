  <aside>
          <div id="sidebar"  class="nav-collapse ">

             <div class="avatar">
             <p class="centered"><a href="{{URL::to('show-profile/2')}}"><img src="{{URL::to('assets/img/ui-zac.jpg"')}}" class="img-circle" width="60"></a></p>
             <h5 class="centered">{{Auth::user()->firstname;}} {{Auth::user()->lastname;}}</h5>
             <h6 class="centered">Chatties member</h6>
            </div>
              <ul class="sidebar-menu" id="nav-accordion">

                  <li class="mt">

                  <li class="sub-menu">
                      <a>
                          <i class="fa fa-comments"></i>
                          <span>Channels</span>
                      </a>
                      <ul class="sub" id="channels">
                           @foreach($channels as $key => $channel)
                           <li><a href="{{URL::to('/'.$channel->name)}}">{{$channel->name}}</a></li>
                           @endforeach
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a>
                          <i class="fa fa-users"></i>
                          <span>Friends</span>
                      </a>
                      <ul class="sub" id="users">
                             @foreach($users as $key => $user)
                                   <li><a href="{{URL::to('/private/'.$user->nickname)}}">{{$user->nickname}}</a></li>
                             @endforeach
                      </ul>
                  </li>
              </ul>

          </div>
      </aside>