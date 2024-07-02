document.getElementById("contain").style.display="none";
document.addEventListener('keypress',(event)=>{
    if(event.key==='Enter'){
        document.getElementById("sbmt-btn").click();
        document.getElementById("contain").style.display="none";
        document.getElementById("afr").style.display="flex";

}});

function submitt()
{
    
    document.getElementById("contain").style.display="none";
    document.getElementById("afr").style.display="flex";
}

function showForm()
{
    // let elem=document.getElementById("contain");
    
    document.getElementById("contain").style.display="grid";
    document.getElementById("afr").style.display="none";
    
}

