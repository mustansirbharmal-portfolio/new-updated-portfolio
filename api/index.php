<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Website</title>

    <!-- FAVICON -->
    <link rel="icon" href="images/favicon.png">

    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="responsive.css">   

    <!-- Bootstrap 5 CDN Links-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;500&family=Rubik:wght@400;500;600&display=swap" rel="stylesheet">

    

<style>
    @media screen and (min-width: 0px) and (max-width: 992px){
    img.effiel{
        height: 310px;
    }
    }

    @media screen and (min-width:680px) and (max-width:992px){

     .icon{
        margin-right: 15px;
        margin-left: 0;
    }
    .change .info-text-spec{
        font-size: 20px;
        overflow-wrap: break-word;  
        word-wrap: break-word; 
        word-break: break-word;
    }
    .info-text{
        display: flex;
        align-items: center;
    }
    .contact-form{
        margin-top: 32px;
    }
    .contact:before{
        margin-top: 1.5rem;
    } 

    .contact-box{
        padding:0px 0px;
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
        padding-left: 0.5rem;
        padding-right: 0.5rem;
        border-radius: 20px;
    }

    .content-form .message{
    resize: none;
    width:100%;
    border-radius: 2rem;
}

}

@media screen and (min-width:0px) and (max-width:679px){
    .icon{
        margin-right: 15px;
        margin-left: 0;
    }

    .change .info-text-spec{
        display:none;
        overflow-wrap: break-word;  
        word-wrap: break-word; 
        word-break: break-word;
    }

    .info-text{
        display: flex;
        align-items: center;
    }
    
    .contact:before{
        margin-top: 1.5rem;
    } 

    .contact:before{
        display: none;
        visibility: hidden;
        position: static;
    }

    .contact:after{
        display: none;
        visibility: hidden;
        position: static;
    }

    .contact-box{
        
        padding: 1.5rem 0rem;
        display: flex;
        justify-content: center;
        
    }

    .contact{
        margin-top: 0px;
        padding: 0rem 0rem;
    }

    .content-form .form-control{
        width:100%;
    }
    

}

@media screen and (min-width:993px){
    .icon{
        margin-right: 15px;
        margin-left: 0;
    }

    .contact-form{
     
    margin-top: 30px;

}

}




</style>

</head>
<body style="font-family: 'Poppins', sans-serif;">

<!-- Navbar Section -->
   <main>
   <header >
   
    <nav class="navbar navbar-expand-lg mt-3  " id="home">
        <div class="container ">

            <a href="#" class="navbar-brand logo ">
                <img src="images/logo.png" class="img-fluid" style="width:150px;">
            </a>

            <button class="navbar-toggler " data-bs-toggle="collapse" data-bs-target="#myNavbar">
               
                <i class="fa-solid fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse justify-content-end links " id="myNavbar">
                <ul class="navbar-nav nav-bar d-flex align-items-center  menu-navbar-nav">
                
                    <li class="nav-item">
                        <a href="#home" class="nav-link common ">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#services" class="nav-link common">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="#project" class="nav-link common">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link common">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link common">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact-form" class=" btn nav-link active px-4" style="color: #fff;">Hire me</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="header-content " > 
    <div class="container">
        <div class="row gap-5 mb-5">


    <div class="col-lg-6  mt-5  flex-column align-self-center adjust " >

       
        <h3 style="line-height: 1.5;">Hi ! I'm <span style="color:#784cfb;"><b>Mustansir Bharmal</b></span>, <br> a Fullstack Web Developer and</h3>
        <h1 class="mt-5 mb-3">I create <span style="color:#784cfb;"><b>Dynamic Websites</span></b></h1>   
        <img src="images/img/html.png" class="img-fluid" alt="" style="height:80px; width:80px;">
        <img src="images/img/css.png" class="img-fluid" alt="" style="height:80px; width:50px;">
        <img src="images/img/JS.png" class="img-fluid" alt="" style="height:80px; width:70px;">
        <img src="images/img/bootstrap.svg" class="img-fluid mt-1" alt="" style="height:65px;  width:70px;">
        <img src="images/img/PHP.png" class="img-fluid mx-2" alt="" style="height:65px;  width:70px;">
        <img src="images/img/sql.png" class="img-fluid mx-2" alt="" style="height:65px;  width:70px;">

       




    <div class="animated-text mt-3 mb-3">
        I <span></span>
    </div>
    <a href="/MUSTANSIRBHARMAL_Resume.pdf" class=" button mt-5">Download Resume</a>
    </div>

    <div class="col-lg-5 mt-3">

        <h3 class="mt-5" >My Services includes:</h3>
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
          
           
    
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="5000">
                <h1 class="mt-2">Full Stack Website</h1>
                <img src="images/img/full_stack_banner.avif"  class="d-block w-100" style="width:1500px;height:400px;   " alt="...">
               
              </div>
    
              <div class="carousel-item" data-bs-interval="5000">
                <h1>Responsive Web Design</h1>
                <img src="images/img/banner2.1.jpg" class="d-block w-100" style="width:1500px; height:400px; "  alt="...">
    
              </div>

              <div class="carousel-item" data-bs-interval="5000">
                <h1>3-tier Architecture</h1>
                <img src="images/img/banner3.jpg"  class="d-block w-100" style=" width:1500px; height:400px;"  alt="...">
    
              </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>

        </div>
    </div>
    </div>

   </header>

