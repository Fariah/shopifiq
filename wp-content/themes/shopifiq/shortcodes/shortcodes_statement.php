<h2 class="h2">Statement box:</h2>
<div id="readmore_wrapper">
    <div id="readmore_1">
        <label>Link: </label>
        <input id="link" type="text" />
    </div>

    <div id="readmore_1">
        <label>button: </label>
        <input id="button" type="text" />
    </div>   

    <div id="readmore_1">
        <label>Title: </label>
        <input id="title" type="text" />
    </div> 
    <div id="readmore_1">
        <label>Text: </label>
        <input id="text" type="text" />
    </div> 
</div>
<div class="submit-wrapper">
<input type="button" class="submit" value="Insert" onclick="getValue()" />
</div>

<script>
function getValue() { 

    var values = '';
    var link, button, title, text;

    link = document.getElementById('link').value;
    button = document.getElementById('button').value;
    title = document.getElementById('title').value;
    text = document.getElementById('text').value;
    
    values = '[statement_box link="' + link + '" button="' + button + '" title="' + title + '"]' + text + '[/statement_box]<br>';

    window.parent.send_to_editor(values);
}
</script>
<style>
    
    .half, .two_quarter {
        width: 281px;
        margin: 15px 0 15px 15px;
        height: 33px;
        float: left;
    }
    
    hr {
        border: 1px solid #dddddd;
        border-style: solid none none none;
        margin: 40px 0;
    }
    
    label {
        display: block;
        margin: 20px 0 15px 0;
        padding:  0;
    }
    
    .third {
        width: 182px;
        margin: 15px 0 15px 15px;
        height: 33px;
        float: left;
    }
    
    .two_third {
        width: 381px;
        margin: 15px 0 15px 15px;
        height: 33px;
        float: left;
    }
    
    .quarter {
        width: 133px;
        margin: 15px 0 15px 15px;
        height: 33px;
        float: left;
    }
    
    .three_quarter {
        width: 431px;
        margin: 15px 0 15px 15px;
        height: 33px;
        float: left;
    }
    
    
    select {
            margin: 0 0 20px 0px;
            padding: 7px 5px;
            width: 335px;
            border: 1px solid #dddddd;
            border-radius: 0px;
    }
    
    select {
        cursor: pointer;
    }
    
    .hidden {
        display: none;
    }
    
    #readmore_wrapper .box {
        width:  100%;
        height: 65px;
        float: left;
        margin-top: 40px;
        border: 1px solid #dddddd;
        border-radius: 0px;
    }
    
    #readmore_wrapper {
        padding: 21px;
        font-family: Arial;
        margin: 0 auto;
        width: 355px;
    }
    
    h2.h2 {
        font-family: Arial !important;
        color: #000000;
        font-size: 16px;
        padding: 21px 0 0 21px;
    }
    
    #readmore_wrapper ul {
        display: none;
        padding:  0;
        margin:  30px 0 0 0;
    }
    
    #readmore_wrapper ul li {
        list-style: none;
        float: left;
    }
    
    #readmore_wrapper .box div {
        text-align: center;
        -webkit-border-radius: 0px;
                border-radius: 0px;
        background-color: #f9f9f9;
                background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#eee), to(#f9f9f9));
                background: -webkit-linear-gradient(top, #f9f9f9, #eee  );
                background: -moz-linear-gradient(top, #f9f9f9, #eee);
                background: -ms-linear-gradient(top, #f9f9f9, #eee);
                background: -o-linear-gradient(top, #f9f9f9, #eee);
        color:#000;
                cursor: pointer;
        border: 1px solid #dfdfdf;
        padding: 8px 0 0 0;
        height: 26px;
    }
    
    #readmore_wrapper .box div:hover {
        color: red;
    }
    
    input[type="button"] {
        -webkit-border-radius: 0px;
                border-radius: 0px;
        background-color: #0075b1;
                background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#0075b1), to(#0585c7));
                background: -webkit-linear-gradient(top, #0585c7, #0075b1);
                background: -moz-linear-gradient(top, #0585c7, #0075b1);
                background: -ms-linear-gradient(top, #0585c7, #0075b1);
                background: -o-linear-gradient(top, #0585c7, #0075b1);
        color:#fff;
        padding: 6px 23px;
        cursor: pointer;
        border: 1px solid #005f8b;
        margin-left: 60px;
    }
    
    input[type="button"].disabled {
        background-color: #f9f9f9;
                background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#eee), to(#f9f9f9));
                background: -webkit-linear-gradient(top, #f9f9f9, #eee  );
                background: -moz-linear-gradient(top, #f9f9f9, #eee);
                background: -ms-linear-gradient(top, #f9f9f9, #eee);
                background: -o-linear-gradient(top, #f9f9f9, #eee);
        color:#000;
        border: 1px solid #dfdfdf;
        cursor: default;
    }

    .submit-wrapper {
        width: 565px;
        text-align:  center;
    }
    .submit {
        margin: 30px 0 0 0px;
    }
    
    input[type=text],
select, 
textarea {
	padding: 7px 5px;
	width: 335px;
	border: 1px solid #dddddd;
	border-radius: 0px;
}

textarea  {
    height: 100px;
}
</style>
