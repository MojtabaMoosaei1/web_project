var date;
var i=0,j=0,k=0;

function show()
{
    i++
    if(i == 60)
    {
        i=0;
        j++;
    }

    if(j == 60)
    {
        j=0;
        k++;
    }
    if(k == 60)
    {
        k=0;
    }
document.getElementById('timer').innerHTML = (k<10?"0"+k:k) + ':'+(j<10?"0"+j:j) + ':' +(i<10?"0"+i:i) ;
}

setInterval(show , 1000);
