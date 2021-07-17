<!DOCTYPE html>
<html>
<head>
    <title>How to Use Fullcalendar in Laravel 8</title>

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/locale/fr-ca.min.js" integrity="sha512-96yuGZBd0f1nxbm/gfz1mgGTC5vh/37DMvIfoBELVVelXLGG5IBiE793wObhkwrXjZ65oKNsivMfcjVLl5pzcw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<body>

    <div class="container">
        <br />
        <h1 class="text-center text-primary"><u>How to Use Fullcalendar in Laravel 8</u></h1>
        <br />

        <div id="calendar"></div>

    </div>

    <script>
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
    });

     var calendar = $('#calendar').fullCalendar({

        locale: 'fr',
        lang: 'es',
         editable:false,
         yearcolumns:3,
         header:{
             left:'prev,next today,prevYear,nextYear',
             center:'title',
             right:'year,month,basicWeek,basicDay'
         },
        buttonText:{
            today:    'Aujourd\'hui',
            month:    'Mois',
            week:     'Semaine',
            day:      'jour',
            list:     'list'
}
     });
     calendar.setOption('locale', 'fr');
    </script>

</body>
</html>
