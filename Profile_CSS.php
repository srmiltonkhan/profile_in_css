<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

  <style type="text/css">
  .facMImg img{
    width: 170px;
    max-width: 100%;
    border-radius: 50%;
    height: 170px;
    display: flex;
    margin: 0 auto;
    margin-top: 20px;
    margin-bottom: 20px;
}
  	.facMName p{
 font-weight: bold;
 font-size: 21px; 
}
.fltyicon{
  width: 35px;
  border-radius: 50%;
  height: 35px;
  line-height: 2;
  background-color: whitesmoke;
}
.fltyicon:hover{
  background-color: #cedde2;
  cursor: pointer;
  transition: all ease 0.3s;
  transform: var(--transcale);
}
.qlyTitle p{
    line-height: 2;
    padding: 3px 0px 0px 8px;
}
.socailIcon i{
  width: 35px;
}
  </style>
    <div class="row w-25 mx-auto">
    <div class="col">
        <div class="facultyMem border mb-4">
          <div class="facMImg">
            <img src="admin/Files/user_image/milton.jpg">
          </div>
          <div class="facMName mr-2">
            <p class="text-right">Milton</p>
            <smal style="float:right;">Professor</smal>
          </div>
          <div class="memInfo p-3 border-top">
            <br>
            <div style="display: flex;" class="mb-1">          
            <div class="fltyicon border text-center"><i class="fas fa-graduation-cap center text-primary"></i></div><div class="qlyTitle" style="flex-grow: 1"><p>MHP</p></div>
          </div>

            <div style="display: flex;" class="mb-1">          
            <div class="fltyicon border text-center"><i class="fas fa-mobile-alt center text-info"></i></div><div class="qlyTitle" style="flex-grow: 1"><p>01621000361</p></div>
          </div>

            <div style="display: flex;">          
            <div class="fltyicon border text-center"><i class="fas fa-envelope text-success"></i></div><div class="qlyTitle" style="flex-grow: 1"><p>srmiltonkhan@gmail.com</p></div>
            </div> 
<br>
            <div style="display: flex;" class="socailIcon">          
              <a href="'.$row['website'].'" target="_blank"><div class="socailIcon border text-center mr-2"><i class="fas fa-globe-asia text-success"></i></div></a>
              <a href="'.$row['linkedin'].'" target="_blank"><div class="socailIcon border text-center mr-2"><i class="fab fa-linkedin-in text-info"></i></div></a>
              <a href="'.$row['facebook'].'" target="_blank"><div class="socailIcon border text-center mr-2"><i class="fab fa-facebook text-primary"></i></div></a>
              <a href="'.$row['youtube'].'" target="_blank"><div class="socailIcon border text-center mr-2"><i class="fab fa-youtube-square text-danger"></i></div></a>
              <a href="'.$row['twitter'].'" target="_blank"><div class="socailIcon border text-center mr-2"><i class="fab fa-twitter-square text-primary"></i></div></a>
            </div> 

          </div>
        </div>
      </div>

    </div>
