<!DOCTYPE html>
<html lang="en">

<?php


require '../partials/_db-connect.php';
$title = 'Level 2';


include '../partials/_head.php';

?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <?php

        include '../partials/_nav.php';

        ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php
        include '../partials/_slidebar.php';

        ?>

        <!-- Content Wrapper. Contains page content -->
        <div style="margin-top: 57px;" class="content-wrapper">

            <?php

            include '../partials/_content-header.php';

            ?>

        <!-- Content Wrapper. Contains page content -->
            <!-- Content Header (Page header) -->




            <div id="result" class="container my-cont row m-0 ">
                <div id="abacus" class="row">
                    <?php
                    $sql = "SELECT * FROM level_2 WHERE `type` = 'abacus'  ORDER BY rand()";
                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        $i = 1;
                        $num_rows = mysqli_num_rows($result);

                        echo '<h2  >Abacus Questions (' . $num_rows . ') </h2>';
                        while ($row = mysqli_fetch_assoc($result)) {
                            $num = rand(1, 4);

                            echo ' 
                                <form class="question my-3 col-md-6">
                                <h4><b>' . $i . ') ' . $row['question'] . ' = ? (' . $row['type'] . ')</b></h4>
                                <div class="row ml-5 my-3">
                                    <div class="col-md-2">
                                        <div class="form-check">

                                                ';
                            if ($num == 1) {
                                echo '                                        
                                                    <input class="form-check-input rhireh-gher_ihgr_he-ihre-hfir_hifhi-abacus" type="radio" name="exampleRadios" id="question-' . $i . '-a">
                                                    <label class="form-check-label " for="question-' . $i . '-a"> ' . $row['answer'] . '';
                            } else {
                                $wAns = (int)$row['answer'] + rand(-10, (int)$row['answer'] + 5);
                                echo '                                        
                                                    <input class="form-check-input rh_ireh-gher-ihgr_he_ihr_ehf-ir_hifhi-abacus" type="radio" name="exampleRadios" id="question-' . $i . '-a">
                                                    <label class="form-check-label" for="question-' . $i . '-a"> ' . $wAns . '';
                            }
                            echo '
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check">
                                            ';
                            if ($num == 2) {

                                echo '                                        
                                <input class="form-check-input rhireh-gher_ihgr_he-ihre-hfir_hifhi-abacus" type="radio" name="exampleRadios" id="question-' . $i . '-b">
                                <label class="form-check-label " for="question-' . $i . '-b"> ' . $row['answer'] . '';
                            } else {
                                $wAns = (int)$row['answer'] + rand(-10, (int)$row['answer'] + 5);
                                echo '                                        
                                                <input class="form-check-input rhir-ehgh_er-ihgr_heihr_ehf-ir_hifhi-abacus" type="radio" name="exampleRadios" id="question-' . $i . '-b">
                                                <label class="form-check-label" for="question-' . $i . '-b"> ' . $wAns . '';
                            }
                            echo '                                        </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ml-5 my-3">
                                    <div class="col-md-2">
                                        <div class="form-check">
                                            ';
                            if ($num == 3) {
                                echo '                                        
                                                <input class="form-check-input rhireh-gher_ihgr_he-ihre-hfir_hifhi-abacus" type="radio" name="exampleRadios" id="question-' . $i . '-c">
                                                <label class="form-check-label " for="question-' . $i . '-c"> ' . $row['answer'] . '';
                            } else {
                                $wAns = (int)$row['answer'] + rand(-10, (int)$row['answer'] + 5);
                                echo '                                        
                                                <input class="form-check-input rhirehg-herihg_rhei_hr-ehfirhi_fhi-abacus" type="radio" name="exampleRadios" id="question-' . $i . '-c">
                                                <label class="form-check-label" for="question-' . $i . '-c"> ' . $wAns . '';
                            }
                            echo '                                        </label>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-check">
                                            ';
                            if ($num == 4) {
                                echo '                                        
                                                <input class="form-check-input rhireh-gher_ihgr_he-ihre-hfir_hifhi-abacus" type="radio" name="exampleRadios" id="question-' . $i . '-d">
                                                <label class="form-check-label " for="question-' . $i . '-d"> ' . $row['answer'] . '';
                            } else {
                                $wAns = (int)$row['answer'] + rand(-10, (int)$row['answer'] + 5);
                                echo '                                        
                                                <input class="form-check-input rh_irehg-herih-gufu_ygr-ehfirg_ierfhi-abacus" type="radio" name="exampleRadios" id="question-' . $i . '-d">
                                                <label class="form-check-label" for="question-' . $i . '-d"> ' . $wAns . '';
                            }
                            echo '                                        </label>
                                        </div>
                                    </div>
                                </div>
                            </form>

                                ';
                            $i = $i + 1;
                        }
                    }


                    ?>
                </div>

                <nav id="answers">
                    <div class="nav nav-tabs">
                        <button class="nav-link active" id="nav-abacus-tab">Abacus Answers</button>
                        <button class="nav-link" id="nav-result-tab">Result Answers</button>
                    </div>
                </nav>
                <div class="tab-content">
                    <div class="my-hide  my-show active row " id="nav-abacus"></div>
                    <div class="my-hide  row" id="nav-result"></div>
                </div>

            </div>

            <div id="timer" class="timer bg-danger">
                <div id="cross" class="cross-cont">

                    <div id="cross-1" class="cross"></div>
                    <div id="cross-2" class="cross cross-2 "></div>
                </div>

                <span id="the-time">00 M</span>
                <span id="the-time-second">00 S</span>

            </div>
            <script src="../js/jquery.min.js"></script>


            <script>
                let abacusTab = document.getElementById('nav-abacus-tab')
                let resultTab = document.getElementById('nav-result-tab')
                
                let abacusDiv = document.getElementById('nav-abacus')
                let resultDiv = document.getElementById('nav-result')
                abacusTab.addEventListener('click', () => {
                    abacusDiv.classList.add('my-show')
                    resultDiv.classList.remove('my-show')

                    abacusTab.classList.add('active')
                    resultTab.classList.remove('active')
                })

                document.getElementById('nav-result-tab').addEventListener('click', () => {
                    abacusDiv.classList.remove('my-show')
                    resultDiv.classList.add('my-show')

                    abacusTab.classList.remove('active')
                    resultTab.classList.add('active')
                })
            </script>

            <script>
                let timer = document.getElementById('the-time')
                let timeSecondElm = document.getElementById('the-time-second')

                let cross = document.getElementById('cross')
                let cross1 = document.getElementById('cross-1')
                let cross2 = document.getElementById('cross-2')
                cross.addEventListener('click', () => {
                    cross1.classList.toggle('out-top')
                    cross2.classList.toggle('out-bottom')
                    timer.classList.toggle('opacity-0')
                    timeSecondElm.classList.toggle('opacity-0')
                    document.getElementById('timer').classList.toggle('timer-w')
                })
            </script>

            <script>
                document.getElementById('answers').style.display = 'none'
                let abacus = document.getElementById('abacus')

                let countMinute = document.getElementById('the-time')
                let countSecond = document.getElementById('the-time-second')
                let abacusMarks = 0
                let abacusDom = ''
                let abaWrong = []

                ab()

                function ab() {


                    let minute = 4
                    let second = 59

                    countMinute.innerHTML = minute + ' M &nbsp '
                    countSecond.innerHTML = second + '&nbsp S'

                    let myInterval = setInterval(() => {
                        second -= 1
                        countMinute.innerHTML = minute + ' M &nbsp  '
                        countSecond.innerHTML = second + '&nbsp  S '
                        if (second == 0) {
                            second = 60
                            minute -= 1
                            if (minute == -1) {
                                Array.from(document.getElementsByClassName('rhireh-gher_ihgr_he-ihre-hfir_hifhi-abacus')).forEach(element => {
                                    if (element.checked) {
                                        abacusMarks += 1
                                    }
                                })
                                Array.from(document.getElementsByClassName('rhireh-gher_ihgr_he-ihre-hfir_hifhi-abacus')).forEach((element, index) => {
                                    if(! element.checked){
                                        abaWrong.push(index)
                                    }
                                })

                                abacusDom = abacus.innerHTML
                                abacus.remove()

                                show_details()
                                clearInterval(myInterval)
                                return ''

                            }
                        }
                    }, 1000);
                }


                function show_details() {
                    document.getElementById('answers').style.display = 'block'
                    document.getElementById('nav-result-tab').click()

                    document.getElementById('nav-result').innerHTML = `
                    <h3 class="text-center">Your total score in Abacus is <b>${abacusMarks}</b></h3>
                    `
                    document.getElementById('nav-abacus').innerHTML = `
                    ${abacusDom}
                    `
                    Array.from(document.getElementsByClassName('rhireh-gher_ihgr_he-ihre-hfir_hifhi-abacus')).forEach(element => {
                        element.click()
                    })

                    abaWrong.forEach(index => {
                        document.getElementsByClassName('rhireh-gher_ihgr_he-ihre-hfir_hifhi-abacus')[index].parentElement.parentElement.parentElement.offsetParent.style.border = '2px solid red'
                        document.getElementsByClassName('rhireh-gher_ihgr_he-ihre-hfir_hifhi-abacus')[index].parentElement.parentElement.parentElement.offsetParent.style.padding = '10px 8px'
                    });
                   
                    
                    Array.from(document.getElementsByTagName('input')).forEach(element => {
                        element.setAttribute('disabled', '')
                    })
                    countMinute.innerHTML = '00 M '
                    countSecond.innerHTML = ' 00 S'

                }
            </script>

            <!-- /.content-header -->
        </div>
        <!-- /.content-wrapper -->


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->

    <!-- jQuery UI 1.11.4 -->
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

    <script>
        // $.widget.bridge('uibutton', $.ui.button)
    </script> <!-- Bootstrap 4 -->
    <script src="../js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="../js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../js/demo.js"></script> <!-- This is for dashboard costomizat-->
</body>

</html>