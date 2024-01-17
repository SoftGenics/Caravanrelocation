
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>User panel</title>
    
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/adminlte/assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="https://cdn.jsdelivr.net/gh/THUNDERSAMA/intern-p1@fcc47ec99110eb75607a65b3c10569c346d1a67f/public/adminlte/dist/css/style.min.css" rel="stylesheet">
    
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <style>
        .badge {
    --bs-badge-padding-x: 13px;
    --bs-badge-padding-y: 6px;
    --bs-badge-font-size: 0.75rem;
    --bs-badge-font-weight: 400;
    --bs-badge-color: #fff;
    --bs-badge-border-radius: 6px;
    display: inline-block;
    padding: var(--bs-badge-padding-y) var(--bs-badge-padding-x);
    font-size: var(--bs-badge-font-size);
    font-weight: var(--bs-badge-font-weight);
    line-height: 1;
    color: var(--bs-badge-color);
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: var(--bs-badge-border-radius);
}
.bg-warning {
    --bs-bg-opacity: 1;
    background-color: rgba(var(--bs-warning-rgb),var(--bs-bg-opacity))!important;
}

        .fs-7 {
    font-size: 1.5rem!important;
}
.sidebar-nav ul .sidebar-item.selected>.sidebar-link {
    background-color: #088744 !important;
}
        
        </style>
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script type="module" src="node_modules/spin.js/spin.js"></script>

    <script>
   
     window.onunload = function(){
        
       
          $.ajax({
                url: '/windows-is-close',
                type: 'get', //this is your metho
                dataType: 'json',
                success: function(response) {

                    console.log(response);
                   
                }
            });
        }
        
      


   
    </script>
