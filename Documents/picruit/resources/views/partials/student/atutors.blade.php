@extends ('layouts.user')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />
<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>
<div class="page-wrapper">

  <div class="page-breadcrumb">
    <div class="row align-items-center">
      <div class="col-6">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0 d-flex align-items-center">
            <li class="breadcrumb-item"><a href="dashboard" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
            <li class="breadcrumb-item active" aria-current="page">All tutors</li>
          </ol>
        </nav>
        <h1 class="mb-0 fw-bold">All tutors</h1>
      </div>

    </div>
  </div>

  <div class="container-fluid">
    <div class="row" style="overflow: auto;">
      <div id="grid_table"></div>
    </div>


  </div>

</div>

<script>
  var db = {
    loadData: function(filter) {
      return $.grep(this.clients, function(client) {
        return (
          (!filter.ID || client.Name.indexOf(filter.ID) > -1) &&
          (!filter.Name_of_id || client.Name_of_id.indexOf(filter.Name_of_id) > -1) &&

          (!filter.Segment || client.Segment.indexOf(filter.Segment) > -1) &&
          (!filter.Mode || client.Mode.indexOf(filter.Mode) > -1) &&
          (!filter.City || client.City.indexOf(filter.City) > -1) &&
          (!filter.Pincode || client.Pincode.indexOf(filter.Pincode) > -1) &&
          (!filter.Mobile || client.Mobile.indexOf(filter.Mobile) > -1) &&

          (!filter.Email || client.Email.indexOf(filter.Email) > -1) &&

          (!filter.Gender || client.Gender === filter.Gender)

        );
      });
    },


  };
  window.db = db;
  db.clients = [{
      ID: "1",
      Date: "3/16/2023",
      Name_of_id: "editor",
      Segment: "content editor",
      subject: "english",
      Mode: "Offline",
      city: "patna",
      Pincode: 700124,
      Mobile: "1234567890",
      Email: "a@g.com",
      Gender: "Online",
    },
    {
      ID: "1",
      Date: "3/16/2023",
      Name_of_id: "editor",
      Segment: "content editor",
      subject: "english",
      Mode: "Offline",
      city: "patna",
      Pincode: 700124,
      Mobile: "1234567890",
      Email: "a@g.com",
      Gender: "Online",
    },
    {
      ID: "1",
      Date: "3/16/2023",
      Name_of_id: "editor",
      Segment: "content editor",
      subject: "english",
      Mode: "Offline",
      city: "patna",
      Pincode: 700124,
      Mobile: "1234567890",
      Email: "a@g.com",
      Gender: "Online",
    },
    {
      ID: "1",
      Date: "3/16/2023",
      Name_of_id: "editor",
      Segment: "content editor",
      subject: "english",
      Mode: "Offline",
      city: "patna",
      Pincode: 700124,
      Mobile: "1234567890",
      Email: "a@g.com",
      Gender: "Online",
    },
    {
      ID: "1",
      Date: "3/16/2023",
      Name_of_id: "editor",
      Segment: "content editor",
      subject: "english",
      Mode: "Offline",
      city: "patna",
      Pincode: 700124,
      Mobile: "1234567890",
      Email: "a@g.com",
      Gender: "Online",

    },
    {
      ID: "1",
      Date: "3/16/2023",
      Name_of_id: "editor",
      Segment: "content editor",
      subject: "english",
      Mode: "Offline",
      city: "patna",
      Pincode: 700124,
      Mobile: "1234567890",
      Email: "a@g.com",
      Gender: "Online",

    },
    {
      ID: "1",
      Date: "3/16/2023",
      Name_of_id: "editor",
      Segment: "content editor",
      subject: "english",
      Mode: "Offline",
      city: "patna",
      Pincode: 700124,
      Mobile: "1234567890",
      Email: "a@g.com",
      Gender: "Online",

    },
    {
      ID: "1",
      Date: "3/16/2023",
      Name_of_id: "editor",
      Segment: "content editor",
      subject: "english",
      Mode: "Offline",
      city: "patna",
      Pincode: 700124,
      Mobile: "1234567890",
      Email: "a@g.com",
      Gender: "Online",
    },
    {
      ID: "1",
      Date: "3/16/2023",
      Name_of_id: "editor",
      Segment: "content editor",
      subject: "english",
      Mode: "Offline",
      city: "patna",
      Pincode: 700124,
      Mobile: "1234567890",
      Email: "a@g.com",
      Gender: "Online",
    },
    {
      ID: "1",
      Date: "3/16/2023",
      Name_of_id: "editor",
      Segment: "content editor",
      subject: "english",
      Mode: "Offline",
      city: "patna",
      Pincode: 700124,
      Mobile: "1234567890",
      Email: "a@g.com",
      Gender: "Online",
    },
    {
      ID: "1",
      Date: "3/16/2023",
      Name_of_id: "editor",
      Segment: "content editor",
      subject: "english",
      Mode: "Offline",
      city: "patna",
      Pincode: 700124,
      Mobile: "1234567890",
      Email: "a@g.com",
      Gender: "Online",
    },
    {
      ID: "1",
      Date: "3/16/2023",
      Name_of_id: "editor",
      Segment: "content editor",
      subject: "english",
      Mode: "Offline",
      city: "patna",
      Pincode: 700124,
      Mobile: "1234567890",
      Email: "a@g.com",
      Gender: "Online",
    },


  ];
  db.mode = [{
      Name: "",
      Id: ''
    },
    {
      Name: "online",
      Id: 'online'
    },
    {
      Name: "offline",
      Id: 'offline'
    },
  ];

  //           $(document).ready(() => {

  //                     $.ajaxSetup({
  //   headers: {
  //       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  //   }
  // });


  $('#grid_table').jsGrid({

    width: "100%",
    height: "auto",
    filtering: true,
    sorting: true,
    paging: true,
    autoload: true,
    shrinkToFit: false,
    pageSize: 15,
    pageButtonCount: 5,
    deleteConfirm: "Do you really want to delete data?",
    rowClass: "my-row-class",
    // controller: {
    // ajax data load from database////////////////////////////////
    //   loadData: function(filter){
    //    return $.ajax({
    //     type: "GET",
    //     url: "fetch_data.php",
    //     data: filter
    //    });
    //   },

    //},
    headerRowRenderer: function() {
      var $result = $("<tr>").height(0)
        .append($("<th>").width("80"))
        .append($("<th>").width("120"))
        .append($("<th>").width("70"))
        .append($("<th>").width("120"))
        .append($("<th>").width("150"))
        .append($("<th>").width("80"))
        .append($("<th>").width("80"))
        .append($("<th>").width("80"))
        .append($("<th>").width("120"))
        .append($("<th>").width("120"));
      $result = $result.add($("<tr>")




        .append($("<th class='jsgrid-cell js-header'>").attr("colspan", 1).text("Status"))
        .append($("<th class='jsgrid-cell js-header'>").attr("colspan", 1).text("Date"))
        .append($("<th class='jsgrid-cell js-header'>").attr("colspan", 1).text("ID"))
        .append($("<th class='jsgrid-cell js-header'>").attr("colspan", 1).text("Segment"))
        .append($("<th class='jsgrid-cell js-header'>").attr("colspan", 1).text("Subject"))
        .append($("<th class='jsgrid-cell js-header'>").attr("colspan", 1).text("Mode"))
        .append($("<th class='jsgrid-cell js-header'>").attr("colspan", 1).text("City"))
        .append($("<th class='jsgrid-cell js-header'>").attr("colspan", 1).text("Pincode"))
        .append($("<th class='jsgrid-cell js-header'>").attr("colspan", 1).text("Mobile"))
        .append($("<th class='jsgrid-cell js-header'>").attr("colspan", 1).text("Email"))
        
        // .append($("<th class='jsgrid-cell js-header'>").attr("colspan", 1).text("other_details"))
      );
      return $result;
    },
    controller: {
      loadData: function(filter) {
        return $.ajax({
          type: "POST",
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          url: "{{ route('fetch_data_tutor') }}",
          data: filter,
          dataType: "JSON",
          // error:function(data){
          //       console.log(data);
          //    }
        });
      }
    },
    fields: [{
        type: "control",
        editButton: false,
        deleteButton: false,
        itemTemplate: function(value, item) {
          var $iconPencil = "View";
          //    color: black;
          //font-size: 2.5em;
          //$("<i>").attr({class: "mdi mdi-arrow-right-box",style:"color:black;font-size: 2.5em;"});

          var $customEditButton = $("<button>")
            .attr({
              class: "btn btn-success btn-xs btst"
            })
            .attr({style:"font-size: 13px;font-weight: 700;"})
            .attr({
              role: "button"
            })
            .attr({
              title: jsGrid.fields.control.prototype.editButtonTooltip
            })
            .attr({
              id: "btn-edit-" + item.ID
            })
            .click(function(e) {
              alert("ID: " + item.ID);
              // document.Mode.href = item.id + "/edit";
              e.stopPropagation();
            })
            .append($iconPencil);


          return $("<div>").attr({
              class: "btn-toolbar"
            })
            .append($customEditButton);

        },

        width: "80",
      },

      {
        name: "Date",
        type: "date",
        myCustomProperty: "bar",
        width: "120",

      },
      {
        name: "Id",

        width: "70",

      },
      {
        name: "Segment",
        type: "text",
        width: "120",
        validate: "required"
      },
      {
        name: "Subject",
        type: "text",
        width: "150",
        validate: "required"
      },
      {
        name: "Mode",
        
        type: "text",
        
        textField: "Name",
        width: "80"
      },
      {
        name: "City",
        type: "text",
        width: "80",
        validate: "required"
      },
      {
        name: "Pincode",
        type: "number",
        width: "80",
        validate: "required"
      },
      {
        name: "Mobile",
        type: "text",
        width: "120",
        validate: "required"
      },

      {
        name: "Email",
        type: "text",
        width: "120",
        validate: "required"
      },

      


    ]


  });
</script>
<script>


</script>
@stop