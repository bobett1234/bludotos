<html>
<head>
<style>
::selection {
    background:green;
}
#edit {
    position:fixed;
    top:-50px;
    left:0px;
    line-height:12px;
    font-size:12px;
    margin:0px;
    padding:0px;
    height:auto;
    text-align:left;
    font-family: monospace;
    z-index:1;
    user-select: none;
}
#test {
    position:absolute;
    top:0px;
    left:30px;
    text-align:left;
    border:1px solid black;
    line-height:12px;
    font-size:12px;
    font-family:monospace;
    z-index:2;
    width:200px;
    height:14px;
}
</style>
</head>
<body style="font-family:monospace;line-height:12px;font-size:12px;">
<div>
    <table id="num" style="border:1px solid black;position:fixed;top:0px;left:0px;font-family:monospace;line-height:12px;font-size:12px;border-spacing:0px;">
        <tr>
            <td style="font-family:monospace;line-height:12px;font-size:12px;padding:0px;margin:0px;">1</td>
        </tr>
    </table>
    <textarea id="edit" name="testit" unselectable="on" onselectstart="return false"></textarea>
    <div id="test"></div>
</div>
<script>
var num = 1;
document.getElementById('edit').onkeyup = function(){document.getElementById('test').innerText = this.value; document.getElementById('test').style.width = document.getElementById('edit').clientWidth+'px';document.getElementById('test').style.height = document.getElementById('edit').scrollHeight+'px';if((document.getElementById('test').scrollHeight/12) > (document.getElementById('num').children[0].children.length+1)){num+=1;var tempit = document.getElementById('num').children[0].children[0].cloneNode(true);tempit.children[0].innerHTML=num;document.getElementById('num').children[0].appendChild(tempit);} else if((document.getElementById('test').clientHeight/12) < (document.getElementById('num').children[0].children.length)){num-=1;document.getElementById('num').children[0].removeChild(document.getElementById('num').children[0].lastChild);};};
document.getElementById('test').onclick = function(){document.getElementById('edit').focus();};
document.getElementById('edit').onselect = function(e){return false;};
document.getElementById('edit').onmousedown = function(e){this.focus();return false;};
</script>
</body>
</html>