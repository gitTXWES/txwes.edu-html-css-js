{{--
 * Results - Headings: Displays headings and prev and next view
--}}

<div class="ajax-load-area" id="view_period_switchers" data-ajaxloadalso='["calendar_events", "calendar_box", "view-switchers"]'>

    {{--  Determines if it is a Day, Month, All view and show the relative headings --}}
    @if(isset($data['result_set_params']) && isset($data['result_set_params']['searching']))
        @if(!empty($data['result_set_params']['custom_heading']))
        @elseif($data['result_set_params']['searching'] === 'month')
            <p class="view_period_range">{{ $data['module']::getDate($data['result_set_params']['startdate'],'F Y') }}</p>
             <div class="month_display_outer">
        <div class="month_display_inner">
          <time datetime="{{ $data['module']::getDate($data['result_set_params']['startdate'],'Y-m') }}" class="month_display">{{ $data['module']::getDate($data['result_set_params']['startdate'],'F y') }}</time>
           <div class="month_button_wrapper">
            {{--  Displays prev link --}}
    @if(!empty($data['prev_link']) && $data['prev_check'])
            <a href="{{$data['prev_link']['href']}}" class="prev_month month_button" rel="nofollow"  >
            @if($data['result_set_params']['searching']=="month")
                <img src="images/small_chevron_left_blue.svg" alt="Previous Month" class="chevron_icon"/>
            @endif
          </a>
    @endif
               {{--  Displays next link --}}
    @if(!empty($data['next_link']) && $data['next_check'])
            <a href="{{$data['next_link']['href']}}" class="next_month month_button" rel="nofollow"  >
            @if($data['result_set_params']['searching']=="month")
              <img src="images/small_chevron_right_blue.svg" alt="next_month Month" class="chevron_icon"/>
            @endif
            </a>
    @endif
           </div>
          </div>
          <div class="alternative_calendars_wrapper">
            <ul class="alternative_calendars_list">
              <li class="alternative_calendar_item">
                <a href="#">Academic Calendar<img src="images/ui icons/new-window.svg" alt="new-window"</a>
              </li>
              <li class="alternative_calendar_item">
                <a href="#">Student Life Calendar<img src="images/ui icons/new-window.svg" alt="new-window"</a>
              </li>
              <li class="alternative_calendar_item">
                <a href="#">Athletic Calendar<img src="images/ui icons/new-window.svg" alt="new-window"</a>
              </li>
          </div>
      </div>
        @endif
    @endif
  
  </div>
  