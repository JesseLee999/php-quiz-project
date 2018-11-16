<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <title>Questionnaire</title>
    <style>
      body {
        background-image: url(img/shards_stone_background.jpg);
        background-size: cover;
        color: lightgrey;
      }

      .container {
          margin: 0 auto;
          padding: 5%;
          padding-left: 10%;
      }

      .box {
          margin: 0 250px;
          
      }

    </style>
</head>
<body>
    <section class="section"> 
    <div class="box">  
        <div class="container">
            <p class="title">General Knowledge Quiz</p>
            <div class="columns">
            <form action="results.php" method="post" id="quiz">
              <ol>
              <li>
                <h2 class="sub-title">Apart from Venus, which planet rotates counter-clockwise?</h2>   
                    <div class="is-three-fifths is-offset-one-fifth">                       
                    <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) Jupiter</label>   
                    </div>
                        
                    <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) Uranus</label>    
                    </div>
                        
                    <div>    
                    <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />   
                    <label for="question-1-answers-C">C) Saturn</label>   
                    </div>
                        
                    <div>   
                    <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />   
                    <label for="question-1-answers-D">D) Mars</label>   
                    </div>
              </li>
              <li>  
                    <h2 class="sub-title">How many colours are there in a rainbow?</h2>   
                    <div>                       
                    <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                    <label for="question-2-answers-A">A) 7</label>   
                    </div>
                        
                    <div>
                    <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                    <label for="question-2-answers-B">B) 8</label>    
                    </div>
                        
                    <div>    
                    <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />   
                    <label for="question-2-answers-C">C) 9</label>   
                    </div>
                        
                    <div>   
                    <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />   
                    <label for="question-2-answers-D">D) 10</label>   
                    </div>
              </li>
              <li>
                    <h2 class="sub-title">For which of the following disciplines is Nobel Prize awarded?</h2>   
                    <div>                       
                    <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                    <label for="question-3-answers-A">A) Literature, Peace and Economics</label>   
                    </div>
                        
                    <div>
                    <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                    <label for="question-3-answers-B">B) Physics and Chemistry</label>    
                    </div>
                        
                    <div>    
                    <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />   
                    <label for="question-3-answers-C">C) Physiology and Medicine</label>   
                    </div>
                        
                    <div>   
                    <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />   
                    <label for="question-3-answers-D">D) All of the above</label>   
                    </div>
              </li>
              <li>
                    <h2 class="sub-title">The ozone layer restricts..</h2>   
                    <div>                       
                    <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                    <label for="question-4-answers-A">A) X -rays and gamma rays</label>   
                    </div>
                        
                    <div>
                    <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                    <label for="question-4-answers-B">B) Visible light</label>    
                    </div>
                        
                    <div>    
                    <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />   
                    <label for="question-4-answers-C">C) Infrared light</label>   
                    </div>
                        
                    <div>   
                    <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />   
                    <label for="question-4-answers-D">D) Ultraviolet radiation</label>   
                    </div>
              </li>
              <li>
                    <h2 class="sub-title">Eugenics is the study of..</h2>   
                    <div>                       
                    <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                    <label for="question-5-answers-A">A) genetic of plants</label>   
                    </div>
                        
                    <div>
                    <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                    <label for="question-5-answers-B">B) different races of mankind</label>    
                    </div>
                        
                    <div>    
                    <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />   
                    <label for="question-5-answers-C">C) altering human beings by changing their genetic components</label>   
                    </div>
                        
                    <div>   
                    <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />   
                    <label for="question-5-answers-D">D) people of European origin</label>   
                    </div>
              </li>
              <li>
                    <h2 class="sub-title">For seeing objects at the surface of water of a submarine</h2>   
                    <div>                       
                    <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
                    <label for="question-6-answers-A">A) Periscope</label>   
                    </div>
                        
                    <div>
                    <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                    <label for="question-6-answers-B">B) Telescope</label>    
                    </div>
                        
                    <div>    
                    <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />   
                    <label for="question-6-answers-C">C) Kaleidoscope</label>   
                    </div>
                        
                    <div>   
                    <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />   
                    <label for="question-6-answers-D">D) Spectroscope</label>   
                    </div>
              </li>
              <li>
                    <h2 class="sub-title">Fathometer is used to measure..</h2>   
                    <div>                       
                    <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" />
                    <label for="question-7-answers-A">A) Rainfall</label>   
                    </div>
                        
                    <div>
                    <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
                    <label for="question-7-answers-B">B) Sound intensity</label>    
                    </div>
                        
                    <div>    
                    <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />   
                    <label for="question-7-answers-C">C) Ocean depth</label>   
                    </div>
                        
                    <div>   
                    <input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" />   
                    <label for="question-7-answers-D">D) Earthquakes</label>   
                    </div>
              </li>
              <li>
                    <h2 class="sub-title">With which sport is the term googly associated?</h2>   
                    <div>                       
                    <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" />
                    <label for="question-8-answers-A">A) Water polo</label>   
                    </div>
                        
                    <div>
                    <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
                    <label for="question-8-answers-B">B) Cricket</label>    
                    </div>
                        
                    <div>    
                    <input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" />   
                    <label for="question-8-answers-C">C) Field hockey</label>   
                    </div>
                        
                    <div>   
                    <input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" />   
                    <label for="question-8-answers-D">D) Football</label>   
                    </div>
              </li>
              <li>
                    <h2 class="sub-title">From which language is the word ‘ketchup’ derived?</h2>   
                    <div>                       
                    <input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" />
                    <label for="question-9-answers-A">A) European</label>   
                    </div>
                        
                    <div>
                    <input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
                    <label for="question-9-answers-B">B) Chinese</label>    
                    </div>
                        
                    <div>    
                    <input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" />   
                    <label for="question-9-answers-C">C) African</label>   
                    </div>
                        
                    <div>   
                    <input type="radio" name="question-9-answers" id="question-9-answers-D" value="D" />   
                    <label for="question-9-answers-D">D) American</label>   
                    </div>
              </li>
              <li>
                    <h2 class="sub-title">What colour are the four stars on the flag of New Zealand?</h2>   
                    <div>                       
                    <input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" />
                    <label for="question-10-answers-A">A) Gold</label>   
                    </div>
                        
                    <div>
                    <input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" />
                    <label for="question-10-answers-B">B) White</label>    
                    </div>
                        
                    <div>    
                    <input type="radio" name="question-10-answers" id="question-10-answers-C" value="C" />
                    <label for="question-10-answers-C">C) Red</label>   
                    </div>
                        
                    <div>   
                    <input type="radio" name="question-10-answers" id="question-10-answers-D" value="D" /> 
                    <label for="question-10-answers-D">D) Purple</label>   
                    </div>
              </li>
              <li>
                    <h2 class="sub-title">H2O is the chemical formula for what?</h2>   
                    <div>                       
                    <input type="radio" name="question-11-answers" id="question-11-answers-A" value="A" />
                    <label for="question-11-answers-A">A) Tomato sauce</label>   
                    </div>
                        
                    <div>
                    <input type="radio" name="question-11-answers" id="question-11-answers-B" value="B" />
                    <label for="question-11-answers-B">B) Hydrochloric acid</label>    
                    </div>
                        
                    <div>    
                    <input type="radio" name="question-11-answers" id="question-11-answers-C" value="C" />
                    <label for="question-11-answers-C">C) Carbon dioxide</label>   
                    </div>
                        
                    <div>   
                    <input type="radio" name="question-11-answers" id="question-11-answers-D" value="D" /> 
                    <label for="question-11-answers-D">D) Water</label>   
                    </div>
              </li>
              <li>
                    <h2 class="sub-title">Brie and Camembert are types of which food?</h2>   
                    <div>                       
                    <input type="radio" name="question-12-answers" id="question-12-answers-A" value="A" />
                    <label for="question-12-answers-A">A) Cheese</label>   
                    </div>
                        
                    <div>
                    <input type="radio" name="question-12-answers" id="question-12-answers-B" value="B" />
                    <label for="question-12-answers-B">B) Fish </label>    
                    </div>
                        
                    <div>    
                    <input type="radio" name="question-12-answers" id="question-12-answers-C" value="C" /> 
                    <label for="question-12-answers-C">C) Poultry</label>   
                    </div>
                        
                    <div>   
                    <input type="radio" name="question-12-answers" id="question-12-answers-D" value="D" />
                    <label for="question-12-answers-D">D) Vegetables</label>   
                    </div>
              </li>
              <li>
                    <h2 class="sub-title">Apart from Venus, which planet rotates from east to west?</h2>   
                    <div>                       
                    <input type="radio" name="question-13-answers" id="question-13-answers-A" value="A" />
                    <label for="question-13-answers-A">A) Jupiter</label>   
                    </div>
                        
                    <div>
                    <input type="radio" name="question-13-answers" id="question-13-answers-B" value="B" />
                    <label for="question-13-answers-B">B) Uranus</label>    
                    </div>
                        
                    <div>    
                    <input type="radio" name="question-13-answers" id="question-13-answers-C" value="C" />   
                    <label for="question-13-answers-C">C) Saturn</label>   
                    </div>
                        
                    <div>   
                    <input type="radio" name="question-13-answers" id="question-13-answers-D" value="D" />   
                    <label for="question-13-answers-D">D) Mars</label>   
                    </div>
              </li>
              <li>
                    <h2 class="sub-title">Apart from Venus, which planet rotates from east to west?</h2>   
                    <div>                       
                    <input type="radio" name="question-14-answers" id="question-14-answers-A" value="A" />
                    <label for="question-14-answers-A">A) Jupiter</label>   
                    </div>
                        
                    <div>
                    <input type="radio" name="question-14-answers" id="question-14-answers-B" value="B" />
                    <label for="question-14-answers-B">B) Uranus</label>    
                    </div>
                        
                    <div>    
                    <input type="radio" name="question-14-answers" id="question-14-answers-C" value="C" />   
                    <label for="question-14-answers-C">C) Saturn</label>   
                    </div>
                        
                    <div>   
                    <input type="radio" name="question-14-answers" id="question-14-answers-D" value="D" />   
                    <label for="question-14-answers-D">D) Mars</label>   
                    </div>
              </li>
              <li>
                    <h2 class="sub-title">Apart from Venus, which planet rotates from east to west?</h2>   
                    <div>                       
                    <input type="radio" name="question-15-answers" id="question-15-answers-A" value="A" />
                    <label for="question-14-answers-A">A) Jupiter</label>   
                    </div>
                        
                    <div>
                    <input type="radio" name="question-15-answers" id="question-15-answers-B" value="B" />
                    <label for="question-15-answers-B">B) Uranus</label>    
                    </div>
                        
                    <div>    
                    <input type="radio" name="question-15-answers" id="question-15-answers-C" value="C" />   
                    <label for="question-15-answers-C">C) Saturn</label>   
                    </div>
                        
                    <div>   
                    <input type="radio" name="question-15-answers" id="question-15-answers-D" value="D" />   
                    <label for="question-15-answers-D">D) Mars</label>   
                    </div>
              </li>
              <li>
                    <h2 class="sub-title">Apart from Venus, which planet rotates from east to west?</h2>   
                    <div>                       
                    <input type="radio" name="question-16-answers" id="question-16-answers-A" value="A" />
                    <label for="question-16-answers-A">A) Jupiter</label>   
                    </div>
                        
                    <div>
                    <input type="radio" name="question-16-answers" id="question-16-answers-B" value="B" />
                    <label for="question-16-answers-B">B) Uranus</label>    
                    </div>
                        
                    <div>    
                    <input type="radio" name="question-16-answers" id="question-16-answers-C" value="C" />   
                    <label for="question-16-answers-C">C) Saturn</label>   
                    </div>
                        
                    <div>   
                    <input type="radio" name="question-16-answers" id="question-16-answers-D" value="D" />   
                    <label for="question-16-answers-D">D) Mars</label>   
                    </div>
              </li>
              <li>
                    <h2 class="sub-title">Apart from Venus, which planet rotates from east to west?</h2>   
                    <div>                       
                    <input type="radio" name="question-17-answers" id="question-17-answers-A" value="A" />
                    <label for="question-16-answers-A">A) Jupiter</label>   
                    </div>
                        
                    <div>
                    <input type="radio" name="question-17-answers" id="question-17-answers-B" value="B" />
                    <label for="question-17-answers-B">B) Uranus</label>    
                    </div>
                        
                    <div>    
                    <input type="radio" name="question-17-answers" id="question-17-answers-C" value="C" />   
                    <label for="question-17-answers-C">C) Saturn</label>   
                    </div>
                        
                    <div>   
                    <input type="radio" name="question-17-answers" id="question-17-answers-D" value="D" />   
                    <label for="question-17-answers-D">D) Mars</label>   
                    </div>
              </li>
              <li>
                    <h2 class="sub-title">Apart from Venus, which planet rotates from east to west?</h2>   
                    <div>                       
                    <input type="radio" name="question-18-answers" id="question-18-answers-A" value="A" />
                    <label for="question-17-answers-A">A) Jupiter</label>   
                    </div>
                        
                    <div>
                    <input type="radio" name="question-18-answers" id="question-18-answers-B" value="B" />
                    <label for="question-18-answers-B">B) Uranus</label>    
                    </div>
                        
                    <div>    
                    <input type="radio" name="question-18-answers" id="question-18-answers-C" value="C" />   
                    <label for="question-18-answers-C">C) Saturn</label>   
                    </div>
                        
                    <div>   
                    <input type="radio" name="question-18-answers" id="question-18-answers-D" value="D" />   
                    <label for="question-18-answers-D">D) Mars</label>   
                    </div>
              </li>
              <li>
                    <h2 class="sub-title">Apart from Venus, which planet rotates from east to west?</h2>   
                    <div>                       
                    <input type="radio" name="question-19-answers" id="question-19-answers-A" value="A" />
                    <label for="question-19-answers-A">A) Jupiter</label>   
                    </div>
                        
                    <div>
                    <input type="radio" name="question-19-answers" id="question-19-answers-B" value="B" />
                    <label for="question-19-answers-B">B) Uranus</label>    
                    </div>
                        
                    <div>    
                    <input type="radio" name="question-19-answers" id="question-19-answers-C" value="C" />   
                    <label for="question-19-answers-C">C) Saturn</label>   
                    </div>
                        
                    <div>   
                    <input type="radio" name="question-19-answers" id="question-19-answers-D" value="D" />   
                    <label for="question-19-answers-D">D) Mars</label>   
                    </div>
              </li>
              <li>
                    <h2 class="sub-title">If you choose an answer to this question at random, what is the chance you will be correct?</h2>   
                    <div>                       
                    <input type="radio" name="question-20-answers" id="question-20-answers-A" value="A" />
                    <label for="question-20-answers-A">A) 25%</label>   
                    </div>
                        
                    <div>
                    <input type="radio" name="question-20-answers" id="question-20-answers-B" value="B" />
                    <label for="question-20-answers-B">B) 0%</label>    
                    </div>
                        
                    <div>    
                    <input type="radio" name="question-20-answers" id="question-20-answers-C" value="C" />   
                    <label for="question-20-answers-C">C) 25%</label>   
                    </div>
                        
                    <div>   
                    <input type="radio" name="question-20-answers" id="question-20-answers-D" value="D" />   
                    <label for="question-20-answers-D">D) 50%</label>   
              </li> 
              <br>      
            <input class="button is-black" type="submit" value="Submit Quiz" />
        </form>
        </div>
        </div>
        </section>
</body>
</html>