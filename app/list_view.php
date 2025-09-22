{{--
 * Results - OnlyList: Displays the list of the events, paginated and already ordered.
--}}

<div class="ajax-load-area" id="calendar_events" data-ajaxloadalso='["calendar_events", "calendar_box", "view-switchers"]'>
    <div class="section no-tp">
      <div class="events-module">

     
    @foreach ($data['events'] as $date => $ids)
       

    {{--  Loop of events of the page the array is divided by single days --}}
      {{--  Day events Title --}}
           @if($data['result_set_params']['searching'] !== 'day' && ($data['module']::getConfig('view_for_date_multi') ==  true))
            <div class="calenday">
             {{ $data['module']::getDate($date,'D d F, Y','d/m/Y') }}
            </div>
        @endif
      @foreach ($ids as $id => $event)

        @if(!empty($event))
        <div class="event_container_outer" id="event-list-{{ $data['module']::getDate($date,'Y-m-d','d/m/Y') }}-{{$id}}" data-contentid="{{$event['content_id']}}" data-eventtype="{{$event['event_type']}}">
              <div class="event_container_inner">
    @if(!isset($event['multidayevent']) || $event['multidayevent'] !== false)

     <div class="event_date_pill_outer">
              <div class="event_date_pill_inner">
                  <div class="pill_date">                        
                     <time datetime="{{ $data['module']::getDate($event['multi_dates'][$event['event_type']]['startdate'],'Y-m-d') }}">
                       FROM <br>
                       {{ $data['module']::getDate($event['multi_dates'][$event['event_type']]['startdate'],'M d') }}
                     </time>
                  </div>
                  <div class="pill_time">
                      <time datetime="{{ $data['module']::getDate($event['multi_dates'][$event['event_type']]['startdate'],'G:i') }}">
                        TO <br>
                        {{ $data['module']::getDate($event['multi_dates'][$event['event_type']]['enddate'],'M d') }}
                      </time>
                  </div>
              </div>
            </div>        
@else
          <div class="event_date_pill_outer">
              <div class="event_date_pill_inner">
                  <div class="pill_date">                        
                     <time datetime="{{ $data['module']::getDate($event['multi_dates'][$event['event_type']]['startdate'],'Y-m-d') }}">
                       {{ $data['module']::getDate($event['multi_dates'][$event['event_type']]['startdate'],'D') }}<br>
                       {{ $data['module']::getDate($event['multi_dates'][$event['event_type']]['startdate'],'M d') }}
                     </time>
                  </div>
                  <div class="pill_time">
                      <time datetime="{{ $data['module']::getDate($event['multi_dates'][$event['event_type']]['startdate'],'G:i') }}">
                        {{ $data['module']::getDate($event['multi_dates'][$event['event_type']]['startdate'],'g:i') }} <br>
                        {{ $data['module']::getDate($event['multi_dates'][$event['event_type']]['startdate'],'a') }}
                      </time>
                  </div>
              </div>
            </div>
@endif
          {{ isset($event['image']) ? $event['image'] : '' }}
             <div class="event_text_wrap">
                    <div class="event_title">
                        <h2>{{ $event['short_desc'] }}</h2>
                    </div>
                    <div class="event_detail_link">
                        <a href="{{ (isset($event['url'])) ? $event['url'] : '?event_id='.$event['content_id'] }}{{ ($event['event_type'] != 'origin') ? ((!empty($event['url']) ? '?' : '&').'event_type='.$event['event_type']) : '' }}">
                          <span>details</span>
                          <img src="<t4 type="media" id="342" formatter="path/*" />" alt="new window icon" />
                        </a>
                    </div>
                </div>
                <div class="event_image_wrap">
                  @if(!empty($event['small_img']))
                    <img src="{{ $event['small_img'] }}" class="placeholder_for_image"></img>
                  @endif
                </div>
      
          </div>   
          </div>

        @endif
      @endforeach
    @endforeach
  
 </div>
      


    {{--  Message if no event was found  --}}
    @if(empty($data['events']))
        <div class="no-found">
            <p>There are currently no events for this period.</p>
        </div>
    @endif
    </div>
</div>












