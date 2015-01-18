@foreach($items as $item)
  <li @if($item->hasChildren()) class="treeview" @endif>
      <a href="{{ $item->url() }}">
      	@if ($item->attr('icon'))
      		<i class="{{ $item->attr('icon') }}"></i>
      	@else
      		<i class="fa fa-angle-double-right"></i>
      	@endif
      	{{ $item->title }} 
		@if ($item->hasChildren())
			<i class="fa pull-right fa-angle-left"></i>
		@endif
      </a>
      @if($item->hasChildren())
        <ul class="treeview-menu">
              @include('shoulderscms::AdminLTE.partials.custom-menu-items', array('items' => $item->children()))
        </ul> 
      @endif
  </li>
@endforeach	

