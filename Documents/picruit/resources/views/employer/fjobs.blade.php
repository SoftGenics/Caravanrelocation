@extends ('layouts.user')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>
  <style>
    .jsgrid-pager-current-page, .jsgrid-pager-nav-button a, .jsgrid-pager-page a {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    display: inline-block;
    min-width: 1.5em;
    padding: 0.5em 1em;
    text-align: center;
    text-decoration: none;
    cursor: pointer;
    color: #67757c;
    border: 1px solid #ddd;
    }
   
  </style>
  <div class="page-wrapper">
          
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 d-flex align-items-center">
                      <li class="breadcrumb-item"><a href="dashboard" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                      <li class="breadcrumb-item active" aria-current="page">Upgrade jobs</li>
                    </ol>
                  </nav>
                <h1 class="mb-0 fw-bold">Upgrade jobs</h1> 
            </div>
            
        </div>
    </div>
   
    <div class="container-fluid">
       <div class="row">
        <div id="grid_table"></div>
       </div>
  
        
    </div>
  
</div>

<script>
    var db = {
    loadData: function (filter) {
      return $.grep(this.clients, function (client) {
        return (
          (!filter.ID || client.Name.indexOf(filter.ID) > -1) &&
          (!filter.Date || client.Date === filter.Date) &&
          (!filter.Job_Title || client.Job_Title.indexOf(filter.Job_Title) > -1) &&
          (!filter.Pincode || client.Pincode.indexOf(filter.Pincode) > -1) &&
          (!filter.Mobile || client.Mobile.indexOf(filter.Mobile) > -1) &&
          (!filter.Area || client.Area.indexOf(filter.Area) > -1) &&
          (!filter.Email || client.Email.indexOf(filter.Email) > -1) &&
          (!filter.Location || client.Location.indexOf(filter.Location) > -1) &&
          (!filter.Segment || client.Segment.indexOf(filter.Segment) > -1) &&
          (!filter.Age || client.Age.indexOf(filter.Age) > -1) &&
          (!filter.Gender || client.Gender === filter.Gender)
          
        );
      });
    },

    
  };
  window.db = db;
  db.clients =  [
    {
    ID: "1",
    Date: "3/16/2023",
    Job_Title: "editor",
    Pincode: 700124,
    Mobile: "1234567890",
    Area: "south",
    Email: "a@g.com",
    Location: "kolkata",
    Segment: "content editor",
    Age: "54",
    Gender: "Male",
  },
  {
    ID: "2",
    Date: "5/21/2023",
    Job_Title: "writer",
    Pincode: 560076,
    Mobile: "9876543210",
    Area: "east",
    Email: "b@h.com",
    Location: "bangalore",
    Segment: "technical writer",
    Age: "32",
    Gender: "Female",
  },
  {
    ID: "3",
    Date: "7/12/2023",
    Job_Title: "proofreader",
    Pincode: 110001,
    Mobile: "8899776655",
    Area: "west",
    Email: "c@t.com",
    Location: "delhi",
    Segment: "copy editor",
    Age: "45",
    Gender: "Male",
  },
  {
    ID: "4",
    Date: "9/2/2023",
    Job_Title: "journalist",
    Pincode: 600002,
    Mobile: "7788996655",
    Area: "north",
    Email: "d@m.com",
    Location: "chennai",
    Segment: "news editor",
    Age: "28",
    Gender: "Female",
  },
  {
    ID: "5",
    Date: "11/8/2023",
    Job_Title: "content writer",
    Pincode: 400001,
    Mobile: "7766554433",
    Area: "south",
    Email: "e@z.com",
    Location: "mumbai",
    Segment: "article editor",
    Age: "39",
    Gender: "Male",
  },
  {
    ID: "6",
    Date: "1/19/2024",
    Job_Title: "reporter",
    Pincode: 500001,
    Mobile: "9988776655",
    Area: "east",
    Email: "f@q.com",
    Location: "hyderabad",
    Segment: "broadcast editor",
    Age: "26",
    Gender: "Female",
  },
  {
    ID: "7",
    Date: "3/8/2024",
    Job_Title: "copywriter",
    Pincode: 641004,
    Mobile: "8877665544",
    Area: "west",
    Email: "g@p.com",
    Location: "coimbatore",
    Segment: "advertising editor",
    Age: "41",
    Gender: "Male",
  },
    {
        Id:"7",
      Date: "3/16/2023",
      Job_Title: "editor",
      Pincode: 700124,
      Mobile: "1234567890",
      Area: "south",
      Email: "a@g.com",
      Location: "kolkata",
      Segment: "content editor",
      Age: "54",
      Gender:"Male",
    },
    {
    Id: "8",
    Date: "3/16/2023",
    Job_Title: "editor",
    Pincode: 700124,
    Mobile: "1234567890",
    Area: "south",
    Email: "a@g.com",
    Location: "kolkata",
    Segment: "content editor",
    Age: "54",
    Gender: "Male"
  },
  {
    Id: "9",
    Date: "5/5/2023",
    Job_Title: "writer",
    Pincode: 560076,
    Mobile: "9876543210",
    Area: "east",
    Email: "b@h.com",
    Location: "bangalore",
    Segment: "technical writer",
    Age: "32",
    Gender: "Female"
  },
  {
    Id: "10",
    Date: "7/23/2023",
    Job_Title: "proofreader",
    Pincode: 110001,
    Mobile: "8899776655",
    Area: "west",
    Email: "c@t.com",
    Location: "delhi",
    Segment: "copy editor",
    Age: "45",
    Gender: "Male"
  },
  {
    Id: "11",
    Date: "9/18/2023",
    Job_Title: "journalist",
    Pincode: 600002,
    Mobile: "7788996655",
    Area: "north",
    Email: "d@m.com",
    Location: "chennai",
    Segment: "news editor",
    Age: "28",
    Gender: "Female"
  },
  {
    Id: "12",
    Date: "11/1/2023",
    Job_Title: "content writer",
    Pincode: 400001,
    Mobile: "7766554433",
    Area: "south",
    Email: "e@z.com",
    Location: "mumbai",
    Segment: "article editor",
    Age: "39",
    Gender: "Male"
  },
  {
    ID: "13",
    Date: "1/19/2024",
    Job_Title: "reporter",
    Pincode: 500001,
    Mobile: "9988776655",
    Area: "east",
    Email: "f@q.com",
    Location: "hyderabad",
    Segment: "broadcast editor",
    Age: "26",
    Gender: "Female"
  },
  {
    ID: "14",
    Date: "3/8/2024",
    Job_Title: "copywriter",
    Pincode: 641004,
    Mobile: "8877665544",
    Area: "west",
    Email: "g@p.com",
    Location: "coimbatore",
    Segment: "advertising editor",
    Age: "41",
    Gender: "Male"
  },
    {
        Id:"15",
      Date: "3/16/2023",
      Job_Title: "editor",
      Pincode: 700124,
      Mobile: "1234567890",
      Area: "south",
      Email: "a@g.com",
      Location: "kolkata",
      Segment: "content editor",
      Age: "54",
      Gender:"Male",
    },
    {
    Id: "16",
    Date: "3/16/2023",
    Job_Title: "editor",
    Pincode: 700124,
    Mobile: "1234567890",
    Area: "south",
    Email: "a@g.com",
    Location: "kolkata",
    Segment: "content editor",
    Age: "54",
    Gender: "Male",
  },
  {
    Id: "17",
    Date: "5/5/2023",
    Job_Title: "writer",
    Pincode: 560076,
    Mobile: "9876543210",
    Area: "east",
    Email: "b@h.com",
    Location: "bangalore",
    Segment: "technical writer",
    Age: "32",
    Gender: "Female",
  },
  {
    Id: "18",
    Date: "7/23/2023",
    Job_Title: "proofreader",
    Pincode: 110001,
    Mobile: "8899776655",
    Area: "west",
    Email: "c@t.com",
    Location: "delhi",
    Segment: "copy editor",
    Age: "45",
    Gender: "Male",
  },
    
  ];
  db.gender = [
    { Name: "", Id: '' },
     { Name: "Male", Id: 'male' },
     { Name: "Female", Id: 'female' },
  ];
    $('#grid_table').jsGrid({

     width: "100%",
     height: "auto",
     filtering: true,
        sorting: true,
        paging: true,
        autoload: true,
 
        pageSize: 15,
        pageButtonCount: 5,
     deleteConfirm: "Do you really want to delete data?",

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
     controller: db,
     fields: [
      {
       name: "ID",
    type: "number",
    css: 'hide'
      },
      {
       name: "Date", 
    type: Date, 
    width: 50, 
    validate: "required"
      },
      {
       name: "Job_Title", 
    type: "text", 
    width: 50, 
    validate: "required"
      },
      {
       name: "Pincode", 
    type: "number", 
    width: 50, 
    validate: "required"
      },
      {
       name: "Mobile", 
    type: "text", 
    width: 50, 
    validate: "required"
      },
      {
       name: "Area", 
    type: "text", 
    width: 50, 
    validate: "required"
      },
      {
       name: "Email", 
    type: "text", 
    width: 50, 
    validate: "required"
      },
      {
       name: "Location", 
    type: "text", 
    width: 50, 
    validate: "required"
      },
      {
       name: "Segment", 
    type: "text", 
    width: 70, 
    validate: "required"
      },
      {
       name: "Age", 
    type: "text", 
    width: 50, 
    validate: function(value)
    {
     if(value > 0)
     {
      return true;
     }
    }
      },
      {
       name: "Gender", 
       type: "select", items: db.gender, valueField: "Id", textField: "Name" 
      },
      {
       type: "control"
      }
     ]

    });

</script>
<script>
  

    </script>
    @stop
          

