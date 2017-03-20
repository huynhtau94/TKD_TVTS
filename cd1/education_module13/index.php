<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/styles.less', 'css/styles.css');
        ?> 
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

    </head> 

    <body> 
        <div class="education_module13">
            <div class="container">
                <div class="latest-news">
                    <div class="news-contant">
                        <div class="thumb">
                            <a href="#"><img src="images/news-thumb.jpg" alt=""></a>
                        </div>
                        <div class="text">
                            <h2>Learn Creative Skills, Shape Your Future</h2>
                            <div class="data-tags">
                                <p>Posted on July 28, 2014</p>
                                <a href="#">Technology</a>
                                <a href="#">James Shah</a>
                            </div>
                            <p>The point of using Lorem Ipsum is that it has a making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
                            <a href="#" class="btn-style">Read More</a>
                        </div>
                    </div>

                    <div class="news-contant">
                        <div class="thumb">
                            <a href="#"><img src="images/news-thumb.jpg" alt=""></a>
                        </div>
                        <div class="text">
                            <h2>Learn Creative Skills, Shape Your Future</h2>
                            <div class="data-tags">
                                <p>Posted on July 28, 2014</p>
                                <a href="#">Technology</a>
                                <a href="#">James Shah</a>
                            </div>
                            <p>The point of using Lorem Ipsum is that it has a making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
                            <a href="#" class="btn-style">Read More</a>
                        </div>
                    </div>
                    <div class="news-contant">
                        <div class="thumb">
                            <a href="#"><img src="images/news-thumb.jpg" alt=""></a>
                        </div>
                        <div class="text">
                            <h2>Learn Creative Skills, Shape Your Future</h2>
                            <div class="data-tags">
                                <p>Posted on July 28, 2014</p>
                                <a href="#">Technology</a>
                                <a href="#">James Shah</a>
                            </div>
                            <p>The point of using Lorem Ipsum is that it has a making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
                            <a href="#" class="btn-style">Read More</a>
                        </div>
                    </div>
                    <div class="news-contant">
                        <div class="thumb">
                            <a href="#"><img src="images/news-thumb.jpg" alt=""></a>
                        </div>
                        <div class="text">
                            <h2>Learn Creative Skills, Shape Your Future</h2>
                            <div class="data-tags">
                                <p>Posted on July 28, 2014</p>
                                <a href="#">Technology</a>
                                <a href="#">James Shah</a>
                            </div>
                            <p>The point of using Lorem Ipsum is that it has a making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>
                            <a href="#" class="btn-style">Read More</a>
                        </div>
                    </div>

                </div>
                <div class="pagination">
                    <ul>
                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>
    </body>
</html>