@extends('layouts.master')
@section('custom-style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
@endsection
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<div id="calendar"></div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('custom-js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#calendar').fullCalendar({
			"header":{
				"left":"prev,next today",
				"center":"title",
				"right":"month,agendaWeek,agendaDay"
			},
			"eventLimit":true,
			"events":[
			@foreach($reservations as $reservation)
			{
				"id":{!!$reservation->id !!},
				"title":"{{$reservation->event_name}}",
				"allDay":false,
				"start":"{{$reservation->start_time}}",
				"end":"{{$reservation->end_time}}",
				"color":"#cddc39",
				"backgroundColor":"#512DA8",
				"borderColor":"#000",
				"textColor":"#fff"
			},
			@endforeach
			],
			dayClick: function(date, jsEvent, view) {
				if(view.name == 'month' || view.name == 'agendaWeek') {
					$('#calendar').fullCalendar('changeView', 'agendaDay');
					$('#calendar').fullCalendar('gotoDate', date);      
				}
			}
			// dayClick: function(date, jsEvent, view) {
			// 	alert('Untuk prosedur peminjaman, bisa langsung ke sekretariat POROS atau menghubungi narahubung kami')
				// var eventsCount = 0;
				// var date = date.format('YYYY-MM-DD');
				// $('#calendar').fullCalendar('clientEvents', function(event) {
				// 	var start = moment(event.start).format("YYYY-MM-DD");
				// 	var end = moment(event.end).format("YYYY-MM-DD");
				// 	if(date == start)
				// 	{
				// 		eventsCount++;
				// 	}
				// });
				// if (eventsCount<2) {
				// 	window.location = document.URL + "/create/" + date;	
				// }
				// else{
				// 	alert("Tanggal ini sudah penuh order");
				// }
			// }
		});
	});
</script>
@endsection