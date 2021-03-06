<ul class="cl-vnavigation">
	<li>
		<a href="#"><i class="fa fa-home"></i><span>Dashboard</span></a>
		<li class="{{ Request::url() == URL::route('proposal.index.get') ? 'active' : '' }}">
			<a href="{{ URL::route('proposal.index.get') }}">
				<i class="fa fa-file-text"></i><span>Proposals</span>
			</a>
		</li>
		<li class="{{ Request::url() == URL::route('agreementLength.index.get') ? 'active' : '' }}">
			<a href="{{ URL::route('agreementLength.index.get') }}">
				<i class="fa fa-calendar"></i><span>Agreement Lengths</span>
			</a>
		</li>
		<li class="{{ Request::url() == URL::route('package.index.get') ? 'active' : '' }}">
			<a href="{{ URL::route('package.index.get') }}">
				<i class="fa fa-box"></i><span>Product Packages</span>
			</a>
		</li>
		<li class="{{ Request::url() == URL::route('internet.index.get') ? 'active' : '' }}">
			<a href="{{ URL::route('internet.index.get') }}">
				<i class="fa fa-wifi"></i><span>Internet Products</span>
			</a>
		</li>
		<li class="{{ Request::url() == URL::route('tv.index.get') ? 'active' : '' }}">
			<a href="{{ URL::route('tv.index.get') }}">
				<i class="fa fa-television"></i><span>TV Products</span>
			</a>
		</li>
		<!-- <li class="{{ Request::url() == URL::route('voice.index.get') ? 'active' : '' }}"><a href="{{ URL::route('voice.index.get') }}"><i class="fa fa-phone"></i><span>Voice Products</span></a></li> -->
		<li class="{{ Request::url() == URL::route('ip.index.get') ? 'active' : '' }}">
			<a href="{{ URL::route('ip.index.get') }}">
				<i class="fa fa-bolt"></i><span>Static IPs</span>
			</a>
		</li>
	</li>
</ul>
