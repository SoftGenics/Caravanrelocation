@extends('layouts.user')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />

<div id="calendar"></div>

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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    $(document).ready(function () {
        $('#calendar').fullCalendar({
            header: {
                left: 'prev, next today',
                center: 'title',
                right: 'month, agendaWeek, agendaDay',
            },
            selectable: true,
            selectHelper: true,
            select: function (start, end, allDay) {
                $('#bookingModal').modal('toggle');
                $('#saveBtn').click(function () {
                    var title = $('#title').val();
                    var start_date = moment(start).format('YYYY-MM-DD');
                    var end_date = moment(end).format('YYYY-MM-DD');
                    $.ajax({
                        url: 'your_create_url', // Replace with your create route
                        type: 'POST',
                        dataType: 'json',
                        data: { title: title, start_date: start_date, end_date: end_date },
                        success: function (response) {
                            $('#bookingModal').modal('hide');
                            $('#calendar').fullCalendar('renderEvent', {
                                'id': response.id,
                                'title': response.title,
                                'start': response.start,
                                'end': response.end,
                                'color': response.color,
                            }, true);
                        },
                        error: function (error) {
                            if (error.responseJSON.errors) {
                                $('#titleError').html(error.responseJSON.errors.title);
                            }
                        },
                    });
                });
            },
            editable: true,
            eventDrop: function (event) {
                var id = event.id;
                var start_date = moment(event.start).format('YYYY-MM-DD');
                var end_date = moment(event.end).format('YYYY-MM-DD');
                $.ajax({
                    url: 'your_update_url/' + id, // Replace with your update route
                    type: 'PUT',
                    dataType: 'json',
                    data: { start_date: start_date, end_date: end_date },
                    success: function (response) {
                        swal("Good job!", "Event Updated!", "success");
                    },
                    error: function (error) {
                        console.log(error);
                    },
                });
            },
            eventClick: function (event) {
                var id = event.id;
                if (confirm('Are you sure want to remove it')) {
                    $.ajax({
                        url: 'your_delete_url/' + id, // Replace with your delete route
                        type: 'DELETE',
                        dataType: 'json',
                        success: function (response) {
                            $('#calendar').fullCalendar('removeEvents', id);
                            swal("Good job!", "Event Deleted!", "success");
                        },
                        error: function (error) {
                            console.log(error);
                        },
                    });
                }
            },
            selectAllow: function (event) {
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
    document.getElementById('saveBtn').addEventListener('click', function(event) {
    event.preventDefault(); // Prevents the form from submitting in the default way

    // Get the book title from the input field
    var title = document.getElementById('title').value;

    // Send the book title to the server via AJAX (example using Fetch API)
    fetch('your_save_endpoint', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ title: title }),
    })
    .then(response => {
        // Handle the response from the server (if needed)
        console.log('Book title saved successfully');
    })
    .catch(error => {
        // Handle errors, if any
        console.error('Error saving book title:', error);
    });
});

</script>
@stop