<!-- Services Section -->
   <section class="services section mt-5" id="services" style="font-family: 'Poppins', sans-serif">
    <div class="container text-center">
        <div class="row section-header justify-content-evenly">

    <div class="col-12 text-center mb-5">
        <p class="sub-content">What I Do</p>
        <h3 class="second-header-title" >Services</h3>
       
    </div>
   
        <div class=" col-lg-6 col-md-6 col-sm-12 mb-4 card-wrap card-adjust">
       <div class="card rounded-0  text-center  px-1 mb-3 card-color " data-card="UI/UX" style="background-color:#f6f7fb">
        <div>
        <img src="images/img/design-icon.png" style="height:200px; width:200px;" alt="" class="img-fluid">
       </div>
       
        <h2 class="text-center title">3-tier Architecture</h2>
        <p class="card-text text-content" >
           I built websites using 3-tier architecture in which client interacts
           to server and server then fetch and retrievde data from database. 
           I built my website server using PHP and build Relational Database 
           by using SQL.
            
        </p>

       </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 mb-4 card-wrap">
            <div class="card rounded-0  text-center  px-2 mb-3 " style="background-color:#f6f7fb;   " data-card="Code" > 
                <div>
                <img src="images/img/code-icon.png" style="height:200px; width:200px; " alt="" class="img-fluid">
               </div>
               
                <h2 class="text-center title">Web Development</h2>
                <p class="card-text text-content">
                    I can build a websites which are Functional and Responsive. 
                    My key skills are HTML 5, CSS3, Bootstrap and 
                    JavaScript.I also have little bit knowledge of other languages
                    also.
                </p>
        
               </div>
        </div>

        <div class=" col-lg-6 col-md-6 col-sm-12 mb-4  card-wrap ">
            <div class="card rounded-0 text-center  px-2 mb-3 " style="background-color:#f6f7fb;" data-card="Responsive">
                <div>
                <img src="images/img/app-icon.png" style="height:200px; width:200px; background-color:#f6f7fb; " alt="" class="img-fluid">
               </div>
               
                <h2 class="text-center title">Responsive</h2>
                <p class="card-text text-content " style="padding-bottom: 30px;">
                    As a developer I know that what is the importance of
                    Responsive Websites that's why I can make websites 
                    responsive by only using CSS or Bootstrap or by using 
                    both.
                </p>
        
               </div>
        </div>
    </div>

        </div>
    </div>
   </section>

   <!-- Project Section -->
   <section class="project_wrapper" id="project">
   <div class="container text-center " >
        <div class="row">

            <div class="col-sm-12 section-header d-flex flex-column justify-content-center mb-md-5 mb-2 mt-5">
                <p class="title sub-content-project">My Works</p>
                <h3 class="title third-header-title" >Projects</h3>
               
            </div>
            </div>

            <div class="section-body row " style="min-height: 800px;" >

                <div class="col-12 ">
                <ul class="nav  mb-4 justify-content-center mt-5 filter " style="margin-left:250px;"  id="pills-tab" role="tablist">
               
                    <li class="nav-item " role="presentation">
                      <button class="nav-link active filter-btn" id="pills-one-tab" data-bs-toggle="pill" data-bs-target="#pills-one" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                       ALL
                    </button>
                    </li>

                    <li class="nav-item hidden" role="presentation">
                      <button class="nav-link filter-btn" id="pills-two-tab" data-bs-toggle="pill" data-bs-target="#pills-two" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                        Frontend Projects
                    </button>
                    </li>

                    <li class="nav-item hidden" role="presentation">
                      <button class="nav-link filter-btn" id="pills-three-tab" data-bs-toggle="pill" data-bs-target="#pills-three" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                        Full Stack Projects
                    </button>
                    </li>
                    

                     <li class="nav-item" role="presentation">
                      <button class="nav-link filter-btn" id="pills-four-tab" data-bs-toggle="pill" data-bs-target="#pills-four" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                        UPCOMING    
                    </button>
                    </li>
                   </ul>
                   
                  <div class="tab-content head" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-one" role="tabpanel" aria-labelledby="pills-one-tab" >

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 head mt-5 mb-5 ">
                                <div class="project-img">

                            <img src="images/img/proj1.jpg" class="img-fluid w-100 " style="height:300px;">

                            <div class="overlay2">
                                 <a href="https://mustansirbharmal-portfolio.github.io/oceantech/" target="_blank"> 
                                <i class="fa-solid fa-plus"></i> </a>
                            
                            </div>
                            </div>

                            <h5 class="mb-0 mt-4 ">Developer Website</h5>
                            <p class="project-text">Amazing Design Website</p>
                               
                                </div>


                                    <div class="col-lg-6 col-sm-12 col-md-6 mt-5 mb-5">
                                        <div class="project-img">

                                    <img src="images/img/proj2.jpg" alt="" class="img-fluid w-100 effiel" style="height:300px;" >
                                    <div class="overlay2">
                                        
                                        <a href="https://mustansirbharmal-portfolio.github.io/musttours/" target="_blank"> 
                                            <i class="fa-solid fa-plus"></i> </a>
                                        </div>
                                     </div>

                                        <h5 class="mb-0 mt-4">Tours and Travels Website</h5>
                                        <p class="project-text">Animated Website</p>

                                    </div>

                               
                                    <div class="col-lg-6 col-sm-12 col-md-6 mt-5 mb-5">
                                        <div class="project-img">
                                    <img src="images/img/proj3.jpg" alt="" class="img-fluid w-100" style="height:310px;">

                                    <div class="overlay2">
                                        <a href="https://mustansirbharmal-portfolio.github.io/Google-Keep-Clone/" target="_blank"> 
                                              <i class="fa-solid fa-plus" ></i> </a>
                                        
                                        </div>
                                         </div>

                                        <h5 class="mb-0 mt-4">Google Keep Notes Clone</h5>
                                        <p class="project-text">Save your Notes</p>
                                    </div>

                                    <div class="col-lg-6 col-sm-12 col-md-6 mt-5 mb-5 head">
                                        <div class="project-img">
        
                                    <img src="images/img/proj4.jpg" class="img-fluid w-100 " style="height:300px;">
        
                                    <div class="overlay2">
                                         <a href="https://bachatexpensetrackerapp.000webhostapp.com/" target="_blank"> 
                                        <i class="fa-solid fa-plus"></i> </a>
                                    
                                    </div>
                                    </div>
        
                                    <h5 class="mb-0 mt-4 ">Expense Tracker Website</h5>
                                    <p class="project-text">Manage your Income, Expense and Balance</p>
                                       
                                        </div>
        
        
                                            <div class="col-lg-6 col-sm-12 col-md-6 mt-5 mb-5">
                                                <div class="project-img">
        
                                            <img src="images/img/proj5.jpg" alt="" class="img-fluid w-100 effiel" style="height:300px;" >
                                            <div class="overlay2">
                                                
                                                <a href="" target="_blank"> 
                                                    <i class="fa-solid fa-plus"></i> </a>
                                                </div>
                                             </div>
        
                                                <h5 class="mb-0 mt-4">Portfolio Website</h5>
                                                <p class="project-text">Fully Functional Portfolio Website</p>
        
                                            </div>

                                            <div class="col-lg-6 col-sm-12 col-md-6 mt-5 mb-5">
                                                <div class="project-img">
                
                                            <img src="images/img/upcoming.png" class="img-fluid w-100">
                
                                            <div class="overlay2"> <i class="fa-solid fa-plus"></i></div>
                                            </div>
                
                                                <h5 class="mb-0 mt-4">Dynamic Weather Analyst Website</h5>
                                                <p class="project-text">Fully Function Website</p>
                                               
                                                </div>
    
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-two" aria-labelledby="pills-two-tab" tabindex="0">

                        <div class="row">
                            <div class="col-lg-4 col-sm-6  head">
                                <div class="project-img">

                            <img src="images/img/proj1.jpg" class="img-fluid w-100 " style="height:300px;">

                            <div class="overlay2">
                                 <a href="https://mustansirbharmal-portfolio.github.io/oceantech/" target="_blank"> 
                                <i class="fa-solid fa-plus"></i> </a>
                            
                            </div>
                            </div>

                            <h5 class="mb-0 mt-4 ">Developer Website</h5>
                            <p class="project-text">Amazing Design Website</p>
                               
                                </div>


                                    <div class="col-lg-4 col-sm-6">
                                        <div class="project-img">

                                    <img src="images/img/proj2.jpg" alt="" class="img-fluid w-100 effiel" style="height:300px;" >
                                    <div class="overlay2">
                                        
                                        <a href="https://mustansirbharmal-portfolio.github.io/musttours/" target="_blank"> 
                                            <i class="fa-solid fa-plus"></i> </a>
                                        </div>
                                     </div>

                                        <h5 class="mb-0 mt-4">Tours and Travels Website</h5>
                                        <p class="project-text">Animated Website</p>

                                    </div>

                               
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="project-img">
                                    <img src="images/img/proj3.jpg" alt="" class="img-fluid w-100" style="height:310px;">

                                    <div class="overlay2">
                                        <a href="https://mustansirbharmal-portfolio.github.io/Google-Keep-Clone/" target="_blank"> 
                                              <i class="fa-solid fa-plus" ></i> </a>
                                        
                                        </div>
                                         </div>

                                        <h5 class="mb-0 mt-4">Google Keep Notes Clone</h5>
                                        <p class="project-text">Save your Notes</p>
                                    </div>
    
                        </div>

                    </div>

                    <div class="tab-pane fade" id="pills-three" aria-labelledby="pills-three-tab" tabindex="0">

                        <div class="row">
                            <div class="col-lg-4 col-sm-6 head">
                                <div class="project-img">

                            <img src="images/img/proj4.jpg" class="img-fluid w-100 " style="height:300px;">

                            <div class="overlay2">
                                 <a href="https://bachatexpensetrackerapp.000webhostapp.com/" target="_blank"> 
                                <i class="fa-solid fa-plus"></i> </a>
                            
                            </div>
                            </div>

                            <h5 class="mb-0 mt-4 ">Expense Tracker Website</h5>
                            <p class="project-text">Manage your Income, Expense and Balance</p>
                               
                                </div>


                                    <div class="col-lg-4 col-sm-6">
                                        <div class="project-img">

                                    <img src="images/img/proj5.jpg" alt="" class="img-fluid w-100 effiel" style="height:300px;" >
                                    <div class="overlay2">
                                        
                                        <a href="" target="_blank"> 
                                            <i class="fa-solid fa-plus"></i> </a>
                                        </div>
                                     </div>

                                        <h5 class="mb-0 mt-4">Portfolio Website</h5>
                                        <p class="project-text">Fully Functional Portfolio Website</p>

                                    </div>

                               
                                   
    
                        </div>

                    </div>

                    <div class="tab-pane fade" id="pills-four" role="tabpanel" aria-labelledby="pills-four-tab" tabindex="0">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="project-img">

                            <img src="images/img/upcoming.png" class="img-fluid w-100">

                            <div class="overlay2"> <i class="fa-solid fa-plus"></i></div>
                            </div>

                                <h5 class="mb-0 mt-4">Dynamic Weather Analyst Website</h5>
                                <p class="project-text">Fully Function Website</p>
                               
                                </div>
                        </div>
                    </div>
                   </div>
                  </div>
            </div>

        </div>



    </div>
   </section>

 
   <section id="about" class="about section mt-5">
    <div class="container ">
        <div class="row text-center ">
            <div class="col-sm-12 mt-lg-5 mt-3">
                <p class="title sub-content-about">WHO AM I</p>
                <h3 class="title fourth-header-title " >About me</h>
            </div>
        </div>

        <div class="row about-whole-content mt-5">
            <div class="about-content col-lg-6   col-sm-12 mt-lg-5 mt-md-2">

         <h4 class="title about-header mt-lg-4 mt-md-3 mt-3"> Hello, I'm</h4>
         <p class="text text-content-about mt-3 mt-md-2 mt-sm-0">
        Mustansir Bharmal, a passionate Fullstack Web Developer, 
        with expertise in HTML, CSS and Bootstrap and having knowledge of
        JavaScript, PHP and SQL at Intermediate level. I made many Projects in which
        I mainly focus on design, functionality, Database Connectivity and User Interaction with the System.
         </p>

         <h5 class="mt-5 progress-header-about">HTML</h5>
         <div class="progress " style="height: 10px;">
          <div class="progress-bar color"  style="width:85%;"></div>
         </div>

         <h5 class=" mt-3 progress-header-about">CSS</h5>
         <div class="progress" style="height: 10px;">
          <div class="progress-bar  color" style="width:75%"></div>
         </div>

         <h5 class=" mt-3 progress-header-about">Bootstrap</h5>
         <div class="progress" style="height: 10px;">
          <div class="progress-bar color" style="width:85%"></div>
         </div>

         <h5 class=" mt-3 progress-header-about">JavaScript</h5>
         <div class="progress" style="height: 10px;">
          <div class="progress-bar color" style="width:75%"></div>
         </div>

         <h5 class=" mt-3 progress-header-about">PHP</h5>
         <div class="progress" style="height: 10px;">
          <div class="progress-bar color" style="width:65%"></div>
         </div>

         <h5 class=" mt-3 progress-header-about">SQL</h5>
         <div class="progress" style="height: 10px;">
          <div class="progress-bar color" style="width:80%"></div>
         </div>

        <a href="#contact" class="btn style-btn mt-5 ">HIRE ME</a>


            </div>

            <div class="about-img col-lg-6 col-sm-12 mt-sm-5 text-center " style="vertical-align: middle; display: flex; align-items: center;" >
        <img src="images/img/prof.jpg" alt="" class="img-fluid mt-sm-5 "  style="border-radius: 50%; height:500px; ">
            </div>
        </div>
    </div>
   </section>

   <div class="col-12 mt-lg-5 mt-5 contact-unique">
    <p class="title sub-content-contact">HOW TO REACH ME</p>
    <h3 class="title contact-header-title " >Contact me</h>
