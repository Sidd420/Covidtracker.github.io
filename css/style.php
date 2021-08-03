<style type="text/css">
html{
    scroll-behavior: smooth;
}
*{ margin: 0; padding:0; box-sizing: border-box; font-family: 'Cabin', sans-serif;}
.nav_style{
    background-color:blueviolet;
}
.nav_style a {
    color: white;
}
.main_header{
    height:450px;
    width:100%;
}
.rightside h1{
    font-size:3rem;
}
.rot img{
    animation: covid 3s linear infinite;
}
@keyframes covid {
    0% {transform: rotate(0);}
    100% {transform: rotate(360deg);}
    
}
.leftside img{
    animation: covid2 3s linear infinite;
}
@keyframes covid2 {
    0% {transform: scale(.75);}
    20% {transform: scale(1);}
    40% {transform: scale(.75);}
    60% {transform: scale(1);}
    80% {transform: scale(.75);}
    100% {transform: scale(.75);}
}
.covid_update{
    margin:0 0 30px 0;
}
.covid_update h2{
    color:tomato;
}
.covid_update h1{
    font-size: 2rem;
    text-align: center;

}
.sub_section{
    background-color:#fbfafd;
}
.footer_style{
    background-color:blueviolet !important;
}
.footer_style p{
    margin-bottom:0!important;
    padding-bottom: 0 !important;
}
.btn{
    background-color:blueviolet;
}
</style>