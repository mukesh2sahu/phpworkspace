

function search()
{
    let s=document.getElementById("para").innerHTML;
    let str=document.getElementById("search").value;
    let x=s.indexOf(str);
    document.getElementById('search_value').innerHTML= x;
    //alert(x);
}