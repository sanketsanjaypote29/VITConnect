<!DOCTYPE html>
<html>

<head>
    <script src="https://kit.fontawesome.com/ed98ca1227.js" crossorigin="anonymous"></script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Buy And Sell</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="./css/bootstrap.css" rel="stylesheet" />

    <!-- FONTAWESOME STYLES-->
    <link href="./css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="./css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="./css/buy_sell.css" rel="stylesheet" />

</head>

<body>



    <div id="wrapper">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <a class="navbar-brand" href="../index.php">
                        <p style='font-size:30px'>VIT Connect</p>
                    </a>


                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>


                </div>


            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">



                    <li class="active-link">
                        <a href="homepage.php"><i class="fa fa-desktop "></i>Home </a>
                    </li>


                    <li>
                        <a href="bikebuddy_1.php"><i class="fa-solid fa-person-biking"></i>Bike Buddy </a>
                    </li>
                    <li>
                        <a href="study_option.php"><i class="fa fa-book "></i>Study </a>
                    </li>


                    <li>
                        <a href="buy_sell2.php"><i class="fa fa-lightbulb-o "></i>Buy/Sell</a>
                    </li>
                    <li>
                        <a href="roommate.php"><i class="fa fa-users"></i>Room Mate</a>
                    </li>
                    <li>
                        <a href="./forum/index.php"><i class="fa fa-quora" aria-hidden="true"
                                alt='forum image'></i></i>Community Forum</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit "></i>Logout</a>
                    </li>

                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">

                </div>
                <!-- /. ROW  -->

                <hr />
                <div class="row">
                    <div class="col-lg-12 ">


                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="grid">
                    <div class="product-card">

                        <div class="product-tumb">
                            <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAIEArAMBIgACEQEDEQH/xAAcAAEAAQUBAQAAAAAAAAAAAAAABAECAwUGBwj/xABEEAABAwMCAQgFCQYEBwAAAAABAAIDBAUREiExBhMiQVFhcZEHgaGxwRQVIzIzUmJy0RYkNEKy4VODovFUY3OCkpPw/8QAGQEBAQEBAQEAAAAAAAAAAAAAAAEDAgQF/8QAIhEBAAICAgEEAwAAAAAAAAAAAAECESEDEjEEQVGBIjJh/9oADAMBAAIRAxEAPwD3FERAREQFjMzRJo6wMnuV54LXuOqofh384b5f3QS5Z2R4LjsSG+srMFqHZkqYgd8zZ8gts3YBBVERAREQEREBERAREQEREBERAREQEREFryAwk8AtdCeDz2Fyl1z9NM/HEjHnsobzphlPWBpHl/dBbQtLqiMk8Iy71krbDgtdQN/eJM/yNa0dy2KAiIgIiICIiAiIgIiICIiAiIgKhIHFVXBelvlHWWOz0kFuk5ipuE/MifG8bRucd54IN/eeWPJ6yzCG53amgl/wy7U4eIGcKRaeUVnvMHP2u409TGMA82/ceI4hfPzA2HIiY1oz0nFuXPPa48SVo7xWm1XaCsotLJ9BErW7B4J4HHb8FrPFjcy47Z1D6sk0zMaQctyDkLSXK60lFGWSOle8YkeyGMvc1u+5A4cD44Xjttv9TPSMmpKmVscg2AeRg9YOFqbpTXSeudVW2r0SSxiOaN8jmiQDtxx48Ctb+kt17VnLivPGcTGHvvJi82280r6u2VsNSyR5PQd0gO9p3B7iFvAQV86cibPNUVQfW1NRFzMrTroaKNzSAQSNZAd1dRXvME5eA5lWSDvh7N/gvL48tsNmiiCaXqdE714Q1E7eNPr/ACPHxQS0UP5dp+0gnb4MJ9yp86Uo2fKGH8YLfegmosEdZTyfUmjd4OWUPaeBB8EFyKmUygqiplVQEREBERAXlPptidcKaChxgxNM0Tvx8PdketerLleXlkF0tpmiA+UU4JYPvg8R49netOLr2/Lw4vnrp8yMvNexmjnwQBxc0ah5rXTzyTyOkmeXvPEldhW2m03Gpc7n2xTZ6YDtDs/iadwVItlhoaKXnIwJ5Bu17yHafVwW8envacZ0znmrEeFeTdHJR2qKOcEPeS8t7M8FueZqJozFQsD6qUiKEH7zjjKto43VdyFBFLE2odGZXGU7NHhxOfgr+Tl8ip75SCvpZebgqgXTU8bpWOAJAcMb9/WvTfm46VnjidxDGtLWt3mNPZuTdpFotFNRNpmDm29M6s6nda3AYMbtx3KPbbjSV9Myoo5hJC4dF4yM9XA7qYHA8CvlvaxmnjP8jfJWOpYjwaR4OKz5CZCCI+AtGWvmHcDlYn8+3P0kh7nRg/FbA4KwSRSOPRmLd+GAosNRUbkB9HFIXcCYMf7KI1kLwNVukZqdgGN8jPcuihje1x5x+oY4YWbQ3sQlzGlrRmOpusG+Nn6x/qBVJaqrgGY7vUaRsRPbjJv4twun0txwUeXOvDCPWCVUcs/lLVUmrnqmkeG7udJSzw4Hf0SqftwInlssNK/Az9HUlpI8HtC6J0OonnGxOBHWwqJUUMExJkp6d3AYDDg+xTC6QouXNvdgSwysJG2l7H+4qbByts8waRVFoPAujcAfXwWSltNvI1ikgY8bAsGMDyVlZaqeFsUsDRG6ORpBaBwOxx5ps02MdzopGhzKqIg8DqwpDZo3NBa9pB6wQtWbSXN+1a89r4WnPsUd1iySebpP/W4e5ybHQLFUwieJ0biQCMZadwsqKo4C9ej43KXU99sqBjGqrocvG+eLHNz5brXQ+iC3OcHVNQI2jP0dHCIhv2kku8iF6giZHkXKj0S8/TRm2V0kjoR0flGC/HZnrHiuYofRvfHztNU2WYNO4fK7B8ivoTCppCTmSNOU5OW11Db4qV9uEDIW6WCGZ+w9Z3W5a0R7g1DD39L35Wy0tzwTA7FFa6R5cMNqcH8UZ+BCjsFU1x0ywSf5rm/A+9bjQOxY3U0TuMbURBEtSPrU0ju+OZpHtQ1Q4Ojqm/5efhhSnUUJOzdJ7iqGkxuyaRvgUVGbW0rTh9SWu7HjCzCeB/CqaPFwCq6mmIwJyR2OaCostu1/a01JJ+aPCCU6B7t2znHbgFYjRSFwJnP/AI/3WvdZIA7UykfE7tp6l7fZnCtdQzM3irrtB4OY8eRCZRszQyEbT4Pgf1WL5vnxjnxjOQMH9VBElxjO12a4dk9IWnzB+CvZcbqDsbXMOwSuYT5hUSm0NYMkT7k5PHdZpKSaWF0UpaQcb5324KM261rR9La5D3wzMePerxfYR9vTVkPfJAceYUyYbWMaWgFXLWMvtuecNqowex2QVn+c6H/jab1yt/VUTEREBFErrhBRMa6Z/SccMY0Zc89gHX8OJ2XE3L0mxUk8jIrNVzxsO8jXN9fAn/7KREyZegotDyV5WWvlRBJJbpXCWLHPU8o0yR54ZHYe0bLfICIqZQVRWPkYwZc4AKK650wdpa8vd2RjV7kE1Fr3XCVw+ioal5/Lp/qwsLprxLtFTU0Q/wCZLv5AFBtchNQWnNJd5PtLhFEOyKHJ8yR7kFlD/wCIrqybtBeAD5BRWzlnhiGZZY2Dtc4BRHXi3DOKqN+P8Pp+5Ym2W2Q9J1O0n7z3E+9WyVtmpTpdUUTHDg0OaT5DdJyaHXmlcdMMM8xPUyPGfPCxSTzzD6K0av8AquDfgqv5Q0LRiNlQ/wDJA5o83YWI3mtm/hLTMR1OndpH+nUp9rifhhkttxn4QUVOD3OcR7fgq09irWHpXacdzDgD3LIZb/P9SKlpx2uBd8R7labXdZv4i6yDuiAA92fauV2i3Lk1DVD95uEr8dUx1DPgStM6yQxEsNVROx1yawfYcLov2cpTvV1U8p69cpx5EkK35isA2NPC49uf0XUa9kmZ+XTO4LlbveLi+yzXW0z0kVNHEZYzLEXmVnUc5AbnqG/VwXTVMzIIXyyHDGAud4L5pvUnKKKSS20NY+S2MkLqeKSboR75wW5xseHEbZWleO9t1hnN6x5bj9q7nyhqp6qsnDSz6NrIcsYBkjhnrwc9uw6lNt9unrJmtha5zyeI4j1rz+CoreT1Z9NG2VsrQ5wbktPr7it270jVsFI6ntdKymLxgy51Px3HqW1bRSMT5Z2ibTphuN5qOS/LWWotMwbLAdLtH1XnAy3YjIJXuFg5S1F+oGVdNU2uOJ3EiSSTSRxB6LcEeK+YKiR80rpJHFz3HJJ7V3fo3uEVLzEN5efmaWuImDj0S4R5DSOwnBI69I4rKMTmWk6h71SVcNY/Qy+Usz+JbTOZw9ZcVsYqZkZBMkryfvP28hsvKOXXKzktO5scdL8vLWhsUEEQD3HP1hkZYAABq79uCzckbHyirrhQ3eKht9nt4Ov+KkqJyMEY3JHuXDp6w4M/mA9axuqIo25LgAOxYPm8SD6WqqH9uHBn9IBVBZ7eHanUkcjvvTDnD5uygwS3+2tdoZUMlf8AciIe7yGT7FideJ5B+6Wusl8Yub/r0ra/RQN0gNYOxowsTquMfVDneAUVq3ycoqj7Kmo6Zp65ZdTh6gCParfmq8Tn96vRY3rbTRafaT8FtPlE7vs4Md7jhU01knF7Wj8Iyg1reTFCTqqpKiqd2zvB+Clx2620w6MELR+I596z/InO+0lkd68LIyhgbwYD47pj+GWAVFJFtG1mexjf0VflT3fZ00h/NspjYmN4NA8Arw0BBBHyx3BscY8yq/JZn/aVD/8At2U5EwiG23xfzanHtcVlFLCBjQ0epZ0VES5Uba+ilpXySRtlGC+J2HDwK87u3o8rmF8lFXU0sY301EZDsd7hnPkvT1ZI0OaQeC04+W/H+suLUi3l83XeidK18FdDASz6rmPcHA92y5V1krD0ooZZGng6LD8+S+narkvSTuc4756nNBUN/IyiLTmnpzniNHFL8s33YrXrGIfOFJZnmZgqTJBGTu90R29q7uGLk+LKLU2dstOd36x0nO+9twPYu8q+Q9Dzwc6kkaR1skcFJZ6PLXNGXOjc0nqLGu94yteLmpTUw5vSbe7yO9wWGz8n5W2yBj6+onY1k5eXuYzB1AZ4Z2XqPo2prr8yxNbVOZAwAdLfLsZOPNXTei23zxlklSdGprtoGhwwe1dxabfFbKJlNAOg3tG6y5b1tOaxh3SJiNpFPG6Nml8hkP3isqIs3Sx0THHJaCe9VDGjg0K5EFMDsVURAREQEREBERAREQEREBERBYeKuREFUREBERAREQEREBERAREQEREBERB//9k="
                                alt="">
                        </div>
                        <div class="product-details">
                            <span class="product-catagory">Name of seller</span>
                            <h4><a href="">Drafter</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                            <div class="product-bottom-details">
                                <div class="product-price">230.RS</div>
                                <div class="product-links">
                                    <button class='product-button'>Buy</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">

                        <div class="product-tumb">
                            <img src="data:image/jpeg;base64,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"
                                alt="">
                        </div>
                        <div class="product-details">
                            <span class="product-catagory">Name of seller</span>
                            <h4><a href="">Drafter</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                            <div class="product-bottom-details">
                                <div class="product-price">230.RS</div>
                                <div class="product-links">
                                    <button class='product-button'>Buy</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">

                        <div class="product-tumb">
                            <img src="data:image/jpeg;base64,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"
                                alt="">
                        </div>
                        <div class="product-details">
                            <span class="product-catagory">Name of seller</span>
                            <h4><a href="">Drafter</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p>
                            <div class="product-bottom-details">
                                <div class="product-price">230.RS</div>
                                <div class="product-links">
                                    <button class='product-button'>Buy</button>
                                </div>
                            </div>
                        </div>

                    </div>
                  

                </div>

            </div>
            <!-- /. WRAPPER  -->
            <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
            <!-- JQUERY SCRIPTS -->
            <script src="./js2/jquery-1.10.2.js"></script>
            <!-- BOOTSTRAP SCRIPTS -->
            <script src="./js2/bootstrap.min.js"></script>
            <!-- CUSTOM SCRIPTS -->
            <script src="./js2/custom.js"></script>


</body>

</html>