</div>

  <!-- Contact Section-->

   <section id="contact" class="contact">
    <div class="container container-adjust">
        <div class="row contact-box">


            <div class="col-12  contact-info ">
               <h3 class="fifth-header-title title">Get in touch</h3>
               <p class="text mt-3">
                 For inquiries , please feel free to reach out to me using the contact details provided below. 
                 I look forward to connecting with you.
               </p>

               <div class="col-12 col-md-12 col-lg-12 change">
               <div class="row">
               <p class="information-wrap info-text info-text-addr">  <i class="icon bi bi-geo-alt-fill"  ></i> India, Rajkot,360003 </p>
               <p class="information-wrap info-text"> <i class="icon bi bi-telephone"></i>9913240053</p>
             <p class="information-wrap info-text info-text-spec">  <i class="icon bi bi-envelope"></i> mustanintern@gmail.com </p>
            </div>
        </div>
            </div>

            <div class="col-lg-12 col-md-12  contact-form " >
                <h3 class="fifth-header-title title head-contact">Contact Me</h3>

                <form class=" mt-2  " action="" method="post">
                    <div class="row">
                    <div class="col-6 col-sm-12 mt-3 mb-3 w-100 ">
                        <input type="text" name="firstname" class="firstName form-control contact-input " placeholder="First Name" required autocomplete="off">
                    </div>

                    <div  class="col-6 col-sm-12 mb-3 w-100">
                        <input type="text" name="lastname" class="lastName form-control contact-input"  placeholder="Last Name" required autocomplete="off">
                    </div>
                </div>

                    <div class=" mb-3 w-100">
                        <input type="tel" name="phone" class="phone form-control contact-input" placeholder="Phone" required autocomplete="off">
                    </div>

                    <div class=" mb-3 w-100">
                        <input type="email" name="email" class="email form-control contact-input email" placeholder="Email" required autocomplete="off">
                    </div>

                    <div class=" mb-3 w-100">
                       <textarea min="10" name="message" id="" cols="30" rows="8" class="msg form-control message" style="font-weight: 400;" placeholder="Message"></textarea>
                    </div>

                   <button type="submit" name="submit" class="btn style-btn mt-4">Submit</button>
                </form>
            </div>
        </div>
    </div>
   </section>

