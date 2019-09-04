<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Resume</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <div>
        <!-- This houses the top most area of the CV -->
        
            <header class="first">
                <div class="row1">
                    <div class="column1">
                        <span>
                            <img class="image" src="https://res.cloudinary.com/inaaga/image/upload/v1566422226/amy.jpg" alt="Amarachi's Passport">   
                        </span> 
                    </div>
                    <div class="column2">
                        <h1>AMARACHI EMMANUELLA AZUBUIKE</h1>
                        <p>Software Developer</p>
                        <br />
                        
                        <hr class="hr">
                    </div>
                </div>
            </header>
        
        
            <!-- header ends here, the other parts of the CV starts here -->
            <section class="all">
                    <div class="row">
                            <div class="column">
                                    <h4> PERSONAL BIODATA</font></h4>
                                    <hr>
                                    <p>
                                        Date of Birth - 20th December, 1994<br />
                                        Gender - Female<br />
                                        Nationality - Nigerian<br />
                                        Religion - Christian<br />
                                    </p>
                                    <h4>EDUCATION</h4>
                                    <hr>
                                    <p>
                                        B.sc Computer Science<br />
                                         (Michael Okpara University of Agriculture, Umudike - 2016)
                                    </p>
                                    <h4>EXPERIENCE</h4>
                                        <hr>
                                        <p>
                                            <b>Maths & Computer Science Teacher</b><br />
                                            <u>Abayi International Secondary School - (September 2016-May 2017)</u>
                                        </p>
                                        <p>
                                            <b>Graduate Assistant(NYSC)</b><br />
                                            <u>Federal Polytechnic Idah, Kogi State - (June 2017 - July, 2018)</u><br />
                                            At FPI,  I worked with chief lecturers in giving lectures, carrying out<br />
                                            practicals and vetting examination and practical booklets of the students.
                                        </p>
                                        <p>
                                            <b>Frontend developer</b><br />
                                            <u>Innovation Growth Hub, Abia Nigeria - (August 2018  - Present)</u>
                                        </p>
                                        <p>
                                            <b>Facebook Trainer</b><br />
                                            <u>Innovation Growth Hub, Abia Nigeria - (August 2018  - Present)</u>
                                        </p>
                                        <h4>PROJECTS</font></h4>
                                        <hr>
                                        <p>Fasthousing, Whotovote, Nairocare.com,<br />
                                             Agrocity.ng FbPortal</p>
                                        <h4>VOLUNTEER EXPERIENCES</h4>
                                        <hr>
                                        <p>
                                            TEDx Abayi<br />
                                            Fempower Africa<br />
                                            Vision Alive IYD</strong>
                                        </p>
                                        <h4>REFEREES</h4>
                                        <hr>
                                        <p>Daniel Chinagozi<br />
                                        CEO, Innovation Growth Hub<br />
                                        <a href="mailto:danielchinagozi@gmail.com">danielchinagozi2gmail.com</a>, <br />07035906191</p>
                                        <p>Mrs Juliet Odiketa, <br />
                                        former HOD Computer Science Department,<br />
                                         Federal Polytechnic Idah<br />
                                        <a href="mailto:chiomaodiketa@gmail.com">chiomaodiketa@gmail.com</a>,<br /> 07035906191</p>
                            </div>
                            <!-- ending of first column -->
                            <div class="column3">
                                    <h4>DETAILS</h4>
                                    <hr>
                                    <p>
                                        <a href="mailto:emmanuellar805@gmail.com">emmanuellar805@gmail.com</a><br />
                                        +234(703)-590-6191
                                        
                                    </p>
                                    <h4>SKILLS</h4>
                                    <hr>
                                    <p>
                                        <strong>Languages:</strong>  HTML/CSS, Javascript<br />
                                        <strong>Frameworks:</strong> Bootstrap, React<br />
                                        <strong>Microsoft Office Suite</strong>
                                    </p>
                                    <h4>WHERE TO FIND ME</h4>
                                    <hr>
                                    <p>
                                        <strong>
                                        <a href="https://www.linkedin.com/in/amarachukwuemmanuelaazubuike/">Linkedin</a>
                                        </strong>
                                    </p>
                                    <p>
                                        <strong>
                                        <a href="https://www.twitter.com/a_m_a_r_a_c_h_i">Twitter</a>
                                        </strong>
                                    </p>
                                    <p>
                                        <strong>
                                        <a href="https://medium.com/@amarachukwu">Medium</a>
                                        </strong>
                                    </p>
                                    <p>
                                        <strong>
                                        <a href="https://www.github.com/emmanuellar">Github</a>
                                        </strong>
                                    </p>
                                    <h4>LANGUAGES</h4>
                                    <hr>
                                    <p>
                                        Igbo Language (Native Language)<br />
                                        English Language (Proficient)<br />
                                    </p>
                                    <h4>EXTRA-CURRICULAR ACTIVITIES</h4>
                                    <hr>
                                    <p>
                                            IT educator at Catholic Diocesan Directorate Idah,
                                            <br /> Kogi State (July, 2017- September, 2017)<br />
                                            Mentor, Technovation Challenge, 2019<br />
                                            Kids Code tutor - IGAcademy
                                    </p>

                                    <h4>CONTACT ME</h4>
                                    <hr>
                                    <form action="/cgi-bin/test.cgi" name="myForm" onsubmit="return(validate());">
                                        <div class="inputs">
                                            <label class="name">Name</label><br />
                                            <input id="name" name="Name" minlength="4" type="text" placeholder="Enter your name" pattern="[a-zA-Z]+" required><br />
                                        </div>
                                        <div class="inputs">
                                            <label class="email">Email</label><br />
                                            <input id="email" name="EMail" type="email" placeholder="Enter your Email Address" required><br />
                                        </div>
                                        <div class="inputs">
                                            <label class="title">Title</label><br />
                                            <input id="title" type="text" placeholder="Enter your Message Title" required><br />
                                        </div>
                                        
                                        <label class="message">Message</label><br />
                                        <textarea cols="40" minlength="20" rows="3" required></textarea>
                                        <input type="submit" value="Send Message"> 
                                    </form>
                            </div>
                        </div>
                                    <!-- Ending of the second column. -->
            </section>
           
    </div>
    <script>
            function validate = ()=>
            {
                var emailID = document.myForm.EMail.value;
                atpos = emailID.indexOf("@");
                dotpos = emailID.lastIndexOf(".");
                
                if (atpos < 1 || (dotpos - atpos < 2 )) 
                {
                document.createElement('style');
                style.innerHTML=`
                #email{
                    '
                    'background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAeVJREFUeNqkU01oE1EQ/mazSTdRmqSxLVSJVKU9RYoHD8WfHr16kh5EFA8eSy6hXrwUPBSKZ6E9V1CU4tGf0DZWDEQrGkhprRDbCvlpavan3ezu+LLSUnADLZnHwHvzmJlvvpkhZkY7IqFNaTuAfPhhP/8Uo87SGSaDsP27hgYM/lUpy6lHdqsAtM+BPfvqKp3ufYKwcgmWCug6oKmrrG3PoaqngWjdd/922hOBs5C/jJA6x7AiUt8VYVUAVQXXShfIqCYRMZO8/N1N+B8H1sOUwivpSUSVCJ2MAjtVwBAIdv+AQkHQqbOgc+fBvorjyQENDcch16/BtkQdAlC4E6jrYHGgGU18Io3gmhzJuwub6/fQJYNi/YBpCifhbDaAPXFvCBVxXbvfbNGFeN8DkjogWAd8DljV3KRutcEAeHMN/HXZ4p9bhncJHCyhNx52R0Kv/XNuQvYBnM+CP7xddXL5KaJw0TMAF8qjnMvegeK/SLHubhpKDKIrJDlvXoMX3y9xcSMZyBQ+tpyk5hzsa2Ns7LGdfWdbL6fZvHn92d7dgROH/730YBLtiZmEdGPkFnhX4kxmjVe2xgPfCtrRd6GHRtEh9zsL8xVe+pwSzj+OtwvletZZ/wLeKD71L+ZeHHWZ/gowABkp7AwwnEjFAAAAAElFTkSuQmCC);'
                    'background-position: right top;'
                    'background-repeat: no-repeat;'
                    '-moz-box-shadow: none;'
                    'border:1px solid rgba(131, 5, 5, 0.171);'
                    '
                }
                `;
                document.head.appendChild(style);
                    document.myForm.EMail.focus() ;
                    return false;
                }
                else{
                style.innerHTML=`
                #email{
                    '
                    'background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAepJREFUeNrEk79PFEEUx9/uDDd7v/AAQQnEQokmJCRGwc7/QeM/YGVxsZJQYI/EhCChICYmUJigNBSGzobQaI5SaYRw6imne0d2D/bYmZ3dGd+YQKEHYiyc5GUyb3Y+77vfeWNpreFfhvXfAWAAJtbKi7dff1rWK9vPHx3mThP2Iaipk5EzTg8Qmru38H7izmkFHAF4WH1R52654PR0Oamzj2dKxYt/Bbg1OPZuY3d9aU82VGem/5LtnJscLxWzfzRxaWNqWJP0XUadIbSzu5DuvUJpzq7sfYBKsP1GJeLB+PWpt8cCXm4+2+zLXx4guKiLXWA2Nc5ChOuacMEPv20FkT+dIawyenVi5VcAbcigWzXLeNiDRCdwId0LFm5IUMBIBgrp8wOEsFlfeCGm23/zoBZWn9a4C314A1nCoM1OAVccuGyCkPs/P+pIdVIOkG9pIh6YlyqCrwhRKD3GygK9PUBImIQQxRi4b2O+JcCLg8+e8NZiLVEygwCrWpYF0jQJziYU/ho2TUuCPTn8hHcQNuZy1/94sAMOzQHDeqaij7Cd8Dt8CatGhX3iWxgtFW/m29pnUjR7TSQcRCIAVW1FSr6KAVYdi+5Pj8yunviYHq7f72po3Y9dbi7CxzDO1+duzCXH9cEPAQYAhJELY/AqBtwAAAAASUVORK5CYII=);'
                    'background-position: right top;'
                    'background-repeat: no-repeat;'
                    'border:1px solid rgba(3, 73, 3, 0.473);'
                    '
                }
                `;
                }
                return( true );
            }
               
            
          </script>
</body>
</html>