<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Clock using Javascript</title>
     <link rel="stylesheet" href="style.css">
</head>

<body>
     <div id="time">
          <div class="circle" style="--clr: #ff2972;">
               <div class="dot hr_dot"></div>
               <svg>
                    <circle cx="60" cy="60" r="60"></circle>
                    <circle cx="60" cy="60" r="60" id="hh"></circle>
               </svg>
               <div id="hours">00</div>
          </div>
          <div class="circle" style="--clr: #fee800;">
               <div class="dot min_dot"></div>
               <svg>
                    <circle cx="60" cy="60" r="60"></circle>
                    <circle cx="60" cy="60" r="60" id="mm"></circle>
               </svg>
               <div id="minutes">00</div>
          </div>
          <div class="circle" style="--clr: #04fc43;">
               <div class="dot sec_dot"></div>
               <svg>
                    <circle cx="60" cy="60" r="60"></circle>
                    <circle cx="60" cy="60" r="60" id="ss"></circle>
               </svg>
               <div id="seconds">00</div>
          </div>
          <div class="ap">
               <div id="ampm">AM</div>
          </div>
     </div>

     <script>

          setInterval(function () {
               let hours = document.getElementById('hours');
               let minutes = document.getElementById('minutes');
               let seconds = document.getElementById('seconds');
               let ampm = document.getElementById('ampm');

               let hh = document.getElementById('hh')
               let mm = document.getElementById('mm')
               let ss = document.getElementById('ss')

               hr_dot = document.querySelector('.hr_dot')
               min_dot = document.querySelector('.min_dot')
               sec_dot = document.querySelector('.sec_dot')

               let h = new Date().getHours();
               let m = new Date().getMinutes();
               let s = new Date().getSeconds();
               let am = h >= 12 ? "PM" : "AM";

               if (h > 12) {
                    h = h - 12;
               }

               h = (h < 10) ? "0" + h : h;
               m = (m < 10) ? "0" + m : m;
               s = (s < 10) ? "0" + s : s;

               hours.innerHTML = h
               minutes.innerHTML = m
               seconds.innerHTML = s
               ampm.innerHTML = am

               hh.style.strokeDashoffset = 380 - (380 * h) / 12;
               // 12 hours
               mm.style.strokeDashoffset = 380 - (380 * m) / 60;
               // 60 minutes
               ss.style.strokeDashoffset = 380 - (380 * s) / 60;
               // 60 seconds

               hr_dot.style.transform = `rotate(${h * 30}deg)`
               // 360/12 = 30
               min_dot.style.transform = `rotate(${m * 6}deg)`
               // 360/60 = 6
               sec_dot.style.transform = `rotate(${s * 6}deg)`
               // 360/60 = 6
          })
     </script>

</body>

</html>