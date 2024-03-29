<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Multipurpose Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body class="ali-bg">
    <!-- Preloader -->
    <!-- <div id="preloader">
        <div class="preload-content">
            <div id="dream-load"></div>
        </div>
    </div> -->


    <!-- ##### Blog Area Start ##### -->
    <section class="blog-area">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12 col-md-5">
                    <div class="cv-prev">
                        <h1>Example:</h1>
                        <!-- Post Thumbnail -->
                        <div class="blog_thumbnail">
                            <img src="img/demos/demo-1.png" class="temp-img" alt="">
                        </div>
                    </div>

                </div>



                <div class="col-12 col-md-7">
                    <!-- <div class="cv-download">
                        <div class="row align-items-center">

                            <div class="col-lg-6 col-md-12">
                                <p class="topnote">Fill all required fields and click create cv to download CV in both
                                    PDF and PNG formats</p>

                            </div>
                            <div class="col-lg-6 col-md-12 mt-s">
                                <a href="#" class="btn btn-primary">Download as PDF</a>
                                <a href="#" class="btn btn-soft-primary ms-2">Download as PNG</a>
                            </div>
                        </div>
                    </div> -->
                    <div class="container">

                        <form method="post" action="#">
                            @csrf
                            <div class="mt-5">
                                <h2>Personal Info</h2>
                                <div class="block-container">
                                    <div class="row align-items-center">
                                        <!-- <div class="col-lg-2 col-md-4">
                                            <img src="img/test-img/1.jpg" class="d-block" alt="">
                                        </div> -->
                                        <div class="col-lg-5 col-md-8 mt-s">
                                            <h6 class="">Upload your picture</h6>
                                            <p class="text-muted mb-0">For best results, use image 300px by 300px in
                                                either .jpg or .png</p>
                                        </div>
                                        <div class="col-lg-5 col-md-12 mt-s">
                                            <!-- <a href="#" class="btn btn-primary"><input type="file">Upload</a>
                                            <a href="#" class="btn btn-soft-primary ms-2">Remove</a> -->
                                            <input type="file" name="image">
                                        </div>
                                    </div>
                                    <div class="mt-30">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label>Full Name:</label>
                                                <input type="text" name="fullname" class="form-control"
                                                    placeholder="enter your name">
                                            </div>

                                            <div class="col-lg-6">
                                                <label>Jop Title:</label>
                                                <input type="text" name="jobtitle" class="form-control"
                                                    placeholder="Ex: Web Developer">
                                            </div>
                                            <div class="col-lg-6">
                                                <label>Your Address:</label>
                                                <input type="text" name="address" class="form-control"
                                                    placeholder="enter your address">
                                            </div>
                                            <div class="col-lg-6">
                                                <label>Your Email:</label>
                                                <input type="text" name="email" class="form-control"
                                                    placeholder="enter your name">
                                            </div>
                                            <!-- <div class="col-lg-6">
                                                <label>Website Link:</label>
                                                <input type="text" name="web-link" class="form-control"
                                                    placeholder="enter your website link">
                                            </div> -->

                                            <div class="col-lg-6">
                                                <label>Phone No:</label>
                                                <input type="text" name="phone" class="form-control"
                                                    placeholder="Ex: Web Developer">
                                            </div>
                                            <div class="col-lg-12">
                                                <label>Your Bio Here</label>
                                                <textarea name="description" id="comments" rows="4" class="form-control"
                                                    placeholder="About Me :"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group add-edu">
                                <h2>Add Educations</h2>
                                <div class="all-edus">
                                    <div class="new-edu">
                                        <label>Field of study:</label>
                                        <input type="text" name="field" class="form-control"
                                            placeholder="Ex: Computer Science">
                                        <label>Degree:</label>
                                        <input type="text" name="degree" class="form-control"
                                            placeholder="Ex: Bachelor's">
                                        <label>School:</label>
                                        <input type="text" name="school" class="form-control"
                                            placeholder="Ex: al-albayt university">
                                        <div class="form-row">
                                            <div class="col">
                                                <label>From year:</label>
                                                <input type="date" name="edufrom" class="form-control">
                                            </div>
                                            <div class="col">
                                                <label>To year (optional=present):</label>
                                                <input type="date" name="eduto" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="add-blk btn btn-info" id="add-edu">
                                    <i class="fa fa-plus"></i>
                                    <span>Add another education</span>
                                </div> -->
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group add-exp mt-s">
                                <h2>Add Experiences</h2>
                                <div class="all-exps">
                                    <div class="new-exp">
                                        <label>Title:</label>
                                        <input type="text" name="exptitle" class="form-control"
                                            placeholder="Ex: Web Developer">
                                        <label>Company:</label>
                                        <input type="text" name="company" class="form-control"
                                            placeholder="Ex: ProgressSoft">
                                        <div class="form-row">
                                            <div class="col">
                                                <label>From year:</label>
                                                <input type="date" name="expfrom" class="form-control">
                                            </div>
                                            <div class="col">
                                                <label>To year (optional=present):</label>
                                                <input type="date" name="expto" class="form-control">
                                            </div>
                                        </div>
                                        <label>Description (optional):</label>
                                        <textarea name="expdes" class="form-control"></textarea>
                                    </div>
                                </div>
                                <!-- <div class="add-blk btn btn-info" id="add-exp">
                                    <i class="fa fa-plus"></i>
                                    <span>Add another experience</span>
                                </div> -->
                            </div>

                            <div class="clearfix"></div>

                            <div class="form-group add-skill mt-s">
                                <h2>Add Skills</h2>
                                <div class="block-container">
                                    <div class="all-skills">
                                        <div class="new-skills">
                                            <label>Skill</label>
                                            <input type="text" name="skill" class="form-control">
                                            <label>Proficiency</label>
                                            <input type="text" name="proficiency" class="form-control">
                                        </div>
                                    </div>


                                    <!-- <div class="add-blk add-skills btn btn-info mt-50">
                                        <i class="fa fa-plus"></i>
                                        <span>Add another Skill</span>
                                    </div> -->
                                </div>
                            </div>

                            <!-- <div class="clearfix"></div> -->

                            <!-- <div class="form-group add-social mt-s">
                                <h2>Add social Links</h2>
                                <div class="block-container">
                                    <div class="all-socials">
                                        <div class="new-skills">
                                            <label>Social Name</label>
                                            <input type="text" name="socials[]" class="form-control">
                                            <label>Social Link</label>
                                            <input type="text" name="socials[]" class="form-control">
                                            <label>Social icon image (16px*16px)</label>
                                            <input type="file" name="socials[]" class="form-control" />
                                        </div>
                                    </div>


                                    <!-- <div class="add-blk add-socials btn btn-info mt-50">
                                        <i class="fa fa-plus"></i>
                                        <span>Add another social</span>
                                    </div> -->
                            <!-- </div> -->
                            <!-- </div> -->

                            <!-- <div class="clearfix"></div> -->

                            <!-- <div class="form-group add-social mt-s">
                                <h2>Add Hoppies</h2>
                                <div class="block-container">
                                    <div class="all-hoppies">
                                        <div class="new-skills">
                                            <label>Hoppy icon image (32px*32px)</label>
                                            <input type="file" name="hoppies[]" class="form-control" />
                                        </div>
                                    </div>
-->

                            <!-- <div class="add-blk add-hoppies btn btn-info mt-50">
                                        <i class="fa fa-plus"></i>
                                        <span>Add another Hoppy</span>
                                    </div> -->
                    </div>
                </div>

                <hr class="mt-100">
                <input type="submit" name="submit" value="Create Resume" class="btn-sub">

                </form>
            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- ##### Blog Area End ##### -->


    <!-- ########## All JS ########## -->
    <!-- jQuery js -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Parallax js -->
    <script src="js/dzsparallaxer.js"></script>
    <!-- Active js -->
    <script src="js/form-script.js"></script>
    <script src="js/script.js"></script>

</body>

</html>