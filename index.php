<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Media Player</title>
	<script type="text/javascript" src="jwplayer/jwplayer.js"></script>
	<script type="text/javascript">jwplayer.key="p2k3RdjFSfKz8LDVFJfV7VGUF/7dx//2+AX0YA==";</script>
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js'></script>
    <script>
     $(document).ready(function(){
         
         var defaultimg = "images/glee.jpg",
             mediaimg = $(".media:first").attr("data-img");
             
         jwplayer("player").setup({
             file:$(".media:first").attr("data-media"),
             image: mediaimg ? mediaimg : defaultimg,
             height: 360,
             width: 640,
         });
         
         $(".media").bind("click",function(){
             var thisimg = $(this).attr("data-img");
             $(".media").removeClass("current");
             $(this).addClass("current");
              jwplayer("player").setup({
                  file:$(this).attr("data-media"),
                  image: thisimg ? thisimg : defaultimg,
                  height: 360,
                  width: 640,
              });
         });
         
         $(".media:first").addClass("current");
         $(".media:odd").addClass("odd");         
     });
    </script>
    <style>
        body{
            background:url(images/glee.jpg); 
            font-family:Myriad Pro;
			background-repeat: no-repeat;
			background-position: center center;
			background-attachment: fixed;
			background-size: cover;
        }
        body > article{
            width:660px;
            margin: 0 auto;
        }
        #playerwrap{
            padding:10px;
            background-color:#fff;
            -webkit-box-shadow: 1px 1px 3px #aaa;  
            margin-bottom:25px; 
        }
        #player{
            width:640px;
            height:360px;
            overflow:hidden;
            background-color:#000;
        }
        #playlist{
            background-color:#fff;
            border:1px solid #ccc;
            height:250px;
            overflow:auto;
            width:100%;
            border-radius:5px;
        }
        #playlist::-webkit-scrollbar{
        	width: 10px;
        	height: 30px;
        }
        #playlist::-webkit-scrollbar-track:vertical{
        	background-color: #eee;
            border-left:#eee 1px solid;
        }
        #playlist::-webkit-scrollbar-thumb:vertical{
        	border-radius:10px;
        	background-color: #999;
        	border-width: 0;
        	border-color: transparent;
        	cursor: pointer;
        }
        #playlist::-webkit-scrollbar-thumb:hover{
        	background-color: #666666;
        }
        #playlist::-webkit-scrollbar-thumb:active{
        	background-color: #777;
        }
             
        .media{
            padding:10px;
            padding-left:25px;
            cursor:pointer;
            border-bottom:1px solid #ddd; 
            color:#666666;
        }
        .media:hover{
            /*background:#eee;*/
            color:#222;
        }
        .media h3 span{
            font-weight: 200;
        }
        .media.odd{
            background:#f1f1f1; 
        }
        .media.current{
            color:#333;
            background:#ccc;
            border-bottom: 1px solid #d1d1d1;
        }
 
    </style>
</head>
<body> 
    <article> 
        <div id='playerwrap'>
            <div id='player'>
                <img src='/_img/video_holder.jpg' alt='Select Media'/>
            </div>
        </div>
		
        <div id='playlist'>
             <article class='media' data-media='uploads/HowWill_IKnow.mp4' data-img='images/rachel.jpeg'> 
                 <h3>How Will I Know</h3>
             </article>
            <article class='media' data-media='uploads/Stronger.mp4' data-img='images/merced.jpg'>
               <h3>Stronger</h3>
            </article>
            <article class='media' data-media='uploads/I_Wanna_Dance_With_Somebody.mp4' data-img='images/brittany.jpg'> 
                <h3>I Wanna Dance With Somebody</h3>
            </article>
            <article class='media' data-media='uploads/Its_Time.mp4' data-img='images/blaine.jpg'> 
                <h3>It's Time</h3>
            </article>  
            <article class='media' data-media='uploads/Hung_Up.mp4' data-img='images/tina.jpeg'> 
                <h3>Hung Up</h3>
            </article>
            <article class='media' data-media='uploads/The_Scientist.mp4' data-img='images/finn.jpg'> 
                <h3>The Scientist</span></h3>
            </article>
        </div>
    </article>
</body>
</html>