@if (is_array($item))
	<li class="menu">
		<span>{{$key}}</span>
		<ul>
			@foreach ($item as $k => $subitem)
				<?php echo view("administrator::partials.menu_item", array(
					'item' => $subitem,
					'key' => $k,
					'settingsPrefix' => $settingsPrefix,
					'pagePrefix' => $pagePrefix
				))?>
			@endforeach
		</ul>
	</li>
@else
	<li class="item">
		<a href="{{$key}}">{{$item}}</a>
	</li>
@endif
