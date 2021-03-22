<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php
    echo $title;
    
    ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/b5e36b87ea.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../css/OverlayScrollbars.min.css">

    <!-- custom css  -->
    <style>
        .timer {
            width: 200px;
            height: 60px;
            background: #00a1fc;
            position: fixed;
            top: 150px;
            z-index: 2222222;
            right: 120px;
            border-radius: 200px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .timer span {
            color: white;
            font-weight: 800;
            font-size: 1.7rem;
        }
    </style>
    <style>
        .cross-cont {
            width: 36px;
            height: 57px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .cross {
            transition: all .5s;
            cursor: pointer;
            width: 30px;
            height: 5px;
            background: white;
            /* margin-right: 9px; */
            /* position: absolute; */
            position: relative;
            right: 7px;
            top: 1px;
            transform: rotate(45deg);

        }

        .cross-2 {
            transform: rotate(-45deg);
        }

        .out-top {
            top: -3px;
            width: 20px;
            transform: rotate(-45deg);
        }

        .out-bottom {
            transform: rotate(45deg);
            top: 3px;
            width: 20px;
        }

        .timer-w {
            width: 65px;
            right: 10px;
        }

        #the-time {
            transition: all .3s;
        }

        #the-time-second {
            transition: all .3s;
        }

        .opacity-0 {
            opacity: 0;
            transform: scale(0);
            position: absolute;
            top: 0;
            left: 0;
        }

        .timer {
            transition: all .5s
        }

        .my-hide {
            display: flex !important;
            transform: scale(0);
            transition: all .5s;
            opacity: 0;
            position: absolute;
        }

        .my-show {
            transform: scale(1) !important;
            opacity: 1 !important;
            position: relative !important;
        }
    </style>

</head>