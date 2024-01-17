@extends ('layouts.user')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  
<div class="page-wrapper">
          
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="dashboard" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">Tasks</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">Tasks</h1> 
                    </div>
                    
                </div>
            </div>
            <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Booking title</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <input type="text" class="form-control" id="title">
                      <span id="titleError" class="text-danger"></span>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" id="saveBtn" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
              <div id="calendar">
        
              </div>
          
</div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src='http://fullcalendar.io/js/fullcalendar-2.1.1/lib/jquery.min.js'></script>
  <script src='http://fullcalendar.io/js/fullcalendar-2.1.1/lib/moment.min.js'></script>

<script src="http://fullcalendar.io/js/fullcalendar-2.1.1/lib/jquery-ui.custom.min.js"></script>
<script src='http://fullcalendar.io/js/fullcalendar-2.1.1/fullcalendar.min.js'></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
            $(document).ready(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
               
                $('#calendar').fullCalendar({
                    header: {
                        left: 'prev, next today',
                        center: 'title',
                        right: 'month, agendaWeek, agendaDay',
                    },
                
                    selectable: true,
                    selectHelper: true,
                    select: function(start, end, allDays) {
                        $('#bookingModal').modal('toggle');
                        $('#saveBtn').click(function() {
                            var title = $('#title').val();
                            var start_date = moment(start).format('YYYY-MM-DD');
                            var end_date = moment(end).format('YYYY-MM-DD');
                            $.ajax({
                                url:"#",
                                type:"POST",
                                dataType:'json',
                                data:{ title, start_date, end_date  },
                                success:function(response)
                                {
                                    $('#bookingModal').modal('hide')
                                    $('#calendar').fullCalendar('renderEvent', {
                                        'title': response.title,
                                        'start' : response.start,
                                        'end'  : response.end,
                                        'color' : response.color
                                    });
                                },
                                error:function(error)
                                {
                                    if(error.responseJSON.errors) {
                                        $('#titleError').html(error.responseJSON.errors.title);
                                    }
                                },
                            });
                        });
                    },
                    editable: true,
                    eventDrop: function(event) {
                        var id = event.id;
                        var start_date = moment(event.start).format('YYYY-MM-DD');
                        var end_date = moment(event.end).format('YYYY-MM-DD');
                        $.ajax({
                                url:"#",
                                type:"PATCH",
                                dataType:'json',
                                data:{ start_date, end_date  },
                                success:function(response)
                                {
                                    swal("Good job!", "Event Updated!", "success");
                                },
                                error:function(error)
                                {
                                    console.log(error)
                                },
                            });
                    },
                    eventClick: function(event){
                        var id = event.id;
                        if(confirm('Are you sure want to remove it')){
                            $.ajax({
                                url:"#",
                                type:"DELETE",
                                dataType:'json',
                                success:function(response)
                                {
                                    $('#calendar').fullCalendar('removeEvents', response);
                                    // swal("Good job!", "Event Deleted!", "success");
                                },
                                error:function(error)
                                {
                                    console.log(error)
                                },
                            });
                        }
                    },
                    selectAllow: function(event)
                    {
                        return moment(event.start).utcOffset(false).isSame(moment(event.end).subtract(1, 'second').utcOffset(false), 'day');
                    },
                });
                $("#bookingModal").on("hidden.bs.modal", function () {
                    $('#saveBtn').unbind();
                });
                $('.fc-event').css('font-size', '13px');
                $('.fc-event').css('width', '20px');
                $('.fc-event').css('border-radius', '50%');
            });
        </script>
            @stop