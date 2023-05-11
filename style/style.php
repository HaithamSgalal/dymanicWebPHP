body {
margin: 0;
background-color: aliceblue;
font-family: "Arial Unicode MS";
scroll-behavior: smooth;
}

.nav {
background-color: #333;
}

.cont {
width: 80%;
margin: auto;
display: flex;
flex-direction: row;
justify-content: space-between;
background-color: #333;
overflow: hidden;

}

.logo {
display: inline-block;
text-align: center;
font-size: 24px;
font-weight: 900;
padding: 12px;
color: aliceblue;
}

.topnavLinks a {
float: left;
color: aliceblue;
text-align: center;
padding: 14px;
text-decoration: none;
font-size: 17px;
}

.topHeader {
width: 80%;
margin: 50px auto;
display: flex;
background-color: aliceblue;
}

.topHeader > div {
width: 50%;

}

.headRight {

text-align: center;
}

.headRight img {

width: 50%;
border-radius: 5%;
}

.head_left h1 {
font-size: <?=$_h1_font?>px;
font-family: "Arial Black";
color: #4dff4d;
margin-bottom: 30px;
}

.head_left h3 {
font-size: <?=$_h3_font ?>px;

}

.head_left p {
color: #8c8c8c;
font-size: <?=$_p_font?>px;
font-weight: bold;
line-height: 30px;
}

.aboutCats {
width: 100%;
text-align: center;
margin: 5% 0%;
}


.about_cont {
width: 80%;
display: flex;
flex-direction: row;
text-align: center;
margin: 3% 0%;

}


.about_cont div {
width: 50%;
}

.about_left_div img {
width: 50%;
border-radius: 5%;
}

.about_right_div {

text-align: left;
color: #8c8c8c;
font-size: <?=$_p_font?>px;
font-weight: bold;
line-height: 30px;
}

.about_right_div p {
margin: 0px;
}

.sec_one_header {
background-color: #4dff4d;
}

.about_title h3 {
font-size: <?=$_h3_font?>px;
padding: 1% 0%;
width: 100%;
height: 35px;
background-color: #4dff4d
}