</main>

<?php

    $conn = mysqli_connect('localhost', 'root', '', 'portfolio');

        if(isset($_POST['submit'])){

            $firstName = $_POST['firstname'];
            $lastName = $_POST['lastname'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            $insert_data = "INSERT INTO client(user_firstname, user_lastname, user_phone, user_email, user_details) 
                            VALUES('$firstName','$lastName', '$phone', '$email', '$message')";

            $run_insert = mysqli_query($conn, $insert_data);

            if($run_insert === true){
                echo "<script> alert('Form Submitted Successfully !!!'); </script>";
            }

            else{
                echo "<script> alert('Try Again'); </script>";
            }
        }
?>

<!-- Footer Section -->

<footer class="footer bg-dark text-light">
<div class="container">
    <div class="row justify-content-evenly  footer-content  ">
        <div class="col-md-4 col-lg-4 col-12 about-footer">
     <h3 class="title title-sm ">About</h3>
     <p class="text footer-para mt-2 ">Hello I'm Mustansir Bharmal, Frontend Web Developer,
         above there are all details of my work and skills so kindly check it out.
       </p>
        </div>

        <div class="col-md-2 col-lg-2 col-12  footer-links spec-links">
         <h3 class="title title-sm">Links</h3>
         <p class="footer-links footer-link2 ">
            <a href="#services" class="text-decoration-none mb-3 mt-2 ">Services</a><br>
            <a href="#project" class="text-decoration-none mb-3 ">Projects</a><br>
            <a href="#contact" class="text-decoration-none ">Contact</a>
         </p>
        </div>

        <div class="col-md-2 col-lg-2 col-12  services-footer footer-links">
            <h3 class="title title-sm">Services</h3>
            <p class="footer-services footer-link2">
                <a href="#services" class="text-decoration-none mb-3 mt-2">UI/UX</a><br>
                <a href="#services" class="text-decoration-none  mb-3 ">Web Dev</a><br>
                <a href="#services" class="text-decoration-none ">Responsive</a>
            </p>
        </div>

      <div class="col-md-6 mx-md-4 col-lg-6 col-12 spec-contact ">
        <h3 class="title title-sm">Contact Me</h3>
        
      <div class="contact-me">
        <a href="tel:+91 9913240053" class="footer-link-style ">
            <i class="icon2 fa-solid fa-phone "></i>: 9913240053
        </a><br>    

        <a href="" class=" footer-link-style ">
            <i class="icon2 fa-solid fa-envelope "></i>:<span class="contact-email"> mustanintern@gmail.com  </span>
        </a>
      </div>
       </div>
   
       <div class="col-12 col-md-4 col-lg-4  mt-4 follow">
        <h3 class="title-sm special-head">Follow me</h3>
        <a href="https://www.linkedin.com/in/mustansir-bharmal-5a13b1259/" >
            <i class="icon31 fab fa-linkedin-in" style="font-size:25px;"></i>
           </a>
        
           <a href="https://www.instagram.com/blue_ocean12222/">
            <i class="icon41 fab fa-instagram " style="font-size:25px; "></i>
           </a>
  
      </div>

    </div>    
</div>

    <div class="container bottom-footer ">
        <div class="row">
            <div class="col-12 col-lg-6 col-md-6">
                <p class="copyright-para">Copyright©2023 All rights reserved | Made by <span class="different-footer-para" >Mustansir Bharmal 

                </span>
            </p>
               
        </div>
        <div class="col-12 col-lg-6 col-md-6 text-end refresh-btn back-btn-wrap">
            <a href="#home" class="back-btn ">
                <i class="ms-auto fas fa-chevron-up"></i>
              </a>
        </div>  
    </div>
</footer>





    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="../script.js"></script>
</body>
</html>
























