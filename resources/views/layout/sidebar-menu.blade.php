
			
				 @if (Auth::user()->account_type =='admin')					
			<ul id="main-menu" class="main-menu auto-inherit-active-class">
				<!-- add class "multiple-expanded" to allow multiple submenus to open -->
				<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
				<li class="">
					<a href="{{url('/dashboard')}}">
						<i class="fa fa-dashboard"></i>
						<span class="title">Dashboard 
                       {{' (Admin) '}}
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
				<li class="has-sub">
					<a href="{{url('clients')}}">
						<i class="fa fa-user"></i>

						<span class="title">Manage Clients</span>
						<!--<span class="badge badge-secondary">8</span>-->
					</a>
					<ul>
						<li>
							<a href="{{url('clients/add')}}">
								<span class="title">Add Client</span>
							</a>
						</li>
						<li>
							<a href="{{url('clients')}}">
								<span class="title">List Clients</span>
							</a>

							<ul>
								<li><a href="{{url('clients')}}">
								<span class="title">
									All
								</span></a></li>
								<li><a href="#"><span class="title">
									Client 1
								</span></a></li>
								<li><a href="#"><span class="title">
									Client 2
								</span></a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="has-sub">
						<i class="fa fa-road"></i>
						<span class="title">Manage Campaigns</span>
					</a>
					<ul>
						<li>
							<a href="{{url('campaigns/add')}}">
								<span class="title">Add Campaign</span>
							</a>
						</li>
						<li>
							<a href="{{url('campaigns')}}">
								<span class="title">List Campaigns</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="has-sub">
					<a href="{{url('api')}}">
						<i class="fa fa-key"></i>
						<span class="title">API Authentications</span>
					</a>
					<ul>
						<li>
							<a href="{{url('api/add')}}">
								<span class="title">Add Api Key</span>
							</a>
						</li>
						<li>
							<a href="{{url('api')}}">
								<span class="title">List Authentication Keys</span>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="{{url('calls')}}">
						<i class="fa fa-phone-square"></i>
						<span class="title">Manage Calls</span>
					</a>
				</li>
				<li>
					<a href="{{url('emails')}}">
						<i class="fa fa-envelope"></i>
						<span class="title">Manage Emails</span>
					</a>
				</li>
				<li>
					<a href="{{url('sms')}}">
						<i class="fa fa-comment"></i>
						<span class="title">Manage SMS</span>
					</a>
				</li>
			</ul>
            @elseif(Auth::user()->account_type =='client')
            <ul id="main-menu" class="main-menu auto-inherit-active-class">
				<!-- add class "multiple-expanded" to allow multiple submenus to open -->
				<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
				<li class="">
					<a href="{{url('/')}}">
						<i class="fa fa-dashboard"></i>
						<span class="title">Dashboard 
                       {{' (Client) '}}
                        </span>
					</a>
				</li>
                <li class="has-sub">
                <a href="{{url('/')}}">
						<i class="fa fa-list"></i>
						<span class="title">Manage Campaigns</span>
					</a>
                <ul>
				<li class="has-sub">
					<a href="{{url('gsm')}}">
						<i class="fa fa-list"></i>
						<span class="title">campaign A</span>
					</a>
					<ul>
						<li>
							<a href="{{url('calls')}}">
						<i class="fa fa-tty"></i>
						<span class="title">Calls</span>
						<span class="badge badge-secondary">8</span>
					</a>
						</li>
						<li>
							<a href="{{url('emails')}}">
						<i class="fa fa-envelope-o"></i>
						<span class="title">Emails</span>
					</a>
						</li>
                        <li>
							<a href="{{url('sms')}}">
						<i class="fa fa-weixin"></i>
						<span class="title">Manage SMS</span>
						</a>
						</li>
					</ul>
				</li>
                <li class="has-sub">
					<a href="{{url('gsm')}}">
						<i class="fa fa-list"></i>
						<span class="title">campaign B</span>
					</a>
					<ul>
						<li>
							<a href="{{url('calls')}}">
						<i class="fa fa-tty"></i>
						<span class="title">Calls</span>
						<span class="badge badge-secondary">8</span>
					</a>
						</li>
						<li>
							<a href="{{url('emails')}}">
						<i class="fa fa-envelope-o"></i>
						<span class="title">Emails</span>
					</a>
						</li>
                        <li>
							<a href="{{url('sms')}}">
						<i class="fa fa-weixin"></i>
						<span class="title">Manage SMS</span>
						</a>
						</li>
					</ul>
				</li>
                <li class="has-sub">
					<a href="{{url('gsm')}}">
						<i class="fa fa-list"></i>
						<span class="title">campaign C</span>
					</a>
					<ul>
						<li>
							<a href="{{url('calls')}}">
						<i class="fa fa-tty"></i>
						<span class="title">Calls</span>
						<span class="badge badge-secondary">8</span>
					</a>
						</li>
						<li>
							<a href="{{url('emails')}}">
						<i class="fa fa-envelope-o"></i>
						<span class="title">Emails</span>
					</a>
						</li>
                        <li>
							<a href="{{url('sms')}}">
						<i class="fa fa-weixin"></i>
						<span class="title">Manage SMS</span>
						</a>
						</li>
					</ul>
				</li>
                </ul>
                </li>
               <!-- <li class="">
					<a href="{{url('/')}}">
						<i class="entypo-chart-bar"></i>
						<span class="title">Leads</span>
					</a>
				</li>
				<li class="">
					<a href="{{url('/')}}">
						<i class="fa fa-bar-chart-o"></i>
						<span class="title">Overview</span>
					</a>
				</li>
				<li class="">
					<a href="{{url('calls')}}">
						<i class="fa fa-tty"></i>
						<span class="title">Calls</span>
						<span class="badge badge-secondary">8</span>
					</a>
				</li>
				<li>
					<a href="{{url('emails')}}">
						<i class="fa fa-envelope-o"></i>
						<span class="title">Emails</span>
					</a>
				</li>
				<li>
					<a href="{{url('sms')}}">
						<i class="fa fa-weixin"></i>
						<span class="title">Manage SMS</span>
					</a>
				</li>-->
				<li>
					<a href="{{url('roi')}}">
						<i class="fa fa-line-chart"></i>
						<span class="title">ROI</span>
					</a>
				</li>
			</ul>
            
			    @endif 
