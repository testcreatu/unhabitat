@extends('home-master')



@section('content')

<div class="about-page ">
	<div class="container">
		<div class="row">
			<div class="col-md-3 left-container">
				<div class="left-col box-shadow">
					<ul class="sidebar">
						<li class="{{ (request()->is('about_us*')) ? 'active' : '' }}">
							<a href="#">About us</a>
						</li>
						<li>
							<a href="#">Overview</a>
						</li>
						<li>
							<a href="#">Where we are</a>
						</li>
						<li>
							<a href="#">Mandate & History</a>
						</li>
						<li>
							<a href="#">Un-Habitat In nepal</a>
						</li>
						<li>
							<a href="#">expression of intrest</a>
						</li>
						<li>
							<a href="#">employment opportunities</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-9 right-container">
				<div class="right-col">
					<div class=" detail-content">
						<div class="title">
							<h5>About Us</h5>
						</div>

						<div class="detail-content-img">
							<img src="{{('public/images/1.jpg')}}" class="img-fluid" alt="">
						</div>

						<div class="content">
							<p><strong>UN-Habitat is the United Nations program working towards a better urban future. Its mission is to promote socially and environmentally sustainable human settlements development and the achievement of adequate shelter for all.</strong></p>

							<p>Cities are facing unprecedented demographic, environmental, economic, social and spatial challenges. There has been a phenomenal shift towards urbanization, with 6 out of every 10 people in the world expected to reside in urban areas by 2030. Over 90 per cent of this growth will take place in Africa, Asia, Latin America, and the Caribbean.</p>

							<p>In the absence of effective urban planning, the consequences of this rapid urbanization will be dramatic. In many places around the world, the effects can already be felt: lack of proper housing and growth of slums, inadequate and out-dated infrastructure – be it roads, public transport, water, sanitation, or electricity – escalating poverty and unemployment, safety and crime problems, pollution and health issues, as well as poorly managed natural or man-made disasters and other catastrophes due to the effects of climate change.</p>

							<p>UN-HABITAT contributes to the overall objective of the United Nations system to reduce poverty and promote sustainable development. Its’ partners range from governments and local authorities to a wide international cross-section of Non-Governmental Organisations and civil society groups.</p>

							<p>
								In accordance with its work programme, UN-HABITAT’s operational activities are focused on the following:
								<ul>
									<li>Promoting Shelter for all;</li>
									<li>Improving urban governance;</li>
									<li>Reducing urban poverty;</li>
									<li>Improving the living environment; and</li>
									<li>Managing disaster mitigation and post-conflict rehabilitation</li>
								</ul>
							</p>
							<p>UN-HABITAT is focused on supporting governments in the formulation of policies and strategies to both create and strengthen a self-reliant management capacity at both national and local levels. Technical and managerial expertise is provided for:</p>
							<p>The assessment of human settlement development constraints and opportunities;</p>
							<ul>
								<li>The assessment of human settlement development constraints and opportunities;</li>
								<li>The design and implementation of housing and urban development projects;</li>
								<li>The mobilization of national resources; and</li>
								<li>External support for improving human settlement conditions.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection