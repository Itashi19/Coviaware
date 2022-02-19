

<style type="text/css">

    html
    {
        scroll-behaviour:smooth;
    }
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        font-family: 'Mulish', sans-serif;
    }
    .row
    {
        margin-right:0 !important;
        margin-left:0 !important;
    }
.nav_style
{
    background-color: #4682b4 !important;
}

.nav_style a
{
color:white;
}


/*main header*/

.main_header
{
    height:450px;
    width:100%;

} 
.rightside h1
{
    font-size:3rem;
}

.leftside img
{
    animation:heartbeat 5s linear infinite;
}

@keyframes heartbeat
{
    0%
    {
        transform:scale(.75);

    }
     20%
    {
        transform:scale(1);
        
    }
     40%
    {
        transform:scale(.75);
        
    }
     60%
    {
        transform:scale(1);
        
    }
     80%
    {
        transform:scale(.75);
        
    }
     100%
    {
        transform:scale(.75);
        
    }
}



/*corona update*/


.corona_update
{
    margin :0 0 30px 0;
}
.corona_update h3
{
    color:#ff7675;
}
.corona_update h1
{
    font-size:2rem ;
    text-align:center;
}

/*about*/

.sub_section
{
    background-color:#87ceeb !important;
}


.footer_style
{
    background-color:#4682b4!important;
    width:100% !important;
    height:70px;
   
}

.footer_style p
{
    margin-bottom:0 ;
}


/*#myBtn
{
float:right;
 background-color:#00A8FF;
z-index:99;
   cursor:pointer; 
  border:none;
    outline:none;
    color:white;
   height:20px;
}

#myBtn:hover {
    background:#606060;}*/

@media(max-width:768px)
{
    .main_header{height:700px;text-align:center;}

    .main_header h1
    {
        text-align:center;
        padding:0;
        width:100%;
        font-size:30px;
    }

    .count_style
    {
        display:inline !important;
    }
    .count_style p{
        text-align:center;
    }
    .about_res
    {
        margin-left:0 !important;
    }
}




    </style>