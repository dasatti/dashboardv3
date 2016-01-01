
			
									
			<ul id="main-menu" class="main-menu auto-inherit-active-class">
				<!-- add class "multiple-expanded" to allow multiple submenus to open -->
				<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
				<li class="">
					<a href="{{url('/')}}">
						<i class="fa fa-dashboard"></i>
						<span class="title">Dashboard 
                       @if (Auth::user()->account_type =='admin')
                        {{' (Admin) '}}
                         @elseif(Auth::user()->account_type =='client')
                         {{' (Client) '}}
                         @else
                         {{' (Guest) '}}
                       @endif 
                        </span>
					</a>
				</li>
				<li class="has-sub">
					<a href="{{url('gsm')}}">
						<i class="fa fa-list"></i>
						<span class="title">Manage Phone Numbers</span>
					</a>
					<ul>
						<li>
							<a href="{{url('gsm/add')}}">
								<span class="title">Add GSM Number</span>
							</a>
						</li>
						<li>
							<a href="{{url('gsm')}}">
								<span class="title">List Numbers</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="">
					<a href="">
						<i class="fa fa-user"></i>
						<span class="title">Manage Clients</span>
					</a>
				</li>
				<li class="">
					<a href="">
						<i class="fa fa-briefcase"></i>
						<span class="title">Manage Campaigns</span>
						<span class="badge badge-secondary">8</span>
					</a>
				</li>
				<li>
					<a href="">
						<i class="fa fa-key"></i>
						<span class="title">API Authentications</span>
					</a>
				</li>
				<li>
					<a href="">
						<i class="fa fa-phone-square"></i>
						<span class="title">Manage Calls</span>
					</a>
				</li>
				<li>
					<a href="">
						<i class="fa fa-envelope"></i>
						<span class="title">Manage Emails</span>
					</a>
				</li>
			</ul>
			