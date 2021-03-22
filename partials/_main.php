
            <div id="result" class="container my-cont row m-0 ">
                <div id="abacus" class="row">
                    <?php
                    $sql = "SELECT * FROM $level WHERE `type` = 'abacus'  ORDER BY rand()";
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
                <div style="display:none" id="visual" class="row">
                    <?php
                    $sql = "SELECT * FROM $level WHERE `type` = 'visual'  ORDER BY rand()";
                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        $i = 1;
                        $num_rows = mysqli_num_rows($result);

                        echo '<h2  >Visual Questions (' . $num_rows . ') </h2>';
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
                                                    <input class="form-check-input rhireh-gher_ihgr_he-ihr45e-hfir_hiifhi-visual" type="radio" name="exampleRadios" id="question-' . $i . '-a">
                                                    <label class="form-check-label " for="question-' . $i . '-a"> ' . $row['answer'] . '';
                            } else {
                                $wAns = (int)$row['answer'] + rand(-10, (int)$row['answer'] + 5);
                                echo '                                        
                                                    <input class="form-check-input rhireh-gher_ihgr_he-ihre-hfir_hifhi-visual" type="radio" name="exampleRadios" id="question-' . $i . '-a">
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
                                <input class="form-check-input rhireh-gher_ihgr_he-ihr45e-hfir_hiifhi-visual" type="radio" name="exampleRadios" id="question-' . $i . '-b">
                                <label class="form-check-label " for="question-' . $i . '-b"> ' . $row['answer'] . '';
                            } else {
                                $wAns = (int)$row['answer'] + rand(-10, (int)$row['answer'] + 5);
                                echo '                                        
                                                <input class="form-check-input rhireh-gher_ihgr_he-ihre-hfir_hifhi-visual" type="radio" name="exampleRadios" id="question-' . $i . '-b">
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
                                                <input class="form-check-input rhireh-gher_ihgr_he-ihr45e-hfir_hiifhi-visual" type="radio" name="exampleRadios" id="question-' . $i . '-c">
                                                <label class="form-check-label " for="question-' . $i . '-c"> ' . $row['answer'] . '';
                            } else {
                                $wAns = (int)$row['answer'] + rand(-10, (int)$row['answer'] + 5);
                                echo '                                        
                                                <input class="form-check-input rhireh-gher_ihgr_he-ihre-hfir_hifhi-visual" type="radio" name="exampleRadios" id="question-' . $i . '-c">
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
                                                <input class="form-check-input rhireh-gher_ihgr_he-ihr45e-hfir_hiifhi-visual" type="radio" name="exampleRadios" id="question-' . $i . '-d">
                                                <label class="form-check-label " for="question-' . $i . '-d"> ' . $row['answer'] . '';
                            } else {
                                $wAns = (int)$row['answer'] + rand(-10, (int)$row['answer'] + 5);
                                echo '                                        
                                                <input class="form-check-input rhireh-gher_ihgr_he-ihre-hfir_hifhi-visual" type="radio" name="exampleRadios" id="question-' . $i . '-d">
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
                <div style="display:none" id="mul-div" class="row">
                    <?php
                    $sql = "SELECT * FROM $level WHERE `type` = 'mul-div'  ORDER BY rand()";
                    $result = mysqli_query($conn, $sql);

                    if ($result) {
                        $i = 1;
                        $num_rows = mysqli_num_rows($result);

                        echo '<h2  >Multiplication Questions (' . $num_rows . ') </h2>';
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
                                                    <input class="form-check-input rhireh-gher_ihgr_he-ihre-hfir_hifhi-mul-div" type="radio" name="exampleRadios" id="question-' . $i . '-a">
                                                    <label class="form-check-label " for="question-' . $i . '-a"> ' . $row['answer'] . '';
                            } else {
                                $wAns = (int)$row['answer'] + rand(-10, (int)$row['answer'] + 5);
                                echo '                                        
                                                    <input class="form-check-input rh_ireh-gher-ihgr_he_ihr_ehf-ir_hifhi-mul-div" type="radio" name="exampleRadios" id="question-' . $i . '-a">
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
                                <input class="form-check-input rhireh-gher_ihgr_he-ihre-hfir_hifhi-mul-div" type="radio" name="exampleRadios" id="question-' . $i . '-b">
                                <label class="form-check-label " for="question-' . $i . '-b"> ' . $row['answer'] . '';
                            } else {
                                $wAns = (int)$row['answer'] + rand(-10, (int)$row['answer'] + 5);
                                echo '                                        
                                                <input class="form-check-input rhir-ehgh_er-ihgr_heihr_ehf-ir_hifhi-mul-div" type="radio" name="exampleRadios" id="question-' . $i . '-b">
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
                                                <input class="form-check-input rhireh-gher_ihgr_he-ihre-hfir_hifhi-mul-div" type="radio" name="exampleRadios" id="question-' . $i . '-c">
                                                <label class="form-check-label " for="question-' . $i . '-c"> ' . $row['answer'] . '';
                            } else {
                                $wAns = (int)$row['answer'] + rand(-10, (int)$row['answer'] + 5);
                                echo '                                        
                                                <input class="form-check-input rhirehg-herihg_rhei_hr-ehfirhi_fhi-mul-div" type="radio" name="exampleRadios" id="question-' . $i . '-c">
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
                                                <input class="form-check-input rhireh-gher_ihgr_he-ihre-hfir_hifhi-mul-div" type="radio" name="exampleRadios" id="question-' . $i . '-d">
                                                <label class="form-check-label " for="question-' . $i . '-d"> ' . $row['answer'] . '';
                            } else {
                                $wAns = (int)$row['answer'] + rand(-10, (int)$row['answer'] + 5);
                                echo '                                        
                                                <input class="form-check-input rh_irehg-herih-gufu_ygr-ehfirg_ierfhi-mul-div" type="radio" name="exampleRadios" id="question-' . $i . '-d">
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

                <nav  id="answers">
                    <div  class="nav nav-tabs ">
                        <button class="nav-link active" id="nav-abacus-tab">Abacus Answers</button>
                        <button class="nav-link" id="nav-visual-tab">Visual Answers</button>
                        <button class="nav-link" id="nav-mul-div-tab">Mul/Div Answers</button>
                        <button class="nav-link" id="nav-result-tab">Result Answers</button>
                    </div>
                </nav>
                <div class="tab-content">
                    <div class="my-hide  my-show active row " id="nav-abacus"></div>
                    <div class="my-hide  row" id="nav-visual"></div>
                    <div class="my-hide  row" id="nav-mul-div"></div>
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

            <div class="q-changer" id="start-next-one" style="transform:scale(0); transition:all .5s; width: 100%; height:100%; top:0; left:0; position: fixed; display:flex; justify-content: center;  align-items: center;">
                <button id="start-next-one-btn" class="btn btn-danger btn-lg ">Start Next Question</button>
            </div>

            <script src="../js/jquery.min.js"></script>


            <script>
                    document.getElementById('answers').style.display = 'none'

                let abacusTab = document.getElementById('nav-abacus-tab')
                let visualTab = document.getElementById('nav-visual-tab')
                let mulDivTab = document.getElementById('nav-mul-div-tab')
                let resultTab = document.getElementById('nav-result-tab')

                let abacusDiv = document.getElementById('nav-abacus')
                let visualDiv = document.getElementById('nav-visual')
                let mulDivDiv = document.getElementById('nav-mul-div')
                let resultDiv = document.getElementById('nav-result')
                abacusTab.addEventListener('click', () => {
                    abacusDiv.classList.add('my-show')
                    visualDiv.classList.remove('my-show')
                    mulDivDiv.classList.remove('my-show')
                    resultDiv.classList.remove('my-show')

                    abacusTab.classList.add('active')
                    visualTab.classList.remove('active')
                    mulDivTab.classList.remove('active')
                    resultTab.classList.remove('active')
                })
                document.getElementById('nav-visual-tab').addEventListener('click', () => {
                    abacusDiv.classList.remove('my-show')
                    visualDiv.classList.add('my-show')
                    mulDivDiv.classList.remove('my-show')
                    resultDiv.classList.remove('my-show')

                    abacusTab.classList.remove('active')
                    visualTab.classList.add('active')
                    mulDivTab.classList.remove('active')
                    resultTab.classList.remove('active')
                })
                document.getElementById('nav-mul-div-tab').addEventListener('click', () => {
                    abacusDiv.classList.remove('my-show')
                    visualDiv.classList.remove('my-show')
                    mulDivDiv.classList.add('my-show')
                    resultDiv.classList.remove('my-show')

                    abacusTab.classList.remove('active')
                    visualTab.classList.remove('active')
                    mulDivTab.classList.add('active')
                    resultTab.classList.remove('active')
                })
                document.getElementById('nav-result-tab').addEventListener('click', () => {
                    abacusDiv.classList.remove('my-show')
                    visualDiv.classList.remove('my-show')
                    mulDivDiv.classList.remove('my-show')
                    resultDiv.classList.add('my-show')

                    abacusTab.classList.remove('active')
                    visualTab.classList.remove('active')
                    mulDivTab.classList.remove('active')
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
                let nxtOne = document.getElementById('start-next-one')
                let nxtOneBtn = document.getElementById('start-next-one-btn')


                document.getElementById('answers').style.display = 'none'
                let abacus = document.getElementById('abacus')
                let visual = document.getElementById('visual')

                let countMinute = document.getElementById('the-time')
                let countSecond = document.getElementById('the-time-second')
                let abacusMarks = 0
                let abacusDom = ''
                let abaWrong = []

                ab()

                function ab() {


                    let minute = <?php echo $abaMinute ?>


                    let second = <?php echo $abaSecond ?>


                    countMinute.innerHTML = minute + ' M &nbsp '
                    countSecond.innerHTML = second + '&nbsp S'

                    let myInterval = setInterval(() => {
                        second -= 1
                        countMinute.innerHTML = minute + ' M &nbsp  '
                        countSecond.innerHTML = second + '&nbsp  S '
                        if (second == 0) {

                            second = <?php echo $abaSecond + 1 ?>
                            
                            minute -= 1
                            if (minute == -1) {
                                clearInterval(myInterval)
                                Array.from(document.getElementsByClassName('rhireh-gher_ihgr_he-ihre-hfir_hifhi-abacus')).forEach(element => {
                                    if (element.checked) {
                                        abacusMarks += 1
                                    }
                                })
                                Array.from(document.getElementsByClassName('rhireh-gher_ihgr_he-ihre-hfir_hifhi-abacus')).forEach((element, index) => {
                                    if (!element.checked) {
                                        abaWrong.push(index)
                                    }
                                })

                                abacusDom = abacus.innerHTML
                                abacus.remove()
                                vis()
                                return ''

                            }
                        }
                    }, 1000);
                }

                let visualMarks = 0
                let visualDom = ''
                let visWrong = []

                function vis() {
                    nxtOne.style.transform = 'scale(1)'
                    nxtOneBtn.addEventListener('click', () => {
                        nxtOne.style.transform = 'scale(0)'
                        visual.style.display = 'flex'

                        let minute = <?php echo $visMinute ?>


                        let second = <?php echo $visSecond?>

                        countMinute.innerHTML = minute + ' M  &nbsp '
                        countSecond.innerHTML = second + '&nbsp  S'

                        let myInterval2 = setInterval(() => {
                            second -= 1
                            countMinute.innerHTML = minute + ' M &nbsp  '
                            countSecond.innerHTML = second + '&nbsp  S '
                            if (second == 0) {

                                second = <?php echo $visSecond + 1?>

                                minute -= 1
                                if (minute == -1) {
                                    clearInterval(myInterval2)

                                    Array.from(document.getElementsByClassName('rhireh-gher_ihgr_he-ihr45e-hfir_hiifhi-visual')).forEach(element => {
                                        if (element.checked) {
                                            visualMarks += 1
                                        }
                                    })
                                    Array.from(document.getElementsByClassName('rhireh-gher_ihgr_he-ihr45e-hfir_hiifhi-visual')).forEach((element, index) => {
                                        if (!element.checked) {
                                            visWrong.push(index)
                                        }
                                    })
                                    visualDom = visual.innerHTML

                                    visual.remove()

                                    mul()

                                    return ''

                                }
                            }
                        }, 1000);
                    })

                }
                let mulMarks = 0
                let mulDom = ''
                let mulDiv = document.getElementById('mul-div')
                let mulWrong = []

                function mul() {
                    nxtOne.style.transform = 'scale(1)'

                    nxtOneBtn.addEventListener('click', () => {
                    nxtOne.style.transform = 'scale(0)'
                        mulDiv.style.display = 'flex'

                        let minute = <?php echo $mulMinute ?>


                        let second = <?php echo $mulSecond ?>

                        countMinute.innerHTML = minute + ' M  &nbsp '
                        countSecond.innerHTML = second + '&nbsp  S'

                        let myInterval3 = setInterval(() => {
                            second -= 1
                            countMinute.innerHTML = minute + ' M &nbsp  '
                            countSecond.innerHTML = second + '&nbsp  S '
                            if (second == 0) {

                                second = <?php echo $mulSecond + 1 ?>

                                minute -= 1
                                if (minute == -1) {
                                    clearInterval(myInterval3)

                                    Array.from(document.getElementsByClassName('rhireh-gher_ihgr_he-ihre-hfir_hifhi-mul-div')).forEach(element => {
                                        if (element.checked) {
                                            mulMarks += 1
                                        }
                                    })
                                    Array.from(document.getElementsByClassName('rhireh-gher_ihgr_he-ihre-hfir_hifhi-mul-div')).forEach((element, index) => {
                                        if (!element.checked) {
                                            mulWrong.push(index)
                                        }
                                    })
                                    mulDom = mulDiv.innerHTML
                                    mulDiv.remove()
                                    show_details()

                                    return ''

                                }
                            }
                        }, 1000);
                    })


                }

                function show_details() {
                    nxtOne.style.display = 'none'
                    document.getElementById('answers').style.display = 'block'
                    document.getElementById('nav-result-tab').click()

                    document.getElementById('nav-result').innerHTML = `
                    <h3 class="text-center">Your total score in Abacus is <b>${abacusMarks}</b></h3>
                    <h3 class="text-center">Your total score in Visual is <b>${visualMarks}</b></h3>
                    <h3 class="text-center">Your total score in Multiplication/Division is <b>${mulMarks}</b></h3>
                    `
                    document.getElementById('nav-abacus').innerHTML = `
                    ${abacusDom}
                    `
                    Array.from(document.getElementsByClassName('rhireh-gher_ihgr_he-ihre-hfir_hifhi-abacus')).forEach(element => {
                        element.click()
                    })

                    document.getElementById('nav-visual').innerHTML = `
                    ${visualDom}
                    `
                    Array.from(document.getElementsByClassName('rhireh-gher_ihgr_he-ihr45e-hfir_hiifhi-visual')).forEach(element => {
                        element.click()
                    })
                    document.getElementById('nav-mul-div').innerHTML = `
                    ${mulDom}
                    `
                    Array.from(document.getElementsByClassName('rhireh-gher_ihgr_he-ihre-hfir_hifhi-mul-div')).forEach(element => {
                        element.click()
                    })

                    abaWrong.forEach(index => {
                        document.getElementsByClassName('rhireh-gher_ihgr_he-ihre-hfir_hifhi-abacus')[index].parentElement.parentElement.parentElement.offsetParent.style.border = '2px solid red'
                        document.getElementsByClassName('rhireh-gher_ihgr_he-ihre-hfir_hifhi-abacus')[index].parentElement.parentElement.parentElement.offsetParent.style.padding = '10px 8px'
                    });
                    visWrong.forEach(index => {
                        document.getElementsByClassName('rhireh-gher_ihgr_he-ihr45e-hfir_hiifhi-visual')[index].parentElement.parentElement.parentElement.offsetParent.style.border = '2px solid red'
                        document.getElementsByClassName('rhireh-gher_ihgr_he-ihr45e-hfir_hiifhi-visual')[index].parentElement.parentElement.parentElement.offsetParent.style.padding = '10px 8px'
                    });
                    mulWrong.forEach(index => {
                        document.getElementsByClassName('rhireh-gher_ihgr_he-ihre-hfir_hifhi-mul-div')[index].parentElement.parentElement.parentElement.offsetParent.style.border = '2px solid red'
                        document.getElementsByClassName('rhireh-gher_ihgr_he-ihre-hfir_hifhi-mul-div')[index].parentElement.parentElement.parentElement.offsetParent.style.padding = '10px 8px'
                    });


                    Array.from(document.getElementsByTagName('input')).forEach(element => {
                        element.setAttribute('disabled', '')
                    })
                    countMinute.innerHTML = '00 M '
                    countSecond.innerHTML = ' 00 S'

                }
            </script>